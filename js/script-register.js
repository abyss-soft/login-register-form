function validateEmail(email) {
    var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return reg.test(email);
}

$(document).ready(function () {
    $("#register").submit(function () {
        return false;
    });
    $("#send").on("click", function () {
        var firstnamevl = $("#firstname").val();
        var lastnamevl = $("#lastname").val();
        var emailval = $("#email").val();
        var passwdvl = $("#password").val();
        var confirmpasswordvl = $("#confirmpassword").val();
        var gendervl = $("#inputgender").val();
        var passlen = passwdvl.length;
        var confpasslen = confirmpasswordvl.length;
        var firstnamevllen = firstnamevl.length;
        var lastnamevllen = lastnamevl.length;

        var mailvalid = validateEmail(emailval);

        if (firstnamevllen < 1) {
            $("#firstname").addClass("error");
        }
        else if (firstnamevllen >= 1) {
            $("#firstname").removeClass("error");
        }

        if (lastnamevllen < 1) {
            $("#lastname").addClass("error");
        }
        else if (lastnamevllen >= 1) {
            $("#lastname").removeClass("error");
        }


        if (mailvalid == false) {
            $("#email").addClass("error");
        }
        else if (mailvalid == true) {
            $("#email").removeClass("error");
        }

        if (passlen < 4) {
            $("#password").addClass("error");
        }
        else if (passlen >= 4) {
            $("#password").removeClass("error");
        }

        if (confpasslen < 4) {
            $("#confirmpassword").addClass("error");
        }
        else if (confpasslen >= 4) {
            $("#confirmpassword").removeClass("error");
        }

        if (passwdvl != confirmpasswordvl) {
            $("#confirmpassword").addClass("error");
            $("#password").addClass("error");
        }
        else if (passwdvl == confirmpasswordvl) {
            $("#confirmpassword").removeClass("error");
            $("#password").removeClass("error");
        }

        if (mailvalid == true && passlen >= 4 && passwdvl == confirmpasswordvl && (document.getElementById('acceptrules').checked)) {
            $.ajax({
                type: 'POST',
                url: 'sendnewuser.php',
                data: $("#register").serialize(),
                success: function (data) {
                    if (data == "true") {
                         location.replace("index.php")
                    }
                    else {
                        $("#send").prop("disabled", false);
                    }
                }
            });
        }
    });
});