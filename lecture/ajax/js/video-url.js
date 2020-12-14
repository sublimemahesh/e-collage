$(document).ready(function () {
    $('.media-btn').click(function () {
        var media = $(this).attr('media');
        if (media == 0) {
            $('.jitsi-p').removeClass("hidden");
            $('.youtube-p').addClass("hidden");
            $('.video-label').text("Meeting Link");
            $('.video-input').attr("placeholder", "Enter Meeting Link");
        } else {
            $('.jitsi-p').addClass("hidden");
            $('.youtube-p').removeClass("hidden");
            $('.video-label').text("Video URL");
            $('.video-input').attr("placeholder", "Enter Video URL");
        }
        $('#is_youtube').val(media);
        $('#select-media').modal('hide');
    });
    $('#apply-btn').click(function () {
        var url = $('#video_url').val();
        $('#url').val(url);

        $('#add-url').modal('hide');
    });
})