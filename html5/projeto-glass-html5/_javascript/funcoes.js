function mudaFoto(foto){
	document.getElementById("icone").src = foto;
}

function validarSenha() {
	var senha = document.getElementById("senha").value;
	var confirma = document.getElementById("confirmar").value;

	if (senha == confirma) {
		window.location = "../_php/formLogin_bd.php";
	}
	else {
		alert("ATENÇÃO: Senha diferente do campo 'Confirmar senha'!");
		//document.getElementById("cadastrar").disable = true;
		return false;
	}
}

function pegaGetUrl(){
	//var query = location.search.slice(1);
	var query = location.search;
	//var data = {};

    var chaveValor = query.split('=');
    var chave = chaveValor[0];
    var valor = chaveValor[1];
    //data[chave] = valor;
    //alert(valor);
	return valor;
}


