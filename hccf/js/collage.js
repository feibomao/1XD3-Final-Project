/**
 * Author: Joshua Kollanur, Ehab Ismail (seperated from php file and fixes)
 * Date: 2026/04/19
 * Description: js file for collage.php page
*/
window.addEventListener("load", function () {

    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');

    /**
     * Opens the lightbox overlay and displays the clicked image
     * Listens for clicks on any img inside collage_grid
     */
    document.getElementById('collage_grid').addEventListener('click', function (e) {
        if (e.target.tagName === 'IMG') {
            lightboxImg.src = e.target.src;
            lightbox.style.display = 'flex';
        }
    });

    /**
     * Closes the lightbox when the user clicks outside the image
     * Checks that the click target is the dark overlay, not the image itself
     */
    lightbox.addEventListener('click', function (e) {
        if (e.target === lightbox) {
            lightbox.style.display = 'none';
        }
    });

});