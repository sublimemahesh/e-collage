
$(document).ready(function () {

//Create Post
    $('#upload_first_image').change(function () {

        $('.flipScrollableArea').removeClass('hidden');
        $('._uploadloaderbox').css('display', 'inline-block');

        var left = $('._uploadouterbox').css('left');
        var newleft = parseInt(left) + 105;
        $('._uploadouterbox').css('left', newleft + 'px');

//        $('._uploadloaderbox').append()


        $('#loading').css('display', 'block')

//        loader();
//        setTimeout(function () {
//            stoploader();
//        }, 3000);
//        setTimeout(function () {
        var fi = document.getElementById('upload_first_image'); // GET THE FILE INPUT.

        if (fi.files.length > 0) {

            for (var i = 0; i <= fi.files.length - 1; i++) {
                var fsize = fi.files.item(i).size;      // THE SIZE OF THE FILE.
                if (Math.round((fsize / 1024)) > 10000) {
                    swal({
                        title: "Error!",
                        text: "Image is too large and please upload a image size less than 10MB",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    return false;
                }
            }
        }
        var formData = new FormData($('#post-form')[0]);

        $.ajax({
            url: "ajax/post-and-get/student-post.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (mess) {

                var arr = mess.filename.split('.');

                var html = '';
                html += '<div class="_uploadedimagesbox" role="presentation" id="col_' + arr[0] + '">';
                html += '<div data-testid="media-attachment-photo">';
                html += '<span>';
                html += '<div class="_uploadedimages" style="width: 100px; height: 100px;margin:5px;" id="js_3mg" aria-controls="js_3mh" aria-haspopup="true">';
                html += '<img alt="Cute-baby-girl-pics-for-facebook-profile-4-1024x640.jpg" class="img" src="upload/post/thumb2/' + mess.filename + '" width="100" height="100">';
                html += '<input type="hidden" class="post-all-images" name="post-all-images[]" value="' + mess.filename + '"/>';
                html += '<i class="img-post-delete _buttons _btn _removebtn _5upp _42ft fa fa-times" title="Remove Photo" id="' + arr[0] + '"></i>';
                html += '</div>';
                html += '</span>';
                html += '</div>';
                html += '</div>';

                $('.flipScrollableArea').removeClass('hidden');
                $('._uploadloaderbox').css('display', 'none');
                $('.flipScrollableAreaContent1').prepend(html);



                $('#upload_first_image').val('');
                $('#loading').css('display', 'none');
                var left1 = $('._uploadloaderbox').css('left');
                var newleft1 = parseInt(left1) + 105;
                $('._uploadloaderbox').css('left', newleft1 + 'px');
                $('.share-post').removeAttr('disabled');
//             } 
            },
            cache: false,
            contentType: false,
            processData: false,

        });

//        }, 2000);

    });

//Delete image for edit
$('.img-post-delete').click(function () {

        var id = $(this).attr("data-id");

        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                url: "ajax/post-and-get/student-post.php",
                type: "POST",
                data: {
                    id: id,
                    option: 'DELETEPHOTO'
                },
                dataType: "JSON",
                success: function (jsonStr) {
                    if (jsonStr.status) {

                        swal({
                            title: "Deleted!",
                            text: "Your imaginary file has been deleted.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
//                        $('.warningModalAlert_2').modal('hide');
                        $('.del').css('display', 'none');
                        $('.div' + id).remove();

                    }
                }
            });
        });
    });


$('.post-delete').click(function () {

        var id = $(this).attr("data-id");
        
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                url: "ajax/post-and-get/student-post.php",
                type: "POST",
                data: {
                    id: id,
                    option: 'DELETEPOST'
                },
                dataType: "JSON",
                success: function (jsonStr) {
                    if (jsonStr.status) {

                        swal({
                            title: "Deleted!",
                            text: "Your imaginary file has been deleted.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                       
                        $('#div_r' + id).remove();
                    }
                }
            });
        });
    });
    
//Update image section
 $('.upload_first_image_edit').change(function () {
        
        $('.flipScrollableArea_2').removeClass('hidden');
        $('._uploadloaderbox_edit').css('display', 'inline-block');

        var left = $('._uploadouterbox_edit').css('left');
        var newleft = parseInt(left) + 105;
        $('._uploadouterbox_edit').css('left', newleft + 'px');
        $('.loading_2').css('display', 'block')
        
        var formData = new FormData($('.edit-post-form')[0]);
    
        $.ajax({
            url: "ajax/post-and-get/student-post.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (mess) {

                var arr = mess.filename.split('.');
               
                var html = '';
                html += '<div class="_uploadedimagesbox" role="presentation" id="col_' + arr[0] + '">';
                html += '<div data-testid="media-attachment-photo">';
                html += '<span>';
                html += '<div class="_uploadedimages" style="width: 100px; height: 100px;margin:5px;" id="js_3mg" aria-controls="js_3mh" aria-haspopup="true">';
                html += '<img alt="Cute-baby-girl-pics-for-facebook-profile-4-1024x640.jpg" class="img" src="upload/post/thumb2/' + mess.filename + '" width="100" height="100">';
                html += '<input type="hidden" class="post-all-images" name="post-all-images[]" value="' + mess.filename + '"/>';
                html += '<i class="img-post-delete _buttons _btn _removebtn _5upp _42ft fa fa-times" title="Remove Photo" id="' + arr[0] + '"></i>';
                html += '</div>';
                html += '</span>';
                html += '</div>';
                html += '</div>';

                $('.flipScrollableArea_edit').removeClass('hidden');
                $('._uploadouterbox_edit').css('display', 'none');
                $('.flipScrollableAreaContent2').prepend(html);



                $('.upload_first_image_edit').val('');
                $('.loading_2').css('display', 'none');
                var left1 = $('._uploadloaderbox_edit').css('left');
                var newleft1 = parseInt(left1) + 105;
                $('._uploadloaderbox_edit').css('left', newleft1 + 'px');
                $('.share-post').removeAttr('disabled');
//             } 
            },
            cache: false,
            contentType: false,
            processData: false,

        });

//        }, 2000);

    });

//Update Post
    $('.edit-post').click(function () {      
        var formData = new FormData($('#edit-post-form')[0]);
        $.ajax({
            url: "ajax/post-and-get/post.php",
            cache: false,
            dataType: "json",
            type: "POST",
            data: {
                post_id: post_id,
                option: 'GETPOSTBYID'
            },
            success: function (post) {

                $.ajax({
                    url: "ajax/post-and-get/student.php",
                    cache: false,
                    dataType: "json",
                    type: "POST",
                    data: {
                        post_student: post.student,
                        action: 'GETSTUDENT'
                    },
                    success: function (student) {

                        $.ajax({
                            url: "post-and-get/ajax/post-photos.php",
                            cache: false,
                            dataType: "json",
                            type: "POST",
                            data: {
                                id: post.id,
                                option: 'GETPOSTPHOTOS'
                            },
                            success: function (result) {
                                if (result.thumb == '') {

                                    $('#remove-circle-' + post.id).empty();
                                    return true;
                                } else {
                                    $(function () {
                                        $('#gallery1').imagesGrid({
                                            images: result.thumb,
                                            full_images: result.full
                                        });
                                        var html1 = '';
                                        html1 += '<i class="fa fa-times-circle remove-post-image-' + post.id + '" id="remove-post-image"></i>';

                                        $('#remove-circle-' + post.id).append(html1);

                                    });
                                }
                            }
                        });

                        var html = '';
                        var img = '';

                        if (student.image_name) {
                            img = '<input type="image" src="img/member.jpg" width="48" height="48"  class="append_img profile-avetar-img " />';
                        } else {
                            img = '<input type="image" src="img/member.jpg" width="48" height="48"  class="append_img profile-avetar-img " /> ';
                        }


                        html += '<div id="warningModalAlert" tabindex="-1" role="dialog" class="modal fade">';
                        html += '<div class="modal-dialog">';
                        html += '<div class="modal-content">';
                        html += '<div class="modal-header">';
                        html += '<button type="button" class="close" data-dismiss="modal">';
                        html += '<span aria-hidden="true">×</span>';
                        html += '<span class="sr-only">Close</span>';
                        html += '</div>';
                        html += '<div class="modal-body">';
                        html += '<div class="text-center">';
                        html += '<span class="text-warning icon icon-exclamation-triangle icon-5x"></span>';
                        html += '<h3 class="text-warning">Info</h3>';
                        html += '<p>Animi ducimus id itaque totam saepe reiciendis corporis consectetur.</p>';
                        html += '<div class="m-t-lg">';
                        html += '<button class="btn btn-warning" data-dismiss="modal" type="button">Continue</button>';
                        html += '<button class="btn btn-default" data-dismiss="modal" type="button">Cancel</button>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                        html += '<div class="modal-footer"></div>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>'; 
 

                        $('#edit-post-section').empty();
                        $('#edit-post-section').append(html);

                    }
                });

            }
        });
    });

    function loader() {

        "use strict";
        var element = $('<div class="loader"></div>').css({
            width: 100,
            height: 100,
            border: '0px'
        }).appendTo('._uploadloaderbox');
        element.canvasLoader({
            color: '#ff0000'
        });
        element.canvasLoader(false);
        element.canvasLoader(true);
//    $(element).trigger('stop.canvasLoader');
//    element.canvasLoader.options.color = '#008000';
        $(element).trigger('start.canvasLoader');
        $.fn.canvasLoader.options.color = '#0000ff';
        var version = $.fn.canvasLoader.version;
    }

    function stoploader() {

        "use strict";
        var element = $('<div class="loader"></div>').css({
            width: 100,
            height: 100,
            border: '0px'
        }).appendTo('._uploadloaderbox');
        element.canvasLoader({
            color: '#ff0000'
        });
        element.canvasLoader(false);
        element.canvasLoader(true);
        $(element).trigger('stop.canvasLoader');
        element.canvasLoader.options.color = '#008000';
//    $(element).trigger('start.canvasLoader');
//    $.fn.canvasLoader.options.color = '#0000ff';
        var version = $.fn.canvasLoader.version;
    }
    ;
});