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

    <?= js(['assets/js/main.js',]) ?>

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

                </div>

                <?php if($image = $page->image('mock-up-wat.png')): ?>
                <img src="<?= $image->url() ?>" alt="" class='image'>
                <?php endif ?>

                <div id="whatContent" class="hiddenContent">
                    <p><?= $page->What_content() ?></p>
                </div>
            </div>

            <hr>

            <div class="waarom question">
                <div class="text">
                    <h1 class='title'>Waarom</h1>
                    <p><?= $page->Why_inleiding() ?></p>

                    <button id="why" class="button">Lees meer</button>
                </div>

                <?php if($image = $page->image('workspace-mockup-waarom.png')): ?>
                <img src="<?= $image->url() ?>" alt="" class='image'>
                <?php endif ?>

                <div id="whyContent" class="hiddenContent">
                    <p><?= $page->Why_content() ?></p>
                </div>
            </div>
            </div>

            <hr>

            <div class="Hoe question">
                <div class="text">
                    <h1 class='title'>Hoe </h1>
                    <p><?= $page->How_inleiding() ?></p>

                    <button id="how" class="button">Lees meer</button>
                </div>
                <?php if($image = $page->image('mock-up-hoe.png')): ?>
                <img src="<?= $image->url() ?>" alt="" class='image'>
                <?php endif ?>


                <div id="howContent" class="hiddenContent">
                    <p><?= $page->how_content() ?></p>
                </div>
            </div>
            </div>
        </section>
        <section id="steps" >
        <h1 class="title">Stappenplan</h1>
        <div class='stepscontainer'>
            <div class="step">
                <h1>1</h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam sed
                    unde molestiae, expedita ea perspiciatis blanditiis vitae debitis rem
                    enim minima incidunt nemo sunt necessitatibus voluptatum?
                    Necessitatibus quo sequi eligendi?
                </p>
            </div>

            <div class="step">
                <h1>2</h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam sed
                    unde molestiae, expedita ea perspiciatis blanditiis vitae debitis rem
                    enim minima incidunt nemo sunt necessitatibus voluptatum?
                    Necessitatibus quo sequi eligendi?
                </p>
            </div>

            <div class="step">
                <h1>3</h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam sed
                    unde molestiae, expedita ea perspiciatis blanditiis vitae debitis rem
                    enim minima incidunt nemo sunt necessitatibus voluptatum?
                    Necessitatibus quo sequi eligendi?
                </p>
            </div>

            <div class="step">
                <h1>4</h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam sed
                    unde molestiae, expedita ea perspiciatis blanditiis vitae debitis rem
                    enim minima incidunt nemo sunt necessitatibus voluptatum?
                    Necessitatibus quo sequi eligendi?
                </p>
            </div></div>
        </section>

        <script>
        main.init();
        </script>
    </body>
</body>

</html>