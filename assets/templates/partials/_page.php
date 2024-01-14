<!DOCTYPE html>
<html lang="de">

<!-- head -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/components/_head.php' ?>


<body class="light-mode">


<main>

    <section class="company-infos">
        <?php if ($WEBSITE_BANNER): ?>
            <div class="banner"
                 style="background: url('/partners/<?php echo $partner_name ?>/images/banner.jpg');"
            >
            </div>
        <?php endif ?>
        <div class="d-flex flex-column justify-content-center align-items-center" style="height: 340px">
            <?php if ($WEBSITE_BANNER || $WEBSITE_PROFILE_BACKGROUND): ?>
                <div class="logo logo-bg <?php echo $WEBSITE_PROFILE_ROUND ? 'rounded-circle' : '' ?>">
                    <img class="light-img"
                         src="<?php echo $WEBSITE_PROFILE_DARK ?>" height="<?php echo $WEBSITE_PROFILE_SIZE ?>"
                         alt="Profile image">
                    <img class="dark-img"
                         src="<?php echo $WEBSITE_PROFILE_LIGHT ?>" height="<?php echo $WEBSITE_PROFILE_SIZE ?>"
                         alt="Profile image">
                </div>
            <?php else: ?>
                <div class="logo <?php echo $WEBSITE_PROFILE_ROUND ? 'rounded-circle' : '' ?>">
                    <img class="dark-img"
                         src="<?php echo $WEBSITE_PROFILE_LIGHT ?>" height="<?php echo $WEBSITE_PROFILE_SIZE ?>"
                         alt="Profile image">
                    <img class="light-img"
                         src="<?php echo $WEBSITE_PROFILE_DARK ?>" height="<?php echo $WEBSITE_PROFILE_SIZE ?>"
                         alt="Profile image">
                </div>
            <?php endif ?>
            <div class="description text-center pt-3">
                <h1 class="title"><?php echo $COMPANY_NAME ?></h1>
                <h5 class="subtitle"><?php echo $COMPANY_DESCRIPTION ?></h5>
            </div>
        </div>
    </section>


    <?php if ($YOUTUBE_VIDEO != '' || $YOUTUBE_VIDEO != null): ?>
        <section class="yt-video">
            <div class="container d-flex justify-content-center">
                <iframe src="https://www.youtube-nocookie.com/embed/<?php echo $YOUTUBE_VIDEO ?>?si=l9a11eKumP-YvPPE"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
        </section>
    <?php endif ?>


    <section class="links">
        <div class="container">
            <?php

            foreach ($LINKS as $link) {
                echo $link->render($BUTTON_COLOR, $BUTTON_COLOR_HOVER, $TEXT_COLOR, $TEXT_COLOR_HOVER);
            }

            ?>
        </div>
    </section>


    <section class="social-links">

        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center">
                    <?php

                    foreach ($SOCIAL_LINKS as $link) {
                        echo $link->render();
                    }

                    ?>
                </div>
            </div>
        </div>


    </section>
</main>


<!-- footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/components/_footer.php' ?>

<!-- scripts -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/components/_scripts.php' ?>
</body>
</html>