const addFav = document.getElementById("addFavoriteBtn");

addFav.addEventListener("click", function() {
    const id = new URLSearchParams(window.location.search).get("id");
    fetch("../actions/Favorite.php?id=" + id)
    .then(() => {
            window.location.reload();
        });;
});