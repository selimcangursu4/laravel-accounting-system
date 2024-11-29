<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{asset('login-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('login-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('login-assets/css/style.css')}}">
    <title>Giriş Yap | Scobject Muhasebe: Hesaplarınız Güvende, İşiniz Hızlı!</title>
  </head>
  <body>
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('{{asset('login-assets/images/bg_1.jpg')}}');"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Hoşgeldin ! <strong>Scobject Muhasebe</strong></h3>
            <p class="mb-4">Scobject Muhasebe: Hesaplarınız Güvende, İşiniz Hızlı!</p>
            <form action="#" method="post">
              <div class="form-group first">
                <label for="form-label">E-Posta Adresi</label>
                <input type="text" class="form-control" placeholder="admin@scobject.com" id="email" name="email">
              </div>
              <div class="form-group last mb-3">
                <label for="form-label">Parola</label>
                <input type="password" class="form-control" placeholder="******" id="password" name="password">
              </div>
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Beni Hatırla</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>
              <input type="button" id="loginButton" value="Giriş Yap" class="btn btn-block btn-primary">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="{{asset('login-assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('login-assets/js/popper.min.js')}}"></script>
    <script src="{{asset('login-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('login-assets/js/main.js')}}"></script>
    <script>
    $(document).ready(function()
    {
        $('#loginButton').click(function(e){
            e.preventDefault();

            const email    = $('#email').val();
            const password = $('#password').val();

            $.ajax({
                url:"{{route('login.post')}}",
                type:"POST",
                data:{
                    email:email,
                    password:password
                },
                success:function(response)
                {
                 if(response.success){
                    alert(response.message);
                 }else{
                    alert(response.message);
                 }
                }
                error:function(jqXHR, textStatus, errorThrown){
                    alert('Error: '+errorThrown);
                }
            })
        })
    })
    </script>
  </body>
</html>
