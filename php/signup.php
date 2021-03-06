<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./styles/Signup.css">
  <script type="text/javascript" src="http://code.jQuery.com/jquery-latest.min.js"></script>
  <script src="./script/Signup.js"></script>
  <script>
    function resizeIframe(obj) {
      obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
    }
  </script>
  <title>Music Therapy - Sign up</title>
</head>

<body frameborder="0" scrolling="no" onload="resizeIframe(this)">
  <nav class="navbar shadow fixed-top navbar-expand-md navbar-dark transparent" id="topbar">
    <div class="justify-center" style="margin-left:3.5px;display: inline-flex;">
      <a href="./index.html"><img src="./images/Logo.png" href="./index.html" class="mx-auto d-block" style="width:55px;height:55px"></a>
      <a class="navbar-brand " href="./index.html" id="Logo" style="margin-left:8px;margin-top: 6px;"> Music Therapy</a>
    </div>

  </nav>

  <div class="container-fluid" style="color: #ffaa00;">
    <form method="POST" action="/action_page.php" class="is-valid justify-center" style="max-width: 500px;">
      <div style="text-align: center;">
        <a href="./index.html"><img src="./images/Logo.png" href="./index.html" class="mx-auto d-block" style="width:150px;height:150px"></a>
        <label style="font-size: 30px;">Sign Up</label>
      </div>
      <div class="form-group">
        <label for="text">Username :</label>
        <input type="text" class="form-control" placeholder="Username" id="uname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please Enter an Username.</div>
      </div>
      <div class="form-group">
        <label for="email">Email address :</label>
        <input type="email" class="form-control" placeholder="Email Address" id="email" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill Your Email.</div>
      </div>
      <div class="form-group">
        <label for="email">Confirm Email Address :</label>
        <input name="emailConfirm" class="form-control" type="email" placeholder="Confirm Email Address" id="confemail" required/>
        <div id="validMessage"></div>
      </div>
      <div class="form-group">
        <label for="pwd">Password :</label>
        <input type="password" class="form-control" placeholder="Enter password" id="pwd" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback" id="confirmemail">Please Enter a Password.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Confirm Password :</label>
        <input name="passwordConfirm" type="passwor" class="form-control" placeholder="Confirm password" id="confpwd" required>
      </div>
      <div class="form-group">
        <label for="my-input">Birth Date :</label><br>
        <div style="text-align: center;">
          <label for="day">Day :</label><select name="day" id="day" style="width: 70px;height: 30px;"></select>
          <label for="month">Month :</label><select name="month" id="month" style="width: 70px;height: 30px;"></select>
          <label for="year">Year :</label><select name="year" id="year" style="width: 70px;height: 30px;"></select>
        </div>
      </div>
      <div class="form-group">
        <label for="male">Gender :</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
      </div>
      <div style="text-align: center;">
        <button type="submit" class="btn btn-primary justify-center">Submit</button>
      </div>
    </form>
  </div>
</body>

</html>