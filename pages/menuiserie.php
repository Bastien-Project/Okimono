<?php
$base = '../';
include("./header.php"); ?>

<section class="realisations">
    <p>Voici mes créations en bois au fil des années :</p>

    <?php
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
                    <p class="noSlider">Aucune réalisation ni plan disponible, juste des idées en tête.</p>
                <?php } ?>

                <p><?php if(!empty($endText)): echo $endText; endif; ?></p>
                </div>
            <?php
        }

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
            longDescription: "Ce meuble a été conçu pour s'adapter parfaitement à mes consoles + un rangements pour les jeux sur le côté. J'ai utilisé du contreplaqué, les seules planches que j'avais. N'y connaissant pas grand chose j'avais comblé les trous avec du mastic d'étanchéité et je l'avais peint en blanc.",
            imagesRealisations: [
                ["src" => "../images/creations/meuble1.png", "alt" => "Meuble en bois"]
            ],
            imagesPlans: [
                ["src" => "../images/creations/meuble1_plan.png", "alt" => "Plan du meuble en bois"]
            ],
            endText: "Finalement, il était tout de travers, mais j'étais fier de mon premier meuble. Mais niveau sécurité il y a mieux. <br> Depuis, ce meuble a été démonté et jeté."
        );

        renderCreation(
            title: "Cadre en Tasseau pour Tableau",
            shortDescription: "J'ai fabriqué des cadres en tasseau pour des tableau que j'ai commandé mais il n'y avait pas le cadre avec.",
            //longDescription: "Ce projet a été réalisé en plusieurs étapes. J'ai d'abord découpé les tasseaux à la bonne taille, puis je les ai assemblés pour former le cadre. Une fois le cadre terminé, j'ai pu y insérer le tableau.",
            imagesRealisations: [
                ["src" => "../images/creations/cadre_tasseau.png", "alt" => "Cadre en Tasseau pour Tableau"]
            ],
            endText: "Avec un petit fil dérrière on peux les accrocher n'importe où avec un petit clou."
        );

        renderCreation(
            title: "Meuble Console",
            shortDescription: "Ce meuble est conçu pour accueillir mes consoles de jeux et leurs accessoires. Une sorte de V2 de mon premier meuble.",
            imagesRealisations: [
                ["src" => "../images/creations/meuble_console.png", "alt" => "Meuble Console"]
            ],
            endText: "Depuis il existe encore et sert toujours à la même fonction."
        );

        renderCreation(
            title: "Ratelier de Ski",
            shortDescription: "Ce ratelier est conçu pour ranger les skis, les bâtons mais aussi les chaussures de ski. Capacité étudiée pour 5 paires de ski ou 3 paires de ski et 2 snowboards.",
            imagesRealisations: [
                ["src" => "../images/creations/ratelier_ski.png", "alt" => "Ratelier de Ski"]
            ],
            endText: "Depuis il y a eu un dégats des eaux et il reste à refaire.",
            imagesPlans: [
                ["src" => "../images/creations/ratelier_ski_moisi.png", "alt" => "Ratelier de Ski 2"]
            ]
        );

        renderCreation(
            title: "Découpe sur mesure anti rat",
            shortDescription: "J'ai réalisé une découpe sur mesure au niveau des tuiles pour éviter qu'un rat passe.",
            imagesRealisations: [
                ["src" => "../images/creations/decoupe_anti_rat.png", "alt" => "Découpe sur Mesure Anti Rat"]
            ],
            endText: "Cette solution est à la fois pratique et esthétique."
        );

        renderCreation(
            "Pied d'enceinte",
            "Ces deux petits supports sont conçus pour accueillir mes enceintes tout en s'intégrant harmonieusement dans mon intérieur.",
            imagesRealisations: [
                ["src" => "../images/creations/meuble_pied_enceinte.png", "alt" => "Meuble de Pied Enceinte"]
            ],
            endText: "Toujours utilisés, je m'en sers de rangement un peu en dessous en plus."
        );

        renderCreation(
            "table basse palette",
            "J'ai fabriqué une table basse à partir d'une palette recyclée.",
            imagesRealisations: [
                ["src" => "../images/creations/table_basse_palette.png", "alt" => "Table Basse Palette"]
            ],
            endText: "Ceci est une reconstitution, je n'ai qu'une photo quand je la démontée pour la jeter.<br>
                    Car je n'avais pas pensé que pour manger les trous pouvaient être gênants quand je l'ai pensée."
        );

        renderCreation(
            "Meuble Déco Love",
            "Ce meuble est une pièce unique, réalisée avec amour et passion.",
            imagesRealisations: [
                ["src" => "../images/creations/meuble_deco_love.png", "alt" => "Meuble Déco Love"]
            ],
            endText: "C'était un défi de réussir à la fabriqué, depuis il un meuble de décoration qui prend la poussière."
        );

        renderCreation(
            "meuble rouleau PQ",
            "Ce meuble est une solution pratique à une réel problème, je n'avais pas de dérouleur de papier toilette et impossible d'en mettre un.",
            imagesRealisations: [
                ["src" => "../images/creations/meuble_rouleau_pq.png", "alt" => "Meuble Rouleau PQ"]
            ],
            endText: "Petite astuce, pour bloquer le distributeur sans le condamner, un simple tourillon."
        );

        renderCreation(
            "Rajout Bureau",
            "J'ai ajouté un petit meuble à mon bureau pour en faire une extension et que ça tombe pile poil avec le mur.",
            imagesRealisations: [
                ["src" => "../images/rajout_bureau.png", "alt" => "Rajout Bureau"]
            ],
            endText: "Il est pratique, et tout simple en tasseau. J'avais déjà fait un meuble similiaure pour ranger des casseroles sous l'évier de ma grand-mère."
        );

        renderCreation(
            "renovation petite table en tek",
            "J'ai rénové une petite table en tek, lui rendant toute sa beauté. Je vous laisse juger pour vous même.",
            imagesRealisations: [
                ["src" => "../images/renovation_table_tek.png", "alt" => "Rénovation Petite Table Tek"]
            ],
            endText: "Et un petit banc qui viendra par la suite."
        );

        renderCreation(
            "renovation banc exterieur, partie 1/3",
            "J'ai rénové un banc d'extérieur en bois, lui redonnant une seconde vie.",
            imagesRealisations: [
                ["src" => "../images/renovation_banc_exterieur.png", "alt" => "Rénovation Banc Extérieur"]
            ]
        );

        renderCreation(
            "planche cuisine",
            "J'ai mis une planche en bois dans la cuisine pour cacher le dessous, adapté sur mesure pour l'espace et surtout pour pouvoir ouvrir le lave-vaisselle.",
            imagesRealisations: [
                ["src" => "../images/planche_cuisine.png", "alt" => "Planche Cuisine"]
            ],
            endText: "Elle est à la fois pratique et esthétique."
        );

        renderCreation(
            "Renovation banc extérieur, partie 2",
            "En plein ponçage ma ponceuse m'a lachée.",
            imagesRealisations: [
                ["src" => "../images/renovation_banc_exterieur.png", "alt" => "Rénovation Banc Extérieur"]
            ]
        );

        renderCreation(
            "porte épice",
            "ce meuble conçu pour organiser et exposer mes épices de manière pratique et esthétique.",
            imagesRealisations: [
                ["src" => "../images/meuble_porte_epices.png", "alt" => "Meuble Porte Épices"]
            ],
            endText: "Il est surtout très fonctionnel et un gain de place dans la cuisine."
        );

        renderCreation(
            "porte clé",
            "Encore une solution pratique pour répondre à un besoin car nous avons beaucoup de clé.",
            imagesRealisations: [
                ["src" => "../images/meuble_porte_cles.png", "alt" => "Meuble Porte Clés"]
            ],
            endText: "Par contre je l'ai vraiment fait n'importe comment à la va vite."
        );

        renderCreation(
            "renovation banc exterieur, partie 3/3",
            "Dernière partie du banc. Couche de lazure et de vernis.",
            imagesRealisations: [
                ["src" => "../images/renovation_banc_exterieur.png", "alt" => "Rénovation Banc Extérieur"]
            ],
            endText: "Il s'allie parfaitement à la table et est maintenant prêt à affronter les intempéries."
        );

        renderCreation(
            "meuble vide poche",
            "Ce meuble est conçu pour accueillir mes répondre à plusieurs besoins de rangement sur mon bureau (pot à stylo, téléphone, casque et broutilles).",
            imagesRealisations: [
                ["src" => "../images/meuble_vide_poche.png", "alt" => "Meuble Vide Poche"]
            ],
            endText: "Premier meuble pour lequel j'ai fait des plans 3D."
        );

        renderCreation(
            "meuble table banc, 2 en 1",
            "Ce meuble est une pièce polyvalente qui peut servir de table ou de banc selon les besoins, et qui se transforme facilement.",
            imagesRealisations: [
                ["src" => "../images/meuble_table_banc.png", "alt" => "Meuble Table Banc"]
            ],
            endText: "Il est idéal pour l'extérieur, il est en douglas et traité pour résister aux intempéries."
        );
            ?>

</section>

<section class="projets">
    <p> Et voici mes futurs projets :</p>

    <?php
    // -- PROJETS --
    renderCreation(
        "Meuble Cascade Lumineuse",
        "Ce meuble est conçu pour accueillir une cascade lumineuse, uniquement pour l'esthétique.",
        imagesPlans: [
            ["src" => "../images/meuble_cascade_lumineuse.png", "alt" => "Meuble Cascade Lumineuse"]
        ],
        endText:"Il apportera une ambiance chaleureuse et apaisante à mon intérieur."
    );

    renderCreation(
        "Meuble Range Mug",
        "Ce meuble est conçu pour organiser et exposer les mugs de manière pratique et esthétique.",
        imagesPlans: [
            ["src" => "../images/meuble_range_mug.png", "alt" => "Meuble Range Mug"]
        ],
        endText:"A la demande de ma copine qui voulais ranger ses mugs, j'ai pensé tout le reste."
    );

    renderCreation(
        "Meuble Chaise Tronc",
        "Ce meuble est une chaise originale fabriquée à partir d'un tronc d'arbre.",
        imagesPlans: [
            ["src" => "../images/meuble_chaise_tronc.png", "alt" => "Meuble Chaise Tronc"]
        ],
        endText:"Très simple, il me faut juste trouver le trons adéquat."
    );

    renderCreation(
        "Meuble Horloge",
        "Ce meuble est une horloge unique, purement esthétique et design.",
        imagesPlans: [
            ["src" => "../images/meuble_horloge.png", "alt" => "Meuble Horloge"]
        ],
        endText:"Il me faut juste trouver le mécanisme d'horloge."
    );

    renderCreation(
        "Meuble Lampe",
        "Ce meuble est une lampe originale.",
        imagesPlans: [
            ["src" => "../images/meuble_lampe.png", "alt" => "Meuble Lampe"]
        ],
        endText:"Il me faut juste trouver le fil et une douille pour l'ampoule."
    );

    renderCreation(
        "Compost",
        "Il s'agit d'un composteur.",
        imagesPlans: [
            ["src" => "../images/meuble_compost.png", "alt" => "Meuble Compost"]
        ],
        endText:"A la demande de mes parents, car celui donné par la mairie est trop grand. <br> J'y ai laissé un bout de moi."
    );

    renderCreation(
        "cadre gants et lame scie circulaire",
        "Ce cadre sera conçu pour mettre en valeur mes gants et la lame de ma scie circulaire pour ne jamais oublier mon accident <br>
        <div class='img-coin bas-droit'></div>",
    );

include("./footer.php"); ?>