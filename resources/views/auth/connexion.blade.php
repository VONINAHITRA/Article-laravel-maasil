@extends('layouts.auth')

@section('content')

<body>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <!-- Icon -->
    <div class="fadeIn first" id="formHead">
       <h4>CONNEXION</h4> 
    </div>
    <!-- Authentification Form -->
    <form method="post" action="#" >

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="form-group">
      <input type="text"  class="fadeIn second" id="login" name="inputEmailLogin" placeholder="Adresse email" autocomplete="off" required>
        <i class="" aria-hidden="true"><img src="img/icon_email.png"></i>
        </div>
        <div class="form-group">
      <input type="password" id="password" class="fadeIn third" name="inputPasswordLogin" placeholder="Mot de passe" autocomplete="off" required>
       <i class="" aria-hidden="true"><img src="img/icon_pwd.png"></i>
        </div>
        <div class="row">
            <div class="form-group" id="linkPwdForget">
          <a class="linkPwdForget" href="#"> Mot de passe oublié ?</a>      
           </div>
      <button type="submit" class="fadeIn fourth">Se connecter</button>
       </div>
    </form>
  </div>
</div>
</body>
@endsection
