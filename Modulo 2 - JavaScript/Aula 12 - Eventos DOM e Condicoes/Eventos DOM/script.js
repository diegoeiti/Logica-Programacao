let caixa = document.getElementById("mouse1");
let nome = document.querySelector("#nome").value;

function entradaMouse() {
    caixa.style.backgroundColor = "blue";
}

function saidaMouse() {
    caixa.style.backgroundColor = "lightblue"
}

function mudaHtml() {
    let nome = document.querySelector("#nome").value;
    caixa.innerHTML = nome;
}