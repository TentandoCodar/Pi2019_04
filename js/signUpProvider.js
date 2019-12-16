const provider = new Providers(firebase.firestore());

window.onload = () => {
    const submitButton = document.getElementById('submitButton');

    submitButton.addEventListener('click', () => signUp())

    function signUp() {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const cnpj = document.getElementById('cnpj').value;
        if(!email || !name || phone.length < 11 || cnpj.length < 14) {
            //Colocar o modal aqui
            abrirErro()
            
            setTimeout(() => {
                fecharErro()
            }, 1500)
            return null;
        }

        provider.save(name,email,phone,cnpj);
    }
}