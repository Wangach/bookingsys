let myForm = document.querySelector('form#bookings-form');
let url = myForm.getAttribute('action');


myForm.onsubmit = function(event){
	event.preventDefault();
	//Since I do not expect empty values from the user
	let request = new XMLHttpRequest();
	request.open('POST', url);
	request.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
			//The request is successful, show the response from the server
		}
	}

}