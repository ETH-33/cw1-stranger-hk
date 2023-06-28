function submitForm(event) {
  event.preventDefault(); // Prevent form submission

  // Retrieve form values
  const firstName = document.getElementById('firstName').value;
  const lastName = document.getElementById('lastName').value;
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirmPassword').value;

  // Validate form fields
  const errors = [];

  if (!firstName) {
    errors.push('Please enter your first name.');
  }

  if (!lastName) {
    errors.push('Please enter your last name.');
  }

  if (!email) {
    errors.push('Please enter your email.');
  } else {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.match(emailRegex)) {
      errors.push('Invalid email format.');
    }
  }

  if (!password) {
    errors.push('Please enter a password.');
  }

  if (!confirmPassword) {
    errors.push('Please confirm your password.');
  }

  if (password !== confirmPassword) {
    errors.push('Passwords do not match.');
  }

  // Display validation errors if any
  if (errors.length > 0) {
    showFlashMessage(errors);
    return;
  }

  // Submit the form if all validations pass
  document.getElementById('signupForm').submit();
}

function showFlashMessage(messages) {
  const flashMessage = document.getElementById('flashMessage');
  flashMessage.innerHTML = ''; // Clear previous messages

  messages.forEach((message) => {
    const errorElement = document.createElement('p');
    errorElement.textContent = message;
    flashMessage.appendChild(errorElement);
  });

  flashMessage.style.display = 'block';

  setTimeout(function() {
    flashMessage.style.display = 'none';
  }, 3000); // Hide the message after 3 seconds (adjust as needed)
}