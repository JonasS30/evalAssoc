<?php
include '_include/_head.php'
?>

<body id='pageRencontre'>
    <?php
    include '_include/_menu.php'
    ?>

    <div class="container">
        <div class=" text-center mt-5 ">
            <h1>Formulaire de contact</h1>
        </div>
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="contact-form" role="form">
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_name">Nom</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Votre nom" required="required" data-error="Votre nom est requis"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_lastname">Prénom</label> <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Votre prénom" required="required" data-error="Votre prénom est requis"> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_email">Votre Email</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Votre Email" required="required" data-error="Un email valide est requis"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_need">Catégories</label> <select id="form_need" name="need" class="form-control" required="required" data-error="Veuillez entrer une catégorie">
                                                    <option value="" selected disabled>Sélectionnez catégories</option>
                                                    <option>Demande de renseignements</option>
                                                    <option>Adhésion à l'association</option>
                                                    <option>Autre</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="form-group"> <label for="form_message">Message</label> <textarea id="form_message" name="message" class="form-control" placeholder="Ecrivez votre message" rows="4" required="required" data-error="S\'il vous plait, laisser nous un message !"></textarea> </div>
                                        </div>
                                        <div class="col-md-12 p-2 "> <input type="submit" class="btn btn-success btn-send pt-2 btn-block float-end" value="Envoyer"> </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="container content-2 text-center">
        <h1>
            Où nous trouver !
        </h1>
        <div class="row ">

            <div class="col-lg-7 mx-auto ">
                <div class="backgroundMaps">

                    <div class="map-responsive">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109179.83331614538!2d4.721915639677463!3d44.02079364951979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5be5ccc49ee3f%3A0x23883b75187587ef!2sCommune%20de%20Saint-Laurent-des-Arbres!5e0!3m2!1sfr!2sfr!4v1650352522162!5m2!1sfr!2sfr" width="660" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>
        </div>


    </div>









    <?php
    include '_include/_footer.php';
    include '_include/_script.php';
    ?>
</body>

</html>