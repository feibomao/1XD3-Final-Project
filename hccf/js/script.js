/** Author: Dennis Qin
 *  Date: Mar 30, 2026
 *  Descr: Javascript that stops the upload to the database if any syntax errors occur when the user inputs something invalid. 
 */
window.addEventListener("load", function () {

    const info = document.getElementById("info");
    const name_input = document.getElementById("name");
    const email = document.getElementById("email");
    const confirmation_email = document.getElementById("conf_email");
    const media = document.getElementById("media");
    const tip = document.getElementById("tip");
    const select = document.getElementById("select");

    /**
     * Validates the get-connected form fields and submits if all inputs are valid
     * Highlights any invalid fields in red and shows an error message
     */
    function verify() {
        let hasError = false;
        tip.style.visibility = "hidden";
        tip.innerHTML = "";
        name_input.style.border = '5px solid rgb(0, 0, 90)';
        email.style.border = '5px solid rgb(0, 0, 90)';
        confirmation_email.style.border = '5px solid rgb(0, 0, 90)';
        media.style.border = '5px solid rgb(0, 0, 90)';
        select.style.border = '5px solid rgb(0, 0, 90)';

        if (name_input.value === "") {
            name_input.style.border = '5px solid red';
            tip.innerHTML = "Please enter a name!" + "<br>";
            tip.style.visibility = "visible";
            hasError = true;
        } if (email.value !== confirmation_email.value || !email.value) {
            email.style.border = '5px solid red';
            confirmation_email.style.border = '5px solid red';
            tip.innerHTML += "Please ensure both emails are matching!" + "<br>";
            tip.style.visibility = "visible";
            hasError = true;
        } if (media.value[0] !== "@") {
            media.style.border = '5px solid red';
            tip.innerHTML += "Please include an '@' at the start of social media!" + "<br>";
            tip.style.visibility = "visible";
            hasError = true;
        } if (media.value.length <= 1) {
            media.style.border = '5px solid red';
            tip.innerHTML += "Please include more than just '@'" + "<br>";
            tip.style.visibility = "visible";
            hasError = true;
        } if (select.value === "None") {
            select.style.border = '5px solid red';
            tip.innerHTML += "Please select a platform option!";
            tip.style.visibility = "visible";
            hasError = true;
        } if (!hasError) {
            info.submit();
        }

    }

    info.addEventListener("submit", function (event) {
        event.preventDefault();
        verify();
    });

    document.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            event.preventDefault();
            verify();
        }
    });



});