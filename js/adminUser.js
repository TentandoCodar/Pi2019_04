const userClass = new User(firebase.auth(),firebase.firestore());

window.onload = () => {
    const searchButton = document.getElementById('SearchButton');
    userClass.index();
    let targetCliked = "";

    searchButton.addEventListener('click',() => search())

    document.addEventListener('click', (e) => {
        
        targetCliked = e.target.id;
    })

    document.addEventListener('keypress', (e) => {
        if(e.key.toUpperCase() === "ENTER" && targetCliked === "SearchValue") {
            search();
        }
    })
    function search() {
        userClass.search(document.getElementById('SearchValue').value, document.getElementById('bucket').value);
    }
}