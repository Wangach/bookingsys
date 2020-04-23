let tFunc = function(){

	let burg = document.querySelector('div#cburger');
	let navItems = document.querySelector('li');
	let navigation = document.querySelector('ul.cnav-links');

	burg.onclick = function(){
		navigation.classList.toggle('cnav-active');
		navItems.classList.toggle('cnav-links-active');
	}
}();

//Dealing wih the form data
//Predefined form variables
let errors = false;
//Get The Form fields
let custName = document.getElementById('cn');
let custNum = document.getElementById('pn');
let custPassword = document.getElementById('pw');
let custPasswordVerify = document.getElementById('pwr');

//Error Classes
let errName = document.querySelector('div.error-name');
let errPhn = document.querySelector('div.error-phone');
let errPass = document.querySelector('div.error-pass1');
let errPass2 = document.querySelector('div.error-pass2');
let passVerify = document.querySelector('div.error-repeatpass');


//Check Fpr Errors On Blur
//Customer Name
custName.onblur = function(){
	checkCustomerName();
}

//Phone Number
custNum.onblur = function(){
	checkCustomerPhone();
}

//Password
custPassword.onblur = function(){
	checkCustomerPassword();
}
//Repeat Password
custPasswordVerify.onblur = function(){
	checkRepeatPassword();
	checkSimilarities();
}
//Define the Above Functions
function checkCustomerName(){
	if (custName.value == '') {
		errName.style = 'display: block';
		let errors = true;
	}else{
		errName.style = 'display: none';
		let errors = false;
	}
}

function checkCustomerPhone(){
	if (custNum.value == '') {
		errPhn.style = 'display: block';
		let errors = true;
	}else{
		errPhn.style = 'display: none';
		let errors = false;
	}
}

function checkCustomerPassword(){
	if (custPassword.value == '') {
		errPass.style = 'display: block;';
		let errors = true;
	}else{
		errPass.style = 'display: none;';
		let errors = false;
	}
}

function checkRepeatPassword(){
	if(custPasswordVerify.value == ''){
		errPass2.style = 'display: block;';
		errors = true;
	}else{
		errPass2.style = 'display: none;';
		errors = false;
	}
}

function checkSimilarities(){
	if (custPassword.value !== custPasswordVerify.value) {
		passVerify.style = 'display: block;';
		errors = true;
	}else{
		passVerify.style = 'display: none;';
		errors = false;
	}
}

let form = document.querySelector('form.registration-form');
form.onsubmit = function(event){
	event.preventDefault();
	checkCustomerName();
	checkCustomerPhone();
	checkCustomerPassword();
	checkRepeatPassword();

	if (errors == false) {
		//This Means The Form Is Error Free
		let url = form.getAttribute('action');
		//Send The Data To Database
		let req = new XMLHttpRequest;
		req.open('POST', url);
		req.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) {
				let resp = document.getElementById('server-response');
				resp.innerHTML = this.responseText;
			}else{
				let resp = document.getElementById('server-response');
				resp.innerHTML = 'There Has Been An Error In Processing Your Request!';
			}
		}
		// Retrieving the form data
	    var formData = new FormData(form);
	    //req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	    // Sending the request to the server
	    req.send(formData);
	    //Clear The Form fields
	    custName.value = '';
	    custNum.value = '';
	    custPassword.value = '';
	    custPasswordVerify.value = '';
	}else{

	}

}
