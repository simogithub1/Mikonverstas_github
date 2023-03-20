<?php
require_once('db_config.php');
$query = "SELECT * FROM oppilaat";
$results = $db_connection->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mikon Verstas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
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
            <div class="col-sm-1"> </div>
            <div class="col-sm-10">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <div class="container-fluid"> <span class="navbar-text display-1">Mikon
                            Verstas</span> </div> <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item"> <a class="nav-link" href="#">Laitteet</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Opiskelijat</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Lainaukset</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Ohjaajat</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Kirjaudu ulos</a> </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-sm-1"> </div>
        </div>
        <div class="row">
            <div class="col-sm-1"> </div>
            <div class="col-sm-10">
                <div class="contentbg">
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ETUNIMI</th>
                                <th>SUKUNIMI</th>
                                <th>SYNTYMÄAIKA</th>
                                <th>SÄHKÖPOSTI</th>
                                <th>ALOITUSPVM</th>
                                <th>MUOKKAA</th>
                                <th>POISTA</th>
                                <th>LISÄÄ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $result) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $result['id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $result['etunimi'] ?>
                                    </td>
                                    <td>
                                        <?php echo $result['sukunimi'] ?>
                                    </td>
                                    <td>
                                        <?php echo $result['dob'] ?>
                                    </td>
                                    <td>
                                        <?php echo $result['sahkoposti'] ?>
                                    </td>
                                    <td>
                                        <?php echo $result['aloituspvm'] ?>
                                    </td>
                                    <td><a href="edit.php?id=<?php echo $result['id'] ?>"><i class="fas fa-edit"></i></a>
                                    </td>
                                    <td><a href="delete.php?id=<?php echo $result['id'] ?>"><i
                                                class="fas fa-trash-alt"></i></a> </td>
                                    <td><a href="create.php?id="><i class="fas fa-solid fa-plus"></i></a> </td>
                                </tr>
                            <?php }
                            ?>
                            </tboby>
                    </table>
                    <div class="col-sm-1"></div>
                </div>
            </div>
            <div class="col-sm-1"> </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="footerbg">
                        <p class="display-6">Handmade in Luksia by Ohjelmistokehittäjät</p>
                        <p class="initialism"><a
                                href="https://www.freepik.com/free-photo/computer-screens-running-programming-code-empty-software-developing-agency-office-computers-parsing-data-algorithms-background-neural-network-servers-cloud-computing-data-room_22298430.htm#page=2&query=computers&position=48&from_view=search">Image
                                by DCStudio</a> on Freepik</p>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
</body>

</html>