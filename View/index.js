function validateEmail(mail) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(String(mail).toLowerCase())) {
        return false
    } else {
        return true
    }
}

function validateNumber(number) {
    number = number.replace(/[^0-9]/g, '');

    if (number == "" || number.length != 10) {
        return false;
    } else {
        return true;
    }
}

function verify() {
    var mail = document.getElementById("mail").value;
    var number = document.getElementById("number").value;
    var name = document.getElementById("name").value;
    var firstname = document.getElementById("firstname").value;
    var password = document.getElementById("password").value;
    var alert2 = document.getElementById("alert");
    if (mail == "" || number == "" || name == "" || firstname == "" || password == "") {
        alert2.innerHTML = "Veuillez remplir tous les champs";
        alert2.style.color = "red";
        document.getElementById("firstname").focus();
    } else {
        if (!validateNumber(number)) {
            alert2.innerHTML = "Numéro incorrect";
            alert2.style.color = "red";
            document.getElementById("number").focus();
        } else {
            if (!validateEmail(mail)) {
                alert2.innerHTML = "Mail incorrect";
                alert2.style.color = "red";
                document.getElementById("mail").focus();
            } else {
                alert2.innerHTML = "";
                document.getElementById("form").submit();
            }
        }
    }
}


