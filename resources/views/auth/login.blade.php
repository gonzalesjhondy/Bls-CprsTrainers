<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BLS-CPRS-TRAINERS </title>

    <!-- Bootstrap -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="bootstrap/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="bootstrap/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="resources/css/custom.min.css" rel="stylesheet">
  </head>
  <style>
    .login_content{
      display: flex;
      justify-content: center;
      align-items: center;
      height: 60vh;
    }
    .login_wrapper {
        max-width: 400px;
      }
  </style>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
              <form method="POST" action="{{ route('loginUsers') }}">
                @csrf
                <h1>Login Form</h1>

                @if(session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
                @endif
                
                <div>
                  <input type="text" class="form-control" name="username" placeholder="Username" required="" />
                </div>
                <div>
                  <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                </div>
                <div>
                  <!-- <a class="btn btn-default submit">Log in</a> -->
                  <button type="submit" class="btn btn-default btn-sm">Submit</button>
                </div>

                <div class="clearfix"></div>
              </form>
            </section>
        </div>
      </div>
    </div>
  </body>
</html>
