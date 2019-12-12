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
            }
        })
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const cnpj = document.getElementById('cnpj').value;
        client.save(name,email,phone,cnpj);
    }
}