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
          <form action="" id="form" method="POST">
            <div class="form-group">
              <input type="text" name="email" id="email" class="form-control" placeholder="Email" required/>
            </div>
            <div class="form-group">
              <input type="password" name="motdepasse" id="motdepasse" class="form-control" placeholder="Mot de passe" required/>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Signer</button>
            <div class="result"></div>
        </div>
        </form>
      </div>
      <div class="container">
        <div class="salut">
          <p>Vous n'êtes pas inscrit ?<a href="index.php">Inscrivez-vous</a></p>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script>
    $(document).ready(function () {
      $('.btn-primary').click(function (e) {
        e.preventDefault();
        var email = $('#email').val();
        var motdepasse = $('#motdepasse').val();
        $.ajax
          ({
            type: "POST",
            url: "traitementformulaire2.php",
            data: { "email": email, "motdepasse": motdepasse, },
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
