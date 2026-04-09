<?php
include_once "partials/header.php";
?>

<body class="text-white">
<div class="flex flex-col gap-[48px]">

    <nav class="bg-[#05668D] items-center h-12 flex px-5 rounded-b-[80px]">
        <div class="flex-3">
            <img src="" alt="logo"/>
        </div>

        <div class="flex-2 flex px-5 gap-4">
            <a class="text-xs btn p-3" href="#" onclick="scrollToSection('doelgroep-en-context')">Doelgroep en context</a>
            <a class="text-xs btn p-3" href="#" onclick="scrollToSection('type-sensor')">Type sensor</a>
            <a class="text-xs btn p-3" href="#" onclick="scrollToSection('hoe-werkt-het')">Hoe werkt het?</a>
        </div>
    </nav>
    <div class="mx-12 smallSideMargin">
    <header class="bg-[#05668D] rounded-xl ">
        <p class="">
           De Handycaller
        </p>
    </header>


<main class="my-12 text-black">
    <section id="doelgroep-en-context" class="flex flex-row rowToColumn gap-2">
        <div class="flex flex-col border-4 border-[#BDE692] flex-1 m-5 noSideMargin rounded-[40px] p-5">
            <div class=""> Doelgroep en context</div>
            Wij zijn Jilvano, Kay, Michelle en Mariëlle van team 14 en hebben samen het product 'Handycaller' gemaakt.
            We hebben dit product gemaakt voor mensen met een motorische beperking (voornamelijk rolstoelgebruikers) en proberen winkelen voor deze groep te verbeteren.
            Uit ons onderzoek is gebleken dat veel rolstoelgebruikers moeite hebben met hoge schappen te bereiken. Daarom moeten ze vaak om hulp vragen van medewerkers.
            Echter is er niet altijd een medewerker in de buurt. Zo kwamen we op het idee van de Handycaller.
            Met dit product kan je om hulp vragen van medewerkers van een afstand door ermee te schudden.
        </div>

        <div class="flex-1 justify-center items-center">
            <div class="flex flex-col border border-[#BDE692] flex-1 m-5 noSideMargin">
                <img src="images/work-in-progress.jpg" alt="a work in progress image">
            </div>
        </div>
    </section>

    <div class="bg-[#4A7B14] w-[98%] ml-[2%]  rounded-[40px] min-h-2">
    </div>

    <section id="type-sensor" class="flex flex-row rowToColumn gap-2">
        <div class="flex flex-col border-4 border-[#BDE692]  flex-1 m-5 noSideMargin rounded-[40px] p-3 gap-2">
            <div class="">Type sensor</div>
            <p>Bij de ontwikkeling van ons product hebben we meerdere typen sensoren geprobeerd en getest. Uit deze tests kwam dat de 'schud sensor' het beste gebruikt kon worden voor de Handycaller. Door op de knoppen te klikken kunt u een foto zien van hoe dat eruitziet.</p>
            <button class="btn p-5 m-2" onclick="changeImage('images/shake.webp')">Schudden</button>
            <button class="btn p-5 m-2" onclick="changeImage('images/hover.jpg')">Hover</button>
            <button class="btn p-5 m-2" onclick="changeImage('images/press-button.jpg')">Druk knop</button>
        </div>

        <div class="flex-2 justify-center items-center flex-col columnReverse">
            <div class="flex flex-col border border-[#BDE692] flex-1 m-5 noSideMargin">
                <img id="productImage" class="max-h-[50vh] transition-opacity duration-300 opacity-100" src="images/work-in-progress.jpg" alt="a work in progress image">
            </div>
            <div id="hoe-werkt-het" class="border-4 border-[#05668D] mx-5 noSideMargin rounded-xl p-5">
            hello
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

