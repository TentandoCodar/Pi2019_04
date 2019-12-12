const user = new User(firebase.auth());

window.onload = () => {
    user.logout();
}