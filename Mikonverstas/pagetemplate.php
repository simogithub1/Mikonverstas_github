<?php

require_once('db_config.php');

if(isset($_POST['addRecord'])){

        $etunimi = filter_var($_POST['etunimi'], FILTER_SANITIZE_STRING);
        $sukunimi = filter_var($_POST['sukunimi'], FILTER_SANITIZE_STRING);
        $dob = filter_var($_POST['dob'], FILTER_SANITIZE_STRING);
        $sahkoposti = filter_var($_POST['sahkoposti'], FILTER_SANITIZE_STRING);
        $aloituspvm = filter_var($_POST['aloituspvm'], FILTER_SANITIZE_STRING);
        $query = "INSERT INTO oppilaat (etunimi, sukunimi, dob, sahkoposti, aloituspvm)
        VALUES (:etunimi, :sukunimi, :dob, :sahkoposti, :aloituspvm)";
        $result = $db_connection->prepare($query);
        $result->execute([
            'sukunimi' => $sukunimi,
            'dob' => $dob,
            'sahkoposti' => $sahkoposti,
            'etunimi' => $etunimi,
            'aloituspvm' => $aloituspvm,
        ]);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mikon Verstas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .bgimage {
      background-image: url("logo.jpg");
      background-size: cover;
    }
    .contentbg {
      background-color: antiquewhite;
    }
    .footerbg {
      background-color: #FFA700;
    }
    .no-bottom-margin {
      margin-bottom: 0;
    }
  </style>
</head>

<body class="bgimage">

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-1">
      </div>
      <div class="col-sm-10">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
          <div class="container-fluid">
            <span class="navbar-text display-1">Mikon Verstas</span>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Laitteet</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Opiskelijat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Lainaukset</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Ohjaajat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kirjaudu ulos</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="col-sm-1">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <div class="contentbg">
          <p class="lead no-bottom-margin"><div class="container">
            <form method="post" action="">        
              <div class="form-group row">
                <label for="etunimi" class="col-sm-2 col-form-label">Etunimi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="etunimi" name="etunimi" value="">
                </div>
              </div>
              <div class="form-group row">
                <label for="sukunimi" class="col-sm-2 col-form-label">Sukunimi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="sukunimi" name="sukunimi" value="">
                </div>
              </div>
              <div class="form-group row">
                <label for="syntymaaika" class="col-sm-2 col-form-label">Syntymäaika</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="dob" name="dob" value="">
                </div>
              </div>
              <div class="form-group row">
                <label for="sahkoposti" class="col-sm-2 col-form-label">Sähköposti</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="sahkoposti" name="sahkoposti" value="">
                </div>
              </div>
              <div class="form-group row">
                <label for="aloituspvm" class="col-sm-2 col-form-label">Aloituspvm</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="aloituspvm" name="aloituspvm" value="">
                </div>
              </div>
      
              <button type="submit" name="addRecord" class="btn btn-success">Lisää tieto</button>
      
            </form>
          </div></p>
        </div>
      </div>
      <div class="col-sm-1"></div>
    </div>
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <div class="footerbg">
          <p class="display-6">Handmade in Luksia by Ohjelmistokehittäjät</p>
          <p class="initialism"><a href="https://www.freepik.com/free-photo/computer-screens-running-programming-code-empty-software-developing-agency-office-computers-parsing-data-algorithms-background-neural-network-servers-cloud-computing-data-room_22298430.htm#page=2&query=computers&position=48&from_view=search">Image by DCStudio</a> on Freepik</p>
        </div>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </div>

</body>

</html>