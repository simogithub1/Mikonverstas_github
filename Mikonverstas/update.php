<?php

require_once('db_config.php');

if(!isset($_POST['updateRecord'])){
    header('Location: edit.php');
    die();
} else {
    if(!isset($_POST['id'])){
        header('Location: edit.php');
        die();
    } else {
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $etunimi = filter_var($_POST['etunimi'], FILTER_SANITIZE_STRING);
        $sukunimi = filter_var($_POST['sukunimi'], FILTER_SANITIZE_STRING);
        $dob = filter_var($_POST['dob'], FILTER_SANITIZE_STRING);
        $sahkoposti = filter_var($_POST['sahkoposti'], FILTER_SANITIZE_STRING);
        $aloituspvm = filter_var($_POST['aloituspvm'], FILTER_SANITIZE_STRING);
        $query = "UPDATE oppilaat 
            SET sukunimi = :sukunimi,
            dob = :dob,
            sahkoposti = :sahkoposti,
            etunimi = :etunimi,
            aloituspvm = :aloituspvm
            WHERE id = :id";
        $result = $db_connection->prepare($query);
        $result->execute([
            'sukunimi' => $sukunimi,
            'dob' => $dob,
            'sahkoposti' => $sahkoposti,
            'etunimi' => $etunimi,
            'aloituspvm' => $aloituspvm,
            'id' => $id
        ]);
    }
}