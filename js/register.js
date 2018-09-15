
//groups all form validation functions together
function validate(form) {
	validateName(form.fullname.value);
	validateEmail(form.email.value);
	validatePassword(form.password.value);
	
};

//validates the name input
function validateName(name) {
	/*if (!(/^[a-zA-Z]+$/.test(name))) {
		alert("Name format is incorrect");
		return false;
	};
	*/
}

//validates the email input
function validateEmail(email) {
	if (!(/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/.test(email)))  {
		alert("Email format is incorrect");
		return false;
	};
}

//validates the password input
function validatePassword(password) {
	if (password == !(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/)) {
		alert("Password format is incorrect");
		return false;
	};
}


