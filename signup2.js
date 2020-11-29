var customerNode = document.getElementById("username");
var passwordNode = document.getElementById("password");
var phoneNode = document.getElementById("phone_number");


customerNode.addEventListener("change", chkName, false);
passwordNode.addEventListener("change", chkPassword, false);
phoneNode.addEventListener("change", chkPhone, false);
