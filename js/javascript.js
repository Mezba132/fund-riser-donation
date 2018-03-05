function filetest(){
	var v=document.forms[0].file.value;
		if(v==""){
	document.getElementById("8").style.color="red";
	document.getElementById("8").innerHTML="Select file";	
}
else{
    document.getElementById("8").style.color="green";
	document.getElementById("8").innerHTML="ok";	
	}
}