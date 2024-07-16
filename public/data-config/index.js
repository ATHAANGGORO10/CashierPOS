document.addEventListener("DOMContentLoaded", function () {
    const togglePassword1 = document.querySelector('#togglePassword1');
    const password1 = document.querySelector('#exampleInputPassword');

    togglePassword1.addEventListener('click', function (e) {
        const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
        password1.setAttribute('type', type);

        this.querySelector('i').classList.toggle('bi-eye');
        this.querySelector('i').classList.toggle('bi-eye-slash');
    });

    const togglePassword2 = document.querySelector('#togglePassword2');
    const password2 = document.querySelector('#exampleRepeatPassword');

    togglePassword2.addEventListener('click', function (e) {
        const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
        password2.setAttribute('type', type);

        this.querySelector('i').classList.toggle('bi-eye');
        this.querySelector('i').classList.toggle('bi-eye-slash');
    });
});

function updateFileName(input) {
    const fileName = input.files[0].name;
    document.getElementById('file-name').textContent = 'Selected File: ' + fileName;
};