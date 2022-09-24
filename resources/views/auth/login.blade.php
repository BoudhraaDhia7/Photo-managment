<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>Connexion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/Loginstyle.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
</head>

<body class="body">
	

<div class="login-page">
  <div class="form">
    <form method="post" action="{{route('login')}}">
        @csrf
      <img src="https://i.pinimg.com/originals/15/aa/58/15aa5827bf1db68805d8154bcb0c3cb3.png" />
      <input type="text" class="form-control {{$errors->has("email") ?  'is-invalid':''}}" placeholder="&#xf007;  Email" name="email"/>
      <input type="password"  class="form-control {{$errors->has("email") ?  'is-invalid':''}}" name="password" id="password" placeholder="&#xf023;  Mot de passe"
      minlength="8" maxlength="10" size="10"/>
      @if($errors->has("email"))
        <small class="text-danger">Vérifier vos identifiants</small>
      @endif  
      <br>
      <br>
      <button>CONNEXION</button>
      <br>
    </form>
    <a href="http://psc.test/register">
        <button>S'INSCRIRE</button>
    </a>
  </div>
</div>
</body>
</html>

