<?php
include_once "partials/header.php";
?>

<body class="text-white bg-[#EBF2FA] flex flex-col gap-12">

    <nav class="bg-[#05668D] custom-shadow flex items-center h-20 px-5 rounded-b-[80px] xl:gap-60 lg:gap-30 sm:gap-5 gap-5 biggerNav smallScreenGap mediumScreenGap">
        <div class="ml-12 sm:mx-5 border-3 rounded-4xl p-3 logoSpace">
            <img src="" alt="logo"/>
        </div>

        <div class="flex-2 flex px-5 gap-4 smallScreenGap mediumScreenGap">
            <a class="text-base font-semibold text-center btn w-60 custom-shadow navButtonsSmall navButtonsMedium btn p-4" href="#" onclick="scrollToSection('target-group-and-context')">Doelgroep en context</a>
            <a class="text-base font-semibold text-center btn w-60 custom-shadow navButtonsSmall navButtonsMedium btn p-4" href="#" onclick="scrollToSection('type-sensor')">Type sensor</a>
            <a class="text-base font-semibold text-center btn w-60 custom-shadow navButtonsSmall navButtonsMedium btn p-4" href="#" onclick="scrollToSection('how-does-it-work')">Hoe werkt het?</a>
        </div>
    </nav>

    <div class="mx-12 smallSideMargin">
    <header class="bg-[#05668D] rounded-[40px] h-50 flex items-center justify-center custom-shadow">
        <h1 class="xl:text-8xl font-bold sm:text-4xl lg:text-6xl text-3xl">
           De Handycaller
        </h1>
    </header>


        <main class="my-12 text-black ">
            <section id="target-group-and-context" class="flex flex-row rowToColumn gap-2">
                <div class="flex flex-col custom-shadow border-8 border-[#BDE692] flex-1 m-5 noSideMargin rounded-[40px] p-5 relative">
                    <h2 class="font-semibold bg-[#05668D] custom-shadow rounded-b-[80px] rounded-t-[50px] h-16 text-white w-[101%] absolute -top-2 left-0 text-center pt-4 text-2xl">Doelgroep en context</h2>
                    <p class="mt-10 text-center align-middle text-lg">
                        Wij zijn Jilvano, Kay, Michelle en Mariëlle van team 14 en hebben samen het product 'Handycaller' gemaakt.
                        We hebben dit product gemaakt voor mensen met een motorische beperking (voornamelijk rolstoelgebruikers) en proberen winkelen voor deze groep te verbeteren.
                        Uit ons onderzoek is gebleken dat veel rolstoelgebruikers moeite hebben met hoge schappen te bereiken. Daarom moeten ze vaak om hulp vragen van medewerkers.
                        Echter is er niet altijd een medewerker in de buurt. Zo kwamen we op het idee van de Handycaller.
                        Met dit product kan je om hulp vragen van medewerkers van een afstand door ermee te schudden.
                    </p>
                </div>

                <div class="flex-1 justify-center items-center">
                    <div class="flex flex-col border border-[#BDE692] flex-1 m-5 noSideMargin rounded-[40px]">
                        <img class="rounded-[40px] min-w-75" src="images/target-group.png" alt="foto van doelgroep">
                    </div>
                </div>

            </section>

            <div class="bg-[#4A7B14] w-[98%] ml-[2%]  rounded-[40px] min-h-2">
            </div>

            <section id="type-sensor" class="flex flex-row rowToColumn gap-2">
                <div class="flex flex-col border-8 border-[#BDE692] custom-shadow flex-1 m-5 noSideMargin rounded-[40px] p-3 gap-2 relative">
                    <h2 class="font-semibold bg-[#05668D] custom-shadow rounded-b-[80px] rounded-t-[50px] h-16 text-white w-[101%] absolute -top-2 left-0 text-center pt-4 text-2xl">Type sensor</h2>
                    <p class="mt-12 text-center text-lg">
                        Bij de ontwikkeling van ons product hebben we meerdere typen sensoren geprobeerd en getest.
                        Deze sensoren kunt u in werking zien in de afbeelding hiernaast.
                        Door op de knoppen te klikken kunt u een foto zien van hoe dat eruitziet.
                    </p>

                    <button class="btn p-6 m-2 custom-shadow"
                            onclick="changeContent('productImage', (element) => {
                                element.src = 'images/shake.webp';
                            });
                            changeContent('sensor-explanation', (element) => {
                                element.textContent = 'U activeert de Handycaller door te schudden. Deze stuurt vervolgens een signaal naar een medewerker via bluetooth waarin staat dat u hulp nodig hebt in een bepaalde afdeling.';
                            });">
                        Schudden
                    </button>
                    <button class="btn p-6 m-2 custom-shadow"
                            onclick="changeContent('productImage', (element) => {
                                element.src = 'images/hover.jpg';
                            });
                            changeContent('sensor-explanation', (element) => {
                                element.textContent = 'Als u met de zender hovert over de ontvanger krijgt die met infrarood een bericht binnen.';
                            });">
                        Hover
                    </button>
                    <button class="btn p-6 m-2 custom-shadow"
                            onclick="changeContent('productImage', (element) => {
                                element.src = 'images/press-button.jpg';
                            });
                            changeContent('sensor-explanation', (element) => {
                                element.textContent = 'Met de knoppen op de CPX kunt u het afdeling nummer veranderen zodat de medewerker uw locatie weet. Dit nummer is ook gevisualiseerd met lampjes.';
                            });">
                        Druk knop
                    </button>
                </div>

                <div class="flex-2 justify-center items-center flex-col columnReverse">
                    <div class="flex flex-col border border-[#BDE692] flex-1 m-5 noSideMargin rounded-[40px]">
                        <img id="productImage" class="max-h-[50vh] transition-opacity duration-300 opacity-100 rounded-[40px]" src="images/work-in-progress.jpg" alt="a work in progress image">
                    </div>
                    <div id="how-does-it-work" class="border-8 border-[#05668D] mx-5 noSideMargin rounded-[40px] p-5 custom-shadow">
                        <p id="sensor-explanation" class="transition-opacity duration-300 opacity-100">
                            Lees hier hoe de verschillende sensoren werken.
                        </p>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <?php
    //include_once "partials/footer.php";
    //?>
    <script src="js/main.js"></script>
</body>
