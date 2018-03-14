$(function () {

    var i = 1;
    $('.show-catalog tbody tr').each(function () {
        $('th', this).html(i);
        i++;
    });

    $('.show-product_handle a.submit_link').click(function () {
        console.log("I'm alive");
        var carBrand, title, year, price, description;
        $('form.show-catalog td').each(function () {
            carBrand = $("select[name='car-brand']").val();
            title = $("input[name='title']").val();
            year = $("input[name='year']").val();
            price= $("input[name='price']").val();
            description= $("input[name='description']").val();
        });
        $.post('/ajax/product/add', {title: title});

        // data: {
        //     carBrand: carBrand;
        //     title: title;
        //     year: year;
        //     price: price;
        //     description: description;
        // }
    });

});



