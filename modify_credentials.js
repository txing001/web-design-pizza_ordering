

function chkPassword(event) {

// Get the target node of the event

  var myPassword = event.currentTarget;

// Test the format of the input password

  var pos = myPassword.value.search(/^\w{8,12}$/);

  if (pos != 0) {
    alert("The password you entered (" + myPassword.value +
          ") is not in the correct form. \n" +
          "The correct password should be between 8 and 12 characters and contain only alphabetic and numeric characters.");
    myPassword.focus();
    myPassword.value="";
	
	return false;
  }
}


function chkPhone(event) {

// Get the target node of the event

  var myPhone = event.currentTarget;

// Test the format of the input phone number

  var pos = myPhone.value.search(/^\d{8}$/);

  if (pos != 0) {
    alert("The phone number you entered (" + myPhone.value +
          ") is not in the correct form. \n" +
          "The correct number should have 8 digits. \n" +
          "Please go back and fix your phone number");
    myPhone.focus();
    myPhone.value="";
	return false;
  }
}
