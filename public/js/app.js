$(function () {
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



