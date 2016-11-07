function valida(){
 var nombre = document.getElementById("nombre").value;
 var apellido = document.getElementById("apellido").value;
 var cedula = document.getElementById("cedula").value;
 var edad = document.getElementById("edad").value;
 //var fecnac = document.getElementById("fecnac").value;
 var abc = /[A-Za-z]{3,30}/;	
 var num = /[0-9]{1,12}/;
 if(!abc.test(nombre)){
 	alert("Nombre con caracteres no admitidos");
 }else if(!abc.test(apellido)){
 	alert("Apellido con caracteres no admitidos");
 }else if(!num.test(cedula)){
 	alert("Cedula con caracteres no admitidos");
 }else if(!num.test(edad)){
 	alert("Edad con caracteres no admitidos");
 } else{
 	alert("Su form cumple y se esta enviando...");
 	document.getElementById('form').submit();
	}
}