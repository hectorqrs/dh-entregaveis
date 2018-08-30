// let cabecalho = document.getElementById('titular')
// let lechuza = document.getElementById('lechuza')
// let inputs = document.querySelectorAll('input')
// let textarea = document.querySelector('textarea')
//
// window.onload = function(){
//   cabecalho.style.display = 'none'
//   lechuza.style.filter = "grayscale(100%)";
// }
//
// inputs.forEach(function(input){
//   input.style.background = "red"
// })
//
// textarea.style.background = 'red'

// Segunda parte dos Exercícios

// let copyright = document.querySelector('#copyright')
// let twitter = document.querySelector('.fa-twitter')
// let facebook = document.querySelector('.fa-facebook')
// let youtube = document.querySelector('.fa-youtube')
// let form = document.querySelector('form')
// let h2 = document.querySelectorAll('h2')
// let icons = document.querySelectorAll('.icon')
//
// console.log(copyright.attributes)
// console.log('A url do twitter é '+twitter.getAttribute("href"))
// console.log('A url do facebook é '+facebook.getAttribute("href"))
// youtube.setAttribute("target","_blank")
// youtube.setAttribute("href","https://www.youtube.com/channel/UCRQdwmWMhTcqDFjPT4UPZYA")
// if (!form.hasAttribute('action')) {
//   console.log('O atributo action não existe no formulario')
// }else{
//   console.log('Parabéns')
// }
// form.removeAttribute('url')
// form.setAttribute('href','http://www.digitalhouse.com')
// h2.forEach(function(h){
//   h.style.color = 'red'
// })
// icons.forEach(function(icon){
//   icon.style.color = 'blue'
// })

// Terceira Parte dos Exercícios

let lechuza = document.getElementById('lechuza')
const u8 = document.querySelector('.u8')
const botao = document.createElement('button')
const text = document.createTextNode('Desaparecer')
botao.appendChild(text)
u8.appendChild(botao)
botao.setAttribute('class','button big scrolly')

let visivel = true
botao.addEventListener('click', function(){
  if (visivel) {
    visivel = false
    lechuza.style.display = 'none'
    text.textContent = 'Aparecer'
  }else{
    visivel = true
    lechuza.style.display = 'block'
    text.textContent = 'Desaparecer'
  }
})

let esc = document.querySelector('#top').textContent = 'Topo'
let work = document.querySelector('#work').textContent = 'Serviços'
let portfolio = document.querySelector('#portfolio').textContent = 'Portfólio'
let contact = document.querySelector('#contact').textContent = 'Contato'

let social = document.querySelector('.social')
social.removeChild(social.lastElementChild)
