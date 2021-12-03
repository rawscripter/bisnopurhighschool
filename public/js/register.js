$(document).ready(function () {

    function ValidateImg(file) {
        let img = new Image()
        img.src = window.URL.createObjectURL(file)
        img.onload = () => {
            if (img.width === 300 && img.height === 300) {
                return true;
            } else {
                document.getElementById("ApplicantPhoto").value = null;
                alert('ছবির দৈর্ঘ্য ও প্রস্থ্য অবশ্যই 300X300 পিক্সেল হতে হবে।')
                return false;
            }

        }

    }

    const validateImageSize = (file) => {
        let kb = file.size / 1024;
        if (kb > 100) {
            document.getElementById("ApplicantPhoto").value = null;
            alert('ছবির সাইজ  অবশ্যই  100 কিলোবাইটের নিচে হতে হবে।')
            return false;
        } else {
            return true;
        }
    }

    function readURL(input, previewId) {
        ValidateImg(input.files[0]);
        if (!validateImageSize(input.files[0])) return;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(previewId).prop('src', e.target.result);
                $(previewId).hide();
                $(previewId).fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#ApplicantPhoto").change(function () {
        readURL(this, '#ApplicantPhotoImage');
    });

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
    $('.desire_class').change(function () {
        var desire_class = $(this).val();
        // ajax request
        if (desire_class > 1) {
            $("#prevSchoolDetails").css('display', 'block');
        } else {
            $("#prevSchoolDetails").css('display', 'none');
        }
    });


});
