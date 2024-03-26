new DataTable('#example');

function navbar(){
    var navbar_link = document.getElementById('navbar-link');
    var navbar_bar = document.getElementById('navbar_bar');
    console.log('Tombol navbar-toggle telah diklik');
    navbar_link.classList.toggle('hidden');
}
function closeAlert(){
    var allert = document.getElementById('allert');
    console.log('Tombol navbar-toggle telah diklik');
    allert.style = 'transform: translate(-100%, 0px); opacity:0';
}
