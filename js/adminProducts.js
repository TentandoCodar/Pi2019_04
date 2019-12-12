const products = new Product(firebase.firestore());

window.onload = () => {
    const searchButton = document.getElementById('searchButton');
    index();
    
    searchButton.addEventListener('click', () => search())

    function index() {
        products.index();
    }

    function search() {
        console.log(document.getElementById('bucket').value)
        products.search(document.getElementById('searchValue').value, `${document.getElementById('bucket').value}`);
    }
    
}