new DataTable('#example');

// Ambil elemen tombol dan div
var close_allert = document.getElementById('close_allert');
var allert = document.getElementById('allert');

// Tambahkan event listener untuk tombol
close_allert.addEventListener('click', function() {
    // Sembunyikan div
    allert.style.display = 'none';
});
