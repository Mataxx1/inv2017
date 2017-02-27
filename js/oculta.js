// JavaScript Document
function muestraIglesiasCristianas(){
	if(document.getElementById("iglesia").options[1].selected == true){
		document.getElementById("iglesia_cristiana_paciente").style.display="";
		}else{
			document.getElementById("iglesia_cristiana_paciente").style.display="none";
			}
	}