const client = new Client(firebase.firestore());

window.onload = () => {
    client.index();
    let targetCliked = "";
    const searchButton = document.getElementById('searchButton');

    searchButton.addEventListener('click', () => search())
    document.addEventListener('click', (e) => {
        targetCliked = e.target.id;
    })

    document.addEventListener('keypress', (e) => {
        if(e.key.toUpperCase() === "ENTER" && targetCliked === "searchValue") {
            search();
        }
    })
    function search() {
        const term = document.getElementById('searchValue').value;
        const bucket = document.getElementById('bucket').value;
        client.search(term,bucket)
    }
}