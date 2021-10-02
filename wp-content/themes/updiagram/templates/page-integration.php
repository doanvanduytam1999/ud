<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php

/*
    Template Name: Page Integration
*/

include get_template_directory() . "/includes/header.php";

global $post;
$post_id = $post->ID;
$banner = get_field("banner");
$integration_site_list = get_post_meta(get_the_ID(), "integration_site_list", true);

?>

<div class="integration">
    <section class="integration__hero-banner">
        <img src="<?php echo $banner['url'] ?>" alt="<?php $banner['alt'] ?>">
    </section>

    <section class="container">
        <div class="row d-flex justify-content-between mt-5">
            <!-- Render integration site list -->
            <?php foreach((array)$integration_site_list as $integration_site) { ?>
                <div class="position-relative rounded mt-5 shadow-lg integration__site">
                    <!-- Logo -->
                    <div class="d-flex justify-content-center mt-4">
                        <img src="<?php echo $integration_site['integration_site_img'] ?>"/>
                    </div>

                    <!-- Description -->
                    <p class="mt-4 mb-1">
                        <?php echo $integration_site['integration_site_desc'] ?>
                    </p>

                    <!-- Read more -->
                    <a class="float-end position-absolute bottom-0 end-0 p-2" href="<?php echo home_url() . "/integration-detail-" . $integration_site["integration_site_url"] ?>" >
                        Read more
                    </a>
                </div>
            <?php } ?>
        </div>
    </section>

    <section>
        <p class="mt-5 mb-0 text-center">
            Don't see an integration you'd like?&nbsp;<a href="">Add your request&nbsp;</a>to be among the first to know when it
        </p>
    </section>
    
    <section class="take-action">
        <div class="container">
            <h3 class="take-action__heading heading">
                Let inspire your team to take&nbsp;action
            </h3>
            <div class="take-action__actions">
                <input class="take-action__actions__input input" placeholder="Enter your Email address" /><button class="take-action__actions__btn btn--no-shadow btn">
                    Get started
                </button>
            </div>
        </div>
    </section>
</div>

<?php include get_template_directory() . "/includes/footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
