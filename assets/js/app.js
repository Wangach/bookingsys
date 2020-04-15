let tFunc = function(){

	let burg = document.querySelector('div#cburger');
	let navItems = document.querySelector('li');
	let navigation = document.querySelector('ul.cnav-links');

	burg.onclick = function(){
		navigation.classList.toggle('cnav-active');
		navItems.classList.toggle('cnav-links-active');
	}
	//Hiding The Nav After Book PS
	let link = document.querySelector('a.book');
	link.onclick = function() {
		navigation.classList.remove('cnav-active');
		
	}
}();
