/**
 * Author: Joshua Kollanur
 * Date: 2026/04/07
 * Description: js file for carousel on index.php page
*/
window.addEventListener("load", function () {

    const images = [
        "images/gallery1.jpeg",
        "images/gallery2.jpeg",
        "images/gallery3.jpeg"
    ];

    let currentIndex = 0;

    const displayImg = document.getElementById("display-img");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    /**
     * Switches the displayed carousel image to the one at the given index
     * @param {number} index - The index of the image in the images array to display
     */
    function updatePhoto(index) {
        displayImg.style.opacity = 0.4;

        setTimeout(() => {
            displayImg.src = images[index];
            displayImg.style.opacity = 1;
        }, 150);
    }

    nextBtn.addEventListener("click", function () {
        currentIndex = (currentIndex + 1) % images.length;
        updatePhoto(currentIndex);
    });

    prevBtn.addEventListener("click", function () {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updatePhoto(currentIndex);
    });
});
