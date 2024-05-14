

function navbar() {
    var navbar_link = document.getElementById('navbar-link');
    var navbar_bar = document.getElementById('navbar_bar');
    console.log('Tombol navbar-toggle telah diklik');
    navbar_link.classList.toggle('hidden');
}

function closeAlert() {
    var allert = document.getElementById('allert');
    console.log('Tombol navbar-toggle telah diklik');
    allert.style = 'transform: translate(-100%, 0px); opacity:0';
}

$(document).ready(function () {
    // Modal Edit Contact
    $('.tombol_edit').on('click', function () {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var email = $(this).data('email');
        var email2 = $(this).data('email2');
        var telp = $(this).data('telp');
        var foto = $(this).data('foto');
        var urutan = $(this).data('urutan');
        $('#edit_id').val(id);
        $('#edit_name').val(name);
        $('#edit_email').val(email);
        $('#edit_email2').val(email2);
        $('#edit_telp').val(telp);
        $('#edit_foto_lama').val(foto);
        $('#edit_urutan').val(urutan);
    });

    // Modal Delete Contact
    $('.tombol_delete').on('click', function () {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var foto = $(this).data('foto');
        $('#delete_id').val(id);
        $('#delete_name').val(name);
        $('#delete_foto').val(foto);
    });

    // Modal Edit Highlight
    $('.tombol_edit_highlight').on('click', function () {
        console.log('tombol_edit_highlight di klik')
        var id = $(this).data('id');
        var logo = $(this).data('logo');
        var perusahaan = $(this).data('perusahaan');
        var website = $(this).data('website');
        var urutan = $(this).data('urutan');
        $('#edit_id').val(id);
        $('#edit_logo_lama').val(logo);
        $('#edit_perusahaan').val(perusahaan);
        $('#edit_website').val(website);
        $('#edit_urutan').val(urutan);
    });

    // Modal Delete Highlight
    $('.tombol_delete_highlight').on('click', function () {
        console.log('tombol_delete_highlight di klik')
        var id = $(this).data('id');
        var logo = $(this).data('logo');
        var perusahaan = $(this).data('perusahaan');
        $('#delete_id').val(id);
        $('#delete_logo').val(logo);
        $('#delete_perusahaan').val(perusahaan);
    });

    // Owl-Carousel
    $(".owl-carousel").owlCarousel({
        margin: 40,
        loop: true,
        center: true,
        autoWidth: true,
        nav: false,
        dots: false,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 3000,
        animateOut: false,
        animateIn: false,
        smartSpeed: 3000,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            }
        }
    });
});
