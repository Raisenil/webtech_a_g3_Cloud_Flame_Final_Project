"use strict"


function ordersearch(){

	const name = document.getElementById('name').value;
	//VALIDATION LOGIC ....

	const xhttp = new XMLHttpRequest();
	/*xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.send();

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('myh1').innerHTML = this.responseText;
		}
	}*/

	xhttp.open('POST', '../model/mordersearch.php', true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.send('name='+name);

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}

function booksearch(){

	const name = document.getElementById('name').value;
	//VALIDATION LOGIC ....

	const xhttp = new XMLHttpRequest();
	/*xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.send();

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('myh1').innerHTML = this.responseText;
		}
	}*/

	xhttp.open('POST', '../model/mbooksearch.php', true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.send('name='+name);

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}

function foodsearch(){

	const name = document.getElementById('name').value;
	//VALIDATION LOGIC ....

	const xhttp = new XMLHttpRequest();
	/*xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.send();

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('myh1').innerHTML = this.responseText;
		}
	}*/

	xhttp.open('POST', '../model/mfoodsearch.php', true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.send('name='+name);

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}

function catagoriessearch(){

	const name = document.getElementById('name').value;
	//VALIDATION LOGIC ....

	const xhttp = new XMLHttpRequest();
	/*xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.send();

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('myh1').innerHTML = this.responseText;
		}
	}*/

	xhttp.open('POST', '../model/mcatagoriessearch.php', true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.send('name='+name);

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}