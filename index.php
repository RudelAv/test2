
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>soutenance</title>
  <link rel="stylesheet" type="text/css" href="../bibliotheque/sweet/sweetalert2.css">
   <?php include "../include/csslog.php"; ?>
  
 
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="index.php" method="POST">
        <h2 class="form-login-heading">Se connecter</h2>
        <div class="login-wrap">
          <input type="text" name="nom" class="form-control" placeholder="Nom d'utilisateur" required>
          <br>
          <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
          <label class="checkbox">
            <span class="pull-right">
              <a data-toggle="modal" href="login.html#myModal"> Mot de passe oublie?</a>
            </span>
          </label>
          <button class="btn btn-theme btn-block" name="connexion" href="dasboard.php" type="submit"><i class="fa fa-lock"></i> connexion</button>
          <hr>
  
          <div class="registration">
            Pas de compte?<br/>
            <a class="" href="new_user.php">
              Creer un nouneau compte
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" name="envoyer" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>



  <script type="text/javascript" src="../bibliotheque/sweet/sweetalert2.min.js"></script>
  <script type="text/javascript" src="../bibliotheque/sweet/jquery.sweet-alert.init.js"></script>

  <!-- call to script -->

  
  <?php include '../include/scriptlog.php'; ?>
  <?php  include '../traitement/admin/log.php'; ?>

</body>

</html>
