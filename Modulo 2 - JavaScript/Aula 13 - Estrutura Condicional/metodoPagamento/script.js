function calcularPagamento(){
    let valorCompra = parseFloat(document.getElementById("valorCompra").value)
    let formaPagamento = document.getElementById("formaPagamento").value
    let resultado = document.getElementById("resultado");

    switch (formaPagamento){
        case "pix":
            let resultado1 = (valorCompra * 0.9)
            resultado.innerHTML = "O valor a ser pago é : "+ resultado1.toFixed(2)
            break
      
        case "debito":
            let resultado2 = (valorCompra * 0.95)
            resultado.innerHTML = "O valor a ser pago é : "+ resultado2.toFixed(2)
            break

        case "credito":
            let resultado3 = (valorCompra)
            resultado.innerHTML = "O valor a ser pago é : "+ resultado3.toFixed(2)
            break
        default:
            resultado.innerHTML = "Valor Inválido"
    }


}