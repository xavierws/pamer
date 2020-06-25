var userProfile = document.querySelector("#userProfile");
var daftarKelas = document.querySelector("#daftarKelas");

document.getElementById("profile").onclick = function () {
    document.getElementById("profile").classList.add("mm-active");
    document.getElementById("kelas").classList.remove("mm-active");

    userProfile.style["display"] = "block";
    daftarKelas.style["display"] = "none";
};

document.getElementById("kelas").onclick = function () {
    document.getElementById("kelas").classList.add("mm-active");
    document.getElementById("profile").classList.remove("mm-active");

    daftarKelas.style["display"] = "block";
    userProfile.style["display"] = "none";
};

// function showProfile() {
//     userProfile.style["display"] = block;
//     daftarKelas.style["display"] = none;
// }

// function showKelas() {
//     userProfile.style["display"] = none;
//     daftarKelas.style["display"] = block;
// }
var drop = document.getElementById("drop");
drop.onclick = function () {
    drop.classList.add("show");
};
