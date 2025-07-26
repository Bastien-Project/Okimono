<?php
$base = '';
include('./pages/header.php'); ?>

<section>
	<h2>Pourquoi ce site ?</h2>
	<div>
		<div>
			<img src="images/passions.png" alt="Mes passions">
		</div>
		<div>
			<p>
				Okimono 置物 est un site où je partage mes passions, mes créations et mes réflexions sur divers sujets. <br>
				Il y a une partie concernant le sport automobile, j'adore depuis depuis les courses automobiles, la F1 et aussi le karting que je pratique en loisir. <br>
				Une autre section concerne le ski, que je pratique depuis tout petit, et chaque année j'attend avec impatience l'hiver uniquement pour pouvoir aller skier. <br>
				Un troisième sujet sur le code et la programation, avec en lien tout mes projets de développement web. <br>
				Et enfin un dernier thème, et la raison principale de ce site, c'est le bois. Mes créations, du croquis à la réalisation finale, des meubles ou de simples objets de décoration.
			</p>
		</div>
	</div>

	<h3>Qui suis-je ?</h3>
	<div>
		<div>
			<p>
				Je me nomme Bastien, j'ai 25 ans et je suis passionné par le sport automobile, le ski, la programmation et le travail du bois. <br>
				Et j'ai apparement beaucoup de temps libre, donc j'ai décidé de créer ce site pour passer le temps à ne rien faire.
			</p>
		</div>
		<div>
			<img src="images/moi.png" alt="Ma tête">
		</div>
	</div>

	<h3>Si nous, humains, voyons l'eau mais pas l'air, es-ce qu'un poisson vois l'air et pas l'eau ?</h3>
	<div>
		<div>

			<img src="images/air_eau.png" alt="Mi-air mi-eau">

		</div>
		<div>
			<p>
				Et ben je n'en ai aucune idée.
				<br> Mais c'est une des questions que je me pose et dont je n'aurais pas de réponse.
			</p>
		</div>
	</div>

</section>

<!----------------- tuile presentation environement -------------------->
<div class="blockTiles">
	<div class="wrap">

		<a href="./pages/sasp.php">
			<div class="tile">
				<div class="img-coin haut-gauche"></div>
				<div class="text">
					<h1>Sport automobile</h1>
					<h2 class="animate-text">La F1 et le karting</h2>
					<p class="animate-text">Je suis un fan de Formule 1 depuis petit. Et arrivé à l'adolescence, j'ai commencé à faire du karting.</p>
				</div>
			</div>
		</a>

		<a href="./pages/sasp.php">
			<div class="tile">
				<div class="img-coin haut-droit"></div>
				<div class="text">
					<h1>Ski</h1>
					<h2 class="animate-text">Passion pour la neige</h2>
					<p class="animate-text">Je pratique le ski quasiment tous les hivers depuis ma naissance. Il n'y a pas une année où je ne suis pas allé skier.</p>
				</div>
			</div>
		</a>

		<a href="./pages/sasp.php">
			<div class="tile">
				<div class="img-coin bas-gauche"></div>
				<div class="text">
					<h1>Programation</h1>
					<h2 class="animate-text">Développement web et logiciel</h2>
					<p class="animate-text">Je suis passionné par le développement. Je passe mon temps libre à coder et à créer des projets décalés ou plus sérieux.</p>
				</div>
			</div>
		</a>

		<a href="./pages/menuiserie.php">
			<div class="tile">
				<div class="img-coin bas-droit"></div>
				<div class="text">
					<h1>Menuiserie</h1>
					<h2 class="animate-text">Mes créations</h2>
					<p class="animate-text">Je réalise des meubles sur mesure et des objets de décoration en bois. Je travaille la majorité du temps avec du bois récupéré quelque part, non acheté en magasin.</p>
				</div>
			</div>
		</a>

	</div>
</div>

<?php include('./pages/footer.php'); ?>