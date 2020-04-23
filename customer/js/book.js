let timeOfPlay = document.getElementById('psid');
let sth = document.getElementById('book-form');
timeOfPlay.onblur = function(){
	var request = new XMLHttpRequest;
	request.open('POST', '../customer/scripts/book.php');
	request.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
			alert(this.responseText);
		}
	}
	let fData = new FormData(sth);
	request.send(fData);
}