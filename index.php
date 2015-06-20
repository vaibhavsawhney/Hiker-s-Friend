<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>QuickStart Bootstrap</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Place favicon.ico in the root directory -->
    
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/app.css">
    
  </head>
  <body>
    <!--FB SDK
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->
    
    <!--Share logos
    <nav class="navbar navbar-static-top" id="shareBar">
      <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div>
    </nav>-->
    <!-- Content -->
    <span class="glyphicon glyphicon-th-large"></span>
    <div class="container-fluid">
      <div class="starter-template">
        <h1>Title of our thing</h1>
        <p class="lead">Some brief intro. Some brief intro.  Some brief intro. Some brief intro.<br>Some brief intro. Some brief intro. Some brief intro. </p>
        <button class="btn btn-primary">Get Started</button>
      </div>
    </div>
    
    <!--Login slide-->
    <div class="container" id="loginBox">
      <form class="form-signin" action="timeline" method="post">
        <h2 class="form-signin-heading">Log in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>
    
    <!--Footer-->
    <footer>
      <ul>
        <li>About</li>
        <li>Privacy</li>
        <li>Bullshit</li>
      </ul>
    </footer>
    
    <script>window.jQuery || document.write('<script src="lib/jquery/jquery-2.1.3.min.js"><\/script>')</script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>