// Navbar ===========================================================

function navbar(){
    var navbar_link = document.getElementById('navbar-link');
    var navbar_bar = document.getElementById('navbar_bar');
    console.log('Tombol navbar-toggle telah diklik');
    navbar_link.classList.toggle('hidden');
}
// new DataTable('#example');

// Alert ============================================================
// Ambil elemen tombol dan div

// Tambahkan event listener untuk tombol

function closeAlert(){
    var allert = document.getElementById('allert');
    console.log('Tombol navbar-toggle telah diklik');
    allert.style = 'transform: translate(-100%, 0px); opacity:0';
}

// close_allert.addEventListener('click', function() {
    // var close_allert = document.getElementById('close_allert');
    // var allert = document.getElementById('allert');
//     // Sembunyikan div
//     allert.style = 'transform: translate(-100%, 0px); opacity:0';
// });

