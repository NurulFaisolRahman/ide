<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>SIGN IN</title>
    <style type="text/css">
      html,
      body,
      header,
      #intro {
          height: 100vh;
      }
      body{
        overflow: auto;
      }
      #intro {
        background: url(../img/AdminSignIn.jpeg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
      }
    </style>
  </head>
  <body>
    <header id="intro">
      <div class="d-flex align-items-center h-100">
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-sm-auto">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-auto">
                    <div class="card">
                      <div class="card-header bg-warning"><b class="text-primary">AUTENTIKASI</b></div>
                      <div class="card-body">
                        <ul class="nav nav-pills mb-2 nav-fill" id="pills-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active btn btn-outline-success" id="pills-Masuk-tab" data-toggle="pill" href="#pills-Masuk" role="tab" aria-controls="pills-Masuk" aria-selected="true"><b>SURVEYOR</b></a>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-Masuk" role="tabpanel" aria-labelledby="pills-Masuk-tab">
                            <div class="input-group input-group-sm mb-2">
                              <div class="input-group-prepend">
                                <span class="input-group-text bg-warning text-primary"><b>NIK</b></span>
                              </div>
                              <input type="text" class="form-control" id="NIK">
                            </div>
                            <div class="input-group input-group-sm mb-2">
                              <div class="input-group-prepend">
                                <span class="input-group-text bg-warning text-primary"><b>Password</b></span>
                              </div>
                              <input type="password" class="form-control" id="Password">
                            </div>
                            <div class="btn btn-primary" id="Masuk"><b>Masuk</b></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/popper.min.js" ></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script>  
      jQuery(document).ready(function($) {
        
        var BaseURL = '<?=base_url()?>'

        $('#NIK').keypress(function(event){
          var keycode = (event.keyCode ? event.keyCode : event.which);
          if(keycode == '13'){
            event.preventDefault();
            document.getElementById("Masuk").click();  
          }
        });

        $('#Password').keypress(function(event){
          var keycode = (event.keyCode ? event.keyCode : event.which);
          if(keycode == '13'){
            event.preventDefault();
            document.getElementById("Masuk").click();  
          }
        });

        $("#Masuk").click(function() {
          var Akun = { NIK: $("#NIK").val(),
                       Password: $("#Password").val() }
          $.post(BaseURL+"IDE/SurveyorSignIn", Akun).done(function(Respon) {
            if (Respon == '1') {
              window.location = BaseURL + "Surveyor/Profil"
            }
            else {
              alert(Respon)
            }
          })                    
        })
      })
    </script>
  </body>
</html>