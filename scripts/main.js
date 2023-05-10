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

submitButton.addEventListener('click', validateUsernameLength);

function validateUsernameLength(event) {
  event.preventDefault();

  const usernameValue = usernameInput.value.trim();

  if (usernameValue.length <= 3) {
    alert('A felhasználónév nem lehet rövidebb, mint 3 karakter!');
  } else if (usernameValue.length >= 15) {
    alert('A felhasználónév nem lehet hosszabb, mint 15 karakter!');
  } else {
    document.forms[0].submit();
  }
}

function validateForm() {
  if (passwordInput.value != confirmPasswordInput.value) {
    alert('A jelszavak nem egyeznek!');
    return false;
  }
}

passwordInput.addEventListener('blur', () => {
  if (validatePassword(passwordInput.value)) {
    submitButton.disabled = false;
  } else {
    alert(
      'A jelszónak tartalmaznia kell legalább egy kisbetűt, egy nagybetűt, egy számot, és minimum 8 karakter hosszúságúnak kell lennie!'
    );
    submitButton.disabled = true;
  }
});
