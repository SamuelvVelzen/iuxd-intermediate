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
            </div>

        </section>
        <section id="whw">
            <h1 class="title"></h1>

            <div class="why question">
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
            <div class="how question">
                <div class="image"></div>
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
            <div class="what question">
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
            </div>
        </section>
    </body>
</body>

</html>