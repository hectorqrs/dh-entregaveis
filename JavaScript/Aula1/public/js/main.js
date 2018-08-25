// Funções
//
// function elevarAoSegundo(n1,n2){
//   console.log(n1+' elevado a '+n2 + ' é igual a = '+ n1**n2)
// }
//
// console.log('Exercício 1')
// elevarAoSegundo(7,4)
//
// function quadrado(numero){
//   console.log(numero + ' ao quadrado é igual a '+numero**2)
// }
//
// console.log(' ')
// console.log('Exercício 2')
// quadrado(7)
//
// function trianguloRetangulo(a,b){
//   function hipotenusa(){
//     return Math.sqrt(a**2 + b**2)
//   }
//   console.log('A soma dos lados do triangulo é igual a '+ (a+b+hipotenusa()))
// }
//
// console.log(' ')
// console.log('Exercício 4')
// trianguloRetangulo(3,4)
//
//
// function meuSanduiche(ingrediente1,ingrediente2,callback){
//   console.log('Estou comendo um sanduiche de: '+ingrediente1+' e '+ingrediente2 )
//   setTimeout( function(){
//     callback()
//   }, 5000 )
// }
//
// function callback(){
//   console.log('Terminei de comer meu sanduiche')
// }
//
// console.log(' ')
// console.log('Exercício 5')
// meuSanduiche('queijo','presunto',callback)



// Fim dos Exercícios de Funções

// Arrays


//
// let numeros = []
// let i = 0
// while(i < 21){
//   numeros.push(i)
//   i++
// }
//
//
// console.log('Exercício 1')
// let multiplos = numeros.forEach(function(value){
//   if (value % 7 == 0 && value != 0) {
//   console.log('O número '+value+' é divisivel por 7')
// }
// })
// multiplos
//
// console.log(' ')
// console.log('Exercicio 2')
// let arrayResultado = numeros.map(function(value){
//   console.log('A raiz quadrada de '+value+' é '+Math.sqrt(value))
// })
//
// arrayResultado
//
// var enigma =
// ["l",1,"a",2,2,5,"p",5,7,5,3,"e",6,"r",7,6,5,3,2,1,"s",9,9,9,6,"e",2,"v",5,"e",3,
// "r",2,"a",1,6,4,1,2,"n",2,"c",3,5,5,5,7,"i",4,"a",5,2,1,3,"e",6,"s",7,"l",4,"a",3
// ,"c",2,3,1,5,3,2,"l",3,"a",4,"v",5,"e",6];
//
// console.log(' ')
// console.log('Exercicio 3')
// var resultado = enigma.filter(function(value){
//   return (typeof value === 'string')
// })
// var resultado2 = resultado.join('')
//
// console.log('O nome da rua é '+resultado2)
//
// console.log(' ')
// console.log('Exercicio 4')
//
// var numbers = enigma.filter(function(value){
//   return (typeof value === 'number')
// })
// var result = numbers.reduce(function(total,numero){
//   return total + numero
// },0)
//
// console.log('O número da casa é '+result)




// Fim de Arrays

// Objetos



let pessoa = {
  idade: 17,
  nome: 'Hector',
  sobrenome: 'Queiróz',
  sexo: 'Masculino',
  estadoCivil: 'Solteiro',
  filmesPreferidos: ['A Rede Social','Steve Jobs','Todos os Filmes da Marvel'],
  cumprimento: function(){
    console.log('Olá '+pessoa.nome+' '+pessoa.sobrenome)
  },
  comer: function(comida){
    console.log('Estou comendo')
    setTimeout( function(){
      console.log(comida)
    }, 3000 );
  }
}


console.log('Exercício 2')
console.log(pessoa)

pessoa.idade = 18
console.log(' ')
console.log('Exercicio 3')
console.log('Hoje é meu aniversário, estou com '+pessoa.idade+' anos agora.')

console.log(' ')
console.log('Exercicio 4')
pessoa.cumprimento()

console.log(' ')
console.log('Exercicio 6')
pessoa.comer('macarrão')
