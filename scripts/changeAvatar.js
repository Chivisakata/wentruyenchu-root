const changeAvatar = document.getElementById("changeAvatar");
const avatarInput = document.getElementById("avatarInput");

changeAvatar.addEventListener("click", function(e) {
    avatarInput.click(); // mở file explorer
});
avatarInput.addEventListener("change", function() {
    const file = this.files[0];

    if (!file || file.type !== "image/jpeg") {
        alert("Chỉ được chọn file JPG thôi!");
        this.value = "";
        return;
    }
    document.getElementById("avatarForm").submit(); // gửi lên server
});