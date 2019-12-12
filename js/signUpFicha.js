const firestore = firebase.firestore();

const ficha = new Ficha(firebase.firestore());
const products = new Product(firebase.firestore());
window.onload = () => {
    let productsArray = [];
    const amountSelectButton = document.getElementById('AmountSelectButton');
    const submitButton = document.getElementById('submitButton');
    let materialPrice = 0;
    
    submitButton.addEventListener('click', () => {
        getDataOfProductSelect()
    })

    amountSelectButton.addEventListener('click', () => {
        setSelects();
    })
    getProducts();

    

    function getProducts() {
        firestore.collection('Products').onSnapshot((snapshot) => {
            snapshot.forEach(doc => {
                productsArray.push(doc.data());
                
            });
            
            console.log(productsArray);
        })
    }

    function setSelects() {
        const productAmount = document.getElementById('productAmount').value
        for(let i = 0; i < productAmount; i++) {
            document.getElementById("ProductsSelect").innerHTML += `
                <select id=${i}>

                </select>
            
            `;
            let counter = 0;
            for(let o of productsArray) {
                
                document.getElementById(i).innerHTML += `
                    <option value=${counter}>${o.name}</option>
                `

                counter++;
            }
        }
    }

    function getDataOfProductSelect() {
        const productAmount = document.getElementById('productAmount').value
        let productsCodeArray = [];
        
        for(let i = 0; i < productAmount; i++) {
            const value = document.getElementById(i).value;
            const pricePlaceholder = productsArray[value].price;
            const codePlaceholder = productsArray[value].code;
            materialPrice += parseFloat(pricePlaceholder);
            productsCodeArray.push(codePlaceholder);
        }
        
        return productsCodeArray;
    }

    function submit() {
        const productsCodeArray = getDataOfProductSelect();
        
    }

}