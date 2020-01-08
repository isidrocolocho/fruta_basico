function validar_vista() {
	var fruta = document.getElementById('fruta').value;
	var color = document.getElementById('color').value;
	var sabor = document.getElementById('sabor').value;

	if (fruta.length==0) {
		document.getElementById('fruta').style.boxShadow = "0 0 15px red";
		document.getElementById('fruta').placeholder = "Este campo es obligatorio";
		return false;
	}else{
		document.getElementById('fruta').style.boxShadow = "0 0 15px green";
	}
	if (color==0) {
		document.getElementById('color').style.boxShadow = "0 0 15px red";
		document.getElementById('color').placeholder = "Este campo es obligatorio";
		return false;
	}else{
		document.getElementById('color').style.boxShadow = "0 0 15px green";
	}

	if (sabor==0) {
		document.getElementById('sabor').style.boxShadow = "0 0 15px red";
		document.getElementById('sabor').placeholder = "Este campo es obligatorio";
		return false;
	}else{
		document.getElementById('sabor').style.boxShadow = "0 0 15px green";
	}

	return true;
}

function validar_sabor() {
	var ssabor = document.getElementById('sabor').value;

	if (ssabor.length==0) {
		document.getElementById('sabor').style.boxShadow = "0 0 15px red";
		document.getElementById('sabor').placeholder = "Este campo es obligatorio";
		return false;
	}else{
		document.getElementById('sabor').style.boxShadow = "0 0 15px green";
	}
	if (ssabor.length>50) {
		document.getElementById('sabor').style.boxShadow = "0 0 15px red";
		document.getElementById('sabor').value = "";
		document.getElementById('sabor').placeholder = "longitud 50";
		return false;
	}else{
		document.getElementById('sabor').style.boxShadow = "0 0 15px green";
	}
	return true;
}

function validar_Color() {
	var scolor = document.getElementById('color').value;

	if (scolor.length==0) {
		document.getElementById('color').style.boxShadow = "0 0 15px red";
		document.getElementById('color').placeholder = "Este campo es obligatorio";
		return false;
	}else{
		document.getElementById('color').style.boxShadow = "0 0 15px green";
	}
	return true;
}

