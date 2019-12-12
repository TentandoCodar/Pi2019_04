const providers = new Providers(firebase.firestore());

window.onload = () => {
    const searchButton = document.getElementById('searchButton');
    index();
    searchButton.addEventListener('click', () => search());
    function index() {
        providers.index();
    }

    function search() {
        console.log(document.getElementById('bucket').value)
        providers.search(document.getElementById('searchValue').value, document.getElementById('bucket').value);
    }
}