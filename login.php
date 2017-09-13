<!doctype html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>

  <title>IVY: Sign In</title>

  <!-- ### Libraries ###
  - jQuery 3.2.1
  - Bootstrap 4.0.0-alpha.6 -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Javascript and CSS for this site -->
  <script src="doc.js"></script>
  <script src="js/consult.js"></script>
  <link rel="stylesheet" href="doc.css">
  <link rel="stylesheet" href="css/consult.css">
  <link rel="stylesheet" href="css/login.css">
</head>
<body class='open-sans'>
  <nav class="navbar navbar-toggleable-md navbar-light">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">IVY</a>
  </nav>
  <div id='mainContainer' class='container'>
    <div class='row'>
      <div class='col'></div>
      <div class='h3 col-12 col-md-5'>Sign In</div>
      <div class='col'></div>
    </div>
    <div class='row'>
      <div class='col'></div>
      <div id='loginDescription' class='col-12 col-md-5'>Sign in to your pre-registered consulter account</div>
      <div class='col'></div>
    </div>
    <div id='loginForm' class="form-group input-div">
      <div class="row">
        <div class='col'></div>
        <div class="col-12 col-md-5">
          <label for="email">Email</label>
          <input type="email" class="form-control" placeholder="johndoe@headstartai.com" id="email" required>
        </div>
        <div class='col'></div>
      </div>
      <div class="row">
        <div class='col'></div>
        <div class="col-12 col-md-5">
          <label for="password">Password</label>
          <input type="password" class="form-control" placeholder="password" id="password" required>
        </div>
        <div class='col'></div>
      </div>
      <div class="row">
        <div class='col'></div>
        <div class='btn-group col-12 col-md-5'>
  				<a href="#" id='continueButton' class="btn btn-primary btn-lg">CONTINUE</a>
  			</div>
        <div class='col'></div>
      </div>
    </div>
  </div>
</body>
</html>
