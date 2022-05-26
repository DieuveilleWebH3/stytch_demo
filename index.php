<?php

    /* 
        ********** PAS Terminé ************
    */

    session_start();

    //connexion a la base de donnees
    include 'connexionDB.php';

    $titre = 'Index';
    
?>

<!DOCTYPE html>

    <html lang="fr">

        <head>

            <!-- Latest compiled and minified CSS -->
            <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

            <!-- Optional theme -->
            <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

            <!-- Latest compiled and minified JavaScript -->
            <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
                 
            <!-- JQuery -->
            <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->



            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


            <style>

                .invalid { border-color: red; }
                #error { color: red } 
                
                #success_message{ display: none;}

            </style>
        </head>

        <body>
 
            <div class="container col-xl-12" style="margin-top:50px;">
                
                <form class="needs-validation well form-horizontal" action="inscription.php" method="post"  id="inscription_form" novalidate>
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
                                        <input name="nom" placeholder="nom" class="form-control" type="text">
                                    </div>
                                </div>


                                <div class="invalid-feedback">
                                    Ce champ est obligatoire
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


                                <div class="invalid-feedback">
                                    Ce champ est obligatoire
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
                                        <input name="adresse" placeholder="adresse" class="form-control"  type="text">
                                    </div>
                                </div>


                                <div class="invalid-feedback">
                                    Ce champ est obligatoire
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

                                <div class="invalid-feedback">
                                    Ce champ est obligatoire
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

                                <div class="invalid-feedback">
                                    Ce champ est obligatoire
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


                                <div class="invalid-feedback">
                                    Ce champ est obligatoire
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

                                <div class="invalid-feedback">
                                    Ce champ est obligatoire
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
                                        <input name="mdp" placeholder="Mot de passe" class="form-control" type="password">
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
                                    <label id="that_label" class="col-md-4 control-label">Comment nous avez-vous connu ?</label>
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
                        <div class="col-md-4">
                            <br>
                            &nbsp
                            <button type="submit" class="btn btn-warning" >&nbsp Créer mon compte <span class="glyphicon glyphicon-send"></span>&nbsp</button>
                        </div>
                    </div>

                    </fieldset>
                </form>

            </div>
            <!-- /.container -->



        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

        <script type="text/javascript">
            

            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var user_email = document.getElementById("email");     

            user_email.onblur = function() 
            {
                if ( !(user_email.value.match(mailformat)) ) 
                {
                    user_email.classList.add('invalid');
                    error.innerHTML = 'Veuillez entrer un format d\'email valid \n \n e.g. john-doe@gmail.com'
                }
            };

            user_email.onfocus = function() {
                if (this.classList.contains('invalid')) {
                    // remove the "error" indication, because the user wants to re-enter something
                    this.classList.remove('invalid');
                    error.innerHTML = "";
                }
            };


            // // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation');
                
                let department = document.getElementById('department');

                // console.log("\n");
                // console.log(department);
                // console.log(department.value);

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                    form.addEventListener('submit', function (event) {

                        if ( !form.checkValidity() ) 
                        {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        if ( (!the_department) || (the_department.value == '') || (the_department.value == 'Selectionnez') )  
                        {
                            the_department.style.border = "thin solid red";
                            // document.getElementById('that_label').getAttribute('class');
                            // document.getElementById('that_label').removeAttribute("class");
                            // document.getElementById('that_label').setAttribute('class', 'mb-1');
                            document.getElementById('that_label').style.color = "red";

                            event.preventDefault();
                            event.stopPropagation()
                        }

                        // document.getElementById('that_label').removeAttribute("class");
                        // document.getElementById('that_label').setAttribute('class', 'mb-1');

                        form.classList.add('was-validated')
                    }, false)
                })
            })()


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