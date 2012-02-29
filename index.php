<!doctype html>
<html>
    <head>
      	<title>WebRTC</title>
        <link rel="stylesheet" href="css/global.css">
      	<link rel="stylesheet" href="css/bootstrap.min.css">
      	<script src="http://localhost:8888/socket.io/socket.io.js" type="text/javascript" charset="utf-8"></script>
      	<script src="js/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
      	<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
      	<script src="js/webrtc.js" type="text/javascript" charset="utf-8"></script>.
        <script src="js/global.js" type="text/javascript" charset="utf-8"></script>
    </head>

    <body>
	
        <div class="modal hide fade" id="myModal">
          <div class="modal-header">
            <h3>WebRTC Sample Connection</h3>
          </div>
          <div class="modal-body">
            <form name="login">
              <div class="control-group">
                <label>Nickname :</label>
                <input id="nickname" type="text" class="span2">
                <span class="help-inline hide">Not empty !</span>
              </div>
            </form> 
          </div>
          <div class="modal-footer">
            <button id="loginSub" class="btn btn-primary">Login</button> 
          </div>
        </div>

        <div class="navbar navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container-fluid">
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <a class="brand" href="#">WebRTC Sample</a>
              <div class="nav-collapse">
                <ul class="nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#contact">Contact</a></li>
                </ul>
                <p class="navbar-text pull-right">Logged in as <a id="username" href="#">username</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">

            <div class="hero-unit">
              <p>This is a demo for testing WebRTC in a LAN between two clients with WebRTC support.</p>
            </div>
      
            <div class="row-fluid">

              <div class="span3">

                <div class="row-fluid">
                  <div class="span12">
                    <h2 align="left">Local</h2>
                    <video width="100%" height="100%" id="localVideo" autoplay="autoplay" 
                    style="opacity: 0;
                    -webkit-transition-property: opacity;
                    -webkit-transition-duration: 2s;">
                    </video>
                  </div>
                </div>

                <div class="row-fluid">
                  <div class="span12">
                    <h2 align="left">Remote</h2>
                    <video width="100%" height="100%" id="remoteVideo" autoplay="autoplay"
                    style="opacity: 0; 
                    -webkit-transition-property: opacity;
                    -webkit-transition-duration: 2s;">
                    </video>
                  </div>
                </div>

              </div>

              <div class="span9">
                
                <div class="row-fluid" align="center">
                  <div class="span12">
                    <h2>Content</h2>
                    <img src="img/ppt.jpg" alt="PPT" width="500" height="500">
                  </div>
                </div>

                <br>

                <div class="row-fluid" align="center">
                  <div class="span12">
                    <div class="well">
                    <h2>Chat</h2>
                    </div>
                  </div>
                </div>

              </div>

            </div>

            <div id="footer"></div>

            <hr>

            <footer>
              <p>&copy; Atos Worldline 2012</p>
            </footer>

        </div>
    </body>
</html>