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
            <?php foreach($page->videos() as $video):?>
            <?php if($video->id() == 'home/achtergrondfilm.mp4'):?>
            <video width="100%" height="100vh" autoplay muted loop>
                <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>">
                Your browser does not support the video tag.
            </video>
            <?php endif ?>
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
                    Het is van groot belang dat klanten zich thuis voelen in je winkel. Een kale muur of een karakterloos decor, is niet meer van deze tijd. Een winkel moet tegenwoordig zo in elkaar zitten, dat als je binnen komt lopen, het ‘instagram ready’ moet zijn. Een foto zou onbewerkt het internet op kunnen gaan. Comfort staat niet alleen voor de inrichting maar ook voor gebruiksgemak. Iedereen heeft een Smartphone en veel mensen maken gebruik van programma’s als Snapchat & Instagram. Deze programma’s zijn bekend en dus makkelijk in te zetten voor bedrijven. Chocomel heeft dit bijv. ingezet bij de Chocomel letters. Deze letters worden via Snapchat online gedeeld.
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
                        
                    Elk global brand streeft naar een zo milieuvriendelijk mogelijke productieketen. Materiaalkeuze is hier ook van belang, denk bijv. aan opvouwbare textielen die zorgen voor minder volume, waardoor verpakking, opslag en vervoer efficiënter en milieuvriendelijker worden.
Duurzaamheid gaat, los van productieproces en materiaalkeuze, ook daadwerkelijk hand in hand met de visuele uitstraling van een merk. In deze tijd, waarbij het milieu elke dag weer hoog in het nieuws komt, is het ongeloofwaardig als je merkverhaal hierop achterloopt. Je kan flinke imagoschade oplopen als je erg milieuonvriendelijk produceert. 
  


                    </p>
                </div>
            </div>
        </section>

        <section id="voorbeelduitwerking">
            <h1 id="examplecase" class="title">Voorbeelduitwerking</h1>

            <div class="examplecasestep">
                <div class="text">
                    <h1 class='title'>Stap 1</h1>
                    <p>Hier hebben we de eigenschappen van Dr. pepper onderzocht. Dit waren deze 4 woorden: spannend, vol humor, origineel & authenthiek. We hebben de woorden gekoppeld aan een feestdag, zoals Coca Cola met kerst heeft gedaan. We hebben Halloween gekozen, omdat de eigenschappen perfect overeenkomen met deze spannende feestdag. Zo krijgen we een consistent verhaal en een volledige uitwerking.</p>
                </div>

                <?php if($image = $page->image('stap-1.png')): ?>
                <img src="<?= $image->url() ?>" alt="" class='image'>
                <?php endif ?>
            </div>

            <hr>

            <div class="examplecasestep right">
                <?php foreach($page->videos() as $video):?>
                <?php if($video->id() == 'home/drpeppercommercial.mp4'):?>
                <video class="image" width="100%" height="100%" autoplay muted loop>
                    <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>">
                    Your browser does not support the video tag.
                </video>
                <?php endif ?>
                <?php endforeach ?>

                <div class="text">
                    <h1 class='title'>Stap 2</h1>
                    <p>Het comfort hebben we naar een digitaler level getild. De doelgroep van Dr. Pepper is in het bezit van een smartphone en zo kan de gebruiker makkelijk bij alle nieuwe trends en ontwikkelingen komen. Snapchat is een bedrijf die gebruik maakt van nieuwe technologieën als augmented reality en stickers. We willen spannende Snapchat filters koppelen aan Dr. Pepper, zodat dit merk via deze technologie meer bekend wordt. De gebruikers voelen zich thuis met Snapchat en het gebruik is ook zeer gemakkelijk en zo dus ook comfortabel.</p>
                </div>
            </div>

            <hr>

            <div class="examplecasestep">
                <div class="text">
                    <h1 class='title'>Stap 3</h1>
                    <p>We hebben ervoor gekozen om gebruik te maken van een vending machine. In de vending machine zit niet het blikje, maar een mystery box. In de mysterybox zit een van de smaken van dr. pepper en deze box is visueel makkelijk aan te passen bij een feestdag. In deze dozen zitten speciale snapchat filters verstopt. Het is elke keer een verassing wat erin zit. Dit komt terug op de spannende verhaallijn van Dr. Pepper. Op deze manier kan Dr. Pepper op elk evenement worden ingezet. Doordat vending machines heel mobiel zijn, kan je ze overal plaatsen.</p>
                </div>

                <?php if($image = $page->image('stap-3.png')): ?>
                <img src="<?= $image->url() ?>" alt="" class='image'>
                <?php endif ?>
            </div>

            <hr>

            <div class="examplecasestep right">
                <?php if($image = $page->image('stap-4.png')): ?>
                <img src="<?= $image->url() ?>" alt="" class='image'>
                <?php endif ?>

                <div class="text">
                    <h1 class='title'>Stap 4</h1>
                    <p>Ook voor dr. Pepper is het van belang om duurzaam te zijn. Recyclen stimuleren is niet makkelijk, daarom hebben we inleverpunten voor de blikjes bedacht. Het zijn niet zomaar inleverpunten, je krijgt er namelijk wel iets voor terug. Elke keer als een blikje ingeleverd wordt, kan je een code krijgen voor een nieuwe Snapchatfilter. Deze code open je met je Snapchat camera en zo krijg je de filter snel en gemakkelijk binnen. Zo is recyclen leuk en goed voor het milieu.  </p>
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

        <section id="partners">
            <h1 class="title">Met wie we samenwerken</h1>


        </section>

        <section id="footer">
            <div class="makers">
                <div class="gab maker">
                    <?php if($image = $page->image('stap-3.png')): ?>
                    <img src="<?= $image->url() ?>" alt="" class='makerImage'>
                    <?php endif ?>

                    <p>Gabriëlle van der Valk</p>
                    <p>0934432</p>
                    <a
                        href="https://www.google.com/maps/place/Van+der+Valk+Hotel+Tilburg/@51.5436568,5.1085848,17z/data=!3m1!4b1!4m8!3m7!1s0x47c6bfbc46a8ae07:0x54c900b2f72e993e!5m2!4m1!1i2!8m2!3d51.5436535!4d5.1107681">Bezoek
                        me!</a>
                </div>

                <div class="sam maker">
                    <?php if($image = $page->image('stap-3.png')): ?>
                    <img src="<?= $image->url() ?>" alt="" class='makerImage'>
                    <?php endif ?>

                    <p>Samuël van Velzen</p>
                    <p>0934432</p>
                    <a
                        href="https://www.google.com/maps/place/Hogeschool+Windesheim/@52.4995106,6.077882,17z/data=!3m1!4b1!4m5!3m4!1s0x47c7ded4e818a589:0x68b47bb437213d3b!8m2!3d52.4995074!4d6.0800653">Bezoek
                        me!</a>
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