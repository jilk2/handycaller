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

function changeText(newText) {
    const text = document.getElementById("sensor-uitleg");

    // Fade out
    text.classList.add("opacity-0");

    setTimeout(() => {
        // Change text
        text.textContent = newText;

        // Fade in
        text.classList.remove("opacity-0");
    }, 300);
}
