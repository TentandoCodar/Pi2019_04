
<script src="js/class/User.js"></script>

<script>
    const auth = firebase.auth();

    auth.onAuthStateChanged(resp => {
        
        if(!resp) {
            window.location.href = "index.php";
        }
        else {
            console.log("dadsa")
        }
    })
    
    const user = new User(firebase.auth(),firebase.firestore());

    user.forIndexPage();
</script>




