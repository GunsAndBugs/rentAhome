$(document).ready(function () {

    // $('[data-toggle="tooltip"]').tooltip();
    //alert("");

    $('#submt').click(function () {

        var vname = $('#name').val();
        var vemail = $('#email').val();
        var vpass1 = $('#pass1').val();
        var vpass2 = $('#pass2').val();
        $.post(
            "/renthome/regist.php",
            {
                name: vname,
                email: vemail,
                pass1: vpass1,
                pass2: vpass2

            },
            function (data, status) {
                alert("Data: " + data + "\nStatus: " + status);
            });

    });


});