function scrollToSection(id) {
    event.preventDefault();
    document.getElementById(id).scrollIntoView({
        behavior: 'smooth'
    });
}

function changeImage(newImage) {
    const img = document.getElementById("productImage");

    //Fade out
    img.classList.add("opacity-0");

    setTimeout(() => {
        //Nieuwe afbeelding
        img.src = newImage;

        //Fade in
        img.classList.remove("opacity-0");
    }, 300);
}