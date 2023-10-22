// document.addEventListener("DOMContentLoaded", () => {
const toogleButton = document.querySelector("#toogle-password");

toogleButton.addEventListener("click", () => {
    const passwordInput = document.querySelector("#password");
    const eye = document.querySelector(".eye");
    const eyeOff = document.querySelector(".eye-off");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eye.style.display = "none";
        eyeOff.style.display = "block";
    } else {
        passwordInput.type = "password";
        eye.style.display = "block";
        eyeOff.style.display = "none";
    }
});
formLogin.addEventListener("submit", (e) => {
    e.preventDefault();
    console.log("password yg di input", passwordInput.value);
});
// });
