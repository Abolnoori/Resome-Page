// script.js
document.getElementById("toggle-theme").addEventListener("click", function () {
  document.body.classList.toggle("dark-mode");
  document.body.classList.toggle("light-mode");

  // تغییر مسیر تصویر
  const themeIcon = document.getElementById("toggle-theme");
  if (document.body.classList.contains("dark-mode")) {
    themeIcon.src = "assets/img/icons/light-icon.svg";
  } else {
    themeIcon.src = "assets/img/icons/dark-icon.svg";
  }
});





// script.js
window.addEventListener("load", function () {
    setTimeout(function () {
        const loaderContainer = document.getElementById("loader-container");
        loaderContainer.style.display = "none";
    }, 2500);
});








// ابتدا حالت روشن را تنظیم کنید
document.body.classList.add("light-mode");



























