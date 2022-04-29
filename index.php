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
					<source src="https://jonnas.ovh/index.php/s/9qxxXPPQnNwtWDy/download/LEGENDAIRE%202018%20SAINT%20LAURENT%20DES%20ARBRES%20-%20EVENT_x264.mp4" type="video/mp4">

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

				<button id="pleinEcran">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#EAEEE6" class="bi bi-fullscreen" viewBox="0 0 16 16">
						<path d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z" />
					</svg>
				</button>
			</div>
			<img src="./icon/Composant 4 – 1.png" alt="déco" class="banderole">


		</section>

		<div class="container-fluid">
			<div class="row part1 align-items-center">
				<div class="col-md-4 ">
					<img alt="Logo association Légendaire Saint laurent des Arbres" src="./photos/légendaire8.png">
				</div>
				<div class="col-md-8 content1 ">
					<h1>
						Légendaire de Saint Laurent
					</h1>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
						<br>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde iure cupiditate ut id? Distinctio assumenda architecto sunt! Assumenda, molestias eveniet, soluta voluptatibus delectus nihil eligendi nisi eaque quam dolores repudiandae!
					</p>

				</div>
			</div>
			<div class="row ornement">
				<img src="./icon/floral-ornament.png" alt="séparation texte">
			</div>
			<div class="row part2 align-items-center">
				<div class="col-md-8 content2">
					<h2>
						L'histoire
					</h2>
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
						<br>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde iure cupiditate ut id? Distinctio assumenda architecto sunt! Assumenda, molestias eveniet, soluta voluptatibus delectus nihil eligendi nisi eaque quam dolores repudiandae!
					</p>
				</div>
				<div class="col-md-4">
					<div class="deco">
						<img alt="image" src="./photos/3.jpg">

					</div>
				</div>
			</div>
			<div class="row ornement">
				<img src="./icon/floral-ornament.png" alt="séparation texte">
			</div>
			<div class="row part3 ">

				<div class="col-md-4">
					<h2>
						L'association
					</h2>
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
				<div class="col-md-4">
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
				<div class="col-md-4">
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
			</div>
			<div class="row part4">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<div class="deco">

						<img alt="Photo du village de Saint Laurent des Arbres" src="./photos/saint-laurent-des-arbres-mairie.jpg">
					</div>
				</div>
				<div class="col-md-2">
				</div>
			</div>
			<div class="row ornement">
				<img src="./icon/floral-ornament.png" alt="séparation texte">
			</div>
			<div class="row part5">
				<div class="col-md-12">
					<h2>
						La convivialité
					</h2>
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
			</div>
		</div>



	</main>


	<?php
	include '_include/_footer.php';
	include '_include/_script.php';
	?>



</body>

</html>