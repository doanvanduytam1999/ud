<?php

/*
    Template Name: Page Integration
*/

include get_template_directory() . "/includes/header.php";
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="integration">
    <section class="integration__hero-banner">
        <img src="<?php echo THEME_URL . "/assets/images/integration/integration-banner.png" ?>" alt="Integration" />
    </section>
    <section class="container">
        <div class="row d-flex justify-content-between mt-5">
            <div class="position-relative rounded mt-5 shadow-lg integration__site">
                <div class="d-flex justify-content-center mt-4">
                    <img src="<?php echo THEME_URL . "/assets/images/integration/slack.png" ?>" alt="" />
                </div>
                <p class="mt-4 mb-1">
                    Integrate Slack to create and manage ClickUp tasks without leaving
                    the conversation. Automatically unfurl every ClickUp link you post
                    with rich information and actions. Add Slack notifications to any
                    channel(s) of your...
                </p>
                <a class="float-end position-absolute bottom-0 end-0 p-2" href="<?php echo home_url() . "/integration-detail" ?>" >Read more</a>
            </div>
            <div class="position-relative rounded mt-5 shadow-lg integration__site">
                <div class="d-flex justify-content-center mt-4">
                    <img src="<?php echo THEME_URL . "/assets/images/integration/trello.png" ?>" alt="" />
                </div>
                <p class="mt-4 mb-1">
                    Moving from Trello to ClickUp is impossibly easy! Bring over your
                    tasks, users, and attachments with just a few clicks
                </p>
                <a class="float-end position-absolute bottom-0 end-0 p-2" href="<?php echo home_url() . "/integration-detail" ?>" >Read more</a>
            </div>
            <div class="position-relative rounded mt-5 shadow-lg integration__site">
                <div class="d-flex justify-content-center mt-4">
                    <img src="<?php echo THEME_URL . "/assets/images/integration/github.png" ?>" alt="" />
                </div>
                <p class="mt-4 mb-1">
                    Add Github to automatically (or manually) display commits, pushes,
                    and merge requests directly in ClickUp. Soon you'll also be able
                    to perform git actions straight from ClickUp.
                </p>
                <a class="float-end position-absolute bottom-0 end-0 p-2" href="<?php echo home_url() . "/integration-detail" ?>" >Read more</a>
            </div>
            <div class="position-relative rounded mt-5 shadow-lg integration__site">
                <div class="d-flex justify-content-center mt-4">
                    <img src="<?php echo THEME_URL . "/assets/images/integration/office365.png" ?>" alt="" />
                </div>
                <p class="mt-4 mb-1">
                    Integrate Slack to create and manage ClickUp tasks without leaving
                    the conversation. Automatically unfurl every ClickUp link you post
                    with rich information and actions. Add Slack notifications to any
                    channel(s) of your...
                </p>
                <a class="float-end position-absolute bottom-0 end-0 p-2" href="<?php echo home_url() . "/integration-detail" ?>" >Read more</a>
            </div>
            <div class="position-relative rounded mt-5 shadow-lg integration__site">
                <div class="d-flex justify-content-center mt-4">
                    <img src="<?php echo THEME_URL . "/assets/images/integration/onedrive.png" ?>" alt="" />
                </div>
                <p class="mt-4 mb-1">
                    Moving from Trello to ClickUp is impossibly easy! Bring over your
                    tasks, users, and attachments with just a few clicks
                </p>
                <a class="float-end position-absolute bottom-0 end-0 p-2" href="<?php echo home_url() . "/integration-detail" ?>" >Read more</a>
            </div>
            <div class="position-relative rounded mt-5 shadow-lg integration__site">
                <div class="d-flex justify-content-center mt-4">
                    <img src="<?php echo THEME_URL . "/assets/images/integration/gitlab.png" ?>" alt="" />
                </div>
                <p class="mt-4 mb-1">
                    Automatically link GitLab commits, branches, pull requests, and
                    issues with ClickUp tasks. ClickUp can even create automated
                    workflows based on Github actions.
                </p>
                <a class="float-end position-absolute bottom-0 end-0 p-2" href="<?php echo home_url() . "/integration-detail" ?>" >Read more</a>
            </div>
            <div class="position-relative rounded mt-5 shadow-lg integration__site">
                <div class="d-flex justify-content-center mt-4">
                    <img src="<?php echo THEME_URL . "/assets/images/integration/jira.png" ?>" alt="" />
                </div>
                <p class="mt-4 mb-1">
                    Move everything in your JIRA projects right into ClickUp! Tasks,
                    users, and attachments along with all of your details will be
                    migrated in just a few steps!
                </p>
                <a class="float-end position-absolute bottom-0 end-0 p-2" href="<?php echo home_url() . "/integration-detail" ?>" >Read more</a>
            </div>
            <div class="position-relative rounded mt-5 shadow-lg integration__site">
                <div class="d-flex justify-content-center mt-4">
                    <img src="<?php echo THEME_URL . "/assets/images/integration/drive.png" ?>" alt="" />
                </div>
                <p class="mt-4 mb-1">
                    Integrate Google Drive to search and attach Drive files to ClickUp
                    tasks without leaving the platform.
                </p>
                <a class="float-end position-absolute bottom-0 end-0 p-2" href="<?php echo home_url() . "/integration-detail" ?>" >Read more</a>
            </div>
            <div class="position-relative rounded mt-5 shadow-lg integration__site">
                <div class="d-flex justify-content-center mt-4">
                    <img src="<?php echo THEME_URL . "/assets/images/integration/dropbox.png" ?>" alt="" />
                </div>
                <p class="mt-4 mb-1">
                    Easily manage and attach Dropbox files to tasks directly from
                    within ClickUp.
                </p>
                <a class="float-end position-absolute bottom-0 end-0 p-2" href="<?php echo home_url() . "/integration-detail" ?>" >Read more</a>
            </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php include get_template_directory() . "/includes/footer.php"; ?>