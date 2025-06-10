var categories  = document.getElementById("categoryList");
var categoryItems = document.querySelectorAll(".categoryItems");

categories.addEventListener("click", () => {
    categoryItems.forEach((item) => {
        if (item.style.display === "none" || item.style.display === "") {
            item.style.display = "flex";
        } else {
            item.style.display = "none";
        }
    });
});