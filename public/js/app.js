$(function () {
    $('form.create-catalog-form').on('submit', function () {
        var csrfName = $('#csrf_name').val();
        var csrfValue =$('#csrf_value').val();
        var csrfData = {"csrf_name" : csrfName,"csrf_value" : csrfValue};
        $.ajax({
            url : "/api/catalog/add",
            type: "POST",
            data : csrfData,
            success: function(data, textStatus, jqXHR)
            {
                console.log('SUCCESS');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
    });
});



