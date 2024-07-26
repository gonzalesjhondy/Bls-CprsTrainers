@include('includes/header')
<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
        <form action="{{ route('trainer.index') }}" method="POST">
            @csrf
            <h1>BLS-CPR Trainer</h1>
            <div>
              <input type="text" class="form-control" placeholder="Username" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password"  />
            </div>
            <div>
              <button type="submit" class="btn btn-info submit" style="width: 100%;" href="">Log in</button>
            </div>
            <div class="clearfix"></div>
            <div class="separator">
              <div class="clearfix"></div>
              <br />
              <div>
                <img src=" {{ asset ('./img/doh_hems_bg.png') }}">
                <br>
                <p class="mt-5">2024 All Rights Reserved. Department Of Health CV-CHD</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>
</html>
