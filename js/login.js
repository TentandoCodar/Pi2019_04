const user = new User(firebase.auth());

window.onload = () => {
    user.forIndexPage();
    const submit = document.getElementById('submitButton');

    submit.addEventListener('click', () => login());


    function login() {
        event.preventDefault();
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        if(!email || !password) {
            abrirErro()
            
            setTimeout(() => {
                fecharErro()
            }, 1500)

            return null;
        }
        user.login(email,password);
    }

    
}