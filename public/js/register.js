$(document).ready(function () {
    // get select value
    $('#present_division').change(function () {
        var division = $(this).val();
        // ajax request
        $.get('/get-districts/' + division, function (data) {
            $('#present_district').empty();
            $('#present_thana').empty();
            $('#present_district').append('<option value="">Select District</option>');
            $.each(data, function (index, value) {
                $('#present_district').append('<option value="' + value.id + '">' + value.name + '</option>');
            });
        });
    });
    $('#present_district').change(function () {
        var division = $(this).val();
        // ajax request
        $.get('/get-thanas/' + division, function (data) {
            $('#present_thana').empty();
            $('#present_thana').append('<option value="">Select Thana</option>');
            $.each(data, function (index, value) {
                $('#present_thana').append('<option value="' + value.id + '">' + value.name + '</option>');
            });
        });
    });
    $('#permanent_devision').change(function () {
        var division = $(this).val();
        // ajax request
        $.get('/get-districts/' + division, function (data) {
            $('#permanent_district').empty();
            $('#permanent_thana').empty();
            $('#permanent_district').append('<option value="">Select District</option>');
            $.each(data, function (index, value) {
                $('#permanent_district').append('<option value="' + value.id + '">' + value.name + '</option>');
            });
        });
    });
    $('#permanent_district').change(function () {
        var division = $(this).val();
        // ajax request
        $.get('/get-thanas/' + division, function (data) {
            $('#permanent_thana').empty();
            $('#permanent_thana').append('<option value="">Select Thana</option>');
            $.each(data, function (index, value) {
                $('#permanent_thana').append('<option value="' + value.id + '">' + value.name + '</option>');
            });
        });
    });
});
