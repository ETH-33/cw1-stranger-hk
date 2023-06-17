function submitForm(event) {
    event.preventDefault(); // Prevent form submission

    // Retrieve form values
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    // Validate password and confirm password match
    if (password !== confirmPassword) {
      alert("Password and Confirm Password do not match!");
      return;
    }

    // Reset the form
    document.getElementById("loginForm").reset();
  }