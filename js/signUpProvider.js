const provider = new Providers(firebase.firestore());

window.onload = () => {
    const submitButton = document.getElementById('submitButton');

    submitButton.addEventListener('click', () => signUp())

    function signUp() {
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
        provider.save(name,email,phone,cnpj);
    }
}