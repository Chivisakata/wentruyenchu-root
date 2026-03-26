const changeAvatar = document.getElementById("changeAvatar");
const avatarInput = document.getElementById("avatarInput");

changeAvatar.addEventListener("click", function(e) {
    avatarInput.click(); // mở file explorer
});
avatarInput.addEventListener("change", function() {
    document.getElementById("avatarForm").submit(); // gửi lên server
});