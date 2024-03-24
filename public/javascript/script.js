// Navbar ===========================================================
var navbar_link = document.getElementById('navbar-link');

function toogleNavbar(){
    if (navbar_link.style === "opacity:0") {
        navbar_link.style = "transform: translate(0px, -100%); opacity:0";
    } else {
        navbar_link.style = "transform: translate(0, 0px); opacity:100";
      }
}
// new DataTable('#example');

// Alert ============================================================
// Ambil elemen tombol dan div
var close_allert = document.getElementById('close_allert');
var allert = document.getElementById('allert');

// Tambahkan event listener untuk tombol
close_allert.addEventListener('click', function() {
    // Sembunyikan div
    allert.style = 'transform: translate(-100%, 0px); opacity:0';
});

