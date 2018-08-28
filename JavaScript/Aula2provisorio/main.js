// window.onload = function() {
//   alert('Alerta Vermelho')
//  //isso é executado quando a página é carregada
// };

// Exercício 2

// let nome = prompt('Digite seu nome:')

// alert('Olá '+nome)

// Exercício 3

// let idade = confirm('Você é maior de idade?')
//
// if(idade == true){
//   window.location = 'http://www.disney.com.br'
// }else{
//   window.reload
//   alert('Sai daqui')
// }

// Exercício 4

console.log('Você está em :'+window.location.href)

// Exercício 5

let num1 = prompt('Digite um número')
let n1 = parseInt(num1)
let num2 = prompt('Digite outro número')
let n2 = parseInt(num2)
let confirmacao = confirm('Tem certeza de seus números?')

if (confirmacao) {
  console.log('FOiiiiiiii')
 if (n1 > n2) {
   alert('O primeiro número digitado é maior que o segundo')
 }else if(n1 < n2 ) {
   alert('O segundo número digitado é maior que o primeiro')
 }else if(n1 == n2){
   alert('Os números digitados tem o mesmo valor')
 }else{
   Alert('Digite os números nos campos')
 }
}else{
  location.reload()
}
