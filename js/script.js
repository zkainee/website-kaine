//  Author: Kaine van Ommeren
//  Date: February 2023
//  File: script.js

function toggleView() {
    var toggleID = document.getElementById("toggleWindow");
    if (toggleID.style.display === "none") {
        toggleID.style.display = "block";
    } else {
        toggleID.style.display = "none";
    }
}
function openTab() {
    var openID = document.getElementById("openTab");
    if (openID.style.display === "none") {
        openID.style.display = "none";
    } else {
        openID.style.display = "block";
    }
}
// function toggleNavbarResponsive() {
//     var navExpand = document.getElementsByClassName("navbarExpand");
//     if (navExpand.style.display === "fles !important" && navExpand.style.flexBasis === "auto") {
//         navExpand.hidden;
//     }
// }
