@if (session('success'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "bottom",
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
        });
        Toast.fire({
            icon: "success",
            title: "{{ session('success') }}",
        });
    </script>
@endif
