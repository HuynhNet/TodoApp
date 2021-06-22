function isEmail(event) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var email = $('#emailInputed').val();
    if(email !== ''){
        if(regex.test(email) == false){
            alert('Email không đúng định dạng. Vui lòng nhập lại');
            event.preventDefault();
        }
    }
}
