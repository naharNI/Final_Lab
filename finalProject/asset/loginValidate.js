function checkLogin() {
    var hasError = false;

    var nameInput = document.getElementById('name').value;
    if (nameInput.length < 5) {
        alert('Name must be at least 5 characters');
        hasError = true;
    }
    var passwordInput = document.getElementById('password').value;
    if (passwordInput.length < 3) {
        alert('Password must be at least 3 characters');
        hasError = true;
    }

    if (!hasError) {

    }

    return !hasError;
}

