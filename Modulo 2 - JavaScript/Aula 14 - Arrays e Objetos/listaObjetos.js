let listaProdutos = [
    {nome: "Computador",
    fabricante: "Dell",
    valor: 200
    },
    {nome: "Notebook",
        fabricante: "Dell",
        valor: 2020
    },
    {nome: "Ipad",
        fabricante: "Dell",
        valor: 3000
    }
]

// console.log(listaProdutos[0]);
// console.log(listaProdutos[1]);

listaProdutos.forEach((produto) =>  {
    console.log(`O ${produto.nome} da ${produto.fabricante} custa R$: ${produto.valor}` );
})

let listaProdutosCaros = listaProdutos.filter(produto => produto.valor > 1000)
console.log(listaProdutosCaros);