const userItems = document.querySelector(".link-top");
const linkUser = document.querySelector(".link-user");

userItems.onclick = () => {
    linkUser.classList.toggle("active");
};

document.addEventListener("click", function (e) {
    if (!userItems.contains(e.target) && !linkUser.contains(e.target)) {
        linkUser.classList.remove("active");
    }
});

const enterprener = document.querySelector("#enterprener");
const linkEnterprener = document.querySelector(".login-enterprener");

enterprener.onclick = () => {
    linkEnterprener.classList.toggle("active");
};

document.addEventListener("click", function (e) {
    if (
        !enterprener.contains(e.target) &&
        !linkEnterprener.contains(e.target)
    ) {
        linkEnterprener.classList.remove("active");
    }
});

const menu = document.querySelector("#menu");
const back = document.querySelector(".back");
const navbarLink = document.querySelector(".navbar-link");

menu.onclick = () => {
    navbarLink.classList.toggle("active");
};

back.onclick = () => {
    navbarLink.classList.remove("active");
};

document.addEventListener("click", (e) => {
    if (!menu.contains(e.target) && !back.contains(e.target)) {
        navbarLink.classList.remove("active");
    }
});

const search = document.querySelector("#search");
const inputSearch = document.querySelector("#input-search");

document.addEventListener("click", (e) => {
    if (search.contains(e.target) && inputSearch.type == "hidden") {
        inputSearch.type = "text";
        search.style.display = "none";
    } else {
        inputSearch.type = "hidden";
        search.style.display = "block";
    }
});

document.addEventListener("click", (e) => {
    if (inputSearch.contains(e.target)) {
        inputSearch.type = "text";
        search.style.display = "none";
    }
});

// Register & Login
let toogleButton = document.querySelector("#toogle-password");
let toogleButton1 = document.querySelector("#toogle-password1");
const toogleButton2 = document.querySelector("#toogle-password2");

if (toogleButton == null && toogleButton1 == null) {
  toogleButton = 1;
  toogleButton1 = 1;
} else {
if (toogleButton1 !== null) {
    toogleButton1.addEventListener("click", () => {
        const eye1 = document.querySelector(".eye1");
        const eyeOff1 = document.querySelector(".eye-off1");
        const password1 = document.querySelector("#password1");
        if (password1.type === "password") {
            password1.type = "text";
            eye1.style.display = "none";
            eyeOff1.style.display = "block";
        } else {
            password1.type = "password";
            eye1.style.display = "block";
            eyeOff1.style.display = "none";
        }
    });

    toogleButton2.addEventListener("click", () => {
        const eye2 = document.querySelector(".eye2");
        const eyeOff2 = document.querySelector(".eye-off2");
        const password2 = document.querySelector("#password2");
        if (password2.type === "password") {
            password2.type = "text";
            eye2.style.display = "none";
            eyeOff2.style.display = "block";
        } else {
            password2.type = "password";
            eye2.style.display = "block";
            eyeOff2.style.display = "none";
        }
    });
} else {
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
    // formLogin.addEventListener("submit", (e) => {
    //     e.preventDefault();
    //     console.log("password yg di input", passwordInput.value);
    // });
    // register & Login End
}
}