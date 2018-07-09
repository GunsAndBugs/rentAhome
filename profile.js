$(document).ready(function () {

    // $('[data-toggle="tooltip"]').tooltip();

    

    $('#submt').click(function () {
        //alert("button o thik ase");
        var vzip = $('#zip').val();
        var vspace = $('#space').val();
        var vcost = $('#cost').val();
        var vavail = $('#avail').val();
        var vdes = $('#des').val();
        $.post(
            "/renthome/addad.php",
            {
                zip: vzip,
                space: vspace,
                cost: vcost,
                avail: vavail,
                des: vdes

            },
            function (data, status) {
                //alert(data);
                $('#msg').html(
                    function (i, orginT) {
                        return data;
                    }
                );
            });

    });

   





});