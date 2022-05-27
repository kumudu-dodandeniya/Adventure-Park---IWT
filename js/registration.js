
/*slide show*/

var images = []
var x = 0;
var time = 2000;

images[0] = '../image/rafting.jpg'
images[1] = '../image/3.jpg'
images[2] = '../image/safety.jpg'
images[3] = '../image/demo.jpg'


function slideShow(){
	document.slide.src = images[x];
	
	if (x<images.length-1){
		x= x+1;
	}
	else{
		x = 0;
	}
	setTimeout("slideShow()",time)
}

window.onload = slideShow;




/*form*/


function checkPassword(){
	if(document.getElementById("pwd").value != document.getElementById("rpwd").value){
		 alert("Password is incorrect");
		return false;
	}
}

