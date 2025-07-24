<?php
$base = '../';
include("./header.php"); ?>

<style>
   span{
       font-style: italic;
       color: red;
       font-weight: bold;
       font-size: large;
   }
</style>
<p>
    Pour toutes demandes merci de me contacter par mail ci-dessous.
    <br>
    <span>Le formulaire de contact est en cours de développement, vous pouvez m'envoyer un mail à l'adresse suivante :
    <a href="mailto:contact@okimono.com">contact@okimono.com</a></span>
</p>

    <div class="contactDiv">
        <form class="contactForm">
            <fieldset>
                <legend> Vos Coordonnées </legend>
                <!-- Nom, Prénom, Mail -->
                <label for="nom"> Votre nom : </label>
                <input type="text" name="leNom" id="nom" required /> <br>

                <label for="prenom"> Votre prénom : </label>
                <input type="text" name="lePrenom" id="prenom"/> <br>

                <label for="email"> Votre adresse mail : </label>
                <input type="email" name="leMail" id="email" required /> <br>
            </fieldset>

            <fieldset>
                <!-- Mail, Objet msg, Msg-->
                <legend> Votre Message </legend>
                <label for="objetmsg"> Objet du message : </label>
                <input type="text" name="leObjet" id="objetmsg" required /> <br>

                Message : <textarea name="taRe7" id="msg" cols="80" rows="10" required> </textarea>
            </fieldset>

            <button type="submit" id="submit">Envoyer</button>

        </form>
    </div>


<?php include("./footer.php"); ?>