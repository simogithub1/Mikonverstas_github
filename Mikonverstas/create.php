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
    <meta charset="UTF-8">
    <title>Lisää tieto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>

  <body>

    <br>
    <div class="container">
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
    </div>


  </body>


  </html>