// JavaScript Document
function validaAltaPastor(){
	if(document.getElementById("nombre").value.length == 0 && document.getElementById("nombre").value==""){
		alert("Debe proporcionar el nombre del pastor");
		document.getElementById("nombre").focus();
		return false;
		}
	if(document.getElementById("apaterno").value.length == 0 && document.getElementById("apaterno").value==""){
		alert("Debe proporcionar el apellido paterno del pastor");
		document.getElementById("apaterno").focus();
		return false;
		}
	if(document.getElementById("amaterno").value.length == 0 && document.getElementById("amaterno").value==""){
		alert("Debe proporcionar el apellido materno del pastor");
		document.getElementById("amaterno").focus();
		return false;
	if(document.getElementById("domicilio").value.length == 0 && document.getElementById("domicilio").value==""){
		alert("Debe proporcionar el domicilio del pastor");
		document.getElementById("domicilio").focus();
		return false;
		}
	if(document.getElementById("municipio").value.length == 0 && document.getElementById("municipio").value==""){
		alert("Debe proporcionar el municipio de procedencia del pastor");
		document.getElementById("nombre").focus();
		return false;
		}
	if(document.getElementById("localidad").value.length == 0 && document.getElementById("localidad").value==""){
		alert("Debe proporcionar la localidad donde reside del pastor");
		document.getElementById("localidad").focus();
		return false;
		}
	if(document.getElementById("fech_nac").value.length == 0 && document.getElementById("fech_nac").value==""){
		alert("Debe proporcionar la fecha de nacimiento del pastor");
		document.getElementById("fech_nac").focus();
		return false;
		}
	
	//cajas de seleccion
	if(document.getElementById("estado").options[0].selected == true){
		alert("Por favor, indique el estado en el que reside el pastor");
		document.getElementById("estado").focus();
		return false;
		}
	if(document.getElementById("iglesia").options[0].selected == true){
		alert("Por favor, indique la iglesia de procedecia del pastor");
		document.getElementById("iglesia").focus();
		return false;
		}
		}
	return true;
	}
	
	
	//validación de la iglesia cristiana
	
	function validaIglesiaCristiana(){
		if(document.getElementById("nombre_iglesia_c").value.length == 0 && document.getElementById("nombre_iglesia_c").value==""){
		alert("Debe proporcionar el nombre de la iglesia");
		document.getElementById("nombre_iglesia_c").focus();
		return false;
		}
		if(document.getElementById("municipio").value.length == 0 && document.getElementById("municipio").value==""){
		alert("Debe proporcionar el municipio donde se encuentra la iglesia cristiana");
		document.getElementById("municipio").focus();
		return false;
		}
		if(document.getElementById("localidad").value.length == 0 && document.getElementById("localidad").value==""){
		alert("Debe proporcionar la localidad donde se encuentra la iglesia cristiana");
		document.getElementById("localidad").focus();
		return false;
		}
		if(document.getElementById("domicilio").value.length == 0 && document.getElementById("domicilio").value==""){
		alert("Debe proporcionar el domicilio de la iglesia");
		document.getElementById("domicilio").focus();
		return false;
		}
		if(document.getElementById("telefono").value.length == 0 && document.getElementById("telefono").value==""){
		alert("Debe proporcionar el número teléfonico de la iglesia");
		document.getElementById("telefono").focus();
		return false;
		}
		
		if(document.getElementById("estado").options[0].selected == true){
		alert("Por favor, indique el estado en el que se encuentra la iglesia");
		document.getElementById("estado").focus();
		return false;
		}
		
		return true;
		}
		
function validaIglesiaNoCristiana(){
	
	if(document.getElementById("iglesia").value.length == 0 && document.getElementById("iglesia").value==""){
		alert("Escriba el nombre de la iglesia no cristiana");
		document.getElementById("iglesia").focus();
		return false;
		}
	
	return true;
	}
	
function validarColaborador(){
	if(document.getElementById("nombre").value.length == 0 && document.getElementById("nombre").value==""){
		alert("El campo del nombre del colaborador es obligatorio");
		document.getElementById("nombre").focus();
		return false;
		}
		if(document.getElementById("apaterno").value.length == 0 && document.getElementById("apaterno").value==""){
		alert("Escriba el apellido paterno del colaborador");
		document.getElementById("apaterno").focus();
		return false;
		}
		if(document.getElementById("amaterno").value.length == 0 && document.getElementById("amaterno").value==""){
		alert("Escriba el apellido materno del colaborador");
		document.getElementById("amaterno").focus();
		return false;
		}
	if(document.getElementById("telefono").value.length == 0 && document.getElementById("telefono").value==""){
		alert("Escriba el número de teléfono del colaborador");
		document.getElementById("telefono").focus();
		return false;
		}
	if(document.getElementById("municipio").value.length == 0 && document.getElementById("municipio").value==""){
		alert("Escriba el municipio donde reside el colaborador");
		document.getElementById("municipio").focus();
		return false;
		}
		
		if(document.getElementById("localidad").value.length == 0 && document.getElementById("localidad").value==""){
		alert("Escriba la localidad de procedencia del colaborador");
		document.getElementById("localidad").focus();
		return false;
		}
		
		if(document.getElementById("domicilio").value.length == 0 && document.getElementById("domicilio").value==""){
		alert("Escriba el domicilio del colaborador");
		document.getElementById("domicilio").focus();
		return false;
		}
	if(document.getElementById("fech_nac").value.length == 0 && document.getElementById("fech_nac").value==""){
		alert("Indique la fecha de nacimiento del colaborador");
		document.getElementById("fech_nac").focus();
		return false;
		}
		
	if(document.getElementById("estado").options[0].selected == true){
		alert("Por favor, indique el estado en el que vive el colaborador");
		document.getElementById("estado").focus();
		return false;
		}
		
		if(document.getElementById("tipo").options[0].selected == true){
		alert("Por favor, indique el tipo de colaborador que está dando de alta");
		document.getElementById("tipo").focus();
		return false;
		}
		
		return true;
	}
	
function validaTipoColaborador(){
	if(document.getElementById("tipo_colaborador").value.length == 0 && document.getElementById("tipo_colaborador").value==""){
		alert("Éste campo es obligatorio");
		document.getElementById("tipo_colaborador").focus();
		return false;
		}
	return true;
	}
	
function validaEditarIglesiaNoCristiana(){
	if(document.getElementById("nomb_iglesianc").value.length == 0 && document.getElementById("nomb_iglesianc").value==""){
		alert("Éste campo es obligatorio");
		document.getElementById("nomb_iglesianc").focus();
		return false;
		}
	return true;
	}
	
function validaEditarIglesiaCristiana(){
	if(document.getElementById("nombre_iglesiac").value.length == 0 && document.getElementById("nombre_iglesiac").value==""){
		alert("El nombre para la iglesia no puede quedar vacío");
		document.getElementById("nombre_iglesiac").focus();
		return false;
		}
	if(document.getElementById("domicilio").value.length == 0 && document.getElementById("domicilio").value==""){
		alert("El domicilio para la iglesia no puede quedar vacío");
		document.getElementById("domicilio").focus();
		return false;
		}
	if(document.getElementById("municipio").value.length == 0 && document.getElementById("municipio").value==""){
		alert("El municipio para la iglesia no puede quedar vacío");
		document.getElementById("municipio").focus();
		return false;
		}
	if(document.getElementById("telefono").value.length == 0 && document.getElementById("telefono").value==""){
		alert("El número de teléfono para la iglesia no puede quedar vacío");
		document.getElementById("telefono").focus();
		return false;
		}
	return true;
	}
	
function validaEditarPastor(){
	if(document.getElementById("nombre").value.length == 0 && document.getElementById("nombre").value==""){
		alert("El nombre del pastor no puede quedar vacío");
		document.getElementById("nombre").focus();
		return false;
		}
	if(document.getElementById("apaterno").value.length == 0 && document.getElementById("apaterno").value==""){
		alert("El apellido paterno del pastor no puede quedar vacío");
		document.getElementById("apaterno").focus();
		return false;
		}
		
	if(document.getElementById("amaterno").value.length == 0 && document.getElementById("amaterno").value==""){
		alert("El apellido materno del pastor no puede quedar vacío");
		document.getElementById("amaterno").focus();
		return false;
		}
		
	if(document.getElementById("domicilio").value.length == 0 && document.getElementById("domicilio").value==""){
		alert("El domicilio del pastor no puede quedar vacío");
		document.getElementById("domicilio").focus();
		return false;
		}
	if(document.getElementById("municipio").value.length == 0 && document.getElementById("municipio").value==""){
		alert("El municipio del pastor no puede quedar vacío");
		document.getElementById("municipio").focus();
		return false;
		}
	if(document.getElementById("localidad").value.length == 0 && document.getElementById("localidad").value==""){
		alert("La localidad del pastor no puede quedar vacía");
		document.getElementById("localidad").focus();
		return false;
		}
	if(document.getElementById("fech_nac").value.length == 0 && document.getElementById("fech_nac").value==""){
		alert("La fecha de nacimiento del pastor no puede quedar vacía");
		document.getElementById("fech_nac").focus();
		return false;
		}
	return true;
	
	
	}
	
function validaAltaEquipo(){
	if(document.getElementById("nombre").value.length == 0 && document.getElementById("nombre").value==""){
		alert("El nombre del equipo es obligatorio");
		document.getElementById("nombre").focus();
		return false;
		}
	if(document.getElementById("descripcion").value.length == 0 && document.getElementById("descripcion").value==""){
		alert("La descripción del equipo es necesaria.");
		document.getElementById("descripcion").focus();
		return false;
		}
	if(document.getElementById("tipo_equipo").options[0].selected == true){
		alert("Por favor, indique el tipo de equipo que está dando de alta");
		document.getElementById("tipo_equipo").focus();
		return false;
		}
	if(document.getElementById("anio").options[0].selected == true){
		alert("Por favor, indique el año en el que se adquirió el equipo");
		document.getElementById("anio").focus();
		return false;
		}
	
	
	return true;
	}
	
function validaAltaCategoriaEquipo(){
	if(document.getElementById("categoria").value.length == 0 && document.getElementById("categoria").value==""){
		alert("El nombre de la categoría es obligatorio.");
		document.getElementById("categoria").focus();
		return false;
		}
	return true;
	}
	
// validar alta padecimiento

function validaAltaPadecimiento(){
	if(document.getElementById("especialidad").value.length == 0 && document.getElementById("especialidad").value==""){
		alert("El nombre de la especialidad es obligatorio.");
		document.getElementById("especialidad").focus();
		return false;
		}
	return true;
	}
	
function validaAltaPaciente(){
	if(document.getElementById("nombre").value.length == 0 && document.getElementById("nombre").value==""){
		alert("El nombre del paciente es obligatorio.");
		document.getElementById("nombre").focus();
		return false;
		}
	if(document.getElementById("apaterno").value.length == 0 && document.getElementById("apaterno").value==""){
		alert("El apellido paterno del paciente es obligatorio.");
		document.getElementById("apaterno").focus();
		return false;
		}
	if(document.getElementById("amaterno").value.length == 0 && document.getElementById("amaterno").value==""){
		alert("El apellido materno del paciente es obligatorio.");
		document.getElementById("amaterno").focus();
		return false;
		}
	if(document.getElementById("telefono").value.length == 0 && document.getElementById("telefono").value==""){
		alert("El teléfono del paciente es obligatorio.");
		document.getElementById("telefono").focus();
		return false;
		}
	if(document.getElementById("domicilio").value.length == 0 && document.getElementById("domicilio").value==""){
		alert("El domicilio del paciente es obligatorio.");
		document.getElementById("domicilio").focus();
		return false;
		}
	if(document.getElementById("municipio").value.length == 0 && document.getElementById("municipio").value==""){
		alert("El municipio donde habita el paciente es obligatorio.");
		document.getElementById("municipio").focus();
		return false;
		}
	if(document.getElementById("localidad").value.length == 0 && document.getElementById("localidad").value==""){
		alert("La localidad donde habita el paciente es obligatoria.");
		document.getElementById("apaterno").focus();
		return false;
		}
		
	//ahora los selects
	if(document.getElementById("sexo").options[0].selected == true){
		alert("Por favor, indique el género del paciente");
		document.getElementById("sexo").focus();
		return false;
		}
	if(document.getElementById("estado").options[0].selected == true){
		alert("Por favor, indique el estado donde habita el paciente");
		document.getElementById("estado").focus();
		return false;
		}
	
	if(document.getElementById("iglesia").options[0].selected == true){
		alert("Por favor, indique la iglesia a la que pertenece el paciente");
		document.getElementById("iglesia").focus();
		return false;
		}
	if(document.getElementById("diagnostico").options[0].selected == true){
		alert("Por favor, indique el diagnóstico por lo que ingresa el paciente");
		document.getElementById("diagnostico").focus();
		return false;
		}
	return true;
	}


// validar la alta del médico

function validaAltaMedico(){
	if(document.getElementById("cedula").value.length == 0 && document.getElementById("cedula").value==""){
		alert("Debe ingresarse la cédula o IFE del médico.");
		document.getElementById("cedula").focus();
		return false;
		}
	if(document.getElementById("nombre").value.length == 0 && document.getElementById("nombre").value==""){
		alert("El nombre del médico es obligatorio.");
		document.getElementById("nombre").focus();
		return false;
		}
	if(document.getElementById("apaterno").value.length == 0 && document.getElementById("apaterno").value==""){
		alert("El apellido paterno del médico es obligatorio.");
		document.getElementById("apaterno").focus();
		return false;
		}
	if(document.getElementById("amaterno").value.length == 0 && document.getElementById("amaterno").value==""){
		alert("El apellido materno del médico es obligatorio.");
		document.getElementById("amaterno").focus();
		return false;
		}
	if(document.getElementById("usuario").value.length == 0 && document.getElementById("usuario").value==""){
		alert("Debe ingresar un nombre de usuario para el médico, con éste usuario iniciará sesión en el sistema.");
		document.getElementById("usuario").focus();
		return false;
		}
	if(document.getElementById("pass").value.length == 0 && document.getElementById("pass").value==""){
		alert("Debe ingresar una contraseña para el médico, con ésta contraseña iniciará sesión en el sistema.");
		document.getElementById("pass").focus();
		return false;
		}
	if(document.getElementById("calle").value.length == 0 && document.getElementById("calle").value==""){
		alert("El domicilio del médico es un campo obligatorio");
		document.getElementById("calle").focus();
		return false;
		}
	if(document.getElementById("ciudad").value.length == 0 && document.getElementById("ciudad").value==""){
		alert("El municipio donde habita el médico es un campo obligatorio");
		document.getElementById("ciudad").focus();
		return false;
		}
	if(document.getElementById("colonia").value.length == 0 && document.getElementById("colonia").value==""){
		alert("La colonia donde habita el médico es un campo obligatorio");
		document.getElementById("colonia").focus();
		return false;
		}
	if(document.getElementById("telefono").value.length == 0 && document.getElementById("telefono").value==""){
		alert("El número de teléfono del médico es un campo obligatorio");
		document.getElementById("telefono").focus();
		return false;
		}
	if(document.getElementById("estado").options[0].selected == true){
		alert("Por favor, indique el estado de procedencia del médico");
		document.getElementById("estado").focus();
		return false;
		}
	
	return true;
	}
	
//validar alta de acompañantes

function validaAltaAcompaniante(){
	if(document.getElementById("nombre").value.length == 0 && document.getElementById("nombre").value==""){
		alert("El nombre del acompañante es un campo obligatorio");
		document.getElementById("nombre").focus();
		return false;
		}
	if(document.getElementById("apaterno").value.length == 0 && document.getElementById("apaterno").value==""){
		alert("El apellido paterno del acompañante es un campo obligatorio");
		document.getElementById("apaterno").focus();
		return false;
		}
	if(document.getElementById("amaterno").value.length == 0 && document.getElementById("amaterno").value==""){
		alert("El apellido materno del acompañante es un campo obligatorio");
		document.getElementById("amaterno").focus();
		return false;
		}
	if(document.getElementById("municipio").value.length == 0 && document.getElementById("municipio").value==""){
		alert("El municipio en el que reside el acompañante es un campo obligatorio");
		document.getElementById("municipio").focus();
		return false;
		}
	if(document.getElementById("localidad").value.length == 0 && document.getElementById("localidad").value==""){
		alert("La localidad en la que reside el acompañante es un campo obligatorio");
		document.getElementById("localidad").focus();
		return false;
		}
	if(document.getElementById("domicilio").value.length == 0 && document.getElementById("domicilio").value==""){
		alert("El domicilio en el que reside el acompañante es un campo obligatorio");
		document.getElementById("domicilio").focus();
		return false;
		}
	if(document.getElementById("estado").options[0].selected == true){
		alert("Por favor, indique el estado de procedencia del acompañante");
		document.getElementById("estado").focus();
		return false;
		}	
	if(document.getElementById("evangelio").options[0].selected == true){
		alert("Ésta pregunta es obligatoria");
		document.getElementById("evangelio").focus();
		return false;
		}
	if(document.getElementById("desicion").options[0].selected == true){
		alert("Ésta pregunta es obligatoria");
		document.getElementById("desicion").focus();
		return false;
		}
	if(document.getElementById("id_paciente").options[0].selected == true){
		alert("Por favor, indique el paciente al que está acompañando");
		document.getElementById("id_paciente").focus();
		return false;
		}
	return true;
	}
//validar la alta de diagnósticos

function validaAltaDiagnostico(){
	if(document.getElementById("diagnostico").value.length == 0 && document.getElementById("diagnostico").value==""){
		alert("El nombre del diagnóstico es un campo obligatorio");
		document.getElementById("diagnostico").focus();
		return false;
		}
	return true;
	}
	
	//validaciones para grupo
	
function validaNuevoGrupo(){
	if(document.getElementById("nombre_grupo").value.length == 0 && document.getElementById("nombre_grupo").value==""){
		alert("El nombre del grupo es un campo obligatorio");
		document.getElementById("nombre_grupo").focus();
		return false;
		}
	if(document.getElementById("id_encargado").options[0].selected == true){
		alert("Por favor, indique la persona que estará encargada del grupo");
		document.getElementById("id_encargado").focus();
		return false;
		}
	if(document.getElementById("fecha").value.length == 0 && document.getElementById("fecha").value==""){
		alert("Indique la fecha y la hora en la que se impartirá el grupo");
		document.getElementById("fecha").focus();
		return false;
		}
	return true;
	}

function validaInscripcionGrupo(){
	if(document.getElementById("id_paciente").options[0].selected == true){
		alert("Por favor, indique la persona que se va a inscribir a un grupo");
		document.getElementById("id_paciente").focus();
		return false;
		}
	if(document.getElementById("id_grupo").options[0].selected == true){
		alert("Por favor, indique el grupo al que se va a inscribir");
		document.getElementById("id_grupo").focus();
		return false;
		}
	return true;
	}
function validaInscripcionAcompGrupo(){
	if(document.getElementById("id_acomp").options[0].selected == true){
		alert("Por favor, indique la persona que se va a inscribir a un grupo");
		document.getElementById("id_acomp").focus();
		return false;
		}
	if(document.getElementById("id_grupo").options[0].selected == true){
		alert("Por favor, indique el grupo al que se va a inscribir");
		document.getElementById("id_grupo").focus();
		return false;
		}
	return true;
	}
	
function validaAltaDifusion(){
	if(document.getElementById("difusion").value.length == 0 && document.getElementById("difusion").value==""){
		alert("El nombre del medio de difusión es obligatorio");
		document.getElementById("difusion").focus();
		return false;
		}
		return true;
	}
function validaAltaUsuario(){
	if(document.getElementById("ife").value.length == 0 && document.getElementById("ife").value==""){
		alert("Es necesario el número de IFE o CURP para identificar al usuario");
		document.getElementById("ife").focus();
		return false;
		}
	if(document.getElementById("nombre").value.length == 0 && document.getElementById("nombre").value==""){
		alert("El nombre es obligatorio");
		document.getElementById("nombre").focus();
		return false;
		}
	if(document.getElementById("apaterno").value.length == 0 && document.getElementById("apaterno").value==""){
		alert("El apellido paterno es obligatorio");
		document.getElementById("apaterno").focus();
		return false;
		}
	if(document.getElementById("amaterno").value.length == 0 && document.getElementById("amaterno").value==""){
		alert("El apellido materno es obligatorio");
		document.getElementById("amaterno").focus();
		return false;
		}
	if(document.getElementById("usuario").value.length == 0 && document.getElementById("usuario").value==""){
		alert("El nombre de usuario es obligatorio porque el usuario ingresara al sistema con él.");
		document.getElementById("usuario").focus();
		return false;
		}
	if(document.getElementById("pass").value.length == 0 && document.getElementById("pass").value==""){
		alert("La contraseña es obligatoria porque el usuario ingresara al sistema con ella.");
		document.getElementById("pass").focus();
		return false;
		}
	if(document.getElementById("tipo").options[0].selected == true){
		alert("Por favor, indique el tipo de usuario que está dando de alta");
		document.getElementById("tipo").focus();
		return false;
		}
	return true;
	}
	
function validacionesCita(){
	if(document.getElementById("id").value.length == 0 && document.getElementById("id").value==""){
		alert("Escriba el id del paciente.");
		document.getElementById("id").focus();
		}
		
	if(document.getElementById("especialidad").options[0].selected == true){
		alert("Por favor, seleccione la especialidad para mostrarle a los médicos que pueden atender.");
		document.getElementById("especialidad").focus();

		}
		
	if(document.getElementById("medico").options[0].selected == true){
		alert("Por favor, indique qué médico atenderá la cita.");
		document.getElementById("medico").focus();

		}
	if(document.getElementById("fecha_cita").value.length == 0 && document.getElementById("fecha_cita").value==""){
		alert("Indique la fecha y hora para la cita.");
		document.getElementById("fecha_cita").focus();
		}
	
	if(document.getElementById("duracion_cita").options[0].selected == true){
		alert("Por favor, indique en minutos cuánto durará la cita.");
		document.getElementById("duracion_cita").focus();

		}
	
	}	
	
	//problemas para validar al menos 1
function validarCambioPass(){
	if(document.getElementById("usuario").value.length == 0 && document.getElementById("usuario").value==""){
		alert("El nombre de usuario es obligatorio");
		document.getElementById("usuario").focus();
		return false;
		}
	if(document.getElementById("pass_ant").value.length == 0 && document.getElementById("pass_ant").value==""){
		alert("Escriba su contraseña anterior");
		document.getElementById("pass_ant").focus();
		return false;
		}	
	if(document.getElementById("pass_nuev1").value.length == 0 && document.getElementById("pass_nuev1").value==""){
		alert("Escriba la contraseña nueva");
		document.getElementById("pass_nuev1").focus();
		return false;
		}
	if(document.getElementById("pass_nuev2").value.length == 0 && document.getElementById("pass_nuev2").value==""){
		alert("repita la contraseña nueva");
		document.getElementById("pass_nuev2").focus();
		return false;
		}
	
	return true;
	}
function validaLlenadoCita(){
	if(document.getElementById("observaciones").value.length < 5 && document.getElementById("observaciones").value==""){
		alert("Escriba algo en las observaciones de la cita.");
		document.getElementById("observaciones").focus();
		return false;
		}
	return true;
	}

function validarAutoregistro(){
	if(document.getElementById("nombre").value.length==0 && document.getElementById("nombre").value==""){
		alert("Por favor escribe tu nombre.");
		document.getElementById("nombre").focus();
		return false;
		}
		if(document.getElementById("domicilio").value.length==0 && document.getElementById("domicilio").value==""){
			alert("Por favor, escribe tu domicilio.");
		document.getElementById("domicilio").focus();
		return false;
		}
	if(document.getElementById("localidad").value.length==0 && document.getElementById("localidad").value==""){
			alert("Por favor, escribe la localidad en la que vives.");
		document.getElementById("localidad").focus();
		return false;
		}
	if(document.getElementById("municipio").value.length==0 && document.getElementById("municipio").value==""){
			alert("Por favor, escribe el municipio en el que vives.");
		document.getElementById("municipio").focus();
		return false;
		}
		
	if(document.getElementById("estado").options[0].selected == true){
		alert("Por favor, indica de qué estado vienes.");
		document.getElementById("estado").focus();

		}
		
	
	if(document.getElementById("nacimiento").value.length==0 && document.getElementById("nacimiento").value==""){
			alert("Por favor, proporciona tu fecha de nacimiento.");
		document.getElementById("nacimiento").focus();
		return false;
		}
		if(document.getElementById("id_grupo").options[0].selected == true){
		alert("Por favor, indica a qué grupo vas a asistir");
		document.getElementById("estado").focus();

		}
	
	return true;
	}
	
function validaPrestamo(){
	if(document.getElementById("evangelio").options[0].selected == true){
		alert("Éste campo es obligatorio");
		document.getElementById("evangelio").focus();
		return false;
	}
		if(document.getElementById("iglesia").options[0].selected == true){
		alert("Éste campo es obligatorio");
		document.getElementById("iglesia").focus();
		return false;
	}
		if(document.getElementById("creyente").options[0].selected == true){
		alert("Éste campo es obligatorio");
		document.getElementById("creyente").focus();
		return false;
	}
	return true;
}