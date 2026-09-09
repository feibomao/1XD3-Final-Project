/**
 * Author: Colin Wei
 * Date: 2026/04/19
 * Description: js file for login page
*/
window.addEventListener("load", function () {

    const form = document.getElementById("login");
    const hide = document.getElementById("hide");
    const disp = document.getElementById("target");
    const button = document.getElementById("send");
    button.disabled = false;

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        button.disabled = true;
        let pw = document.getElementById("pword").value;
        let emailVal = email.value;
        const disp = document.getElementById("target");
        let url = "loginAJAX.php?email=" + emailVal + "&pword=" + pw;

        fetch(url)
            .then(response => response.text())
            /**
             * redirects to another page or displays error message
             * @param {promise} text
             */
            .then(function (text) {
                console.log(text);
                if (text == "1") {
                    hide.submit();
                }
                else {
                    button.disabled = false;
                    disp.innerHTML = text;
                }
            })
    });
});
