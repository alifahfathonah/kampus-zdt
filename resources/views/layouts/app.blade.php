<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="icon" type="image/x-icon" href="/assets/img/logo.png">
  <title>Kampus ZDT - {{ $title }}</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  @auth
  <nav>
    <div class="nav-wrapper blue lighten-2">
      <a href="#" class="brand-logo" style="color: white;">Selamat Datang...</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/profil" style="color: white;">Profil</a></li>
        <li><a href="/logout" style="color: white;">{{ 'Logout' }}</a></li>
      </ul>
    </div>
  </nav>
  @endauth
	@yield('content')

	<footer class="page-footer teal">
    <div class="footer-copyright">
      <div class="container">
      Made by Kelompok 8
      </div>
    </div>
  </footer>
</div>
  
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      $('.collapsible').collapsible();
    });
  </script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/assets/js/materialize.js"></script>
  <script src="/assets/js/init.js"></script>
  <!-- GetButton.io widget -->
  <script type="text/javascript">
      (function () {
          var options = {
              whatsapp: "+6281212088497", // WhatsApp number
              call_to_action: "Message us", // Call to action
              position: "right", // Position may be 'right' or 'left'
          };
          var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
          var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
          s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
          var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
      })();
  </script>
  <!-- /GetButton.io widget -->
  </body>
</html>