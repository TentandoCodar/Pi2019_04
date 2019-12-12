


class Client extends DomController {
    constructor(firestore) {
        super();
        this.firestore = firestore;

    }


    save(name,email,phone,cnpj) {

        this.firestore.collection('Clients').add({
            name,
            email,
            phone,
            cnpj
        }).then((resp) => {
            const id = resp.id;
            this.firestore.collection('Clients').doc(resp.id).set({
                name,
                email,
                phone,
                cnpj,
                code:id
            }).then((resp) => {

            }).catch((err) => {
                window.location.href = "erro.php";
            })
        }).catch((err) => {
            window.location.href = "erro.php";
        })
    }

    index() {
        this.addLoader();
        this.firestore.collection('Clients').onSnapshot((snapshot) => {

            this.clearContent();
            snapshot.forEach(doc => {
                const data = doc.data();

                const html = `
                    <div class=" pt-5 pb-5 pr-5 pl-5 mt-4 text-center person" onclick="abrirModal('${data.name}', '${data.email}', '${data.cnpj}', '${data.phone}')">
                        <i class="fas fa-store"></i>
                        <h3>${data.name}</h3>
                    </div>
                `;
                document.getElementById('Content').innerHTML += html;

            });
        })
    }



    search(term, bucket) {

        this.clearContent();

        this.firestore.collection('Clients').orderBy(bucket).startAt(term).endAt(term+'\uf8ff').onSnapshot((snapshot) => {

            snapshot.forEach(doc => {
                const data = doc.data();
                const html = `
                <div class=" pt-5 pb-5 pr-5 pl-5 mt-4 text-center person" onclick="abrirModal('${data.email}', '${data.name}','${data.code}')">
                    <i class="fas fa-user-alt"></i>
                    <h3>${data.name}</h3>
                </div>
                `;
                document.getElementById('Content').innerHTML += html;

            });
        })
    }
}
