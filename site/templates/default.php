<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.typekit.net/gmx3xsc.css">

    <?= css([
        'assets/css/main.css',
    ]) ?>

    <?= js('assets/js/main.js') ?>

    <title><?= $page->title() ?></title>
</head>

<body>

    <body>
        <nav>
            <ul>
                <li class="navitem first"><a href="#">Gabriel en Sam</a></li>
                <li class="navitem"><a href="#">Wat</a></li>
                <li class="navitem"><a href="#">Waarom</a></li>
                <li class="navitem"><a href="#">Hoe</a></li>
                <li class="navitem"><a href="#">Voorbeeld</a></li>
            </ul>
        </nav>


        <section id="intro">
            <?php foreach($page->videos() as $video): ?>
            <video width="100%" height="100vh" autoplay muted loop>
                <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>">
                Your browser does not support the video tag.
            </video>
            <?php endforeach ?>

            <div>
                <p class="titelpage">Visual Branding</p>
                <p class="introductie">
                    <?= $page->Inleiding() ?>
                </p>
                <button>Lees meer</button>
            </div>

        </section>
        <section id="whw">
            <h1 class="title">Onderwerpen</h1>

            <div class="what question">
                <div class="text">
                    <h1 class='title'>Wat</h1>
                    <p><?= $page->What_inleiding() ?></p>

                    <button id="what" class="button">Lees meer</button>

                    <div id="whatContent" class="hiddenContent">
                        <p><?= $page->What_content() ?></p>
                    </div>
                </div>
                <?php if($image = $page->image('mock-up-wat.png')): ?>
                <img src="<?= $image->url() ?>" alt="" class='image'>
                <?php endif ?>
            </div>

            <hr>

            <div class="waarom question">
                <div class="text">
                    <h1 class='title'>Waarom</h1>
                    <p><?= $page->Why_inleiding() ?></p>

                    <button id="why" class="button">Lees meer</button>

                    <div id="whyContent" class="hiddenContent">
                        <p><?= $page->Why_content() ?></p>
                    </div>
                </div>
                <?php if($image = $page->image('workspace-mockup-waarom.png')): ?>
                <img src="<?= $image->url() ?>" alt="" class='image'>
                <?php endif ?>
            </div>
            </div>

            <hr>

            <div class="Hoe question">
                <div class="text">
                    <h1 class='title'>Hoe - Stappenplan</h1>
                    <p><?= $page->How_inleiding() ?></p>

                    <button id="how" class="button">Lees meer</button>

                    <div id="howContent" class="hiddenContent">
                        <p><?= $page->how_content() ?></p>
                    </div>
                </div>
                <?php if($image = $page->image('mock-up-hoe.png')): ?>
                <img src="<?= $image->url() ?>" alt="" class='image'>
                <?php endif ?>
            </div>
            </div>
        </section>
        <section id="steps" class="stepscontainer">

        </section>

        <script>
        main.init();
        </script>
    </body>
</body>

</html>