const firestore = firebase.firestore();

window.onload = () => {
    let params = new URLSearchParams(location.search);
    const id = params.get('id');
    if(!id) {
        window.location.href = "colecao.php";
    }
    getData();

    function getData() {
        document.getElementById('rawMaterial').innerHTML = "";
        document.getElementById('Price').innerHTML = "";
            document.getElementById('Price_cel').innerHTML = "";
            document.getElementById('Name').innerHTML = "";
            document.getElementById('Name_cel').innerHTML = "";
            document.getElementById('Description').innerHTML = "";
            document.getElementById('ProductImage').src = "";
        firestore.collection('Datasheet').doc(id).get().then((doc) => {
            const data = doc.data();
            document.getElementById('Price').innerHTML = 'R$' + Math.ceil(data.salePrice);
            document.getElementById('Price_cel').innerHTML = 'R$' + Math.ceil(data.salePrice);
            document.getElementById('Name').innerHTML = data.name;
            document.getElementById('Name_cel').innerHTML = data.name;
            document.getElementById('Description').innerHTML = data.description;
            document.getElementById('ProductImage').src = data.image1;
            console.log(data)
            data.rawMaterial.forEach(value => {
                console.log(value)
                const html = ` 
                    <div class="card card-body">
                        <!-- MATERIAL UTILIZADO -->
                        ${value}
                    </div>
                `;
                document.getElementById('rawMaterial').innerHTML += html;
            });
            //document.getElementById('Loader').remove();
        }).catch((err) => {

        })
    }
}