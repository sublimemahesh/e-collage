
$(document).ready(function () {
    
    //category Change
    $('#category').change(function () {

        var category = $(this).val();
       
        $('#sub_category').empty();
        $.ajax({
            url: "ajax/post-and-get/category.php",
            type: "POST",
            data: {
                category: category,
                action: 'GET_SUB_CATEGORY_BY_CATEGORY'
            },
            dataType: "JSON",
            success: function (jsonStr) {

                var html = '<option value="" "> -- Select sub category -- </option>';
                $.each(jsonStr, function (i, data) {
                    html += '<option value="' + data.id + '">';
                    html += data.name;
                    html += '</option>';
                });

                $('#sub_category').empty();
                $('#sub_category').append(html);
            }
        });
    });
    
//Sub Category change    
    $('#sub_category').change(function () {

        var sub_category = $(this).val();
       
        $('#subject').empty();
        $.ajax({
            url: "ajax/post-and-get/category.php",
            type: "POST",
            data: {
                sub_category: sub_category,
                action: 'GET_SUBJECT_BY_SUB_CATEGORY'
            },
            dataType: "JSON",
            success: function (jsonStr) {

                var html = '<option value="" "> -- Select subject -- </option>';
                $.each(jsonStr, function (i, data) {
                    html += '<option value="' + data.id + '">';
                    html += data.name;
                    html += '</option>';
                });

                $('#subject').empty();
                $('#subject').append(html);
            }
        });
    });
});

