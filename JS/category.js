var categories  = document.getElementById("buttonCategory");
var categoryItems = document.querySelectorAll(".category");

categories.addEventListener("click", () => {
    categoryItems.forEach((item) => {
        if (item.style.display === "none" || item.style.display === "") {
            item.style.display = "flex";
        } else {
            item.style.display = "none";
        }
    });
});