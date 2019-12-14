const firestore = firebase.firestore();
const storage = firebase.storage();
window.onload = () => {
    const submitModalButton = document.getElementById('submitModalButton');
    const searchButton = document.getElementById('searchButton');

    searchButton.addEventListener('click', () => search());
    submitModalButton.addEventListener('click', () => deleteImages());

    getData();

    let image1 = [];
    let image2 = [];
    let code = [];
    function getData() {
        firestore.collection("Datasheet").onSnapshot(snapshot => {
            image1 = [];
            image2 = [];
            code = [];
            document.getElementById('Content').innerHTML = "";
            let counter = 0;
            snapshot.forEach(doc => {
                const data = doc.data();
                image1.push(data.image1);
                image2.push(data.image2);
                code.push(data.code);;
                document.getElementById('Content').innerHTML += `
                    <div class=" pt-5 pb-5 pr-5 pl-5 mt-4 text-center person" onclick="openDatasheetModal('${data.name}', '${data.code}', '${counter}')">
                        <i class="fas fa-hard-hat"></i>
                        
                        <h3>${data.name}</h3>
                    </div>
                `;

                counter++;
                
            })
        })
    }

    function deleteImages() {
        const index = document.getElementById('index').value;
        console.log(image1[index]);
        console.log(image2[index]);
        if(image1[index] != "" || image2[index] != "") {
            const ref1 = storage.refFromURL(image1[index]);
            const ref2 = storage.refFromURL(image2[index]);
    
            ref1.delete().then((resp) => {
                ref2.delete().then((resp) => {
                    editImages(index)
                }).catch((err) => {
    
                })
            }).catch((err) => {
                console.log(err);
            })
        }
        else {
            editImages(index);
        }
        
    }

    function editImages(index) {
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
                        firestore.collection('Datasheet').doc(code[index]).update({
                            image1: imageRef[0],
                            image2: imageRef[1],
                        }).then(() => {
                            closeModalDatasheet();
                            getData();
                        })
                    })
                }) 
            })
        }).catch((err) =>{
            console.log(err);
        })
    }

    function search() {
        const term = document.getElementById('searchValue').value;
        const collection = document.getElementById('collection').value;
        firestore.collection('Datasheet').orderBy(collection).startAt(term).endAt(term+'\uf8ff').onSnapshot((snapshot) => {

            image1 = [];
            image2 = [];
            code = [];
            document.getElementById('Content').innerHTML = "";
            let counter = 0;
            snapshot.forEach(doc => {
                const data = doc.data();
                image1.push(data.image1);
                image2.push(data.image2);
                code.push(data.code);;
                document.getElementById('Content').innerHTML += `
                    <div class=" pt-5 pb-5 pr-5 pl-5 mt-4 text-center person" onclick="openDatasheetModal('${data.name}', '${data.code}', '${counter}')">
                        <i class="fas fa-hard-hat"></i>
                        
                        <h3>${data.name}</h3>
                    </div>
                `;

                counter++;
                
            })
        })
    }
    
}