function chkName(event) {

// Get the target node of the event

  var myName = event.currentTarget;

// Test the format of the input name
//  Allow the spaces after the commas to be optional
//  Allow the period after the initial to be optional

  var pos = myName.value.search(/^\w{3,}$/);

  if (pos != 0) {
    alert("The name you entered (" + myName.value +
          ") is not in the correct form. \n" +
          "The correct username should have at least 3 characters.");
    myName.focus();
    myName.value ="";
	return false;
  }
}

// ********************************************************** //
// The event handler function for the phone number text box

function chkPassword(event) {

// Get the target node of the event

  var myPassword = event.currentTarget;

// Test the format of the input phone number

  var pos = myPassword.value.search(/^\w{8,12}$/);

  if (pos != 0) {
    alert("The password you entered (" + myPassword.value +
          ") is not in the correct form. \n" +
          "The correct password should be between 8 and 12 characters");
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
