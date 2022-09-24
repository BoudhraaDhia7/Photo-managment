<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title>S'inscrire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="signup_style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/singup.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
</head>

<body class="body">
    <a href="https://github.com/Mehedi61/Login-form-Sign-up-form">
    </a>
    <div class="login-page">
        <div class="form">
            <h3 class="title "><strong>Créer un compte</strong></h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <img src="https://i.pinimg.com/originals/15/aa/58/15aa5827bf1db68805d8154bcb0c3cb3.png" />
                <form action="">
                    <label for="name">
                        <span >Nom :</span>
                        <br>
                        
                    </label>
                    <input name="name" type="text" id="name" placeholder="Votre nom" class="form-control {{$errors->has("name") ?  'is-invalid':''}}">
                    <label for="name">
                        <span>Prénom :</span>
                        <br>
                        
                    </label>
                    <br>
                    <input name="lastname" type="text" id="lastname" placeholder="Votre Prénom" class="form-control {{$errors->has("lastname") ?  'is-invalid':''}}">
                    <label>
                        Sexe:
                    </label>
                    <div>
                        <select name="sexe" id="select" class="{{$errors->has("sexe") ?  'is-invalid':''}}">
                            <option selected value="h">Homme</option>
                            <option value="f">Femme</option>
                            <option value="a">Autre</option>
                        </select>
                    </div>

                    <label for="pet-select">choisir votre ville:
                    </label>
                    <div>
                      <select name="town" id="select" class="form-control {{$errors->has("town") ?  'is-invalid':''}}">
                        <option selected value="Sousse">Sousse</option>
                        <option value="Bizertr">Bizertr</option>
                        <option value="Tunis">Tunis</option>
                        <option value="Nabeul">Nabeul</option>
                        <option value="Zaghouane">Zaghouane</option>
                        <option value="Baja">Baja</option>
                        <option value="Monastir">Monastir</option>
                        <option value="Mahdia">Mahdia</option>
                        <option value="Kairaouan">Kairaouan</option>
                        <option value="Tozeur">Tozeur</option>
                    </select>
                    </div>  
                    <label for="email">
                        <span>E-mail : </span>
                    </label>
                    <input type="email" id="email" placeholder="email" name="email" class="form-control {{$errors->has("email") ?  'is-invalid':''}}">
                    <label for="password">
                        <span>Mot de passe :</span>
                    </label>
                    <input type="password" id="password" placeholder="password"  minlength="8"
                    maxlength="10" size="10" name="password" class="form-control {{$errors->has("password") ?  'is-invalid':''}}">
                    <label for="password">
                        <span>Confirmer mot de passe :</span>
                    </label>
                    <input type="password" id="password" placeholder="Confirm Password"  minlength="8"
                            maxlength="10" size="10" name="password_confirmation" class="form-control {{$errors->has("password") ?  'is-invalid':''}}">
                    <button type="submit">
                        S'INSCRIRE
                    </button>
                </form>
        </div>
    </div>
</body>
</html>

</html>

