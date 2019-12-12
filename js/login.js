const user = new User(firebase.auth());

window.onload = () => {
    const submit = document.getElementById('submitButton');

    submit.addEventListener('click', () => login());


    function login() {
        event.preventDefault();
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        user.login(email,password);
    }

    
}