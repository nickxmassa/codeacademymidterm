function validateForm() {
	var name = document.forms['main-contact']['InputName'].value;
	if (name == null || name == '') {
		alert ('Please enter your name.');
		return false;
	}
	var email = document.forms['main-contact']['InputEmail'].value;
	var atpos = email.indexOf("@");
	var dotpos = email.indexOf(".");
	if (atpos < 1 || dotpos < atpos+2 || dotpos + 2 >= email.length) {
		alert ('Please enter a valid email address.');
		return false;
	}
	var message = document.forms['main-contact']['InputMessage'].value;
	if (message == null || message == '') {
		alert ('Please enter a message.');
		return false;
	}
}

function validateEmail() {
	var email = document.forms['main-contact']['InputEmail'].value;
	var atpos = email.indexOf("@");
	var dotpos = email.indexOf(".");
	if (atpos < 1 || dotpos < atpos+2 || dotpos + 2 >= email.length) {
		alert ('Please enter a valid email address.');
		return false;
	}
}

function validateMessage() {
	var message = document.forms['main-contact']['InputMessage'].value;
	if (message == null || message == '') {
		alert ('Please enter a message.');
		return false;
	}
}