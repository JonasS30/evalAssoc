<?php
include '_include/_head.php'
?>

<body id="pageLegendaire">

    <?php
    include '_include/_menu.php'
    ?>

    <main>
        <section>
            <div class="videoContainer">

                <video autoplay muted loop id="videoPlayer">
                    <source src="https://jonnas.ovh/index.php/s/DEAJ4pdJM5XP79q/download/LEGENDAIRE%202018%20SAINT%20LAURENT%20DES%20ARBRES%20-%20EVENT_x264.mp4" type="video/mp4">

                    Désolé, votre navigateur ne supporte pas la vidéo intégrées.
                </video>
                <div class="img">
                    <img src="photos/légendaire6.png" alt="" srcset="">
                </div>
                <button id="offAudio" onclick="onAudio()">
                    <img src="icon/mute1.png" alt="Bouton icon audio off">
                </button>
                <button id="onAudio" onclick="offAudio()" class="hiddenButton">
                    <img src="icon/volume1.png" alt="icon audio on">
                </button>
            </div>

            <div class="content1">
                <div class="part1">
                    <img src="./photos/légendaire8.png" alt="logo Association">
                </div>

                <div class="part2">

                    <h1>
                        Le légendaire de Saint Laurent
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam eveniet odit dolores eos. Ipsum velit facilis, earum soluta deleniti pariatur, dolores magnam vel dolore totam culpa quos, exercitationem ut ipsa.<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime molestias at, officiis doloribus veniam laborum dolores eum architecto sapiente ipsam libero nesciunt magnam ex iure tenetur voluptas optio corporis minima.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem dolores porro earum dolore inventore libero repellendus iure doloribus veritatis cum? Provident recusandae laboriosam, veniam a nemo est quos aliquid rem.
                    </p>
                </div>
            </div>
        </section>



    </main>


    <?php
    include '_include/_footer.php';
    include '_include/_script.php';
    ?>



</body>

</html>