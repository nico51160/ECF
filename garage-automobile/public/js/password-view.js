document.getElementById('showOldPassword').addEventListener('change', function() {
    var passwordField = document.getElementById('oldPassword');
    passwordField.type = this.checked ? 'text' : 'password';
});

document.getElementById('showNewPassword').addEventListener('change', function() {
    var passwordField = document.getElementById('newPassword');
    passwordField.type = this.checked ? 'text' : 'password';
});

document.getElementById('showConfirmPassword').addEventListener('change', function() {
    var passwordField = document.getElementById('confirmPassword');
    passwordField.type = this.checked ? 'text' : 'password';
});
