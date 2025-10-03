//https://viacep.com.br/ws/COLOCAR CEP/json

const cep = document.getElementById("cep")

cep.addEventListener("change", (evento) => {
    let cepUsuario = evento.target
    console.log(cepUsuario.value)
    buscaCEP(cepUsuario.value)
})

async function buscaCEP(cepUsuario){
    console.log(cepUsuario);

    let erroCEP = document.getElementById("erro")
    erroCEP.innerHTML = ""

    try {
        let consultaCEP = await fetch(`https://viacep.com.br/ws/${cepUsuario}/json`)
        console.log(consultaCEP);
        let consultaCEPJson = await consultaCEP.json()
        console.log(consultaCEPJson);

        if (consultaCEPJson.erro) {
            throw Error ("CEP INEXISTENTE")
        }

        preencherCampos(consultaCEPJson)
    }

    catch {
        limparCampos();
        erroCEP.innerHTML = "CEP INVÁLIDO, TENTE NOVAMENTE!"
    }

}   

function preencherCampos(cepJson){
    console.log(cepJson);
    console.log(cepJson.logradouro);

    let rua = document.getElementById("rua")
    let cidade = document.getElementById("cidade")
    let estado = document.getElementById("estado")
    let bairro = document.getElementById("bairro")

    rua.value = cepJson.logradouro
    cidade.value = cepJson.localidade
    estado.value = cepJson.uf
    bairro.value = cepJson.bairro
}

function limparCampos() {
    document.getElementById("rua").value = "";
    document.getElementById("cidade").value = "";
    document.getElementById("estado").value = "";
    document.getElementById("bairro").value = "";
}