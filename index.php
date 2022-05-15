<?php

    /* 
        ********** PAS Terminé ************
    */

    session_start();

    //connexion a la base de donnees
    include 'connexionDB.php';

    $titre = 'Inscription';
    
?>

<!DOCTYPE html>

    <html lang="fr">

        <head>

            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

            <!-- Optional theme -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

            <!-- Latest compiled and minified JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                 
            <!-- JQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


            <style>
            #success_message{ display: none;}

            </style>
        </head>

        <body>
 
            <div class="container col-xl-12" style="margin-top:50px;">
                
                <form class="well form-horizontal" action="inscription.php" method="post"  id="inscription_form">
                    <fieldset>

                    <!-- Form Name -->
                    <legend>
                      <h2 class="text-left"><b>Créer votre Compte</b></h2>
                    </legend>


                    <br>


                    <div class="row">

                        <div class="col-md-6">

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-lg-2 control-label">Nom : </label>  
                                <div class="col-lg-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input  name="nom" placeholder="nom" class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-lg-2 control-label" >Prénom : </label> 
                                <div class="col-lg-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="prenom" placeholder="prenom" class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <br>

                    <div class="row">

                        <div class="col-md-6">

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-2 control-label">Adresse : </label>  
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input  name="adresse" placeholder="adresse" class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-2 control-label" >Ville : </label> 
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input name="ville" placeholder="ville" class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <br>

                    <div class="row">

                        <div class="col-md-6">

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-2 control-label" >Code postal : </label> 
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input name="code_postal" placeholder="code postal" class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                          <!-- Text input-->
                      
                          <div class="form-group">
                              <label class="col-md-4 control-label">Téléphone</label>  
                              <div class="col-md-4 inputGroupContainer">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                      <input name="tel" placeholder="0864345078" class="form-control" type="text">
                                  </div>
                              </div>
                          </div>
                               
                        </div>

                    </div>

                    <br>

                    <div class="row">

                        <div class="col-md-6">

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label">E-Mail</label>  
                              <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input name="email" placeholder="Adresse E-Mail" class="form-control"  type="text">
                                </div>
                              </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label">Confirmation</label>  
                              <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input name="email_confirmation" placeholder="Confirmation Adresse E-Mail" class="form-control"  type="text">
                                </div>
                              </div>
                            </div>

                        </div>

                    </div>

                    <br>

                    <div class="row">

                        <div class="col-md-6">

                            <!-- Text input-->

                            <div class="form-group">
                            <label class="col-md-4 control-label" >Mot de passe</label> 
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input name="mdp" placeholder="Mot de passe" class="form-control"  type="password">
                            </div>
                            </div>
                            </div>

                        </div> 
                        
                        <div class="col-md-6">

                            <!-- Text input-->

                            <div class="form-group">
                            <label class="col-md-4 control-label" >Confirm Password</label> 
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input name="mdp_confirmation" placeholder="Confirmation mot de passe" class="form-control"  type="password">
                            </div>
                            </div>
                            </div>

                        </div>

                        <br>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group"> 
                                    <label class="col-md-4 control-label">Comment nous avez-vous connu ?</label>
                                    <div class="col-md-4 selectContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                            <select name="department" class="form-control selectpicker">
                                                <option value="">Selectionnez </option>
                                                <option value="Réseaux sociaux">Réseaux sociaux</option>
                                                <option value="Job dating">Job dating</option>
                                                <option value="Autre">Autre</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                    
                            </div>
                    
                        </div>

                    

                    <!-- Select Basic -->

                    <!-- Success message -->
                    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

                    <!-- Button -->
                    <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                    &nbsp<button type="submit" class="btn btn-warning" >&nbsp Créer mon compte <span class="glyphicon glyphicon-send"></span>&nbsp</button>
                    </div>
                    </div>

                    </fieldset>
                </form>

            </div>
            <!-- /.container -->



        <script>
            $(document).ready(function() {
                $('#inscription_form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        nom: {
                            validators: {
                                    stringLength: {
                                    min: 2,
                                },
                                    notEmpty: {
                                    message: 'Veuillez renseigner votre nom'
                                }
                            }
                        },
                        prenom: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Veuillez renseigner votre prénom'
                                }
                            }
                        },
                        adresse: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Veuillez renseigner votre adresse'
                                }
                            }
                        },
                        ville: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Veuillez renseigner votre ville'
                                }
                            }
                        },
                        code_postal: {
                            validators: {
                                stringLength: {
                                    min: 5,
                                },
                                notEmpty: {
                                    message: 'Veuillez renseigner votre code postal'
                                }
                            }
                        },
                        mdp: {
                            validators: {
                                stringLength: {
                                    min: 8,
                                },
                                notEmpty: {
                                    message: 'Veuillez entrer votre mot de passe'
                                }
                            }
                        },
                        mdp_confirmation: {
                            validators: {
                                stringLength: {
                                    min: 8,
                                },
                                notEmpty: {
                                    message: 'Veuillez confirmer votre mot de passe '
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'Please enter your Email Address'
                                },
                                emailAddress: {
                                    message: 'Please enter a valid Email Address'
                                }
                            }
                        },
                        email_confirmation: {
                            validators: {
                                notEmpty: {
                                    message: 'Please enter your Email Address'
                                },
                                emailAddress: {
                                    message: 'Please enter a valid Email Address'
                                }
                            }
                        },
                        tel: {
                            validators: {
                                stringLength: {
                                    min: 12, 
                                    max: 12,
                                    notEmpty: {
                                        message: 'Please enter your Contact No.'
                                    }
                                }
                            }
                        }
                    }})
                    .on('success.form.bv', function(e) {
                        $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                            $('#inscription_form').data('bootstrapValidator').resetForm();

                        // Prevent form submission
                        e.preventDefault();

                        // Get the form instance
                        var $form = $(e.target);

                        // Get the BootstrapValidator instance
                        var bv = $form.data('bootstrapValidator');

                        // Use Ajax to submit form data
                        $.post($form.attr('action'), $form.serialize(), function(result) {
                            console.log(result);
                        }, 'json');
                    });
            });
        </script>

    </body>

    </html>