<?php
$base = '../';
include("./header.php"); ?>

<p>
    Pour toutes demandes (demades spécifiques à l'équipe, SAV, réclamation, ...) merci de nous contacter par mail ci-dessous.
</p>
<div>
    <div>
        <form>
            <fieldset>
                <legend> Nous contacter par mail</legend>
                <fieldset>
                    <legend> Vos Coordonnées </legend>
                    <!-- Mr, Mme, Mlle -->
                    <div>
                        <label for="Mr"> Monsieur </label>
                        <input type="radio" name="choix" id="Mr" value="1" checked="checked" tabindex="1"> <br>

                        <label for="Mme"> Madame </label>
                        <input type="radio" name="choix" id="Mme" value="1" tabindex="2"> <br>

                        <label for="Mlle"> Mademoiselle </label>
                        <input type="radio" name="choix" id="Mlle" value="3" tabindex="3"> <br>
                    </div>

                    <!-- Nom, Prénom, Age, Couleur -->
                    <label for="nom"> Saisir votre nom : </label>
                    <input type="text" name="leNom" id="nom" required /> <br>

                    <label for="prenom"> Sairsir votre prénom : </label>
                    <input type="text" name="lePrenom" id="prenom" required /> <br>

                    <label for="naissance"> Votre date de naissance : </label>
                    <input type="date" name="laDate" min="1900-01-01" id="naissance" required /> <br>

                    <label for="couleur"> Votre couleur préférée : </label>
                    <input type="color" name="laCouleur" id="couleur" /> <br>
                </fieldset>

                <fieldset>
                    <!-- Mail, Objet msg, Msg-->
                    <legend> Votre Message </legend>
                    <label for="email"> Votre adresse mail : </label>
                    <input type="email" name="email" id="email" required /> <br>

                    <label for="number"> Votre numéro de téléphone : </label>
                    <input type="tel" name="phone" id="number" required /> <br>

                    <label for="objetmsg"> Objet du message : </label>
                    <input type="text" name="leObjet" id="objetmsg" required /> <br>

                    Saisir le message : <textarea name="taRe7" id="msg" cols="80" rows="10" required> </textarea> <br>
                </fieldset>

                <button> <input type="submit" value="Valider" id="submit"> </button>
            </fieldset>
        </form>
    </div>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.2605670533712!2d3.8359923157227165!3d43.64274686112414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6aeb0554aff77%3A0x883bcb39fbb35b3b!2sEPSI%20Montpellier!5e0!3m2!1sfr!2sfr!4v1637610622218!5m2!1sfr!2sfr"
            width="674px" height="611px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<div>
    <div>
        <p id="here">
            <a href="ML.php">Mentions légales</a>
        </p>
    </div>
    <div>
        <p>
            <!--Ne marche pas pour je ne sais ABSOLUEMENT AUCUNE raison-->
            <a href="../images/fond.jpg" download="img">Télécharger l'image de bannière <img src="../images/download.jpg" /></a>
        </p>
    </div>
</div>

<?php include("./footer.php"); ?>