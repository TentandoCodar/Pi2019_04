const client = new Client(firebase.firestore());

window.onload = () => {
    const submit = document.getElementById('signUpClientButton');
    submit.addEventListener('click', () => signUp())

    function signUp() {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const cnpj = document.getElementById('cnpj').value;
        if(!email || !name || phone.length < 11 || cnpj.length < 14) {
            //Colocar o modal aqui
            alert('Deu errado menor');
            return null;
        }
        
        client.save(name,email,phone,cnpj);
    }
}