var element = document.body;
const DARK_CLASS = "night";
const STORAGE_KEY = "tema";

function ubahwarnadark() {
  element.classList.add(DARK_CLASS);
  localStorage.setItem(STORAGE_KEY, "night");
}

function ubahwarnaday() {
  element.classList.remove(DARK_CLASS);
  localStorage.setItem(STORAGE_KEY, "day");
}

function loadSavedTheme() {
  var tema = localStorage.getItem(STORAGE_KEY);
  if (tema === "night") {
    ubahwarnadark();
  } else {
    ubahwarnaday();
  }
}
document.addEventListener("DOMContentLoaded", loadSavedTheme);
