const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function () {
    const type = password.getAttribute('type') == 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    this.classList.toggle('fa-eye-slash');
});

const urlParams = new URLSearchParams(window.location.search);
const error = urlParams.get('error');
const success = urlParams.get('success');
const msgBox = document.getElementById('messageBox');

if(error) {
    msgBox.textContent = decodeURIComponent(error);
    msgBox.classList.add('message-error');
    hideAfterDelay();
} else if(success) {
    msgBox.textContent = "Login Successful!";
    msgBox.classList.add('message-success');
    setTimeout(() => {
        window.location.href = "../home/home.php";
    }, 2000);
}

function hideAfterDelay() {
    setTimeout(() => {
        msgBox.classList.remove('message-error');
        msgBox.classList.remove('message-success');
        window.history.replaceState({}, document.title, window.location.pathname);
    }, 3000);
}

const resetModal = document.getElementById('resetModal');
const forgotLink = document.getElementById('forgotPassLink');
const closeBtn = document.getElementById('closeModal');
const cancelBtn = document.getElementById('cancelBtn');

forgotLink.addEventListener('click', (e) => {
    e.preventDefault();
    resetModal.style.display = 'flex';
});

closeBtn.addEventListener('click', () => {
    resetModal.style.display = 'none';
});

cancelBtn.addEventListener('click', () => {
    resetModal.style.display = 'none';
});

window.addEventListener('click', (e) => {
    if(e.target === resetModal) {
        resetModal.style.display = 'none';
    }
});