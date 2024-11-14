function pessoa(obj){
    if(obj == "pf"){
        document.getElementById('cpf').style.display = "block";
        document.getElementById('cnpj').style.display = "none";
        document.orcamento.cpf.focus();
    }else{
        document.getElementById('cpf').style.display = "none";
        document.getElementById('cnpj').style.display = "block";
        document.orcamento.cnpj.focus();
    }
}

function senha(){
    s1 = document.orcamento.senha1.value;
    s2 = document.orcamento.senha2.value;

    if(s1 != s2){
        document.getElementById('msg').style.display = "block";
    }
    else{
        document.getElementById('msg').style.display = "none";
    }
    
}

function mascara_cpf(obj){

    if(obj.value.length == 3){
        obj.value += "."
    }
    else if(obj.value.length == 7){
        obj.value += "."
    }
    else if(obj.value.length == 11){
        obj.value += "-"
    }

}

function mascara_cnpj(obj){

    if(obj.value.length == 2){
        obj.value += "."
    }
    else if(obj.value.length == 6){
        obj.value += "."
    }
    else if(obj.value.length == 10){
        obj.value += "/"
    }
    else if(obj.value.length == 15){
        obj.value += "-"
    }

}

function mascara_cnpj(obj){

    if(obj.value.length == 2){
        obj.value += "."
    }
    else if(obj.value.length == 6){
        obj.value += "."
    }
    else if(obj.value.length == 10){
        obj.value += "/"
    }
    else if(obj.value.length == 15){
        obj.value += "-"
    }

}

function mascara_tel(obj){
    if(obj.value.length == 0){
        obj.value += "("
    }
    else if(obj.value.length == 3){
        obj.value += ")"
    }
    else if(obj.value.length == 9){
        obj.value += "-"
    }
}

function salto(campo,digito){
    if(campo == "cpf"){
        if(digito.length>13){
            document.orcamento.telefone.focus();
        }
    }
    
    if(campo == "cnpj"){
        if(digito.length>17){
            document.orcamento.telefone.focus();
        }
    }

    if(campo == "telefone"){
        if(digito.length>13){
            document.orcamento.pagamento.focus();
        }
    }

}

function abrir(){
    pagamento = document.orcamento.pagamento.value;
    if(pagamento == "Cartão"){
        document.getElementById('cartao').style.display = "block";
        document.orcamento.num.focus();
    }
    else{
        document.getElementById('cartao').style.display = "none";
    }

}

function somente_numero(e){
    tecla = (window.event)?event.keyCode:e.which;

    if ((tecla >= 48 && tecla <= 57) || (tecla>=96 && tecla <= 105) || (tecla == 8) || (tecla == 37) || (tecla == 39) || (tecla == 46) ){
        return true;
    }
    else{
        return false;
    }

}


function setas(e){
    tecla = (window.event)?event.keyCode:e.which;

    if ((tecla == 38) || (tecla == 40) || (tecla == 9)){
        return true;
    }
    else{
        return false;
    }

}

function calculos(form){
    form.login.value = form.login.value.toUpperCase();
    
    //entrada
     pagamento = form.pagamento.value;
    quant1 = form.quant1.value;
    quant2 = form.quant2.value;
    quant3 = form.quant3.value;
    
    //processamento
    tot1 = quant1*350;
    tot2 = quant2*300;
    tot3 = quant3*450;
    
    if (pagamento == "Dinheiro"){
        perc = 0.10;
    }
    else{
        perc = 0;
    }
    
    total = tot1 + tot2 + tot3;

    //saída
    form.tot1.value = "R$ " + tot1.toFixed(2);
    form.tot2.value = "R$ " + tot2.toFixed(2);
    form.tot3.value = "R$ " + tot3.toFixed(2);

    document.getElementById('total').value = total.toFixed(2);
}