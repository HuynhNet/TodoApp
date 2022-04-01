
@if(session()->has('add_user_success'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: {{ session()->get('add_user_success') }},
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif
