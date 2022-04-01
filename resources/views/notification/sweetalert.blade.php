
@if(session()->has('addUserSuccess'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: "{{ session()->get('addUserSuccess') }}",
            showConfirmButton: false,
            timer: 1500
        })
    </script>
    @php
        session()->forget('loginFail');
    @endphp
@endif

@if(session()->has('loginFail'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: "{{ session()->get('loginFail') }}",
            showConfirmButton: false,
            timer: 1500
        })
    </script>
    @php
        session()->forget('loginFail');
    @endphp
@endif

