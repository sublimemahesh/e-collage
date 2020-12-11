<!DOCTYPE html>
<html>

<head>
  <title></title>

</head>

<body>
  <div id="meeting"></div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src='https://meet.jit.si/external_api.js'></script>
  
  <script src="ajax/js/go-live.js" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      function makeid(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
          result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
      }

      var random_id = makeid(15);
      const options = {
        parentNode: document.querySelector('#meeting'),
        roomName: random_id,
        width: 700,
        height: 700,
      }

      $.ajax({
        url: "ajax/post-and-get/add-live-video.php",
        type: "POST",
        data: {
          roomName: random_id,
          action: 'ADD_LIVE_VIDEO'
        },
        dataType: "JSON",
        success: function(jsonStr) {
          meetAPI = new JitsiMeetExternalAPI("meet.jit.si", options);
        }
      });

    })
  </script>

</body>

</html>