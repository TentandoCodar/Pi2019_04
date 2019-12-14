const product = new Product(firebase.firestore());
const clients = new Client(firebase.firestore());

window.onload = () => {
    const submitButton = document.getElementById('submitButton');
    const firestore = firebase.firestore();
    let providers = [];
    const provider = document.getElementById('provider');
    getProviders()
    submitButton.addEventListener('click', () => create());
    provider.addEventListener('change', (e) => change(e))

    
    function getProviders() {
        firestore.collection('Clients').onSnapshot((snapshot) => {
            document.getElementById('provider').innerHTML = "";
            let value = 0;
            snapshot.forEach(doc => {
                const data = doc.data();
                
                const html = `
                    <option value="${value}">${data.name}</option>
                `
                document.getElementById('provider').innerHTML += html;
                value += 1;
                providers.push(data);
            });
            document.getElementById('code').value = providers[0].code;
            
        })
        
    }
    function create() {
        const name = document.getElementById('name').value;
        const price = document.getElementById('price').value;
        const unity = document.getElementById('unity').value;
        const code = document.getElementById('code').value;

        if(!name || !price || !unity || !code) {
            //Colocar modal aqui
            alert("Dados incompletos");
            return null
        }
        if(unity.toUpperCase() != "M" && unity.toUpperCase() != "KG") {
            alert("Unidade incorreta");
            return null;
        }

        product.save(name, price, unity, code);
    }

    function change(e) {
        document.getElementById('code').value = providers[e.target.value].code;
    }
}