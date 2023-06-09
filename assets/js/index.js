const logout = document.getElementById("logout");
logout.addEventListener("click", flogout);

function flogout() {
    location.href = "./?logout=1";
}
