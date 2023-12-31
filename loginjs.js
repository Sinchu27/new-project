function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var errorMsg = document.getElementById("error-msg");
  
    errorMsg.innerHTML = ""; // Reset error message
  
    if (username.trim() === "" || password.trim() === "") {
      errorMsg.innerHTML = "Please fill in all fields.";
      return false;
    }
  
    // Additional validation rules can be added here
  
    return true;
  }
  