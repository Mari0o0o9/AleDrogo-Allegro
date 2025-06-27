var categories  = document.getElementById("buttonCategory");
var categoryList = document.getElementById("categoryList");

categories.addEventListener("click", () => {
    if (categoryList.style.display === "grid") {
        categoryList.style.display = "none";
    } else {
        categoryList.style.display = "grid";
    }
});

