const signupForm = document.getElementById('sign-up-form');
const submitButton = document.getElementById('submit-button');
const passwordInput = document.getElementById('password-input');
const confirmPasswordInput = document.getElementById('confirm-password-input');
const usernameInput = document.getElementById('username-input');
const emailInput = document.getElementById('email-input');
const loginButton = document.getElementById('login-button');

function validatePassword(password) {
  const regex = /^(?=.*\d)(?=.*[A-Z])[a-zA-Z\d]{8,}$/;
  return regex.test(password);
}

signupForm.addEventListener('input', () => {
  if (signupForm.checkValidity()) {
    submitButton.disabled = false;
  } else {
    submitButton.disabled = true;
  }
});

function validateForm() {
  if (passwordInput.value != confirmPasswordInput.value) {
    alert('A jelszavak nem egyeznek!');
    return false;
  }
}

passwordInput.addEventListener('focusout', () => {
  if (validatePassword(passwordInput.value)) {
    submitButton.disabled = false;
  } else {
    alert(
      'A jelszónak tartalmaznia kell legalább egy kisbetűt, egy nagybetűt, egy számot, és minimum 8 karakter hosszúságúnak kell lennie!'
    );
    submitButton.disabled = true;
  }
});
