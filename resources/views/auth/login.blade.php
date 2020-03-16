<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login - HIMATIF</title>
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/logo.png') }}">
  <link rel="stylesheet" href="{{asset('asset/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form-structor">
  <div class="signup">
    <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
      <form method="post" action="/postregister" enctype="multipart/form-data">
          @csrf
        <div class="form-holder">
          <input type="text" class="input" name="name" id="name" placeholder="Name" required="" />
          <input type="email" class="input" name="email" id="email" placeholder="Email" required="" />
          <input type="password" class="input" name="password" id="password" placeholder="Password" required="" />
        </div>
          <button class="submit-btn">Sign up</button>
      </form>
          <a href="/index"><button class="submit-btn">Log in As Guest</button></a>
  </div>
  <div class="login slide-up">
    <div class="center">
      <h2 class="form-title" id="login"><span>or</span>Log in</h2>

      <form method="POST" action="/postlogin" class="needs-validation" novalidate>
              {{csrf_field()}}
        <div class="form-holder">
          <input type="email" class="input" name="email" id="email" placeholder="Email" />
          <input type="password" class="input" name="password" id="password" placeholder="Password" />
        </div>
        <button class="submit-btn">Log in</button>
      </form>

    </div>
  </div>
</div>
<!-- partial -->
  <script  src="{{asset('asset/script.js')}}"></script>

</body>
</html>
