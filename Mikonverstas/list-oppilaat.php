<?php

require_once('db_config.php');

$query = "SELECT * FROM oppilaat";

$results = $db_connection->query($query);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lista oppilaista</title>
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        </head>
    <body>
        <div class="container">
        <table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ETUNIMI</th>
                    <th>SUKUNIMI</th>
                    <th>SYNTYMAAIKA</th>
                    <th>SAHKOPOSTI</th>
                    <th>ALOITUSPVM</th>
                    <th>MUOKKAA</th>
                </tr>
            </thead>
            <tbody>
                <?php
            foreach($results as $result) {
                ?>
                <tr>
                    <td><?php echo $result['id']?></td>
                    <td><?php echo $result['etunimi']?></td>
                    <td><?php echo $result['sukunimi']?></td>
                    <td><?php echo $result['dob']?></td>
                    <td><?php echo $result['sahkoposti']?></td>
                    <td><?php echo $result['aloituspvm']?></td>                    
                    <td><a href="edit.php?id=<?php echo $result['id']?>"><i class="fas fa-edit"></i></a></td>
                    <td><a href="delete.php?id=<?php echo $result['id']?>"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php
}
?>
                
            </tbody>
        </table>
        </div>
    </body>
</html>