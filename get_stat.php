<html>
  <head>
    <script src="https://apis.google.com/js/client.js"></script>
    <script>
      function auth() {
        var config = {
          'client_id': 'YOUR CLIENT ID',
          'scope': 'https://www.googleapis.com/auth/urlshortener'
        };
        gapi.auth.authorize(config, function() {
          console.log('login complete');
          console.log(gapi.auth.getToken());
        });
      }
    </script>
  </head>

  <body>
    <button onclick="auth();">Authorize</button>
  </body>
</html>

<script>
  function auth() {
    var config = {
      'client_id': 'YOUR CLIENT ID',
      'scope': 'https://www.googleapis.com/auth/urlshortener'
    };
    gapi.auth.authorize(config, function() {
      console.log('login complete');
      console.log(gapi.auth.getToken());
    });
  }
</script>