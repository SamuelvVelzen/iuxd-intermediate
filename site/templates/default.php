<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?= css([
        'assets/css/main.css',
        ]) ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/gmx3xsc.css">

    <?= js(['assets/js/main.js',]) ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <title><?= $page->title() ?></title>
</head>

<body>

    <body>
        <nav>
            <ul>
                <li class="navitem first"><a href="#">Gabrielle en Samuel</a></li>
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

        <section id="whw" data-aos="fade-up">
            <!-- <section id="whw"> -->
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

                    <?php if($image = $page->image('mindmap.png')): ?>
                    <img src="<?= $image->url() ?>" alt="" class='bigimage'>
                    <?php endif ?>

                    <div class="text special">

                        <div class="first">
                            <b>

                                Inleiding
                            </b>
                            <p>
                                Als eerst gaan we kijken naar de ontwikkeling van een product in een ontwerpproces.
                                Hierna
                                zullen we gaan kijken wat nou een goed product is. En als laatst zullen we de
                                verschillende
                                online resources behandelen.</p>
                            <b>

                                Ontwerpproces
                            </b>
                            <p>
                                Het ontwerpproces bestaat uit 8 verschillende stappen. Hiermee zal een idee uitgewerkt
                                worden tot een goede visual branding.

                                <ul>
                                    <li> Als eerst zal er onderzoek gedaan worden met behulp van moodboards of
                                        mindmapping. Aan de
                                        hand van dit onderzoek zullen er meerdere schetsen gemaakt worden.</li>
                                    <li> Deze schetsen zullen ingeleverd worden bij de opdrachtgever zodat er feedback
                                        over
                                        gegeven
                                        kan worden.</li>
                                    <li>De overgebleven schetsen zullen uitgewerkt worden in zwart en wit.</li>
                                    <li>Deze schetsen zullen ingeleverd worden bij de opdrachtgever voor meer feedback.
                                        De beste
                                        variant zal uitgekozen worden.</li>
                                    <li>Deze versie zal verder uitgewerkt worden met meer zwart en witte varianten. Ook
                                        wordt er
                                        gekeken naar de juiste spacing.</li>
                                    <li>Uit al deze zwart en witte varianten zal de juiste gekozen worden door de
                                        opdrachtgever.</li>
                                    <li>Als laatst zal er een presentatie gegeven worden en zal er gekeken worden hoe
                                        het logo op
                                        verschillende producten staat. Zoals auto’s, petten, mokken, business cards of
                                        huisstijls.
                                    </li>
                                </ul>
                            </p>
                        </div>

                        <div class="second"><b>
                                Goed product
                            </b>
                            <p>
                                De kenmerken van een goed product kunnen alsvolgt beschreven worden:
                                - Duidelijk merkdoel en positionering in de markt
                                - Grondig marktonderzoek
                                - Aangename merkpersoonlijkheid
                                - Merkwaardig logo
                                - Aantrekkelijk kleurenpalet
                                - Professioneel typografie
                                - Ondersteundende afbeeldingen in overeenkomst met het merk
                            </p>
                            <b>
                                Online resources
                            </b>
                            <p>
                                Als laatst kan een profesional de volgende online resources gebruiken om een succesvol
                                visual
                                branding op te kunnen zetten.
                            </p>
                            <p>
                                Ten eerste moet er tijdens het onderzoek gekeken worden naar de huidige website / visual
                                branding, zodat voor de huidige klanten de vertrouwelijkheid van het bedrijf niet
                                veranderd.
                            </p>
                            <p>
                                Daarnaast moet er onderzoeken gedaan worden op het internet over soortgelijke producten
                                en
                                hoe
                                de concurrentie deze producten op de markt brengt.</p>
                            <p>
                        </div>

                    </div>
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
                    <?php if($image = $page->image('merkwijzer-waarom.png')): ?>
                    <img src="<?= $image->url() ?>" alt="" class='image'>
                    <?php endif ?>

                    <div class="text right">
                        <b>

                            Inleiding
                        </b>
                        <p>Er zal dieper ingegaan worden op de rol van visual branding daarnaast zal er ook gekeken
                            worden naar de verschillende tools die erbij komen kijken hoe visual branding wordt opgezet.
                        </p>
                        <b>

                            Rol

                        </b>
                        <p>De rol van visual branding zorgt ervoor dat een bedrijf zich uniek kan positioneren in de
                            markt. Met behulp van visual branding kan een bedrijf zich promoten naar het publiek
                            waardoor potentiele kopers aangetrokken kunnen worden.</p>
                        <b>

                            Tools

                        </b>
                        <p>Om een visual branding te creëren worden verschillende programma’s gebruikt om dit
                            tot stand te laten komen. Hiermee kunnen verschillende mensen ervoor zorgen dat er
                            een goede visual branding ontstaat.</p>
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
                    <div class="text special">
                        <div class="first">
                            <b>

                                Inleiding
                            </b>
                            <p>
                                Hoe de visuele identiteit van een bedrijf wordt ervaren ligt dichtbij hoe een
                                persoon een eigen
                                identiteit ervaart. Wat maakt je wie je bent en hoe kom je over. Dat is hét
                                belangrijkste
                                onderdeel als het gaat om onderscheiding.
                                Een visuele bedrijfsidentiteit laat zien wat je doet als bedrijf, wat je merkwaarden
                                zijn en
                                wat
                                voor verhaal je vertelt.
                            </p>
                            <p>
                                Zodra je erachter bent gekomen wat de merkwaarden zijn, kan je je merkidentiteit gaan
                                visualiseren. Dit kan je illustreren in programma’s als Illustrator, Photoshop & Sketch.
                                Tools als Premiere Pro en After Effect zijn handig bij bewegende visualisaties.
                            </p>

                            <?php if($image = $page->image('nike1.png')): ?>
                            <img src="<?= $image->url() ?>" alt="" class='image new'>
                            <?php endif ?>
                        </div>

                        <div class="second">
                            <b>

                                Promoten
                            </b>
                            <p>
                                Social media kanalen als Instagram en Linked-In zijn handig om je product te promoten.
                                Facebook
                                kan je eventueel inzetten als je doelgroep wat ouder is, maar dit social kanaal wordt
                                steeds
                                minder populair, dus in de toekomst minder effectief om in te zetten als tool.
                            </p>
                            <p>
                                Nu de basisrichtlijnen in kaart zijn gebracht bij het oprichten van een merkidentiteit,
                                gaan
                                we
                                nu verder op de branding zelf.
                                Vroeger werd een product verkocht om het product zelf. Als voorbeeld, vroeger als je
                                schoenen
                                waren versleten, haalde je pas nieuwe schoenen. Ze hadden een functioneel doeleinde.
                            </p>

                            <?php if($image = $page->image('nike2.png')): ?>
                            <img src="<?= $image->url() ?>" alt="" class='image new'>
                            <?php endif ?>
                        </div>

                        <p class="specialtext">
                            In de tijd waar we nu in leven, haal je schoenen bij een winkel die het best bij je past kwa
                            uitstraling, sfeer en identiteit. Het merk dat de schoen verkoopt, heeft een hele
                            verhaallijn om zich heen bedacht. De sfeer van een bedrijf is daarom ook heel belangrijk.
                            Elk bedrijf heeft zijn eigen motto om die sfeer uit te drukken. Die van Nike is bijvoorbeeld
                            ‘Just do it’ & ‘There is no finish line. Nike is een van de grootste sportmerken die staat
                            voor het behalen van je doel, no matter what.
                        </p>
                        <?php foreach($page->videos() as $video):?>
                        <?php if($video->id() == 'home/nikes2.mp4'):?>
                        <video class="image m0" width="100%" height="100%" autoplay muted loop>
                            <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>">
                            Your browser does not support the video tag.
                        </video>
                        <?php endif ?>
                        <?php endforeach ?>

                        <div class="first">
                            <b>

                                Chocomel
                            </b>
                            <p>
                                Chocomel is ook een goed voorbeeld. Als iemand een glas chocomelk wilt, spreekt bijna
                                niemand het meer uit met een K op het einde. Terwijl dit eigenlijk gewoon de naam is van
                                het merk en niet het product zelf. Chocomel is altijd heel scherp geweest met zijn
                                marketingstrategie.
                            </p>
                            <p>
                                Een laatste voorbeeld is Coca Cola. Coca Cola was vroeger een drankje waar cocaïne én
                                alcohol in zat en was bedoeld als medicijn voor gewonden die uit de burgeroorlog
                                terugkwamen. Later werd de alcohol illegaal en werd dit vervangen door Suikersiroop. De
                                cocaïne was nog wel aanwezig in het drankje. Vanwege vele aanrand- en
                                verkrachtincidenten bij de vrouwen voelde de nieuwe eigenaar, Asa G. Candler de druk om
                                de cocaïne uit het drankje te halen. Dit deed hij in 1903. </p>
                            <p> Tegenwoordig staat Coca cola erom bekend dat hij de kerstman groot heeft gemaakt en
                                een fijne toevoeging is aan elk evenement. Coca cola heeft het slim aangepakt door het
                                drankje te koppelen aan een feestdag. </p>
                        </div>
                        <div class="second">
                            <b>

                                Aura
                            </b>
                            <p> In de toekomst gaat de visual branding nog een stap verder. Dan gaat het om het visueel
                                verkopen van je product via een communicatiemiddel als bijv. Whats’app, Instagram en
                                Snapchat. Ook wel aura. Een goed voorbeeld hierbij is Chocomel. Tegenwoordig houdt
                                Chocomel zich tijdens de feestdagen bezig met random letters op het pak. Met deze
                                letters worden grappige woorden gemaakt in de supermarkt en dit delen mensen op social
                                media. Zo wordt er dus gratis reclame gemaakt voor het merk zonder dat mensen het
                                doorhebben.
                                Een ander belangrijk aspect is de inrichting van een winkel/restaurant. Het bedrijf waar
                                je binnenloopt moet gelijk ‘picture-ready’ zijn en een huiselijke sfeer geven. Een klant
                                moet bij het binnenkomen gelijk een uniek en goed gevoel krijgen die ze graag willen
                                delen. Dunkin Donuts is een bedrijf wat dat op dit moment heel goed doet. De nieuwe
                                inrichting is huiselijk industrieel met mooie verlichting. Je kan erbij zitten met je
                                donut en het is gelijk ‘insta-ready.’ Op deze manier maak je weer gratis reclame voor
                                een merk. </p>
                        </div>

                        <div class="gabierow">
                            <?php if($image = $page->image('chocomel-1.png')): ?>
                            <img src="<?= $image->url() ?>" alt="" class='image new'>
                            <?php endif ?>

                            <?php if($image = $page->image('chocomel-2.png')): ?>
                            <img src="<?= $image->url() ?>" alt="" class='image new hoi'>
                            <?php endif ?>
                        </div>
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
                        Het creëren van de juiste brand experience is altijd het uitgangspunt van visual
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
                        Een winkel of restaurant moet tegenwoordig ‘instagram ready’ zijn. Een foto zou zo het internet op moeten kunnen gaan. Comfort staat niet alleen voor de inrichting maar ook voor
                        gebruiksgemak. Iedereen heeft een Smartphone en veel mensen maken gebruik van programma’s als
                        Snapchat & Instagram. Deze programma’s zijn bekend en dus makkelijk in te zetten voor bedrijven.
                        Chocomel heeft dit bijv. ingezet bij de Chocomel letters. 
                    </p>
                </div>

                <div class="step">
                    <?php if($image = $page->image('comfort-icon-cirkel.png')): ?>
                    <img src="<?= $image->url() ?>" alt="" class='stepicon'>
                    <?php endif ?>
                    <h1>3. Flexibiliteit</h1>
                    <p>
                        Een merk moet op elk moment van een jaar zijn/haar verhaal kunnen vertellen. Met dit
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

                        Duurzaamheid gaat, los van productieproces en materiaalkeuze, ook daadwerkelijk hand in hand met
                        de visuele uitstraling van een merk. In deze tijd, waarbij het milieu elke dag weer hoog in het
                        nieuws komt, is het ongeloofwaardig als je merkverhaal hierop achterloopt. Je kan flinke
                        imagoschade oplopen als je erg milieuonvriendelijk produceert. Mc Donalds heeft dit bijv. gedaan door o.a. het logo groen te maken i.p.v. rood.



                    </p>
                </div>
            </div>
        </section>

        <section id="voorbeelduitwerking">
            <h1 id="examplecase" class="title">Voorbeelduitwerking</h1>

            <div class="examplecasestep">
                <div class="text">
                    <h1 class='title'>Stap 1</h1>
                    <p>Hier hebben we de eigenschappen van Dr. pepper onderzocht. Dit waren deze 4 woorden: spannend,
                        vol humor, origineel & authenthiek. We hebben de woorden gekoppeld aan een feestdag, zoals Coca
                        Cola met kerst heeft gedaan. We hebben Halloween gekozen, omdat de eigenschappen perfect
                        overeenkomen met deze spannende feestdag. Zo krijgen we een consistent verhaal en een volledige
                        uitwerking.</p>
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
                    <p>Het comfort hebben we naar een digitaler level getild. De doelgroep van Dr. Pepper is in het
                        bezit van een smartphone en zo kan de gebruiker makkelijk bij alle nieuwe trends en
                        ontwikkelingen komen. Snapchat is een bedrijf die gebruik maakt van nieuwe technologieën als
                        augmented reality en stickers. We willen spannende Snapchat filters koppelen aan Dr. Pepper,
                        zodat dit merk via deze technologie meer bekend wordt. De gebruikers voelen zich thuis met
                        Snapchat en het gebruik is ook zeer gemakkelijk en zo dus ook comfortabel.</p>
                </div>
            </div>

            <hr>

            <div class="examplecasestep">
                <div class="text">
                    <h1 class='title'>Stap 3</h1>
                    <p>We hebben ervoor gekozen om gebruik te maken van een vending machine. In de vending machine zit
                        niet het blikje, maar een mystery box. In de mysterybox zit een van de smaken van dr. pepper en
                        deze box is visueel makkelijk aan te passen bij een feestdag. In deze dozen zitten speciale
                        snapchat filters verstopt. Het is elke keer een verassing wat erin zit. Dit komt terug op de
                        spannende verhaallijn van Dr. Pepper. Op deze manier kan Dr. Pepper op elk evenement worden
                        ingezet. Doordat vending machines heel mobiel zijn, kan je ze overal plaatsen.</p>
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
                    <p>Ook voor dr. Pepper is het van belang om duurzaam te zijn. Recyclen stimuleren is niet makkelijk,
                        daarom hebben we inleverpunten voor de blikjes bedacht. Het zijn niet zomaar inleverpunten, je
                        krijgt er namelijk wel iets voor terug. Elke keer als een blikje ingeleverd wordt, kan je een
                        code krijgen voor een nieuwe Snapchatfilter. Deze code open je met je Snapchat camera en zo
                        krijg je de filter snel en gemakkelijk binnen. Zo is recyclen leuk en goed voor het milieu. </p>
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
                        <?php if($image = $page->image('young.png')): ?>
                        <img src="<?= $image->url() ?>" alt="" class='picture'>
                        <?php endif ?>
                        <div class="personal">
                            <p class="name">Dimitri Philips</p>
                            <p class="work">
                                Interaction designer
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
                        <?php if($image = $page->image('girl.png')): ?>
                        <img src="<?= $image->url() ?>" alt="" class='picture'>
                        <?php endif ?>
                        <div class="personal">
                            <p class="name">Dionne de Vries</p>
                            <p class="work">
                                UX-designer
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="sources">
            <h1 class="title">Bronvermelding</h1>


        </section>

        <script>
        main.init();
        AOS.init();
        </script>
    </body>
</body>

</html>