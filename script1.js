console.log("This is my portforlio web page")


//popup loading message
var hours =9
	if (hours<12){
		alert("Good Morning!")
	}
	else{
		alert("Good Afternoon!")
	}
//****************************************************************

//Smooth Scrolling
document.addEventListener('DOMContentLoaded',Function(){
																		//Add event listner to navigation links
	const navLinks = document.querySelectorAll('nav ul li a');
	navLinks.forEach(function(Link)){
		link.addEventListener('click',function(event)){
			event.preventDefault(); 									//prevent Default anchor behavior
			const targetId = this.getAttribute('href').substring(1); 	//Get the target element id
			const targetElement = document.getElementById(targetId); 	//Get the target element
			if(targetElement){
			targetElement.scrollInfoView({behavior: 'smooth'}); 	//Scroll to the target element smoothly
			}
		};
	};
});
//*****************************************************************

//View all Button
$(document).ready(function(){
	$("button").click((function){
		$("p").toggle();
	};
});
//*****************************************************************

//Automatic scrolling slide bar
var wrapper = document.querySelector('.wrapper');
wrapper.addEventListener('mouseover', function () {
  this.style.animationPlayState = 'paused';
});

wrapper.addEventListener('mouseout', function () {
  this.style.animationPlayState = 'running';
});
//****************************************************************

//Validation Form
function validateForm(){
	let x = document.forms["myForm"]["fname"].value;
	if(x == ""){
		alert("Name must be filled out");
		return false;
	}
}
//****************************************************************

//Hover Image
function ChangeImage(imageNumber, imgElement) {
            if (imageNumber === 1) {
                imgElement.src = "images/h2.jpeg";
            } else if (imageNumber === 2) {
                imgElement.src = "images/h1.jpeg";
            }

//****************************************************************

//Contact us form*************************************************
const showFormButton = document.getElementById("showFormButton");
const formContainer = document.getElementById("formContainer");

showFormButton.addEventListener("click",() => {
	formContainer.style.display = "block";
});

//login & register form*******************************************
let signup = document.querySelector(".signup");
let login = document.querySelector(".login");
let slider = document.querySelector(".slider");
let formSection = document.querySelector(".form-section");

signup.addEventListener("click", () => {
	slider.classList.add("moveslider");
	formSection.classList.add("form-section-move");
});

login.addEventListener("click", () => {
	slider.classList.remove("moveslider");
	formSection.classList.remove("form-section-move");
});
