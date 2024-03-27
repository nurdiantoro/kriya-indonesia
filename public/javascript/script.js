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

// Modal Edit Contact
$(document).ready(function() {
    $('.tombol_edit').on('click', function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var email = $(this).data('email');
        var email2 = $(this).data('email2');
        var telp = $(this).data('telp');
        var urutan = $(this).data('urutan');
        $('#edit_id').val(id);
        $('#edit_name').val(name);
        $('#edit_email').val(email);
        $('#edit_email2').val(email2);
        $('#edit_telp').val(telp);
        $('#edit_urutan').val(urutan);
    });
});
