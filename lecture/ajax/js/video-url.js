$(document).ready(function () {
    $('.media-btn').click(function () {
        var media = $(this).attr('media');
        $('#is_youtube').val(media);
        $('#select-media').modal('hide');
    });
    $('#apply-btn').click(function () {
        var url = $('#video_url').val();
        $('#url').val(url);

        $('#add-url').modal('hide');
    });
})