function toggleDisplay(className) {
    // Get all "sections
    const sections = document.querySelectorAll("section")

    // iterate through those sections and display= "none"
    sections.forEach((section) => {
        section.style.display = "none"
    });
    //display the target section
    document.querySelector(`.${className}`).style.display = "block"
}