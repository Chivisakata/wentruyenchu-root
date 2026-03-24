setTimeout(() => {
    const msg = document.getElementsByClassName("success-message")[0];
    if (msg) msg.remove();
}, 3000);
setTimeout(() => {
    const msg = document.getElementsByClassName("error-message")[0];
    if (msg) msg.remove();
}, 3000);