const signupForm = document.getElementById('sign-up-form');
const submitButton = document.getElementById('submit-button');
const passwordInput = document.getElementById('password-input');
const confirmPasswordInput = document.getElementById('confirm-password-input');

signupForm.addEventListener('input', () => {
  if (signupForm.checkValidity()) {
    submitButton.disabled = false;
  } else {
    submitButton.disabled = true;
  }
});

function validateForm() {
  if (passwordInput.value != confirmPasswordInput.value) {
    alert('Passwords do not match');
    return false;
  }
}
