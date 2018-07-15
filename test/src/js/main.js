var year = document.getElementById("choice");
function empty(){
	if(year.value == "0"){
		year.classList.add("empty");
	} else {
		year.classList.remove("empty");
	};
	console.log(year);
};
year.addEventListener("change", empty);