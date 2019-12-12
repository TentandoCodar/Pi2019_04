const userClass = new User(firebase.auth(), firebase.firestore(), firebase.storage());

window.onload = () => {
    const submitButton = document.getElementById('submitButton');
    
    submitButton.addEventListener('click', () => create());

    function create() {
        
        const email = document.getElementById('email').value;
        const name = document.getElementById('name').value;
        const password = document.getElementById('password').value;
        const image = document.getElementById('file').files[0];
        userClass.save(name,email,password, image)
        
        
    }
}