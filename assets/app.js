window.onload = ()=>{
    forVeryLargeDisplays();
    console.log(window.innerWidth);
}

window.onresize = ()=>{
    forVeryLargeDisplays();
}

particlesJS.load('particles-js', 'particles/particles.json', function() {
    console.log('callback - particles.js config loaded');
});

function forVeryLargeDisplays(){
	let ratio = 1.2+((window.innerWidth / 1280 * 1.2)-1.2) * -1;
    let circleRatio = 1+((window.innerWidth / 1280 * 1)-1) * -1;
    let losanges = document.querySelectorAll('header div');
    console.log(ratio);
    // for(i=0;i<losanges.length;i++){
    //     losanges[i].style.transform = 'rotate('+30+'deg) scale('+ratio+')';
    // }
    // document.querySelector('.description>article').style.transform = 'scale('+circleRatio+')';

}

/*⬇ Code from Useful Angle → https://usefulangle.com/post/75/typing-effect-animation-javascript-css ⬇*/

var _CONTENT = [ "a student", "a web developer", "a tech enthusiast", "a web designer"];

// Current sentence being processed
var _PART = 0;

// Character number of the current sentence being processed 
var _PART_INDEX = 0;

// Holds the handle returned from setInterval
var _INTERVAL_VAL;

// Element that holds the text
var _ELEMENT = document.querySelector(".changing>span");

// Cursor element 

// Implements typing effect
function Type() { 
	// Get substring with 1 characater added
	var text =  _CONTENT[_PART].substring(0, _PART_INDEX + 1);
	_ELEMENT.innerHTML = text;
	_PART_INDEX++;

	// If full sentence has been displayed then start to delete the sentence after some time
	if(text === _CONTENT[_PART]) {
		// Hide the cursor

		clearInterval(_INTERVAL_VAL);
		setTimeout(function() {
			_INTERVAL_VAL = setInterval(Delete, 50);
		}, 1000);
	}
}

// Implements deleting effect
function Delete() {
	// Get substring with 1 characater deleted
	var text =  _CONTENT[_PART].substring(0, _PART_INDEX - 1);
	_ELEMENT.innerHTML = text;
	_PART_INDEX--;

	// If sentence has been deleted then start to display the next sentence
	if(text === '') {
		clearInterval(_INTERVAL_VAL);

		// If current sentence was last then display the first one, else move to the next
		if(_PART == (_CONTENT.length - 1))
			_PART = 0;
		else
			_PART++;
		
		_PART_INDEX = 0;

		// Start to display the next sentence after some time
		setTimeout(function() {
			_INTERVAL_VAL = setInterval(Type, 100);
		}, 200);
	}
}

// Start the typing effect on load
_INTERVAL_VAL = setInterval(Type, 100);

/*⬆ Code from Useful Angle → https://usefulangle.com/post/75/typing-effect-animation-javascript-css ⬆*/