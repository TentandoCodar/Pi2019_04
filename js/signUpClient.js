const client = new Client(firebase.firestore());

window.onload = () => {
    const submit = document.getElementById('signUpClientButton');
    submit.addEventListener('click', () => signUp())

    function signUp() {
        console.log("Ola")
        const validation = ['name', 'email','phone', 'cnpj'];
        validation.forEach(element => {
            const doc = document.getElementById(element).value;

            if(!doc) {
                return null;
            }
            if(element == "cnpj") {
                if(doc.length != 14) {
                    alert("CNPJ incompleto")
                    return null;
                }
            }
            if(element == "phone") {
                if(doc.length != 11 ) {
                    alert("Telefone incompleto")
                    return null;
                }
            }

        })
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const cnpj = document.getElementById('cnpj').value;
        client.save(name,email,phone,cnpj);
    }
}