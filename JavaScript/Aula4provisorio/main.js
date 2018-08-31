 botao1.addEventListener('click', function(){
   alert('Olá')
 })

 botao2.addEventListener('click', function(){
   document.body.style.background = 'rgb('+Math.floor((Math.random() * 255) + 1)+','+Math.floor((Math.random() * 255) + 1)+','+Math.floor((Math.random() * 255) + 1)+')'
 })
 setInterval(function(){
   document.body.style.background = 'rgb('+Math.floor((Math.random() * 255) + 1)+','+Math.floor((Math.random() * 255) + 1)+','+Math.floor((Math.random() * 255) + 1)+')'
 },500)

let imagem = document.querySelector('#imagem')
let paragrafo = document.querySelector('#paragrafo')

let funcao1 = function(){
   paragrafo.innerHTML = 'Estou vendo uma bola'
}
imagem.addEventListener('mouseover',funcao1)
let funcao2 = function(){
  paragrafo.textContent = ''
}
imagem.addEventListener('mouseout',funcao2)
let funcao3 = function(){
  paragrafo.textContent = 'Estou clicando na imagem'
}
imagem.addEventListener('click', funcao3)


// document.body.onclick = function(){
//   this.style.background = 'red'
// }
let funcao = function(){
  document.body.style.background = 'red'
}

document.body.addEventListener('click',funcao)

document.body.removeEventListener('click',funcao)

form.onsubmit = function(e){
  e.preventDefault()

  if (idade.value >= 18) {
    form.submit()
  }else{
    alert('Necessita ser maior de idade')
  }
}

document.body.addEventListener('mousemove', function(event) {
  console.log('O x é = '+event.clientX+' e o y é = '+event.clientY)
});

let tempo = 0
let oito = 0
let dezsec =setInterval(function(){
  tempo += 10
  alert('Você está à '+tempo+' segundos nesta página')
}, 10000)

let oitosec =setInterval(function(){
  oito += 8
  alert('Você está à '+oito+' segundos nesta página')
},8000)

setTimeout(function(){
    clearInterval(oitosec)
    clearInterval(dezsec)
},5000)
