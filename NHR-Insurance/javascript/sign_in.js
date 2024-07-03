const submit_login = document.querySelector("#submit_login");
const submit_sign_up = document.querySelector("#submit_sign_up");
const maincontent = document.querySelector(".maincontent");
const submit_login2 = document.querySelector("#submit_login2");
const submit_sign_up2 = document.querySelector("#submit_sign_up2");

submit_login.addEventListener("click", () => {
    maincontent.classList.add("sign-up-mode");
});

submit_sign_up.addEventListener("click", () => {
    maincontent.classList.remove("sign-up-mode");
});

submit_login2.addEventListener("click", () => {
    maincontent.classList.add("sign-up-mode2");
});
submit_sign_up2.addEventListener("click", () => {
    maincontent.classList.remove("sign-up-mode2");
});