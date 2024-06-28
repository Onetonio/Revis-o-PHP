//PRODUTO
function produtocadastrar() {
	if(document.getElementById("nomeprodutocadastrar").value==="") { 
        document.getElementById('btnprodutocadastrar').disabled = true; 

    } else if(document.getElementById("tipoprodutocadastrar").value==="") { 
        document.getElementById('btnprodutocadastrar').disabled = true; 

    } else if(document.getElementById("precoprodutocadastrar").value==="") { 
        document.getElementById('btnprodutocadastrar').disabled = true; 

    } else if(document.getElementById("imgprodutocadastrar").value==="") { 
        document.getElementById('btnprodutocadastrar').disabled = true; 

    } else { 
        document.getElementById('btnprodutocadastrar').disabled = false;
    }
}
window.setInterval(produtocadastrar, 1);

function produtoremover() {
	if(document.getElementById("idprodutoremover").value==="") { 
        document.getElementById('btnprodutoremover').disabled = true; 

    } else { 
        document.getElementById('btnprodutoremover').disabled = false;
    }
}
window.setInterval(produtoremover, 1);

function produtoeditar() {
	if(document.getElementById("idprodutoeditar").value==="") { 
        document.getElementById('btnprodutoeditar').disabled = true; 

    } else if(document.getElementById("nomeprodutoeditar").value==="") { 
        document.getElementById('btnprodutoeditar').disabled = true; 

    } else if(document.getElementById("tipoprodutoeditar").value==="") { 
        document.getElementById('btnprodutoeditar').disabled = true; 

    } else if(document.getElementById("precoprodutoeditar").value==="") { 
        document.getElementById('btnprodutoeditar').disabled = true; 

    } else if(document.getElementById("imgprodutoeditar").value==="") { 
        document.getElementById('btnprodutoeditar').disabled = true; 

    } else { 
        document.getElementById('btnprodutoeditar').disabled = false;
    }
}
window.setInterval(produtoeditar, 1);

///USUARIO
function usuariocadastrar() {
	if(document.getElementById("emailusuariocadastrar").value==="") { 
        document.getElementById('btnusuariocadastrar').disabled = true; 

    } else if(document.getElementById("senhausuariocadastrar").value==="") { 
        document.getElementById('btnusuariocadastrar').disabled = true; 

    } else { 
        document.getElementById('btnusuariocadastrar').disabled = false;
    }
}
window.setInterval(usuariocadastrar, 1);

function usuarioremover() {
	if(document.getElementById("idusuarioremover").value==="") { 
        document.getElementById('btnusuarioremover').disabled = true; 

    } else { 
        document.getElementById('btnusuarioremover').disabled = false;
    }
}
window.setInterval(usuarioremover, 1);

function usuarioeditar() {
	if(document.getElementById("idusuarioeditar").value==="") { 
        document.getElementById('btnusuarioeditar').disabled = true; 

    } else if(document.getElementById("emailusuarioeditar").value==="") { 
        document.getElementById('btnusuarioeditar').disabled = true; 

    } else if(document.getElementById("senhausuarioeditar").value==="") { 
        document.getElementById('btnusuarioeditar').disabled = true; 

    } else { 
        document.getElementById('btnusuarioeditar').disabled = false;
    }
}
window.setInterval(usuarioeditar, 1);

///COMPLEMENTO
function complementocadastrar() {
	if(document.getElementById("nomecomplementocadastrar").value==="") { 
        document.getElementById('btncomplementocadastrar').disabled = true; 

    } else if(document.getElementById("tipocomplementocadastrar").value==="") { 
        document.getElementById('btncomplementocadastrar').disabled = true; 

    } else if(document.getElementById("precocomplementocadastrar").value==="") { 
        document.getElementById('btncomplementocadastrar').disabled = true; 

    } else if(document.getElementById("imgcomplementocadastrar").value==="") { 
        document.getElementById('btncomplementocadastrar').disabled = true; 

    } else { 
        document.getElementById('btncomplementocadastrar').disabled = false;
    }
}
window.setInterval(complementocadastrar, 1);

function complementoremover() {
	if(document.getElementById("idcomplementoremover").value==="") { 
        document.getElementById('btncomplementoremover').disabled = true; 

    } else { 
        document.getElementById('btncomplementoremover').disabled = false;
    }
}
window.setInterval(complementoremover, 1);

function complementoeditar() {
	if(document.getElementById("idcomplementoeditar").value==="") { 
        document.getElementById('btncomplementoeditar').disabled = true; 

    } else if(document.getElementById("nomecomplementoeditar").value==="") { 
        document.getElementById('btncomplementoeditar').disabled = true; 

    } else if(document.getElementById("tipocomplementoeditar").value==="") { 
        document.getElementById('btncomplementoeditar').disabled = true; 

    } else if(document.getElementById("precocomplementoeditar").value==="") { 
        document.getElementById('btncomplementoeditar').disabled = true; 

    } else if(document.getElementById("imgcomplementoeditar").value==="") { 
        document.getElementById('btncomplementoeditar').disabled = true; 

    } else { 
        document.getElementById('btncomplementoeditar').disabled = false;
    }
}
window.setInterval(complementoeditar, 1);