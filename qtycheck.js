function chkHp(){
   var qty = event.currentTarget;
	var pos = qty.value.search(/^[0-9]+$/);
	if (pos != 0){
		alert("Please Enter A Positive Number!");
		qty.focus();
		qty.value="";
		return false;
	}
}
function chkPp(){
   var qty = event.currentTarget;
	var pos = qty.value.search(/^[0-9]+$/);
	if (pos != 0){
		alert("Please Enter A Positive Number!");
		qty.focus();
		qty.value="";
		return false;
	}
}

function chkQf(){
   var qty = event.currentTarget;
	var pos = qty.value.search(/^[0-9]+$/);
	if (pos != 0){
		alert("Please Enter A Positive Number!");
		qty.focus();
		qty.value="";
		return false;
	}
}

function chkVl(){
   var qty = event.currentTarget;
	var pos = qty.value.search(/^[0-9]+$/);
	if (pos != 0){
		alert("Please Enter A Positive Number!");
		qty.focus();
		qty.value="";
		return false;
	}
}

function chkMp(){
   var qty = event.currentTarget;
	var pos = qty.value.search(/^[0-9]+$/);
	if (pos != 0){
		alert("Please Enter A Positive Number!");
		qty.focus();
		qty.value="";
		return false;
	}
}