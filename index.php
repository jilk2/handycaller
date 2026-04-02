<?php
include_once "partials/header.php";
?>

<body class="text-white">
<div class="flex flex-col gap-[48px]">

    <nav class="bg-[#05668D] items-center h-10 flex px-5 rounded-b-[80px]">
        <div class="flex-3">
            <img src="" alt="logo"/>
        </div>

        <div class="flex-2 flex px-5 gap-4">
            <a class="text-xs btn p-1" href="#" onclick="scrollToSection('doelgroep-en-context')">Doelgroep en context</a>
            <a class="text-xs btn p-1" href="#" onclick="scrollToSection('type-sensor')">Type sensor</a>
            <a class="text-xs btn p-1" href="#" onclick="scrollToSection('hoe-werkt-het')">Hoe werkt het?</a>
        </div>
    </nav>
    <div class="mx-12">
    <header class="bg-[#05668D] rounded-xl ">
        <p class="">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
            clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit am
        </p>
    </header>


<main class="my-12 text-black">
    <section id="doelgroep-en-context" class="flex flex-row gap-2">
        <div class="flex flex-col border-4 border-[#BDE692] flex-1 m-5 rounded-[40px] p-5">
            <div class=""> Doelgroep en context</div>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
            clita kasd gubergren, no sea takimata
        </div>

        <div class="flex-1 justify-center items-center">
            <div class="flex flex-col border border-[#BDE692] flex-1 m-5">
                <img src="images/work-in-progress.jpg" alt="a work in progress image">
            </div>
        </div>
    </section>

    <div class="bg-[#4A7B14] w-[98%] ml-[2%]  rounded-[40px] min-h-2">
    </div>

    <section id="type-sensor" class="flex flex-row gap-2">
        <div class="flex flex-col border-4 border-[#BDE692]  flex-1 m-5 rounded-[40px] p-3 gap-2">
            <div class="">Type sensor</div>
            <p>Foto van het product verandert per knop...</p>
            <button class="btn p-3" onclick="changeImage('images/shake.webp')">Schudden</button>
            <button class="btn p-3" onclick="changeImage('images/hover.jpg')">Hover</button>
            <button class="btn p-3" onclick="changeImage('images/press-button.jpg')">Druk knop</button>
        </div>

        <div class="flex-2 justify-center items-center flex-col">
            <div class="flex flex-col border border-[#BDE692] flex-1 m-5">
                <img id="productImage" class="max-h-[50vh] transition-opacity duration-300 opacity-100" src="images/work-in-progress.jpg" alt="Afbeelding van 'a work in progress'">
            </div>
            <div id="hoe-werkt-het" class="border-4 border-[#05668D] mx-5 rounded-xl p-5">
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

