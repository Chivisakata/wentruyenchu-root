const form = document.getElementById("registerForm");
const usernameInput = document.getElementById("username");
const passwordInput = document.getElementById("password");
const confirmPasswordInput = document.getElementById("confirmPassword");

// reset lỗi khi người dùng nhập lại
usernameInput.addEventListener("input", ()=> usernameInput.setCustomValidity(""));
passwordInput.addEventListener("input", ()=> passwordInput.setCustomValidity(""));
confirmPasswordInput.addEventListener("input", ()=> confirmPasswordInput.setCustomValidity(""));

form.addEventListener("submit", function(e){
    
    const username = usernameInput.value.trim();
    const password = passwordInput.value.trim();
    const confirmPassword = confirmPasswordInput.value.trim(); 

    const usernameRegex = /^[a-zA-Z0-9_.]+$/;
    const passwordRegex = /^[a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?`~]+$/;

    if(!usernameRegex.test(username)){
        e.preventDefault();
        usernameInput.setCustomValidity("Username chỉ được chứa chữ, số, dấu _ và dấu .");
        usernameInput.reportValidity();
        return;
    }

    if(!passwordRegex.test(password)){
        e.preventDefault();
        passwordInput.setCustomValidity("Password chứa ký tự không hợp lệ");
        passwordInput.reportValidity();
        return;
    }
    if(password !== confirmPassword){
        e.preventDefault();
        confirmPasswordInput.setCustomValidity("Mật khẩu xác nhận không khớp");
        confirmPasswordInput.reportValidity();
        return;
}
});


