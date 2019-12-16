class DomController {
    constructor() {
        return this;
    }
    addLoader() {
        const html = `
            <div id="Loader" class="lds-facebook"><div></div><div></div><div></div></div>
        `;
        document.getElementById('Content').innerHTML = "";
        document.getElementById('Content').innerHTML = html;
    }

    removeLoader() {

        if(document.getElementById('Loader')) {
            document.getElementById('Loader').remove();
        }

    }

    clearContent() {
        document.getElementById('Content').innerHTML = "";
    }
}



//Final Class de controle de suportes da DOM

class User extends DomController{
    constructor(auth, firestore = "", storage = "") {
        super();

        this.auth = auth;
        this.firestore = firestore;
        this.storage = storage;

    }

    login(email,password) {
        this.auth.signInWithEmailAndPassword(email,password).then(() => {
            window.location.href = "index.php";
        }).catch((err) => {
            abrirErro("Você não conseguiu se logar, tente novamente");
            
            setTimeout(() => {
                fecharErro();
            }, 1500)
        })
    }

    forIndexPage() {
        this.auth.onAuthStateChanged(user => {
            console.log(window.innerWidth)
            if(!user) {
                if(window.innerWidth < 500) {
                    let html = `<a href="login.php" class="pl-5 pr-2 link_menu_cel" style="font-size: 24px; font-weight: 400; color: #fff">Login</a><br>`
                    document.getElementById('menu_cel').innerHTML += html
                }
                else {
                    let html = `<a href="login.php" class="pl-3 pr-3">Login</a>`;
                    document.getElementById('HeaderContainer').innerHTML += html;
                }
                

            }
            else {
                let html = "";
                
                if(window.innerWidth > 500) {
                    
                    html = `
                        <a href="admin.php" class="pl-3 pr-3">Administrador</a>
                        <a href="logout.php" class="pl-3 pr-3">Logout</a>
                    `;
                    document.getElementById('HeaderContainer').innerHTML += html
                }
                else {
                    let html = `<a href="admin.php" class="pl-5 pr-2 link_menu_cel" style="font-size: 24px; font-weight: 400; color: #fff">Admin</a><br>
                    <a href="logout.php" class="pl-5 pr-2 link_menu_cel" style="font-size: 24px; font-weight: 400; color: #fff">Logout</a><br>
                    `
                    document.getElementById('menu_cel').innerHTML += html
                    
                    
                }

                ;
            }
        })
    }

    logout() {
        this.auth.signOut().then(() => {
            window.location.href = "index.php";
        })
    }



    index() {
        this.addLoader();
        this.firestore.collection('Users').onSnapshot((snapshot) => {

            this.clearContent();
            snapshot.forEach(doc => {
                const data = doc.data();
                const html = `
                <div class=" pt-5 pb-5 pr-5 pl-5 mt-4 text-center person" onclick="abrirModal('${data.email}', '${data.name}','${data.code}')">
                    <i class="fas fa-hard-hat"></i>
                    <h3>${data.name}</h3>
                </div>
                `;
                document.getElementById('Content').innerHTML += html;

            });
        })

    }

    search(term, bucket) {

        this.clearContent();
        this.firestore.collection('Users').orderBy(bucket).startAt(term).endAt(term+'\uf8ff').onSnapshot((snapshot) => {

            snapshot.forEach(doc => {

                const data = doc.data();
                const html = `
                <div class=" pt-5 pb-5 pr-5 pl-5 mt-4 text-center person" onclick="abrirModal('${data.email}', '${data.name}','${data.code}')">
                    <i class="fas fa-hard-hat"></i>
                    <h3>${data.name}</h3>
                </div>
                `;
                document.getElementById('Content').innerHTML += html;

            });
        })
    }

    save(name,email, password, image) {
        const storageRef = this.storage.ref();
        const originalName = image.name.split('.');
        const child = storageRef.child('userImages/' + originalName[0] + Date.now() + '.' + originalName[1]);
        let imageRef = "";
        child.put(image).then((resp) => {
            const referenceUrl = storageRef.child(resp.metadata.fullPath);
            referenceUrl.getDownloadURL().then((url) => {
                imageRef = url;
                this.auth.createUserWithEmailAndPassword(email,password).then((resp) => {
                    this.firestore.collection('Users').add({
                        name,
                        code: "",
                        email,
                        image: imageRef
                    }).then((resp) => {
                        const id = resp.id;
                        this.firestore.collection('Users').doc(id).set({
                            name,
                            email,
                            code: id,
                            image:imageRef
                        }).then((resp) => {



                        }).catch((err) => {
                            console.log(err)
                        })

                    }).catch((err) => {
                       console.log(err)
                    })
                }).catch((err) => {
                    console.log(err);
                })
            })
        })


    }



}




//Final da classe de Usuarios
