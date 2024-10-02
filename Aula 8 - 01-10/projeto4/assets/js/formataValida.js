function formataCep(){
    // Formatando o CEP
    const input = document.querySelector('#cep')
    // let input = document.querySelector('#cep')

    // Arrow function
    input.addEventListener('keypress', () =>{ // função anônima - arrow function
        // keypress = Quando uma tecla for acionada, ele irá executar a função
        let inputLength = input.value.length

        if (inputLength == 5){
            input.value += '-'
            // input.value = input.value + '-'
        }
    })
}

function comparaSenhas(){
    // let senha1 = document.querySelector("#senha1")
    // let senha2 = document.querySelector("#senha2")
    let senha1 = document.getElementById("senha1")
    let senha2 = document.getElementById("senha2")
    
        if(senha1.value == senha2.value){
            senha1.style.border="1px solid green"
            senha2.style.border="1px solid green"
            // alert("Ok")
        } else{
            senha2.style.border="1px solid red"
            // alert("Error")
        }
}