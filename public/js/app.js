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

    $('form.create-product-form').on('submit', function () {
        var catalog_id = $('select[car-brand] option').val();
        console.log(catalog_id);
        $.get('/api/product/add', function () {
            data: {
                catalog_id: catalog_id;
            }
        })
    });

    var i = 1;
    $('.show-catalog tbody tr').each(function () {
        $('th', this).html(i);
        i++;
    });
});



