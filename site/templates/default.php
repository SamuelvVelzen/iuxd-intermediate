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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?= js(['assets/js/main.js',]) ?>

    <title><?= $page->title() ?></title>
</head>

<body>

    <body>
        <nav>
            <ul>
                <li class="navitem first"><a href="#">Gabriel en Sam</a></li>
                <li class="navitem"><a class="clickableNav" href="#whwTitle">Onderwerpen</a></li>
                <li class="navitem"><a class="clickableNav" href="#stappenplan">Stappenplan</a></li>
                <li class="navitem"><a class="clickableNav" href="#examplecase">Voorbeelduitwerking</a></li>
                <li class="navitem"><a class="clickableNav" href="#workshop">Workshop reviews</a></li>
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
                <a class="btn clickableNav" href="#whwTitle">Lees meer</a>
            </div>

        </section>

        <!-- <section id="whw" data-aos="fade-up"> -->
        <section id="whw">
            <h1 id="whwTitle" class="title">Onderwerpen</h1>

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
        </section>

        <section id="steps">
            <h1 id="stappenplan" class="title">Stappenplan</h1>
            <div class='stepscontainer'>
                <div class="step">
                    <?php if($image = $page->image('brandexperience-icon-cirkel.png')): ?>
                    <img src="<?= $image->url() ?>" alt="" class='stepicon'>
                    <?php endif ?>
                    <h1>1. Brand experience</h1>
                    <p>
                        Bekende en internationale merken weten hoe belangrijk merkbeleving is. Als mensen een positieve
                        associatie bij je bedrijf hebben, zullen zij sneller tot een aankoop overgaan – zowel online als
                        offline. Het creëren van de juiste brand experience is daarom altijd het uitgangspunt van visual
                        branding, zeker bij fysieke contactmomenten. De verhaallijn eromheen, de quotes, social accounts
                        en de visuals moeten tot in de puntjes (of pixels) verzorgd zijn. Samen moet het één consistent
                        verhaal worden. Alleen zo creëer je als merk het juiste gevoel bij je doelgroep. Een voorbeeld
                        is Coca Cola, dit merk heeft de kerstman grotendeels in kaart gebracht.
                    </p>
                </div>

                <div class="step">
                    <?php if($image = $page->image('flexibiliteit-icon-cirkel.png')): ?>
                    <img src="<?= $image->url() ?>" alt="" class='stepicon'>
                    <?php endif ?>
                    <h1>2. Comfort</h1>
                    <p>
                        Het is van groot belang dat klanten zich thuis voelen in je winkel. Een kale muur of een
                        karakterloos decor, is niet meer van deze tijd. Als klanten zich wél thuis voelen in je winkel,
                        dan blijven ze langer en dit zorgt voor een betere omzet. Een winkel moet tegenwoordig zo in
                        elkaar zitten, dat als je binnen komt lopen, het ‘instagram ready’ moet zijn. Een klant moet een
                        foto ervan kunnen maken en het zo kunnen delen dat er weinig bewerking nodig is. Comfort staat
                        niet alleen voor de inrichting maar ook voor gebruiksgemak. Iedereen heeft een Smartphone en
                        veel gebruiken programma’s als Snapchat & Instagram. Deze programma’s zijn bekend en dus
                        makkelijk in te zetten voor bedrijven. Chocomel heeft dit bijv. ingezet bij de Chocomel letters.
                        Deze letters worden via Snapchat online gedeeld
                    </p>
                </div>

                <div class="step">
                    <?php if($image = $page->image('comfort-icon-cirkel.png')): ?>
                    <img src="<?= $image->url() ?>" alt="" class='stepicon'>
                    <?php endif ?>
                    <h1>3. Flexibiliteit</h1>
                    <p>
                        Om de juiste merkbeleving en comfort te creëren, verlangen brandmanagers van sterke merken een
                        grote mate van flexibiliteit in hun visuele communicatie. Ze willen op ieder moment het passende
                        verhaal kunnen vertellen. Een merk moet eigenlijk op elk moment toepasbaar zijn. Met dit
                        bedoelen we dat een merk visueel toepasbaar moet zijn op bijv. de seizoenen, feestdagen, back to
                        school dagen, maandelijkse evenementen, sportevenementen (denk aan de olympische spelen, etc
                        etc. Zo speelt Apple bijv. in op de back to school dagen, door extra korting te geven in de
                        maanden augustus en september.

                    </p>
                </div>

                <div class="step">
                    <?php if($image = $page->image('duurzaamheid-icon-cirkel.png')): ?>
                    <img src="<?= $image->url() ?>" alt="" class='stepicon'>
                    <?php endif ?>
                    <h1>4. Duurzaamheid</h1>
                    <p>
                        Elk global brand, van Coca Cola tot Apple, streeft naar een zo milieuvriendelijk mogelijke
                        productieketen. Materiaalkeuze is hier ook van belang, er zijn allerlei materialen beschikbaar
                        die je ecologische afdruk verminderen. Denk aan opvouwbare textielen die zorgen voor minder
                        volume, waardoor verpakking, opslag en vervoer efficiënter en milieuvriendelijker worden.
                        Duurzaamheid gaat, los van productieproces en materiaalkeuze, ook daadwerkelijk hand in hand met
                        de visuele uitstraling van een merk. In deze tijd, waarbij het milieu elke dag weer hoog in het
                        nieuws komt, is het ongeloofwaardig als je merkverhaal hierop achterloopt. Je kan flinke
                        imagoschade oplopen als je erg milieuonvriendelijk produceert.

                    </p>
                </div>
            </div>
        </section>

        <section id="voorbeelduitwerking">
            <h1 id="examplecase" class="title">Voorbeelduitwerking</h1>

            <div class="examplecasestep">
                <div class="text">
                    <h1 class='title'>Stap 1</h1>
                    <p><?= $page->What_inleiding() ?></p>
                </div>

                <?php if($image = $page->image('mock-up-wat.png')): ?>
                <img src="<?= $image->url() ?>" alt="" class='image'>
                <?php endif ?>
            </div>

            <hr>

            <div class="examplecasestep right">
                <?php if($image = $page->image('mock-up-wat.png')): ?>
                <img src="<?= $image->url() ?>" alt="" class='image'>
                <?php endif ?>

                <div class="text">
                    <h1 class='title'>Stap 2</h1>
                    <p><?= $page->What_inleiding() ?></p>
                </div>
            </div>

            <hr>

            <div class="examplecasestep">
                <div class="text">
                    <h1 class='title'>Stap 3</h1>
                    <p><?= $page->What_inleiding() ?></p>
                </div>

                <?php if($image = $page->image('mock-up-wat.png')): ?>
                <img src="<?= $image->url() ?>" alt="" class='image'>
                <?php endif ?>
            </div>

            <hr>

            <div class="examplecasestep right">
                <?php if($image = $page->image('mock-up-wat.png')): ?>
                <img src="<?= $image->url() ?>" alt="" class='image'>
                <?php endif ?>

                <div class="text">
                    <h1 class='title'>Stap 4</h1>
                    <p><?= $page->What_inleiding() ?></p>
                </div>
            </div>

        </section>

        <section id="workshop">
            <h1 id="workshop" class="title">Wat onze workshop deelnemers zeggen</h1>

            <div class="reviewsgroup">
                <div class="review">
                    <p class="quote">
                        "Hele goede workshop. Heel veel informatie, maar iets teveel om ik korte tijd tot je
                        te nemen. Volgende keer misschien tijdens de workshop iets meer nadruk leggen op een klein
                        gedeelte van de presentatie in plaats van het hele proces te moeten doorlopen"
                    </p>
                    <div class="info">
                        <span class="picture"></span>
                        <div class="personal">
                            <p class="name">Dimitri Philips</p>
                            <p class="work">
                                Klasgenote minor
                            </p>
                        </div>
                    </div>
                </div>

                <div class="review">
                    <p class="quote">
                        "Heel leuk om te zien hoe branding binnen een bedrijf werkt en hoe je dit kunt
                        toepassen."
                    </p>
                    <div class="info">
                        <span class="picture"></span>
                        <div class="personal">
                            <p class="name">Dionne de Vries</p>
                            <p class="work">
                                Beste vriendin Gabriel
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
        main.init();
        AOS.init();
        </script>
    </body>
</body>

</html>