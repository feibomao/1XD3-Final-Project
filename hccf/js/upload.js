/**
 * Author: Ehab Ismail
 * Date: 2026/04/07
 * Description: JS file for upload page
*/
window.addEventListener("load", function () {

    const dropZone = document.getElementById("drop_zone");
    const fileInput = document.getElementById("image");
    const preview = document.getElementById("file_preview");
    const submitDiv = document.getElementById("upload_submit");

    dropZone.addEventListener("click", () => fileInput.click());

    fileInput.addEventListener("change", function () {
        if (this.files.length > 0) {
            preview.textContent = "Selected: " + this.files[0].name;
            submitDiv.style.display = "block";
        }
    });

    dropZone.addEventListener("dragover", function (e) {
        e.preventDefault();
        dropZone.classList.add("dragover");
    });

    dropZone.addEventListener("dragleave", function () {
        dropZone.classList.remove("dragover");
    });

    dropZone.addEventListener("drop", function (e) {
        e.preventDefault();
        dropZone.classList.remove("dragover");

        const files = e.dataTransfer.files;
        if (files.length > 0 && files[0].type.startsWith("image/")) {
            const dt = new DataTransfer();
            dt.items.add(files[0]);
            fileInput.files = dt.files;

            preview.textContent = "Selected: " + files[0].name;
            submitDiv.style.display = "block";
        } else {
            preview.textContent = "Please drop an image file.";
        }
    });

});