
<?php

    /* 
        ********** PAS Terminé ************
    */

    session_start();

    //connexion a la base de donnees
    include 'connexionDB.php';

    $titre = 'Index2';

?>

<!DOCTYPE html>

<html lang="fr">

    <head>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


        <style>
            /*
            *
            * ==========================================
            * CUSTOM UTIL CLASSES
            * ==========================================
            *
            */

            .invalid { 
                border-color: red; 
            }

            .invalid-feedback { 
                border-color: red; 
            }

            #error { 
                color: red; 
            }


            .border-md {
                border-width: 2px;
            }



            /*
            *
            * ==========================================
            * FOR DEMO PURPOSES
            * ==========================================
            *
            */

            body {
                min-height: 100vh;
            }

            .form-control:not(select) {
                padding: 1.5rem 0.5rem;
            }

            select.form-control {
                height: 52px;
                padding-left: 0.5rem;
            }

            .form-control::placeholder {
                color: #ccc;
                font-weight: bold;
                font-size: 0.9rem;
            }
            .form-control:focus {
                box-shadow: none;
            }

        </style>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>


    <body>


        <!-- Navbar-->
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-light py-3">
                <div class="container">
                    <!-- Navbar Brand -->
                    <a href="#" class="navbar-brand">
                        <img src="https://bootstrapious.com/i/snippets/sn-registeration/logo.svg" alt="logo" width="150">
                    </a>
                </div>
            </nav>
        </header>


        <div class="container">
            <div class="row py-5 mt-4 align-items-center">
                <!-- For Demo Purpose -->
                <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                    <!-- <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block"> -->
                    
                    <img src="driving_lesson_1024.jpg" alt="" class="img-fluid mb-3 d-none d-md-block">
                    
                    <h1>Créer votre Compte</h1>
                </div>

                <!-- Registration Form -->
                <div class="col-md-7 col-lg-6 ml-auto">
                    <form class="needs-validation" method="post" action="/inscription.php" novalidate>
                        <div class="row">

                            <!-- First Name -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-user text-muted"></i>
                                    </span>
                                </div>
                                <input name="prénom" placeholder="prénom" id="prenom" type="text" class="form-control bg-white border-left-0 border-md" required>
                                
                                <div class="invalid-feedback">
                                Veuillez renseigner votre prénom
                                </div>
                            </div>

                            <!-- Last Name -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-user text-muted"></i>
                                    </span>
                                </div>
                                <input name="nom" placeholder="nom"  id="nom" type="text" class="form-control bg-white border-left-0 border-md" required>
                                
                                <div class="invalid-feedback">
                                    Veuillez renseigner votre nom
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="input-group col-lg-12 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-envelope text-muted"></i>
                                    </span>
                                </div>
                                <input id="email" type="email" name="email" placeholder="Adresse Email" class="form-control bg-white border-left-0 border-md" required>
                                
                                <div class="invalid-feedback">
                                    Veuillez renseigner votre email
                                </div>

                                <div id="error" style="font-size: small;"></div>

                            </div>


                            <br>


                            <!-- Address 1 -->
                            <div class="input-group col-lg-12 mt-2 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-envelope text-muted"></i>
                                    </span>
                                </div>
                                <input id="adresse" type="text" name="adresse" placeholder="Adresse" class="form-control bg-white border-left-0 border-md" required>
                                
                                <div class="invalid-feedback">
                                    Veuillez renseigner votre adresse
                                </div>
                            </div>

                            <!-- Address 2 -->
                            <div class="input-group col-lg-12 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-phone-square text-muted"></i>
                                    </span>
                                </div>

                                <input id="code_postal" maxlength="5" minlength="1" name="code_postal" placeholder="Code Postal" type="text" style="max-width: 80px" class="form-control bg-white border-left-0 border-md font-weight-bold text-muted" required>

                                <input id="ville" name="ville" placeholder="Ville" type="text" class="form-control bg-white border-md border-left-0 pl-3" required>

                                <div class="invalid-feedback">
                                    Veuillez renseigner votre code postal et ville
                                </div>

                                <br>

                                <div id="error_code_postal" style="font-size: small; color:red;"></div>

                            </div>


                            <!-- Phone Number -->
                            <div class="input-group col-lg-12 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-phone-square text-muted"></i>
                                    </span>
                                </div>
                                <select id="countryCode" name="countryCode" style="max-width: 80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                                    <option value="">+12</option>
                                    <option value="">+10</option>
                                    <option value="">+15</option>
                                    <option value="">+18</option>
                                </select>
                                <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3" required>
                            </div>


                            <!-- Job -->
                            <div class="input-group col-lg-12 mt-2 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-black-tie text-muted"></i>
                                    </span>
                                </div>
                                <select id="job" name="jobtitle" class="form-control custom-select bg-white border-left-0 border-md" required>
                                    <option value="">Choose your job</option>
                                    <option value="">Designer</option>
                                    <option value="">Developer</option>
                                    <option value="">Manager</option>
                                    <option value="">Accountant</option>
                                </select>
                            </div>

                            <!-- Password -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-lock text-muted"></i>
                                    </span>
                                </div>
                                <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md" required>
                            </div>

                            <!-- Password Confirmation -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-lock text-muted"></i>
                                    </span>
                                </div>
                                <input id="passwordConfirmation" type="text" name="passwordConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group col-lg-12 mx-auto mb-0">
                                <button type=submit class="btn btn-primary btn-block py-2">
                                    <span class="font-weight-bold">Créer mon Compte</span>
                                </button>
                            </div>

                            <!-- Divider Text -->
                            <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                                <div class="border-bottom w-100 ml-5"></div>
                                <span class="px-2 small text-muted font-weight-bold text-muted">OU</span>
                                <div class="border-bottom w-100 mr-5"></div>
                            </div>
                            

                            <!-- Already Registered -->
                            <div class="text-center w-100">
                                <p class="text-muted font-weight-bold">Vous avez déjà un compte ? <a href="#" class="text-primary ml-2">Connectez-vous</a></p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script type="text/javascript">
            // For Demo Purpose [Changing input group text on focus]
            $(function () {
                $('input, select').on('focus', function () {
                    $(this).parent().find('.input-group-text').css('border-color', '#80bdff');
                });
                $('input, select').on('blur', function () {
                    $(this).parent().find('.input-group-text').css('border-color', '#ced4da');
                });
            });


            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var code_postal_format = /^[0-9]{1,5}$/;

            var user_email = document.getElementById("email");     
            var code_postal = document.getElementById("code_postal");     

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

            code_postal.onblur = function() 
            {
                if ( !(code_postal.value.match(code_postal_format)) ) 
                {
                    code_postal.classList.add('invalid');
                    error_code_postal.innerHTML = 'Veuillez entrer un code_postal valid \n';
                }
            };
            
            code_postal.onfocus = function() {
                if (this.classList.contains('invalid')) {
                    // remove the "error" indication, because the user wants to re-enter something
                    this.classList.remove('invalid');
                    error_code_postal.innerHTML = "";
                }
            };

            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation');

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
                            
                            swal("Votre formulaire contien des erreurs.");

                        }

                        if ( !(code_postal.value.match(code_postal_format)) ) 
                        {
                            code_postal.classList.add('invalid');

                            code_postal.style.border = 'thin solid #dc3545' // 'thin solid red'; // .classList.add('invalid');
                            
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
            })()

        </script>

    </body>

</html>