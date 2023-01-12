// Form de cadastro.
function openFormSignUp() {
    document.getElementById("form-login").style.display = "none";
    document.getElementById("form-sign-up").style.display = "block";
}

function closeFormSignUp() {
    document.getElementById("form-sign-up").style.display = "none";
}

// Form de login
function openFormLogin() {
    document.getElementById("form-sign-up").style.display = "none";
    document.getElementById("form-login").style.display = "block";
}

function closeFormLogin() {
    document.getElementById("form-login").style.display = "none";
}

// Form de esqueceu senha
function openFormForgotPsw() {
    document.getElementById("form-login").style.display = "none";
    document.getElementById("form-forgot-psw").style.display = "block";
}

function closeFormForgotPsw() {
    document.getElementById("form-forgot-psw").style.display = "none";
}

// function openFormUpdateUser() {
//     document.getElementById("form-update-user").style.display = "none";
//     document.getElementById("form-update-user"),style.display = "block";
// }

// function closeFormUpdateUser() {
//     document.getElementById("form-update-user").style.display = "none";
// }