function loder(){
    document.querySelector('.loder-container').classList.add('fade-out');
}
function fadeOut(){
    setInterval(loder,3000);
}
window.onload = fadeOut;