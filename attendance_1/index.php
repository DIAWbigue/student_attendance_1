<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="acceil.css" />
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="right-column text-center">
          <p class="info">Student attendence</p>
          <form id="form" action="" method="POST">
            <div class="form-group">
              <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" required/>
            </div>
            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control" placeholder="Email" required/>
            </div>
            <div class="form-group">
              <input type="password" name="motdepasse" id="motdepasse" class="form-control" placeholder="Mot de passe" required/>
            </div>
            <div class="form-group">
              <input type="password" name="confmotdepasse" id="confmotdepasse" class="form-control" placeholder="Confirmer mot de passe" required/>
            </div>
            <button type="submit" name="submit" value="S'enregistrer" class="btn btn-primary btn-block">S'enregistrer </button>
            <div class="result"></div>
            <p class="or">OU</p>
            <p class="connexion">
              <a href="#"><img src="fbicone.png"> connecter avec Facebook</a><br>
              <a href="#">Mot de passe oublié?</a>
            </p>
        </div>
        </form>
      </div>
      <div class="container">
        <div class="salut">
          <p>Vous n’avez pas signer ?<a href="inscription.php"> Signer</a></p>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script>
    $(document).ready(function () {
      $('.btn-primary').click(function (e) {
        e.preventDefault();
        var nom = $('#nom').val();
        var email = $('#email').val();
        var motdepasse = $('#motdepasse').val();
        var confmotdepasse = $('#confmotdepasse').val();
        $.ajax
          ({
            type: "POST",
            url: "traitementformulaire1.php",
            data: { "nom": nom, "email": email, "motdepasse": motdepasse, "confmotdepasse": confmotdepasse },
            success: function (data) {
              $('.result').html(data);
              $('#form')[0].reset();
            }
          });
      });
    });
  </script>

</body>

</html>
