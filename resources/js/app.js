import './bootstrap';

new DataTable('#example',{
    responsive: true
});
new DataTable('#table_exhibitor_form_a',{
    order: [0, 'des'],

    responsive: {
        details: false
    }
});
new DataTable('#table_visitor', {
    order: [0, 'des'],
    responsive: true,
    columns: [
        { width: '10%' },
        { width: '20%' },
        { width: '40%' },
        { width: '20%' },
        { width: '10%' },
    ],
});

// COUNTDOWN ===============================================
var eventDate = new Date("July 10, 2024 00:00:00");

function updateCountdown() {
    var now = new Date();
    var distance = eventDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);


    if (distance < 0) {
        clearInterval(timer);
        document.getElementById("countdown").style.display = "hidden";
    }else{
        document.getElementById("countdown").style.display = "flex";
        document.getElementById("countdown").innerHTML =
             `<span class='basis-1/4 font-bold'>${days}</span> `
            + `<span class='basis-1/4 font-bold'>${hours}</span> `
            + `<span class='basis-1/4 font-bold'>${minutes}</span> `
            + `<span class='basis-1/4 font-bold'>${seconds}</span> `

            + `<span class='basis-1/4 text-sm'>Hari</span> `
            + `<span class='basis-1/4 text-sm'>Jam</span> `
            + `<span class='basis-1/4 text-sm'>Menit</span> `
            + `<span class='basis-1/4 text-sm'>Detik</span> `;
    }
}

// Update countdown setiap detik
var timer = setInterval(updateCountdown, 1000);
// COUNTDOWN ===============================================


// Segera Daftar Bar =======================================
var kuota = 0;

// Fungsi untuk memulai animasi saat elemen masuk ke tampilan layar
function startAnimation(entries, observer) {
  entries.forEach(entry => {
    if (entry.isIntersecting && kuota == 0) {
      move();
      observer.unobserve(entry.target); // Berhenti mengamati setelah animasi dimulai
    }
  });
}

// Membuat objek IntersectionObserver
var observer = new IntersectionObserver(startAnimation, { threshold: 0.5 });

// Mengamati elemen dengan id 'myBar'
var elem = document.getElementById("myBar");
observer.observe(elem);

// Fungsi animasi
function move() {
  kuota = 1;
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 70) {
      clearInterval(id);
      kuota = 0;
    } else {
      width++;
      elem.style.width = width + "%";
      elem.innerHTML = width + "%";
    }
  }
}
// Segera Daftar Bar =======================================
