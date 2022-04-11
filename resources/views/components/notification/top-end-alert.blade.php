@if(session()->has($sessionName))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: "{{ session()->get($sessionName) }}",
            showConfirmButton: false,
            timer: 1500
        })
    </script>
    {{ $forgotSession }}
@endif
