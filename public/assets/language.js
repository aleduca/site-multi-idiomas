import axios from "axios";

const btnChangeLanguage = document.querySelectorAll(".changeLanguage");

console.log(btnChangeLanguage);

btnChangeLanguage.forEach(function (btn) {
    btn.addEventListener("click", async function (event) {
        event.preventDefault();
        try {
            const language = this.getAttribute("data-id");

            const { data } = await axios.get(`/language/${language}`);

            if (data === "changed") {
                // console.log(window.location.pathname);
                window.location.href = window.location.pathname;
            }

            console.log(data);
        } catch (error) {
            console.log(error);
        }
    });
});
