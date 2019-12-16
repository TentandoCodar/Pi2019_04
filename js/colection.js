const firestore = firebase.firestore();
const user = new User(firebase.auth());
window.onload = () => {
    let params = new URLSearchParams(location.search);
    const type = params.get('type');
    console.log(type)
    getData(type);
    user.forIndexPage();
    

    function getData(type) {
        if(!type) {
            firestore.collection("Datasheet").onSnapshot(snapshot => {
                document.getElementById('Content').innerHTML = "";
                snapshot.forEach(doc => {
                    const data = doc.data();
                    const html = `
                    <div class="col-sm-4 text-center" style="cursor: pointer;" onclick="openProduct('${data.code}')">
                        <img src="${data.image1}" alt="" class="img-fluid rounded mx-auto d-block">
                        <div class="pt-2 pb-2">
                        <span style="color: #6b6b6b; font-size: 14px;">${data.name}</span><br>
                        <span>R$${parseFloat(data.salePrice).toFixed(2)}</span>
                        </div>
                    </div>
                    `;
                    document.getElementById('Content').innerHTML += html;
                });
            })
        }
        else {
            firestore.collection("Datasheet").where("type", "==", type).onSnapshot(snapshot => {
                document.getElementById('Content').innerHTML = "";
                snapshot.forEach(doc => {
                    const data = doc.data();
                    const html = `
                    <div class="col-sm-4 text-center" style="cursor: pointer;" onclick="openProduct('${data.code}')">
                        <img src="${data.image1}" alt="" class="img-fluid rounded mx-auto d-block">
                        <div class="pt-2 pb-2">
                        <span style="color: #6b6b6b; font-size: 14px;">${data.name}</span><br>
                        <span>R$${Math.ceil(data.salePrice)}</span>
                        </div>
                    </div>
                    `;
                    document.getElementById('Content').innerHTML += html;
                });
            })
        }
    }

    
}