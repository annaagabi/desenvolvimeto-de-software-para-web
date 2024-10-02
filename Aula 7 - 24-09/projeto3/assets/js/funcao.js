function pegaValores(){
    // JS é fracamente tipado (quem define o tipo é o conteúdo)
    let email = document.getElementById("email").value
    let senha = document.getElementById("senha").value
    let nasc = document.getElementById("nascimento").value

    console.log(email)
    console.log(senha)
    console.log(nasc)
    console.log(document.getElementById("num").value)
    // console.log(document.getElementById("nascimento").value)
}

function mostra(){
    let email = document.getElementById("email").value
    document.write(email)
}