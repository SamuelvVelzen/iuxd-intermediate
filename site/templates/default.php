<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?= css([
        'assets/css/main.css',
        'assets/css/owl.carousel.min.css',
    ]) ?>

    <?= js('assets/js/main.js') ?>

    <title><?= $page->title() ?></title>
</head>

<body>
    <h1 class="titel"><?= $page->title() ?></h1>

    <div class="owl-carousel">
        <img src="<?= image('placeholder.jpg')->url() ?>" alt="" />
        <img class=" middle" src="<?= image('placeholder.jpg')->url() ?>" alt="" />
        <img class="middle" src="<?= image('placeholder.jpg')->url() ?>" alt="" />
        <img class="middle" src="<?= image('placeholder.jpg')->url() ?>" alt="" />
        <img class="middle" src="<?= image('placeholder.jpg')->url() ?>" alt="" />
        <img class="middle" src="<?= image('placeholder.jpg')->url() ?>" alt="" />

        <img src="<?= image('placeholder.jpg')->url() ?>" alt="" />
    </div>


    <h1 class="titel-inleiding">Inleiding</h1>
    <p class="inleiding">
        <?= $page->inleiding() ?>
    </p>

    <div class="cardscontainer">
        <div class="card">
            <h1 class="titel">Waarom</h1>
            <div class="card-content">
                <div class="placeholder">x</div>
                <p class="text">
                    <?= $page->why_inleiding() ?>
                </p>
                <button class="actionbutton" onclick="selectSubject.showContent('why')">
                    Verder
                </button>
            </div>
        </div>

        <div class="card">
            <h1 class="titel">Hoe</h1>
            <div class="card-content">
                <div class="placeholder">x</div>
                <p class="text">
                    <?= $page->how_inleiding() ?>
                </p>
                <button class="actionbutton" onclick="selectSubject.showContent('how')">
                    Verder
                </button>
            </div>
        </div>

        <div class="card">
            <h1 class="titel">Wat</h1>
            <div class="card-content">
                <div class="placeholder">x</div>
                <p class="text">
                    <?= $page->what_inleiding() ?>
                </p>
                <button class="actionbutton" onclick="selectSubject.showContent('what')">
                    Verder
                </button>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="content-header">
            <p class="option" id="whyChoose">Waarom</p>
            <p class="option" id="howChoose">Hoe</p>
            <p class="option" id="whatChoose">Wat</p>
        </div>

        <div class="content-body">
            <div id="whyContent" class="content-body-section">
                <?= $page->why_content() ?>
            </div>
            <div id="howContent" class="content-body-section">
                <?= $page->how_content() ?>
            </div>
            <div id="whatContent" class="content-body-section">
                <?= $page->what_content() ?>
            </div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <!-- Optional JavaScript -->
    <?= js('assets/js/owl.carousel.min.js') ?>

    <script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            items: 2
        });
    });

    selectSubject.init();
    </script>
</body>

</html>