let listaNumeros = [1,2,3];

console.log(listaNumeros[0]);
console.log(listaNumeros[1]);
console.log(listaNumeros[2]);

// Adicionar no final da lista
listaNumeros.push(4);

console.log(listaNumeros)
console.log(listaNumeros.length)

// Adicionar no comeco da lista
listaNumeros.unshift(0);
console.log(listaNumeros);

// Remover um elemento no inicio da lista
listaNumeros.shift()
console.log(listaNumeros)

// Remover o ultimo elemento do array
listaNumeros.pop()
console.log(listaNumeros);

// Descobrir o indice de um elemento
console.log(listaNumeros.indexOf(2));

let listaNomes = ["Diego", "Gustavo", "Camila", "Marcos", "João"]

listaNomes.splice(1,1)
console.log(listaNomes)


// Substituir elemento usando splice
listaNomes.splice(1,1,"Eddão")
console.log(listaNomes)

// Substituir dois elementos usando splice
listaNomes.splice(0,2,"Maria", "Joana")
console.log(listaNomes)

// Adicionar usando splice
listaNomes.splice(0,1, "Ronaldo")
console.log(listaNomes)

