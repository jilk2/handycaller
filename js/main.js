function scrollToSection(id) {
    event.preventDefault();
    document.getElementById(id).scrollIntoView({
        behavior: 'smooth'
    });
}

function changeContent(elementId, callback) {
    const element = document.getElementById(elementId);

    // Fade out
    element.classList.add("opacity-0");

    setTimeout(() => {
        // Hier gebeurt de verandering
        callback(element);

        // Fade in
        element.classList.remove("opacity-0");
    }, 300);
}