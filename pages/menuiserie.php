<?php
$base = '../';
include("./header.php");

function renderCreation($title = '', $shortDescription = '', $longDescription = '', $imagesRealisations = [], $imagesPlans = [], $endText = '')
{
?>
    <div class="creation">
        <h2><?= $title; ?></h2>
        <p><?= $shortDescription; ?> &nbsp;
            <?php if (!empty($longDescription)): ?>
                <span class="read-more">Lire plus</span>
        </p>
        <div class="hidden-text">
            <p><?= $longDescription; ?></p>
        </div>
    <?php endif;

            /* SLIDER REALISATIONS */
            if (!empty($imagesRealisations)) {
    ?>

        <div class="slider-container" style="display: block;">
            <div class="slider">
                <?php foreach ($imagesRealisations as $index => $image): ?>
                    <div class="slide<?= $index === 0 ? ' active' : ''; ?>">
                        <img src="<?= $image['src']; ?>" alt="<?= $image['alt']; ?>">
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Flèche droite/gauche -->
            <button class="slider-btn prev-btn">❮</button>
            <button class="slider-btn next-btn">❯</button>

            <!-- Point nombre de slide -->
            <div class="slider-indicators">
                <?php foreach ($imagesRealisations as $index => $image): ?>
                    <span class="indicator<?= $index === 0 ? ' active' : ''; ?>"></span>
                <?php endforeach; ?>
            </div>
        </div>
        <?php }

            /* SLIDER PLANS */
            if (!empty($imagesPlans)) {
                if (!empty($imagesRealisations)) { ?>
            <div class="slider-container" style="display: none;">
            <?php } else { ?>
                <div class="slider-container" style="display: block;">
                <?php } ?>

                <div class="slider">
                    <?php foreach ($imagesPlans as $index => $image): ?>
                        <div class="slide<?= $index === 0 ? ' active' : ''; ?>">
                            <img src="<?= $image['src']; ?>" alt="<?= $image['alt']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Flèche droite/gauche -->
                <button class="slider-btn prev-btn">❮</button>
                <button class="slider-btn next-btn">❯</button>

                <!-- Point nombre de slide -->
                <div class="slider-indicators">
                    <?php foreach ($imagesPlans as $index => $image): ?>
                        <span class="indicator<?= $index === 0 ? ' active' : ''; ?>"></span>
                    <?php endforeach; ?>
                </div>
                </div>
            <?php }

            // Change de réalisation à plan, ou affichage si un deux deux ou aucun
            if (!empty($imagesRealisations) && !empty($imagesPlans)) { ?>
                <button class="toggle-btn">Voir Plans</button>
            <?php } else if (!empty($imagesRealisations)) { ?>
                <p class="noSlider">Aucun plan disponible.</p>
            <?php } else if (!empty($imagesPlans)) { ?>
                <p class="noSlider">Aucune réalisation disponible.</p>
            <?php } else { ?>
                <div class='img-coin bas-droit'></div>
                <p class="noSlider">Aucune réalisation ni plan disponible, juste des idées en tête.</p>
            <?php } ?>

            <p><?php if (!empty($endText)): echo $endText;
                endif; ?></p>
            </div>
        <?php
    } ?>

        <section class="realisations">
            <h1 id="realisations">Voici mes créations en bois au fil des années :</h1>

            <?php
            // -- CREATIONS --
            renderCreation(
                title: "Rénovation Table Extérieur en Tek",
                shortDescription: "J'ai rénové une table d'extérieur en bois de tek, lui redonnant vie et éclat.",
                longDescription: "Ce projet a été réalisé en plusieurs étapes. La table dormait dehors à subir les canicules l'été et les intempéries l'hiver. Je l'ai récupérée, poncée, et lasurée de fond en comble. Mais les chaises qui allaient avec étaient en assez bon état donc elles n'ont pas subi le même traitement. Et ce fût le début d'une passion.",
                imagesRealisations: [
                    ["src" => "../images/creations/1_1_table_exterieur_tek_finie.jpg", "alt" => "Table rénovée vue générale (floue)"],
                    ["src" => "../images/creations/1_2_table_exterieur_tek.jpg", "alt" => "Table avec du bazar dessus"],
                    ["src" => "../images/creations/1_3_table_exterieur_tek_chaises.jpg", "alt" => "Les chaises assortis à la table"]
                ],
                endText: "Désolé de la mauvaise qualité de la première photo. Les deux suivantes sont de meilleures qualités mais avec des bricoles dessus. <br> Depuis cette table a été découpée et jetée en partie, le reste sert pour la bois cheminée l'hiver."
            );

            renderCreation(
                title: "Premier meuble en bois",
                shortDescription: "J'ai réalisé un meuble en bois sur mesure, son but était de pouvoir ranger mes consoles et leurs jeux.",
                longDescription: "Ce meuble a été conçu pour s'adapter parfaitement à mes consoles avec un rangements pour les jeux sur le côté. J'ai utilisé du contreplaqué, les seules planches que j'avais. N'y connaissant pas grand chose j'avais comblé les trous avec du mastic d'étanchéité et je l'avais peint en blanc.",
                imagesRealisations: [
                    ["src" => "../images/creations/2_1_premier_meuble_panorama.jpg", "alt" => "Planche avec le tracé et les premières découpes sur le coté"],
                    ["src" => "../images/creations/2_2_premier_meuble_decoupe_1.jpg", "alt" => "Moi entrain de couper le bois à la scie sauteuse"],
                    ["src" => "../images/creations/2_3_premier_meuble_decoupe_2.jpg", "alt" => "Moi entrain de couper le bois à la scie sauteuse 2"],
                ],
                imagesPlans: [
                    ["src" => "../images/plans/2_1_premier_meuble.jpg", "alt" => "Plan du meuble"]
                ],
                endText: "Au top de la sécurité en short et tong. <br> 
            Finalement le meuble était tout de travers, mais j'étais fier de mon premier meuble <br> 
            Depuis, ce meuble a été démonté et jeté."
            );

            renderCreation(
                title: "Cadre en Tasseau pour Tableau",
                shortDescription: "J'ai fabriqué des cadres en tasseau pour des tableau que j'ai commandé mais il n'y avait pas le cadre avec.",
                imagesRealisations: [
                    ["src" => "../images/creations/3_1_cadre.jpg", "alt" => "Cadre pour tableaux"]
                ],
                endText: "Avec un petit fil dérrière on peux les accrocher n'importe où avec un petit clou. <br>
            Il faut juste faire attention à bien les positionner en étant à niveau."
            );

            renderCreation(
                title: "Meuble Console",
                shortDescription: "Ce meuble est conçu pour accueillir mes consoles de jeux et leurs accessoires. Une sorte de V2 de mon premier meuble.",
                imagesRealisations: [
                    ["src" => "../images/creations/4_1_meuble_console.jpg", "alt" => "Meuble Console"]
                ],
                imagesPlans: [
                    ["src" => "../images/plans/4_1_meuble_console_ebauche.jpg", "alt" => "Premier jeu de à quoi va ressembler le meuble console"],
                    ["src" => "../images/plans/4_2_meuble_console.jpg", "alt" => "Plan du meuble de manière plus propre"],
                    ["src" => "../images/plans/4_3_meuble_console_taille_planches.jpg", "alt" => "Taille des planches à découper"],
                    ["src" => "../images/plans/4_4_meuble_console_echelle_0,5.jpg", "alt" => "Plan vue de face à l'échelle 1/2"]
                ],
                endText: "Depuis il existe encore et sert toujours à la même fonction."
            );

            renderCreation(
                title: "Range couvert",
                shortDescription: "Il fallait un range couvert mais impossible d'en trouver un avec les bonnes dimensions, alors j'en ai fait un sur mesure.",
                imagesPlans: [
                    ["src" => "../images/plans/5_1_range_couvert_ebauche.jpg", "alt" => "Première ébauche du range couvert"],
                    ["src" => "../images/plans/5_2_range_couvert.jpg", "alt" => "Plans définitifs du range couvert"]
                ],
                endText: "Il a été fait à partir de chutes de bois et est très pratique."
            );

            renderCreation(
                title: "Ratelier de Ski",
                shortDescription: "Ce ratelier est conçu pour ranger les skis, les bâtons mais aussi les chaussures de ski. Capacité étudiée pour 5 paires de ski ou 3 paires de ski et 2 snowboards.",
                longDescription: "J'ai pensé ce ratelier à partir d'une maquette en papier cartonnée et colle chaude aux proportions respectée, les mesures ayant déjà été prises avant. Il a fallu tout découper avant car pas de possibilité de redécouper sur place, il fallait penser au moindre détails.",
                imagesRealisations: [
                    ["src" => "../images/creations/6_1_ratelier_ski.jpg", "alt" => "Ratelier à ski"],
                    ["src" => "../images/creations/6_2_ratelier_ski_moisi.jpg", "alt" => "Ratelier à ski avec moisissures"],
                    ["src" => "../images/creations/6_3_ratelier_ski_moisi_milieu.jpg", "alt" => "Ratelier à ski avec moisissures étagère milieu"],
                    ["src" => "../images/creations/6_4_ratelier_ski_moisi_bas.jpg", "alt" => "Ratelier à ski avec moisissures étagère du bas"]
                ],
                imagesPlans: [
                    ["src" => "../images/plans/6_1_ratelier_ski_face_mix.jpg", "alt" => "Maquette vue de face du ratelier à ski pour ski et snowbard"],
                    ["src" => "../images/plans/6_2_ratelier_ski_dessous_mix.jpg", "alt" => "Maquette vue de dessous du ratelier à ski pour ski et snowbard"],
                    ["src" => "../images/plans/6_3_ratelier_ski_dessous_ski.jpg", "alt" => "Maquette vue de dessous du ratelier à ski pour ski principalement"],
                    ["src" => "../images/plans/6_4_ratelier_ski_dessous_snow.jpg", "alt" => "Maquette vue de dessous du ratelier à ski pour snowbard principalement"]

                ],
                endText: "Malheuresment depuis il y a eu un dégats des eaux et il faudrait le refaire."

            );

            renderCreation(
                title: "Découpe sur mesure anti rat",
                shortDescription: "J'ai réalisé une découpe sur mesure au niveau des tuiles pour éviter qu'un rat passe.",
                longDescription: "Agacé par un rat qui faisait des allers et venus et du bruit la nuit dans le plafond, j'ai découvert par ou il passait et j'ai décidé de le tuer, mais ni pate ni piège ont fonctionné donc j'ai opté plutôt de lui bloquer l'accès. Après ça il n'est plus jamais revenu.",
                imagesRealisations: [
                    ["src" => "../images/creations/7_1_bloque_rat_gauche.jpg", "alt" => "Découpe sur mesure anti passage du rat côté gauche"],
                    ["src" => "../images/creations/7_2_bloque_rat_droite.jpg", "alt" => "Découpe sur mesure anti passage du rat côté droit"]
                ],
                imagesPlans: [
                    ["src" => "../images/plans/7_1_rat_tete.jpg", "alt" => "Tete du rat qui me regarde"],
                    ["src" => "../images/plans/7_2_rat_corps.jpg", "alt" => "Corps du rat qui s'enfuit"],
                    ["src" => "../images/plans/7_3_forme_tuile.jpg", "alt" => "Forme des tuiles pour faire une découpe adaptée"],
                    ["src" => "../images/plans/7_4_bloque_rat_patron.jpg", "alt" => "Patron de la découpe sur mesure anti passage du rat"]
                ],
                endText: "Le patron est fait à partir d'un contreplaqué de fond de meuble."
            );

            renderCreation(
                title: "Table basse palette",
                shortDescription: "J'ai fabriqué une table basse à partir d'une palette coupée en deux et superposée.",
                longDescription: "Malheuresement je n'ai pas pris de photo de la table basse une fois finie sur ses roulettes, uniquement quand je l'ai démontée pour récupérer ce que je pouvais et jeter le reste. <br>
            Mais j'ai le plan de quand j'ai du rajouter 2 tasseaux pour soutenir la structure car elle s'affaissait.",
                imagesRealisations: [
                    ["src" => "../images/creations/8_1_table_basse_palette.jpg", "alt" => "Table Basse Palette"]
                ],
                imagesPlans: [
                    ["src" => "../images/plans/8_1_table_basse_palette_amelioration.jpg", "alt" => "Plan Amélioration à apporter à la table basse"]
                ],
                endText: "Même si c'est joli, ce n'est pas pratique brut comme ça, bien penser à combler les trous entre chaque planche avec d'autres planches."
            );

            renderCreation(
                title: "Pieds d'enceinte",
                shortDescription: "Ces deux petits supports sont conçus pour accueillir mes enceintes.",
                longDescription: "Ils sont faits en pin, j'ai reouché les trous à la pâte à bois et poncé mais pas de lasure ni rien. La partie en dessous peux servir de rangement.",
                imagesRealisations: [
                    ["src" => "../images/creations/9_1_pied_enceinte.jpg", "alt" => "Meuble de pied d'enceinte"],
                    ["src" => "../images/creations/9_2_pied_enceinte_gauche.jpg", "alt" => "Meuble de pied d'enceinte côté gauche"],
                    ["src" => "../images/creations/9_3_pied_enceinte_droit.jpg", "alt" => "Meuble de pied d'enceinte côté droit"]
                ],
                endText: "Toujours utilisés et pratiques."
            );

            renderCreation(
                title: "Meuble Déco Love",
                shortDescription: "Ce meuble était pour moi un défi technique avec l'angle pour le V.",
                imagesRealisations: [
                    ["src" => "../images/creations/10_1_love_remove_bg.png", "alt" => "Meuble LOVE sans fond"],
                    ["src" => "../images/creations/10_2_love.jpg", "alt" => "Meuble LOVE"]
                ],
                imagesPlans: [
                    ["src" => "../images/plans/10_1_love.jpg", "alt" => "Plan du meuble LOVE"],
                    ["src" => "../images/plans/10_2_love_precis.jpg", "alt" => "Plan du meuble LOVE précis"]
                ],
                endText: "Hormis une lasure après les photos, il sert juste de meuble décoratif et à ranger quelques babioles dessus."
            );

            renderCreation(
                title: "Meuble rouleau PQ",
                shortDescription: "Ce meuble est une solution pratique à une réel problème, je n'avais pas de dérouleur de papier toilette et impossible d'en mettre un.",
                longDescription: "Réalisé avec des chutes de planches de palette (pas celle de la table basse encore en utilisation au moment de la fabrication) et un manche à balai. Ce meuble est un support et réservoir de rouleau de papier toilette qui répond à un vrai besoin.",
                imagesRealisations: [
                    ["src" => "../images/creations/11_1_rouleau_PQ.jpg", "alt" => "Meuble rouleau PQ"],
                    ["src" => "../images/creations/11_2_rouleau_PQ_tourillon.jpg", "alt" => "Tourillon bloquant le rouleau de PQ de sortir"]
                ],
                imagesPlans: [
                    ["src" => "../images/plans/11_1_rouleau_PQ.jpg", "alt" => "Plan du meuble rouleau PQ"]
                ],
                endText: "Que de la récup, ce meuble ne m'aura pas coûté un centime : pratique, économique et écologique."
            );

            renderCreation(
                title: "Rajout Bureau",
                shortDescription: "J'ai ajouté un petit meuble à mon bureau pour en faire une extension et que ça tombe pile poil avec le mur. Il est pratique et tout simple : un tasseau et une planche.",
                imagesRealisations: [
                    ["src" => "../images/creations/12_1_rajout_bureau.jpg", "alt" => "Rajout Bureau"]
                ],
                imagesPlans: [
                    ["src" => "../images/plans/12_1_rajout_bureau.jpg", "alt" => "Plan rajout Bureau"]
                ],
                endText: "Il a été démonté en même temps que la table basse. <br>
            Et sur la droite on peux voir le côté du meuble console (cf : plus haut)."
            );

            renderCreation(
                title: "Restauration petite table en tek",
                shortDescription: "J'ai restauré une petite table en tek, lui rendant toute sa beauté. Je vous laisse juger pour vous même.",
                longDescription: "En déménageant, sur le balcon il y avait une table et un banc en mauvais état. J'ai décidé de les rénover pour leur redonner vie. Je l'ai démontée, poncée (longtemps) et lasurée.",
                imagesRealisations: [
                    ["src" => "../images/creations/13_1_table_tek_avant.jpg", "alt" => "Table tek avant"],
                    ["src" => "../images/creations/13_2_table_tek_apres.jpg", "alt" => "Table tek après"]
                ],
                endText: "S'ajoute à la table un petit banc qui viendra juste après."
            );

            renderCreation(
                title: "Restauration banc extérieur, Partie 1/3",
                shortDescription: "J'ai restauré un banc d'extérieur en bois, lui redonnant une seconde vie.",
                imagesRealisations: [
                    ["src" => "../images/creations/14_1_banc_pt1.jpg", "alt" => "Banc avantr"],
                    ["src" => "../images/creations/14_2_banc_pt1.jpg", "alt" => "Banc démonté"],
                    ["src" => "../images/creations/14_3_banc_pt1.jpg", "alt" => "Le problèmes des 'vis'"]
                ],
                endText: "Le banc a été compliqué à démonté, car cetaines vis étaient voilées ou ... une mèche cassée."
            );

            renderCreation(
                title: "Support PC",
                shortDescription: "J'ai fabriqué un support pour mon PC afin de le surélever, de mieux gérer les câbles et surtout une ouverture pour qu'il ventile bien.",
                longDescription: "J'ai toujours eu un support pour mes PC pour bien qu'ils ventillent. Ayant changé d'ordinateur j'ai donc refait un support adapté à mon nouvel ordinateur, et donc pris en compte les prises et évacuations d'air. Il y a 3 épaisseurs de bois, celle du milieu étant plusieurs petits bout pour laisser au maximum laisser passer l'air. Et je l'ai peint en noir pour qu'il soit assorti à mon bureau.",
                imagesRealisations: [
                    ["src" => "../images/creations/15_1_support_PC.jpg", "alt" => "Support PC"]
                ],
                imagesPlans: [
                    ["src" => "../images/plans/15_1_support_PC.jpg", "alt" => "Plan Support PC"]
                ],
                endText: "Simple mais très utile."
            );

            renderCreation(
                title: "Planche cuisine",
                shortDescription: "J'ai mis une planche en bois dans la cuisine pour cacher le dessous, adapté sur mesure pour l'espace et surtout pour pouvoir ouvrir le lave-vaisselle.",
                longDescription: "Cette planche en bois est surtout pour ne pas voir dessous qui est tout moche, mais pas un cache misère. La planche a été lasurée et surtout vernie pour protéger contre les éventuelles éclaboussures d'eau.",
                imagesRealisations: [
                    ["src" => "../images/creations/16_1_planche_cuisine.jpg", "alt" => "Planche cuisine"]
                ],
                imagesPlans: [
                    ["src" => "../images/plans/16_1_planche_cuisine.jpg", "alt" => "Plan planche cuisine"]
                ],
                endText: "Elle est à la fois pratique et esthétique."
            );

            renderCreation(
                title: "Restauration banc extérieur, Partie 2/3",
                shortDescription: "En plein ponçage ma ponceuse m'a lachée (quelques minutes après la photo). Mais le début est déjà incroyable.",
                imagesRealisations: [
                    ["src" => "../images/creations/14_4_banc_pt2.jpg", "alt" => "RIP ma ponceuse"]
                ],
                endText: "Il ne me reste plus qu'à racheter une ponceuse."
            );

            renderCreation(
                title: "Porte-épice",
                shortDescription: "Ce meuble a été pensé pour organiser et exposer mes épices de manière pratique et avec un côté esthétique.",
                longDescription: "Il est un peu surélevé par rapport au plan de travail, ce qui permet de nettoyer facilement en dessous. Il y a aussi une sorte de barrière aux étages pour éviter que les épices ne tombent. Et surtout il a été lasuré et vernis pour résiter à l'eau et la vapeur vu qu'il se trouve à côté des plaques de cuisson.",
                imagesRealisations: [
                    ["src" => "../images/creations/17_1_porte_epice.jpg", "alt" => "Porte-épices"]
                ],
                imagesPlans: [
                    ["src" => "../images/plans/17_1_porte_epice.jpg", "alt" => "Plan porte-épices"]
                ],
                endText: "Petit défi, l'arrondi sur les côtés pour avoir un plateau plus large en bas pour mettre des bocaux."
            );

            renderCreation(
                title: "Porte-clés",
                shortDescription: "Encore une solution pratique pour répondre à un besoin car nous avons beaucoup de clé et de porte-clés. Mais il devait s'adapter à deux trous déjà existant.",
                imagesRealisations: [
                    ["src" => "../images/creations/18_1_porte_cle.jpg", "alt" => "Porte-clés"]
                ],
                imagesPlans: [
                    ["src" => "../images/plans/18_1_porte_cle.jpg", "alt" => "Plan porte-clés"]
                ],
                endText: "Par contre je l'ai vraiment fait n'importe comment à la va vite, on peut encore voir le trait au crayon pour aligner les crochets, mais il a eu un petit coup de lasure quand même."
            );

            renderCreation(
                title: "Restauration banc extérieur, Partie 3/3",
                shortDescription: "Dernière partie du banc, une fois terminé d'être poncé il a été lasuré et vernis et remonté qu'avec de la colle et des vraies vis.",
                imagesRealisations: [
                    ["src" => "../images/creations/14_5_banc_pt3.jpg", "alt" => "Rénovation Banc Extérieur"]
                ],
                endText: "Il s'allie parfaitement à la table (juste à côté à gauche) et est maintenant prêt à affronter les intempéries sur le balcon."
            );

            renderCreation(
                title: "Brique de Yoga",
                shortDescription: "Cette brique de yoga a été faite pour ma copine désirant une brique de yoga.",
                longDescription: "J'ai d'abord pris pour mesures une brique sur Décathlon. Et chez moi j'avais des chutes de panneau de liège et de tapis de caoutchouc agloméré, donc j'ai décidé de les utiliser pour créer cette brique.",
                imagesRealisations: [
                    ["src" => "../images/creations/19_1_brique_yoga.jpg", "alt" => "Brique de Yoga"]
                ],
                imagesPlans: [
                    ["src" => "../images/plans/19_1_brique_yoga.jpg", "alt" => "Plan Brique de Yoga"]
                ],
                endText: "Tout simple, mais il faut fraiser les bords pour que cela soit plus agréable à utiliser."
            );

            renderCreation(
                title: "Vide poche",
                shortDescription: "Ce meuble est fait pour accueillir et répondre à plusieurs besoins de rangement sur mon bureau (pot à stylo, repose-téléphone, repose-casque et broutilles).",
                longDescription: "Il a été fait à partir d'une planche de MDF de 5mm. Assemblé par des vis, des supports d'angles et de la colle chaude. L'intérieur a été rempli par de la mousse expensive pour solidifier. Et finalement peint en noir pour qu'il soit assorti à mon bureau.",
                imagesRealisations: [
                    ["src" => "../images/creations/20_1_vide_poche.jpg", "alt" => "Vide poche en place"],
                    ["src" => "../images/creations/20_2_vide_poche_en_cours.jpg", "alt" => "Vide poche en cours d'assemblage"],
                    ["src" => "../images/creations/20_3_vide_poche_fini.jpg", "alt" => "Vide poche fini"]
                ],
                imagesPlans: [
                    ["src" => "../images/plans/20_1_vide_poche_ebauche.jpg", "alt" => "Première ébauche du vide poche"],
                    ["src" => "../images/plans/20_2_vide_poche_dimensions.jpg", "alt" => "Dimensions des planches du vide poche"],
                    ["src" => "../images/plans/20_3_vide_poche_decoupes.jpg", "alt" => "Decoupes prévues dans la planche pour le vide poche"]
                ],
                endText: "Premier meuble pour lequel j'ai fait des plans 3D."
            );

            renderCreation(
                title: "Table / Banc, 2 en 1",
                shortDescription: "Ce meuble est une pièce polyvalente qui peut servir de table ou de banc selon les besoins, et qui se transforme facilement.",
                longDescription: "J'ai acheté du bois à un grossiste près de Montpellier, j'ai transporté les planches de 4m de long dans ma petite voiture. C'était une vraie galère pour le transporter et surtout bien caler pour que rien ne bouge. <br>
            J'ai mis une semaine à tout découper, poncer, coller et visser. Mais avant cela il m'a fallu plusieurs semaines pour les plans dont j'ai pris une base depuis un site anglais. <br>
            Le bois est du douglas traité autoclave, naturellement grisé.",
                imagesRealisations: [

                    ["src" => "../images/creations/21_1_banc_table_forme_table.jpg", "alt" => "Table / Banc, en forme table"],
                    ["src" => "../images/creations/21_2_banc_table_forme_banc.jpg", "alt" => "Table / Banc, en forme banc"],
                    ["src" => "../images/creations/21_3_banc_table_debut.jpg", "alt" => "Toutes les planches recoupées en longueur de 2m"],
                    ["src" => "../images/creations/21_4_banc_table_bras.jpg", "alt" => "Premier bras faisant jonction pour passer de table à banc"],
                    ["src" => "../images/creations/21_5_banc_table_bras_double.jpg", "alt" => "Couple de bras venant s'emboiter quand ce sera en mode table"],
                    ["src" => "../images/creations/21_6_banc_table_pieds.jpg", "alt" => "Futurs pieds de la Table / Banc"],
                    ["src" => "../images/creations/21_7_banc_table_assise_plateau.jpg", "alt" => "Assise / Plateau de la Table / Banc"],
                    /* VOITURE */
                    ["src" => "../images/creations/21_8_voiture_profil.jpg", "alt" => "Vue de profil de la voiture chargée avec le bois."],
                    ["src" => "../images/creations/21_9_voiture_longueur.jpg", "alt" => "Vue de longueur de la voiture depuis l'arrière."],
                    ["src" => "../images/creations/21_10_voiture_sangle.jpg", "alt" => "Toutes les sangles et tendeurs que j'ai utilisée pour tenir le bois."]
                ],
                imagesPlans: [
                    ["src" => "../images/plans/21_1_banc_table_longueur.jpg", "alt" => "Plan Table / Banc, toutes les longueurs nécessaires et d'une partie du bras"],
                    ["src" => "../images/plans/21_2_banc_table_bras_pied.jpg", "alt" => "Plan des pieds et d'une partie du bras"],
                    ["src" => "../images/plans/21_3_banc_table_bras_assise.jpg", "alt" => "Plan de l'assise et d'une partie d'assemblage du bras"],
                    ["src" => "../images/plans/21_4_banc_table_bras_plateau.jpg", "alt" => "Plan d'assemble final du bras et du plateau"],
                    ["src" => "../images/plans/21_5_banc_table_toutes_decoupes.jpg", "alt" => "Plan de toutes les découpes (hors bras)"],
                    ["src" => "../images/plans/21_6_banc_table_decoupes_bras.jpg", "alt" => "Plan de toutes les découpes des bras"]
                ],
                endText: "Il me reste encore mettre les charnières pour le transformer. Et aussi à le dégriser (en partie) et le lasurer pour une finition parfaite. <br>
            C'est à ce jour ma plus grosse création et ce dont je suis le plus fier."
            );
            ?>

        </section>

        <section class="projets">
            <h1 id="projets">Et voici mes futurs projets :</h1>

            <?php
            // -- PROJETS --
            renderCreation(
                title: "Canapé Lit",
                shortDescription: "Depuis que j'ai vu cette photo, j'ai eu envie de faire pareil, mais il me faut faire des plans précis.",
                imagesPlans: [
                    ["src" => "../images/projets/1_canape_lit.jpg", "alt" => "Canapé Lit"]
                ]
            );

            renderCreation(
                title: "Chaise Tronc",
                shortDescription: "A partir d'un tronc d'arbre, je souhaite créer une chaise originale. Mais il faut un gros tronc et c'est pas facile à trouver. <br>
        Inspiré la aussi par cette photo.",
                imagesPlans: [
                    ["src" => "../images/projets/2_chaise_tronc.jpg", "alt" => "Chaise Tronc"]
                ],
            );

            renderCreation(
                title: "Horloge",
                shortDescription: "Simplement une horloge, purement esthétique et design.",
                imagesPlans: [
                    ["src" => "../images/projets/3_horloge.jpg", "alt" => "Horloge"]
                ],
                endText: "Il me faut juste trouver le mécanisme d'horloge."
            );

            renderCreation(
                title: "Cascade Lumineuse",
                shortDescription: "Ce meuble est conçu pour accueillir une cascade lumineuse.",
                longDescription: "J'ai déjà commencé à travailler sur ce projet, mais il me reste beaucoup à faire pour pouvoir le classer dans les réalisations.",
                imagesPlans: [
                    ["src" => "../images/projets/4_1_cascade_lumineuse_porte_manteau.jpg", "alt" => "Cascade lumineuse porte-manteau"],
                    ["src" => "../images/projets/4_2_cascade_lumineuse.jpg", "alt" => "Plans cascade lumineuse"],
                    ["src" => "../images/projets/4_3_cascade_lumineuse_tete.jpg", "alt" => "Cascade lumineuse tête"],
                    ["src" => "../images/projets/4_4_cascade_lumineuse_poteau.jpg", "alt" => "Cascade lumineuse poteau"],
                    ["src" => "../images/projets/4_5_cascade_lumineuse_poteau_echelle.jpg", "alt" => "Cascade lumineuse poteau à l'écehelle 1/1 pour la largeur et 1/10 pour la hauteur"],
                    ["src" => "../images/projets/4_6_cascade_lumineuse_poteau_rond.jpg", "alt" => "Rendre le poteau rond"],
                ],
                endText: "A la base j'utilisais un porte-manteau, il fallait quelque chose de plus adapté."
            );

            renderCreation(
                title: "Table Basse 2",
                shortDescription: "Une autre table basse, toujours à partir d'une palette, mais différente.",
                imagesPlans: [
                    ["src" => "../images/projets/5_table_basse_2.jpg", "alt" => "Table basse 2"]
                ],
                endText: "Je réfléchis à la doubler, pour en faire une grande table basse ou deux petites selon les besoins."
            );

            renderCreation(
                title: "Planche Baignoire",
                shortDescription: "Juste une planche à poser sur la baignoire quand on prend un bain.",
                imagesPlans: [
                    ["src" => "../images/projets/6_planche_baignoire.jpg", "alt" => "Planche baignoire"]
                ]
            );

            renderCreation(
                title: "Cadre posters",
                shortDescription: "Pour divers posters à des dimensions non standards.",
                imagesPlans: [
                    ["src" => "../images/projets/7_cadre_posters.jpg", "alt" => "Cadre posters"]
                ],
                endText: "Un cadre n'étant pas compliqué j'ai juste les mesures, pas de plans précis."
            );

            renderCreation(
                title: "Range Mug",
                shortDescription: "Ce meuble est à la demande de ma copine pour ranger une partie de ses mugs. L'idée est de le faire à partir de planche de palette.",
                imagesPlans: [
                    ["src" => "../images/projets/8_1_range_mug_disposition.jpg", "alt" => "Disposition des mugs"],
                    ["src" => "../images/projets/8_2_range_mug_echelle.jpg", "alt" => "Plan à l'échelle du range mug"],
                    ["src" => "../images/projets/8_3_range_mug_decoupes.jpg", "alt" => "Détails des découpes du range mug"]
                ],
                endText: "Je vous épargne tout les brouillons qu'il m'a fallu pour arriver à mettre tout les mugs avec chacun leur taille mais que le meuble soit d'extérieur un rectangle."
            );

            renderCreation(
                title: "Banc pliable",
                shortDescription: "Ce meuble est un banc pliable, une fois plié il ne prend quasiment pas de place.",
                imagesPlans: [
                    ["src" => "../images/projets/9_banc_pliable.jpg", "alt" => "Banc pliable"]
                ],
                endText: "Il est parfait pour les petits espaces."
            );

            renderCreation(
                title: "Lampe carrée",
                shortDescription: "Une petite lampe originale carrée.",
                imagesPlans: [
                    ["src" => "../images/projets/10_lampe_carree.jpg", "alt" => "Lampe carrée"]
                ],
                endText: "Il me faut juste trouver le fil et une douille pour l'ampoule."
            );

            renderCreation(
                title: "Composteur",
                shortDescription: "Il s'agit d'un composteur. Les planches découpées depuis des grosses planches de bardage.",
                imagesPlans: [
                    ["src" => "../images/projets/11_1_compost_vue_face.jpg", "alt" => "Composteur vue de face"],
                    ["src" => "../images/projets/11_2_compost_vue_biais_et_planche.jpg", "alt" => "Composteur vue de biais et planche"],
                    ["src" => "../images/projets/11_3_compost_decoupes.jpg", "alt" => "Composteur decoupes planches"],
                    ["src" => "../images/projets/11_4_gant_doigts.jpg", "alt" => "Mon gant coupé au niveau du pouce, index et majeur."],
                    ["src" => "../images/projets/11_5_gant_majeur.jpg", "alt" => "Mon gant coupé au niveau du majeur."]
                ],
                endText: "A la demande de mes parents, car celui donné gratuitement par la mairie est trop grand. <br>
        J'avais commencé à découper les planches, mais j'y ai laissé un bout de mes doigts."
            );

            renderCreation(
                title: "Cadre gants et lame scie circulaire",
                shortDescription: "Ce cadre sera conçu pour mettre en valeur mes gants et la lame de ma scie circulaire pour ne jamais oublier mon accident (cf : composteur).",
            );
            ?>
        </section>

        <?php include("./footer.php"); ?>