const firestore = firebase.firestore();

const ficha = new Ficha(firebase.firestore());
const products = new Product(firebase.firestore());
window.onload = () => {
    let productsArray = [];
    const amountSelectButton = document.getElementById('AmountSelectButton');
    const submitButton = document.getElementById('submitButton');
    let materialPrice = 0;
    let laborCost = 0;
    const date = new Date().toLocaleDateString('pt-BR');
    let totalComercializationCost = 0;
    document.getElementById('date').value = date;
    submitButton.addEventListener('click', () => {
        getDataOfProductSelect()
        signUpImages();
    })

    amountSelectButton.addEventListener('click', () => {
        setSelects();
    })
    getProducts();
    getCosts();
    

    function getProducts() {
        firestore.collection('Products').onSnapshot((snapshot) => {
            snapshot.forEach(doc => {
                productsArray.push(doc.data());
                
            });
            
            console.log(productsArray);
        })
    }

    function setSelects() {
        document.getElementById('ProductsSelect').innerHTML = "";
        const productAmount = document.getElementById('productAmount').value
        for(let i = 0; i < productAmount; i++) {
            
            document.getElementById("ProductsSelect").innerHTML += `
                <select id='select${i}' style="widht: 50%; height: 19px; float: left">

                </select>
                <input id='input${i}' style="float: right; width: 20%; height: 19px;">
            `;
            let counter = 0;
            for(let o of productsArray) {
                
                document.getElementById('select'+i).innerHTML += `
                    <option value=${counter}>${o.name}</option>
                `

                counter++;
            }
        }
    }

    function getCosts() {
        firestore.collection('Costs').onSnapshot(snapshot => {
            snapshot.forEach(doc => {
                const data = doc.data();
                laborCost = data.laborCostBrute;
                document.getElementById('laborCost').value = laborCost;
                const totalComercializationCostPlaceholder = (
                    data.AdministrativeExpenses + 
                    data.Comissions + 
                    data.DiverseExpenses + 
                    data.FinancialExpenses + 
                    data.FixedCosts + 
                    data.Investments + 
                    data.LaborCostBrute + 
                    data.OperationalExpenses + 
                    data.PaymentSheetBrute + 
                    data.Theft +
                    data.Transportation +
                    data.Withdraw
                );
                totalComercializationCost = totalComercializationCostPlaceholder;
                
            }) 
        })
    }

    function getDataOfProductSelect() {
        const productAmount = document.getElementById('productAmount').value
        let productsCodeArray = [];
        let productsAmountArray = [];
        for(let b = 0; b < productAmount; b++) {
            const value = document.getElementById('input' + b).value;
            productsAmountArray.push(value);
        }
        
        for(let i = 0; i < productAmount; i++) {
            const value = document.getElementById('select' + i).value;
            const pricePlaceholder = productsArray[value].price;
            const codePlaceholder = productsArray[value].code;
            const s = parseFloat(pricePlaceholder * productsAmountArray[i]);
            materialPrice += s;
            productsCodeArray.push(codePlaceholder);
        }

        
        
        return productsCodeArray;
    }

    function submit() {
        const productsCodeArray = getDataOfProductSelect();
        const price = materialPrice;
        const name = document.getElementById('name').value;
        const description = document.getElementById('description').value;
        const hourAmount = document.getElementById('hourAmount').value;
        const seal1 = document.getElementById('seal1').value;
        const seal2 = document.getElementById('seal2').value;
        const seal3 = document.getElementById('seal3').value;
        const modelist = document.getElementById('modelist').value;
        const observations = document.getElementById('observations').value;
        document.getElementById('priceCost').value = parseFloat((laborCost * hourAmount) + materialPrice);
        
    }

    function signUpImages() {
        const file1 = document.getElementById('file1').files[0];
        const file2 = document.getElementById('file2').files[0];
        const storage = firebase.storage();
        const storageRef = storage.ref();
        let originalName = file1.name.split('.');
        let child = storageRef.child('productsImage/' + originalName[0] + Date.now() + '.' + originalName[1]);
        let imageRef = [];
        child.put(file1).then((resp) => {
            const referenceUrl = storageRef.child(resp.metadata.fullPath);
            referenceUrl.getDownloadURL().then((url) => {
                imageRef.push(url);
                originalName = file2.name.split('.');
                child = storageRef.child('productsImage/' + originalName[0] + Date.now() + '.' + originalName[1]);
                child.put(file2).then((resp) => {
                    const referenceUrl2 = storageRef.child(resp.metadata.fullPath);
                    referenceUrl2.getDownloadURL().then((url) => {
                        imageRef.push(url);
                        submit();
                    })
                })
            })
        }).catch((err) => {
            console.log(err);
        })

    }

}