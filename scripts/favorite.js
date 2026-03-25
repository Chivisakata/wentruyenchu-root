const addFav = document.getElementById("addFavoriteBtn");
const unFav = document.getElementById("unFavoriteBtn");
if(addFav){
    addFav.addEventListener("click", function() {
    const id = new URLSearchParams(window.location.search).get("id");
    fetch("../actions/Favorite.php?id=" + id)
    .then(() => {
            window.location.reload();
        });;
    });
}
if(unFav){
    unFav.addEventListener("click", function() {
    const id = new URLSearchParams(window.location.search).get("id");
    fetch("../actions/unFavorite.php?id=" + id)
    .then(() => {
            window.location.reload();
        });;
    });
}

