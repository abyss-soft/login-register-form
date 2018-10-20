   function validateEmail(email) {
        var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return reg.test(email);
    }

    $(document).ready(function () {
        $("#login").submit(function () {
            return false;
        });
        $("#send").on("click", function () {
            var emailval = $("#email").val();
            var passwdvl = $("#password").val();
            var passlen = passwdvl.length;
            var mailvalid = validateEmail(emailval);

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

            if (mailvalid == true && passlen >= 4) {
                $.ajax({
                    type: 'POST',
                    url: 'sendlogin.php',
                    data: $("#login").serialize(),
                    success: function (data) {
                        if (data == "true") {
                            location.replace("viewuser.php")
                        }
                        else {
                            $("#send").prop("disabled", false);
                            $("#password").addClass("error");
                        }
                    }
                });
            }
        });
    });