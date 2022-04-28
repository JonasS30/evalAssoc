<?php
include '_include/_head.php'
?>

<body id="page_festivite">
    <?php
    include '_include/_menu.php'
    ?>
    <div class="container">
        <div class="row">
            <div class="col col-md-8 ">
                <article>
                    <h1>
                        Légendaire de Saint Laurent 2022
                    </h1>
                    <p>
                        Venez nombreux pour fêter la Légendaire de Saint Laurent.a patir de 14h jusqu'à dans la soirée. <br> On vous attends avec impatience le samedi 27 Août 2022.
                        Chasse au trésor, animations gratuites et concert sont troujours au rendez vous !
                    </p>

                    <div class="deco">
                        <a href="" data-bs-toggle="modal" data-bs-target="#affiche">

                            <img src="./photos/affiche.jpg" alt="Affiche de la manifestation">
                        </a>

                    </div>


                    <div class="deco">
                        <a href="" data-bs-toggle="modal" data-bs-target="#planning">

                            <img src="./photos/planning.jpg" alt="planning manifestation">
                        </a>
                    </div>
                </article>

            </div>
            <aside class="col col-md-4">
                <ul class="list-group list-group-flush mt-4">
                    <li class="list-group-item list-group-item-action active">
                        <a href="#">Légendaire de Saint Laurent 2022</a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="#">Les ateliers "PATRIMOINE-HISTOIRE"</a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="#">Légendaire de Saint Laurent 2021</a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="#">Réunion publique centre Pierre Garcia</a>
                    </li>

                </ul>

            </aside>

        </div>
        <div class="modal fade" id="affiche" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <img src="./photos/affiche.jpg" alt="affiche de la manisfestation">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="planning" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <img src="./photos/planning.jpg" alt="planning de la manisfestation">
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