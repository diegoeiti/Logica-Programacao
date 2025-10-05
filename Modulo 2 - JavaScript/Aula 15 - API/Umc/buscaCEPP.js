const cep = document.getElementById("cep")
console.log("Elemento CEP capturado:", cep) // Mostra o elemento input

cep.addEventListener("change", (evento) => {
    console.log("=== EVENTO CHANGE DISPARADO ===")
    console.log("Evento completo:", evento)
    console.log("Elemento que disparou o evento:", evento.target)
    
    let cepUsuario = evento.target
    console.log("Valor do CEP digitado:", cepUsuario.value)
    console.log("Tipo do valor:", typeof cepUsuario.value)
    console.log("Comprimento do CEP:", cepUsuario.value.length)
    
    buscaCEP(cepUsuario.value)
})

async function buscaCEP(cepUsuario){
    console.log("\n=== INICIANDO BUSCA CEP ===")
    console.log("Parâmetro recebido na função:", cepUsuario)
    console.log("CEP após trim:", cepUsuario.trim())

    let erroCEP = document.getElementById("erro")
    console.log("Elemento de erro:", erroCEP)
    erroCEP.innerHTML = ""

    try {
        console.log("\n--- FAZENDO REQUISIÇÃO À API ---")
        let url = `https://viacep.com.br/ws/${cepUsuario}/json`
        console.log("URL da requisição:", url)
        
        let consultaCEP = await fetch(url)
        console.log("\n--- RESPOSTA DA API ---")
        console.log("Objeto Response completo:", consultaCEP)
        console.log("Status HTTP:", consultaCEP.status)
        console.log("Status OK?", consultaCEP.ok)
        console.log("Headers:", consultaCEP.headers)
        
        console.log("\n--- CONVERTENDO PARA JSON ---")
        let consultaCEPJson = await consultaCEP.json()
        console.log("Dados convertidos para JSON:", consultaCEPJson)
        console.log("Tipo dos dados:", typeof consultaCEPJson)
        
        console.log("\n--- VALIDAÇÃO DO CEP ---")
        console.log("CEP existe na resposta?", consultaCEPJson.erro)
        
        if (consultaCEPJson.erro) {
            console.log("❌ CEP NÃO ENCONTRADO NA BASE")
            throw Error("CEP INEXISTENTE")
        }

        console.log("✅ CEP VÁLIDO - PREENCHENDO CAMPOS")
        preencherCampos(consultaCEPJson)
    }
    catch (erro) {
        console.log("\n--- CAPTURANDO ERRO ---")
        console.log("Erro capturado:", erro)
        console.log("Mensagem do erro:", erro.message)
        
        limparCampos();
        erroCEP.innerHTML = "CEP INVÁLIDO, TENTE NOVAMENTE!"
        console.log("Mensagem de erro exibida para usuário")
    }
    finally {
        console.log("=== FIM DA BUSCA POR CEP ===\n")
    }
}   

function preencherCampos(cepJson){
    console.log("\n--- PREENCHENDO CAMPOS DO FORMULÁRIO ---")
    console.log("Objeto CEP recebido:", cepJson)
    console.log("Logradouro:", cepJson.logradouro)
    console.log("Bairro:", cepJson.bairro)
    console.log("Cidade:", cepJson.localidade)
    console.log("Estado:", cepJson.uf)

    let rua = document.getElementById("rua")
    let cidade = document.getElementById("cidade")
    let estado = document.getElementById("estado")
    let bairro = document.getElementById("bairro")

    console.log("Elementos dos campos capturados:")
    console.log("- Rua:", rua)
    console.log("- Cidade:", cidade)
    console.log("- Estado:", estado)
    console.log("- Bairro:", bairro)

    // Mostra valores ANTES de preencher
    console.log("Valores ANTES do preenchimento:")
    console.log("- Rua:", rua.value)
    console.log("- Cidade:", cidade.value)
    console.log("- Estado:", estado.value)
    console.log("- Bairro:", bairro.value)

    rua.value = cepJson.logradouro
    cidade.value = cepJson.localidade
    estado.value = cepJson.uf
    bairro.value = cepJson.bairro

    // Mostra valores DEPOIS de preencher
    console.log("Valores APÓS preenchimento:")
    console.log("- Rua:", rua.value)
    console.log("- Cidade:", cidade.value)
    console.log("- Estado:", estado.value)
    console.log("- Bairro:", bairro.value)
}

function limparCampos() {
    console.log("\n--- LIMPANDO CAMPOS ---")
    
    let rua = document.getElementById("rua")
    let cidade = document.getElementById("cidade")
    let estado = document.getElementById("estado")
    let bairro = document.getElementById("bairro")

    console.log("Valores ANTES de limpar:")
    console.log("- Rua:", rua.value)
    console.log("- Cidade:", cidade.value)
    console.log("- Estado:", estado.value)
    console.log("- Bairro:", bairro.value)

    rua.value = ""
    cidade.value = ""
    estado.value = ""
    bairro.value = ""

    console.log("Valores APÓS limpar:")
    console.log("- Rua:", rua.value)
    console.log("- Cidade:", cidade.value)
    console.log("- Estado:", estado.value)
    console.log("- Bairro:", bairro.value)
}

console.log("Script carregado com sucesso!")