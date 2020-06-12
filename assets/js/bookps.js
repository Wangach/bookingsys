let myForm = document.querySelector('form#bookings-form');
let url = myForm.getAttribute('action');

//REdirect Function
function redirectUser(){
	window.location = "../customer/index.php";
}

myForm.onsubmit = function(event){
	event.preventDefault();
	//Since I do not expect empty values from the user
	let request = new XMLHttpRequest();
	request.open('POST', url);
	request.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
			//The request is successful, show the response from the server
			let resp = document.querySelector('div.feedback');
			resp.classList.add('alert alert-success');
			resp.innerHTML = this.responseText;
		}else{
			let resp = document.querySelector('div.feedback');
			resp.classList.add('alert alert-error');
			resp.innerHTML = 'There Was An Error. Please Try Again!';
		}
	}
	// Retrieving the form data
    var formData = new FormData(myForm);
    //req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Sending the request to the server
    request.send(formData);

    setTimeout('redirectUser()', 8000)

}