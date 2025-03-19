function logout(){
    fetch('', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'logout=true'
    }).then(() => {
        window.location.reload();
    });
}
document.addEventListener("DOMContentLoaded",()=>{

})