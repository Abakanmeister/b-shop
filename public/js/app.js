$(function () {
    $('form.create-catalog').on('submit', function () {
        $.post('/admin/', data);
    });
});

