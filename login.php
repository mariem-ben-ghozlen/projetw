<!DOCTYPE html>
<head>

<title>Contactez_nous</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="css/style.css">



</head>
<?php

if(isset($_POST['connexion']))
{
    if(($_POST['email'] == "mohamedaziz.jellazi@esprit.tn") and ($_POST['password'] == "castaside"))
    {
        header('Location: http://localhost/atl3/views/ajouterEmploye.html');
    }
    else if(($_POST['email'] == "other@esprit.tn") and ($_POST['password'] == "cast"))
    {
        header('Location: http://localhost/atl3/views/afficherEmploye.html');
    }
    else
    {
        echo "Verifier vos champs!";
    }
}

?>
<center>
<input  class="btn btn-primary btn-sm"  type="submit" value="RETOUR" id='enter' onclick="redirect()">
</center>