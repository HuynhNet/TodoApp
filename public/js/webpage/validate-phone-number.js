function isPhoneNumber(e) {
    var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
    var phoneNumber = $('#phoneNumberInputed').val();
    if (phoneNumber !== '') {
        if (vnf_regex.test(phoneNumber) == false) {
            alert('Số điện thoại không đúng định dạng. Vui lòng nhập lại');
            $('#phone').val('');
            $('#phone').focus();
            e.preventDefault();
        }
    }
}
