


class Product extends DomController {
    constructor(firestore) {
        super();
        this.firestore = firestore;
    }


    save(name,price,unity,providerCode) {
        this.firestore.collection('Products').add({
            name,
            price,
            unity,
            providerCode
        }).then((resp) => {
            const id = resp.id;
            this.firestore.collection('Products').doc(id).set({
                name,
                price,
                unity,
                providerCode,
                code: id
            }).then((resp) => {



            }).catch((err) => {
                console.log(err)
            })

        }).catch((err) => {
           console.log(err)
        })
    }
    index() {
        this.addLoader();

        this.firestore.collection('Products').onSnapshot((snapshot) => {
            this.clearContent();
            snapshot.forEach(doc => {
                const data = doc.data();

                const html = `
                    <div class=" pt-5 pb-5 pr-5 pl-5 mt-4 text-center person" onclick="productModalOpen('${data.name}', '${data.price}', '${data.unity}', '${data.code}', '${data.providerCode}')">
                        <i class="fas fa-shopping-bag"></i>
                        <h3>${data.name}</h3>
                    </div>
                `;
                document.getElementById('Content').innerHTML += html;

            });

        })

    }
    search(term, bucket) {
        this.clearContent();
        this.firestore.collection('Products').orderBy(bucket).startAt(term).endAt(term+'\uf8ff').onSnapshot((snapshot) => {

            snapshot.forEach(doc => {

                const data = doc.data();
                const html = `
                <div class=" pt-5 pb-5 pr-5 pl-5 mt-4 text-center person" onclick="productModalOpen('${data.name}', '${data.price}', '${data.unity}', '${data.code}', '${data.providerCode}')">
                        <i class="fas fa-shopping-bag"></i>
                        <h3>${data.name}</h3>
                </div>
                `;
                document.getElementById('Content').innerHTML += html;

            });
        })
    }


}
