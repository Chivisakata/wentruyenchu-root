const preBtn = document.querySelectorAll(".previous-btn");
const nextBtn = document.querySelectorAll(".next-btn");
//lấy thông tin chương và truyện
const params = new URLSearchParams(window.location.search);
let chap = parseInt(params.get("id_chuong"));
let id_truyen = parseInt(params.get("id_truyen"));

preBtn.forEach(btn => {
    btn.addEventListener("click", () => {
        const minChap = parseInt(btn.dataset.min);
        if (chap <= minChap) return;
        chap--;
        console.log(chap);
        window.location.href = `?id_truyen=${id_truyen}&id_chuong=${chap}`;
        chap = parseInt(params.get("id_chuong"));
    });
});
nextBtn.forEach(btn => {
    btn.addEventListener("click", () => {
        const maxChap = parseInt(btn.dataset.max);
        if (chap >= maxChap) return;
        chap++;
        console.log(chap);
        window.location.href = `?id_truyen=${id_truyen}&id_chuong=${chap}`;
        chap = parseInt(params.get("id_chuong"));
    });
});
