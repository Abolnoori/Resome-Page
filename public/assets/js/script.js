// script.js
window.addEventListener("load", function () {
    setTimeout(function () {
        const loaderContainer = document.getElementById("loader-container");
        loaderContainer.style.display = "none";
    }, 2500);
});

// انتخاب دکمه و آیکون
const toggleThemeBtn = document.getElementById("toggle-theme");
const themeIcon = document.getElementById("theme-icon");

// بررسی تم ذخیره‌شده در Local Storage
const savedTheme = localStorage.getItem("theme");
if (savedTheme) {
    document.body.classList.add(savedTheme);
    themeIcon.src =
        savedTheme === "dark-mode"
            ? "assets/img/icons/light-icon.svg"
            : "assets/img/icons/dark-icon.svg";
} else {
    // اگر تم ذخیره‌شده وجود نداشته باشد، تم پیش‌فرض را تنظیم کنید
    document.body.classList.add("dark-mode");

    localStorage.setItem("theme", "dark-mode");
}

// تغییر تم با کلیک روی دکمه
toggleThemeBtn.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode");
    document.body.classList.toggle("light-mode");

    // ذخیره تم در Local Storage
    const currentTheme = document.body.classList.contains("dark-mode")
        ? "dark-mode"
        : "light-mode";
    localStorage.setItem("theme", currentTheme);

    // تغییر مسیر تصویر آیکون
    themeIcon.src =
        currentTheme === "dark-mode"
            ? "assets/img/icons/light-icon.svg"
            : "assets/img/icons/dark-icon.svg";
});
