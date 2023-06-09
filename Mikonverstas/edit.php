<?php
require_once('db_config.php');

if(!isset($_GET['id'])) {
    header('Location: list-oppilaat.php');
    die();
} else {
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    if(!$id) {
        header('Location: list-oppilaat.php');
    die();
    } else {
        $query = "SELECT * FROM oppilaat WHERE id = :id LIMIT 1";
        $result = $db_connection->prepare($query);
        $result->execute([
            'id' => $id
        ]);
        $result = $result->fetch();
    }
}


?>

<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Päivitä tieto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>

  <body>

    <br>
    <div class="container">
      <form method="post" action="update.php">
        <div class="form-group row">
          <label for="id" class="col-sm-2 col-form-label">ID</label>
          <div class="col-sm-10">
            <input type="number" readonly class="form-control" id="id" name="id" value="<?php echo $result['id']?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="etunimi" class="col-sm-2 col-form-label">Etunimi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="etunimi" name="etunimi" value="<?php echo $result['etunimi']?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="sukunimi" class="col-sm-2 col-form-label">Sukunimi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="sukunimi" name="sukunimi" value="<?php echo $result['sukunimi']?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="syntymaaika" class="col-sm-2 col-form-label">Syntymäaika</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="dob" name="dob" value="<?php echo $result['dob']?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="sahkoposti" class="col-sm-2 col-form-label">Sähköposti</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="sahkoposti" name="sahkoposti" value="<?php echo $result['sahkoposti']?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="aloituspvm" class="col-sm-2 col-form-label">Aloituspvm</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="aloituspvm" name="aloituspvm" value="<?php echo $result['aloituspvm']?>">
          </div>
        </div>

        <button type="submit" name="updateRecord" class="btn btn-success">Päivitä tieto</button>

      </form>
    </div>


  </body>


  </html>