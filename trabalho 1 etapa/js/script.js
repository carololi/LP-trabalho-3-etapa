function calc(valor,marcado){
    //entrada
    total = document.getElementById('total').value;

    //processamento
    if(marcado){
        total = Number(total) + Number(valor);
    }
    else{
        total = Number(total)- Number(valor);
    }
    
    //saida
    document.getElementById('total').value = total;
}