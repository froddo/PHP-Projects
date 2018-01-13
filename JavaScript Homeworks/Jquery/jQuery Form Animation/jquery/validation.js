function validateForm() {

    for(let i = 0;  i < myform.elements.length; i++){
        if (myform.elements[i].className == "req" && myform.elements[i].value.length == 0){
            $(document).ready(function () {
                $('p').text('Please fill in all required fields like *');
            });
            return false;
        }
    }
    let email = document.getElementById('email').value;
    let atpos = email.indexOf('@');
    let dotpos = email.lastIndexOf('.');
    if (atpos < 1 || dotpos < atpos+2 || dotpos+2 >= x.length){
        $(document).ready(function () {
            $('p').text('Please type a valid email address');
        });
        return false;
    }

}