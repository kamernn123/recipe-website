document.addEventListener("DOMContentLoaded", function() {
    console.log("JS WORKING");
    const togglePassword = document.querySelector('#togglePassword');
    const passwordInput = document.querySelector('#password');

    const toggleConfirm = document.querySelector('#toggleConfirmPassword');
    const confirmInput = document.querySelector('#confirmPassword');

    function addToggle(btn, input) {
        if(btn && input) {
            btn.addEventListener('click', function() {
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                this.classList.toggle('fa-eye-slash');
            });
        }
    }

    addToggle(togglePassword, passwordInput);
    addToggle(toggleConfirm, confirmInput);

    const urlParams = new URLSearchParams(window.location.search);
    const error = urlParams.get('error');
    const success = urlParams.get('success');
    const msgBox = document.getElementById('messageBox');

    if(error) {
        msgBox.textContent = decodeURIComponent(error.replace(/\+/g, ''));
        msgBox.classList.add('message-error');
        hideAfterDelay();
    } else if(success) {
        msgBox.textContent = "Registration Successful!";
        msgBox.classList.add('message-success');
        setTimeout(() => {
            window.location.href = "../login/login.php";
        }, 3000);
    }

    function hideAfterDelay() {
        setTimeout(() => {
            msgBox.classList.remove('message-error');
            msgBox.classList.remove('message-success');
            window.history.replaceState({}, document.title, window.location.pathname);
        }, 3000);
    }
});