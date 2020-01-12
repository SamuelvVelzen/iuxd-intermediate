<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            <h1 class='title'>Wat</h1>
                <div class="text">
                <?= $page->Why_inleiding() ?>
                </div>
                <?php if($image = $page->image('mock-up-wat.png')): ?>
<img src="<?= $image->url() ?>" alt=""class='image'>
<?php endif ?>
            </div>
            <div class="waarom question">
                <div class="image"></div>
                <h1 class='title'>Waarom</h1>
                <div class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                    laborum corporis quibusdam in ea soluta inventore! Molestiae autem
                    voluptatibus doloribus repellat cupiditate laborum omnis
                    necessitatibus, assumenda soluta aspernatur, voluptate voluptatem.

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                    laborum corporis quibusdam in ea soluta inventore! Molestiae autem
                    voluptatibus doloribus repellat cupiditate laborum omnis
                    necessitatibus, assumenda soluta aspernatur, voluptate voluptatem.

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                    laborum corporis quibusdam in ea soluta inventore! Molestiae autem
                    voluptatibus doloribus repellat cupiditate laborum omnis
                    necessitatibus, assumenda soluta aspernatur, voluptate voluptatem.

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                    laborum corporis quibusdam in ea soluta inventore! Molestiae autem
                    voluptatibus doloribus repellat cupiditate laborum omnis
                    necessitatibus, assumenda soluta aspernatur, voluptate voluptatem.

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                    laborum corporis quibusdam in ea soluta inventore! Molestiae autem
                    voluptatibus doloribus repellat cupiditate laborum omnis
                    necessitatibus, assumenda soluta aspernatur, voluptate voluptatem.

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                    laborum corporis quibusdam in ea soluta inventore! Molestiae autem
                    voluptatibus doloribus repellat cupiditate laborum omnis
                    necessitatibus, assumenda soluta aspernatur, voluptate voluptatem.
                </div>
            </div>
            <div class="Hoe question">
            <h1 class='title'>Hoe - Stappenplan</h1>
                <div class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                    laborum corporis quibusdam in ea soluta inventore! Molestiae autem
                    voluptatibus doloribus repellat cupiditate laborum omnis
                    necessitatibus, assumenda soluta aspernatur, voluptate voluptatem.

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                    laborum corporis quibusdam in ea soluta inventore! Molestiae autem
                    voluptatibus doloribus repellat cupiditate laborum omnis
                    necessitatibus, assumenda soluta aspernatur, voluptate voluptatem.

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                    laborum corporis quibusdam in ea soluta inventore! Molestiae autem
                    voluptatibus doloribus repellat cupiditate laborum omnis
                    necessitatibus, assumenda soluta aspernatur, voluptate voluptatem.

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                    laborum corporis quibusdam in ea soluta inventore! Molestiae autem
                    voluptatibus doloribus repellat cupiditate laborum omnis
                    necessitatibus, assumenda soluta aspernatur, voluptate voluptatem.

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                    laborum corporis quibusdam in ea soluta inventore! Molestiae autem
                    voluptatibus doloribus repellat cupiditate laborum omnis
                    necessitatibus, assumenda soluta aspernatur, voluptate voluptatem.

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                    laborum corporis quibusdam in ea soluta inventore! Molestiae autem
                    voluptatibus doloribus repellat cupiditate laborum omnis
                    necessitatibus, assumenda soluta aspernatur, voluptate voluptatem.
                </div>
                <div class="image"></div>
            </div>
        </section>
        <section id="steps" class="stepscontainer">
          
        </section>
    </body>
</body>

</html>