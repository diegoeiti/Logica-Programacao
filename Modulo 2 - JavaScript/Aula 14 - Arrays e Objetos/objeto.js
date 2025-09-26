let produto = {
    nome: "Computador",
    fabricante: "Positivo",
    preco: 2000,
    processador:"I3-2100"
};

console.log(produto.nome);
console.log(produto["nome"]);

// Adicionar um atributo no objeto
produto.armazenamento = "256GB"
produto['memoria-RAM'] = "8gb"
console.log(produto)

// Remover elemento
delete produto.armazenamento
console.log(produto)