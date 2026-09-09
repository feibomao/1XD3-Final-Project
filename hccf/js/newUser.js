/**
 * Author: Colin Wei
 * Date: 2026/04/01
 * Description: js file for signup page
*/
window.addEventListener("load", function () {
    /**
     * Displays error messages where applicable
     * Verifies the following:
     *  validity of email
     *  matching of password and confirm password
     * @param {string} pw
     * @param {string} pwC
     * @param {string} emailVal
     * @param {DOM element} disp
     * @returns true or false
     */
    function validInfo(pw, pwC, emailVal, disp) {
        if (pw !== pwC) {
            const msg = document.getElementById("msg");
            disp.innerHTML = "passwords don't match";
            return false;
        }

        hasAt = false;
        hasDot = false;

        for (i = 0; i < (emailVal).length; i++) {
            if (emailVal[i] === "@" && i !== 0) {
                hasAt = true;
            }
            if (emailVal[i] === "." && hasAt && i !== emailVal.length - 1) {
                console.log(i);
                hasDot = true;
            }
            console.log(emailVal.length);
        }
        if (!hasAt || !hasDot) {
            disp.innerHTML = "error: email must be in form a@b.c";
            return false;
        }
        console.log("hooray");
        return true;
    }

    const form = document.getElementById("signUp");
    const hide = document.getElementById("hide");
    const button = document.getElementById("send");
    button.disabled = false;
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        console.log("hi");
        let pw = document.getElementById("pw").value;
        let pwC = document.getElementById("pwC").value;
        let emailVal = email.value;
        const disp = document.getElementById("target");

        if (validInfo(pw, pwC, emailVal, disp)) {
            button.disabled = true;
            let url = "signupAJAX.php?email=" + emailVal + "&pword=" + pw;
            console.log(url); // debug

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
        }
    });
});
