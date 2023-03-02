

// Get the modal
var modal = document.getElementById("chane-pass-modal");

// Get the button that opens the modal
var btn = document.getElementById("open-modal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the change password button
changeBtn = document.getElementById("change-password");

// Get the user password
password = document.getElementById("new-password");

// Get the re-entered password
repeatedPassword = document.getElementById("repeat-new-password");

// Weak password message
weakPassword = document.getElementById("weak-password");
passwordDetails = document.getElementById("password-details");

changeBtn.addEventListener("click", (event) => {
    event.preventDefault();
    validatePassword();
});

function validatePassword() {
  //Get Regular expressionf for passwrod
  let passwordRegEx = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W])[A-Za-z\d\W]{8,}$/;
  let passwordValue = password.value.trim();
  let repeatedPasswordValue = repeatedPassword.value.trim();

  if ((passwordRegEx.test(passwordValue) != true)) {
    password.style.border = "2px solid red";
    weakPassword.style.visibility = "visible";
    passwordDetails.style.visibility = "visible";
  }
  else if (passwordValue != repeatedPasswordValue) {
    repeatedPasswordValue.
    alert("password mismatch");
  }
  else if (passwordValue.length == 0) {
    password.style.border = "2px solid red";
    weakPassword.style.visibility = "visible";
    passwordDetails.style.visibility = "visible";
  }
  else {
    password.style.border = "2px solid green";
    window.location.href = "login.html"; 
    alert("Password changed successfully");
  }
}

