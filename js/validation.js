function validateForm() {
  resetErrorMessages();

  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var email = document.getElementById("email");
  var mobile = document.getElementById("number");
  var employees = document.getElementById("employees");
  var state = document.getElementById("state");
  var seniority = document.getElementById("seniority");
  var functionField = document.getElementById("function");

  var isValid = true;

  if (fname.value.trim() === "") {
    displayErrorMessage(fname, "Please enter your first name");
    isValid = false;
  }

  if (lname.value.trim() === "") {
    displayErrorMessage(lname, "Please enter your last name");
    isValid = false;
  }

  if (email.value.trim() === "") {
    displayErrorMessage(email, "Please enter your email");
    isValid = false;
  } else if (!isValidEmail(email.value.trim())) {
    displayErrorMessage(email, "Please enter a valid email");
    isValid = false;
  }

  if (mobile.value.trim() === "") {
    displayErrorMessage(mobile, "Please enter your mobile number");
    isValid = false;
  } else if (!isValidMobileNumber(mobile.value.trim())) {
    displayErrorMessage(mobile, "Please enter a valid mobile number");
    isValid = false;
  }

  if (employees.value === "") {
    displayErrorMessage(employees, "Please select the number of employees");
    isValid = false;
  }

  if (state.value === "") {
    displayErrorMessage(state, "Please select your state");
    isValid = false;
  }

  if (seniority.value === "") {
    displayErrorMessage(seniority, "Please select your seniority");
    isValid = false;
  }

  if (functionField.value === "") {
    displayErrorMessage(functionField, "Please select your function");
    isValid = false;
  }

  return isValid;
}

function resetErrorMessages() {
  var errorMessages = document.querySelectorAll("#error-message");
  errorMessages.forEach(function (errorMessage) {
    errorMessage.textContent = "";
  });
}

function displayErrorMessage(field, message) {
  var errorField = document.createElement("div");
  errorField.className = "text-danger error-message";
  errorField.textContent = message;

  field.parentNode.appendChild(errorField);
}

function isValidEmail(email) {
  var emailRegex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
  return emailRegex.test(email);
}

function isValidMobileNumber(mobile) {
  var mobileRegex = /^[0-9]{10}$/;
  return mobileRegex.test(mobile);
}
