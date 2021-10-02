<?php
function scripts_for_single_post(){	
?>
<script type="text/javascript">
const startPos = document.getElementById("blog-detail-content");
const shareField = document.getElementById("blog-detail__share");
const MEDIUM_SCREEN_SIZE = 1024;
const TOP_BLOCK = 150;
const BOTTOM_BLOCK = 70;

window.onscroll = function() {
    handleScrolling()
};

function handleScrolling() {
    if (window.pageYOffset - TOP_BLOCK >= startPos.offsetHeight) {
        shareField.style.position = 'absolute';
    } else if (window.pageYOffset + BOTTOM_BLOCK >= startPos.offsetTop) {
        shareField.style.position = 'fixed';
        shareField.style.top = '120px';
    } else {
        if (screen.width <= MEDIUM_SCREEN_SIZE) {
            shareField.style.top = '38%';
        } else {
            shareField.style.top = '570px';
        }
        shareField.style.position = null;
    }
}
</script>
<?php
}

function scripts_for_index_page_load() {	
    global $wp_query;
    $currentPostType = '';
    if (strpos($_SERVER['REQUEST_URI'], 'blog')) {
        $currentPostType = 'post';
    } else if (strpos($_SERVER['REQUEST_URI'], 'case-studies')) {
        $currentPostType = 'case-study';
    }
    echo $currentPostType;
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
let categoryFilter; // current category filter
let searchTerm;
let canBeLoaded = true;
let pageNumber = 1;
const bottomOffset = 1200;
const pageSize = 12; // Post per page
const postsCount = <?php echo $wp_query->found_posts; ?>;
const postType = '<?php echo $currentPostType; ?>';

(function() {
    if (pageSize * pageNumber > postsCount) {
        $("#load_more_posts_icon").attr("display", 'none');
    }

    if (!window.location.search) {
        localStorage.removeItem('category');
        localStorage.removeItem('blog_search');
    }

})()
// Load more post handler
function load_posts() {
    const currentCategory = localStorage.getItem('category');
    const currentBlogSearch = localStorage.getItem('blog_search');

    if (pageSize * pageNumber < postsCount) {
        $("#load_more_posts_icon").attr("display", 'block');
    }

    if (categoryFilter !== currentCategory && currentCategory !== null) {
        categoryFilter = currentCategory;
        pageNumber = 1;
    } else if (currentCategory === null) {
        categoryFilter = '';
    }

    if (searchTerm !== currentBlogSearch && currentBlogSearch !== null) {
        searchTerm = currentBlogSearch;
        pageNumber = 1;
    } else if (currentBlogSearch === null) {
        searchTerm = '';
    }

    if (searchTerm) {
        categoryFilter = '';
    }

    pageNumber++;

    $.ajax({
        type: "POST",
        dataType: "html",
        url: '<?php echo admin_url("admin-ajax.php"); ?>',
        data: {
            action: 'more_post_ajax',
            pageNumber: pageNumber,
            pageSize: pageSize,
            postType: postType,
            category: categoryFilter,
            searchTerm: searchTerm,
        },
        beforeSend: function(xhr) {
            canBeLoaded = false;
        },
        success: function(data) {
            canBeLoaded = true;
            let $data = $(data);

            if ($data.length) {
                $("#ajax-posts").append($data);
            }

            if (pageSize * pageNumber >= postsCount || data === "") {
                $("#load_more_posts_icon").attr("display", 'none');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        }

    });
    return false;
}

// Load more trigger
jQuery(function($) {
    $(window).scroll(function() {
        if ($(document).scrollTop() > ($(document).height() - bottomOffset) && canBeLoaded == true) {
            load_posts();
        }
    });
});
</script>
<?php
}

//  Filter category for blog posts
function scripts_for_index_page_filter() {	
    $currentPostType = '';
    if (strpos($_SERVER['REQUEST_URI'], 'blog')) {
        $currentPostType = 'post';
    } else if (strpos($_SERVER['REQUEST_URI'], 'case-studies')) {
        $currentPostType = 'case-study';
    }
?>
<script>
$('.blog__hero-banner__header__categories__item').on('click', function() {
    pageNumber = 1;
    localStorage.removeItem('blog_search');
    $("#load_more_posts_icon").attr("display", 'block');

    if ($(this).data('slug') !== "") {
        window.history.pushState($(this).data('slug'), "currentCategory",
            `/blog?category=${$(this).data('slug')}`);
    } else {
        window.history.pushState($(this).data('slug'), "currentCategory",
            `/blog`);
    }

    localStorage.setItem('category', $(this).data('slug'));

    $('.blog__hero-banner__header__categories__item').removeClass('is-active');
    $(this).addClass('is-active');
    $.ajax({
        type: 'POST',
        url: '<?php echo admin_url("admin-ajax.php"); ?>',
        dataType: 'html',
        data: {
            action: 'filter_projects',
            category: $(this).data('slug'),
            postType: '<?php echo $currentPostType; ?>'
        },
        success: function(res) {
            $('.blog__articles__list').html(res);
        }
    });
});
</script>
<?php
}

//  Filter category for case studies
function scripts_for_cs_page_filter() {	
    $currentPostType = '';
    if (strpos($_SERVER['REQUEST_URI'], 'blog')) {
        $currentPostType = 'post';
    } else if (strpos($_SERVER['REQUEST_URI'], 'case-studies')) {
        $currentPostType = 'case-study';
    }    
?>
<script>
$('.case-study__articles__toolkit__categories__item').on('click', function() {
    localStorage.removeItem('blog_search');
    $("#load_more_posts_icon").attr("display", 'block');

    if ($(this).data('slug') !== "") {
        window.history.pushState($(this).data('slug'), "currentCategory",
            `/case-studies?category=${$(this).data('slug')}`);
    } else {
        window.history.pushState($(this).data('slug'), "currentCategory",
            `/case-studies`);
    }

    localStorage.setItem('category', $(this).data('slug'));

    $('.case-study__articles__toolkit__categories__item').removeClass('is-active');
    $(this).addClass('is-active');
    $.ajax({
        type: 'POST',
        url: '<?php echo admin_url("admin-ajax.php"); ?>',
        dataType: 'html',
        data: {
            action: 'filter_projects',
            category: $(this).data('slug'),
            postType: '<?php echo $currentPostType; ?>'
        },
        success: function(res) {
            $('.case-study__articles__list').html(res);
        }
    });
});
</script>
<?php
}

//  Search ajax for blog posts
function scripts_for_index_page_search() {	
?>
<script>
const blogForm = document.getElementById('blog_form');
const searchInput = document.getElementById('blog_form_input');
const removeInput = document.getElementById('blog_form_input_remove');

blogForm.addEventListener('submit', (e) => {
    e.preventDefault();
    pageNumber = 1;
    const searchValue = searchInput.value;
    localStorage.setItem('blog_search', searchValue);
    localStorage.removeItem('category');
    $('.blog__hero-banner__header__categories__item').removeClass('is-active');

    if (searchValue !== "") {
        window.history.pushState(searchValue, "blogSearchTerm", `/blog?search=${searchValue}`);
    } else {
        window.history.pushState(searchValue, "blogSearchTerm", `/blog`);
    }
    $.ajax({
        type: 'POST',
        url: '<?php echo admin_url("admin-ajax.php"); ?>',
        dataType: 'html',
        data: {
            action: 'filter_projects',
            postType: 'post',
            searchTerm: searchValue
        },
        success: function(res) {
            $('.blog__articles__list').html(res);
        }
    });
});

removeInput.addEventListener('click', (e) => {
    searchInput.value = '';
});
</script>
<?php
}

//  Search ajax for case studies
function scripts_for_cs_page_search() {	
?>
<script>
const blogForm = document.getElementById('cs_form');
const searchInput = document.getElementById('cs_form_input');
const removeInput = document.getElementById('cs_form_input_remove');

blogForm.addEventListener('submit', (e) => {
    e.preventDefault();
    pageNumber = 1;
    const searchValue = searchInput.value;
    localStorage.setItem('blog_search', searchValue);
    localStorage.removeItem('category');
    $('.case-study__articles__toolkit__categories__item').removeClass('is-active');

    if (searchValue !== "") {
        window.history.pushState(searchValue, "blogSearchTerm", `/case-studies?search=${searchValue}`);
    } else {
        window.history.pushState(searchValue, "blogSearchTerm", `/case-studies`);
    }
    $.ajax({
        type: 'POST',
        url: '<?php echo admin_url("admin-ajax.php"); ?>',
        dataType: 'html',
        data: {
            action: 'filter_projects',
            postType: 'case-study',
            searchTerm: searchValue
        },
        success: function(res) {
            $('.case-study__articles__list').html(res);
        }
    });
});

removeInput.addEventListener('click', (e) => {
    searchInput.value = '';
});
</script>
<?php
}