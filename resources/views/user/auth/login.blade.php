<style>
  img {
    width: 100%;
  }

  .login {
    height: 1000px;
    width: 100%;
    background: radial-gradient(#653d84, #332042);
    position: relative;
  }

  .login_box {
    width: 1050px;
    height: 600px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    border-radius: 10px;
    box-shadow: 1px 4px 22px -8px #0004;
    display: flex;
    overflow: hidden;
  }

  .login_box .left {
    width: 41%;
    height: 100%;
    padding: 25px 25px;

  }

  .login_box .right {
    width: 59%;
    height: 100%
  }

  .left .top_link a {
    color: #452A5A;
    font-weight: 400;
  }

  .left .top_link {
    height: 20px
  }

  .left .contact {
    display: flex;
    align-items: center;
    justify-content: center;
    align-self: center;
    height: 100%;
    width: 73%;
    margin: auto;
  }

  .left h3 {
    text-align: center;
    margin-bottom: 40px;
  }

  .left input {
    border: none;
    width: 80%;
    margin: 15px 0px;
    border-bottom: 1px solid #4f30677d;
    padding: 7px 9px;
    width: 100%;
    overflow: hidden;
    background: transparent;
    font-weight: 600;
    font-size: 14px;
  }

  .left {
    background: linear-gradient(-45deg, #dcd7e0, #fff);
  }

  .submit {
    border: none;
    padding: 15px 70px;
    border-radius: 8px;
    display: block;
    margin: auto;
    margin-top: 30px;
    background: #583672;
    color: #fff;
    font-weight: bold;
    -webkit-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
    -moz-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
    box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
  }

  .submit1 {
    margin-left: 42px;
    border: none;
    padding: 15px 65px;
    border-radius: 8px;
    /* display: block; */
    /* margin: auto; */
    margin-top: 30px;
    background: #583672;
    color: #fff;
    font-weight: bold;
    -webkit-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
    -moz-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
    box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
  }

  .right {
    background: linear-gradient(212.38deg, rgba(242, 57, 127, 0.7) 0%, rgba(175, 70, 189, 0.71) 100%), url(/main_themes/images/uploads/slider-bg2.jpg);
    color: #fff;
    position: relative;
  }

  .right .right-text {
    height: 100%;
    position: relative;
    transform: translate(0%, 45%);
  }

  .right-text h2 {
    display: block;
    width: 100%;
    text-align: center;
    font-size: 50px;
    font-weight: 500;
  }

  .right-text h5 {
    display: block;
    width: 100%;
    text-align: center;
    font-size: 19px;
    font-weight: 400;
  }

  .right .right-inductor {
    position: absolute;
    width: 70px;
    height: 7px;
    background: #fff0;
    left: 50%;
    bottom: 70px;
    transform: translate(-50%, 0%);
  }

  .top_link img {
    width: 28px;
    padding-right: 7px;
    margin-top: -3px;
  }
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
  integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<body>
  <title>{{ config('app.name', 'Laravel') }}</title>
  <section class="login">
    <div class="login_box">
      <div class="left">
        <div class="top_link"><a href="/"><img
              src="/user/images/back-arrow.png" alt="">Return
            home</a></div>
            <div class="top_link">
              <br>
            @if (\Session::has('success'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg"  role="alert">
                            {{ \Session::get('success') }}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if (\Session::has('unsucces'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-danger contact__msg"  role="alert">
                            {{ \Session::get('unsucces') }}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                 @endif
           </div>
        <div class="contact">
          <form method="POST" action="">
            @csrf
            <h3>LOG IN</h3>

            <input id="email" type="email" placeholder="USERNAME" class="@error('email') is-invalid @enderror"
              name="email" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="password" type="password" placeholder="PASSWORD" class="@error('password') is-invalid @enderror"
              name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror

            <button class="submit">LOG IN</button>
            <a href="/register">
              <ipput type="button" class="submit1">SIGN UP</ipput>
            </a>
          </form>
        </div>
      </div>
      <div class="right">
        <div class="right-text">
          <h2>Blog</h2>
        </div>
    
      </div>
    </div>
  </section>
</body>
</html>