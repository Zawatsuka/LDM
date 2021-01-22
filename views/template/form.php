<h1>Lettre de mottivation</h1>
<form action="#" method="POST">
    <!-- partie prenom -->
    <div class="formStyle">
        <label for="firstame">Prenom</label>
         <input type="text" name="firstame" pattern="<?= $regexText; ?>" placeholder="Prenom" required>
    </div>

    <!-- partie nom -->
    <div class="formStyle">
        <label for="lastname">Nom</label>
        <input type="text" name="lastname" pattern="<?= $regexText; ?>" placeholder="Nom" required>
    </div>

    <!-- partie adresse postale -->
    <div class="formStyle">
        <label for="address">Adresse Postale</label>
        <input type="text" name="address" pattern="<?= $regexAddress; ?>" placeholder="Adresse Postale" required>
    </div>

    <!-- partie code postale  -->
    <div class="formStyle">
        <label for="postalPass">Code Postale</label>
        <input type="text" name="postalPass" pattern="<?= $regexPostal; ?>" placeholder="Code Postale" required>
    </div>

    <!-- partie ville  -->
    <div class="formStyle">
        <label for="city">Ville</label>
        <input type="text" name="city" pattern="<?= $regexText; ?>" placeholder="Ville" required>
    </div>

    <!-- partie telephone  -->
    <div class="formStyle">
        <label for="phone">Telephone</label>
        <input type="text" name="phone" pattern="<?= $regexPhone ?>" placeholder="Telephone" required>
    </div>

    <!-- partie email  -->
    <div class="formStyle">
        <label for="mail">Adresse Email</label>
        <input type="text" name="mail" pattern="<?= $regexEmail; ?>" placeholder="Adresse Email" required>
    </div>

    <p>Nom Prénom ou raison sociale du destinataire</p>
    <p>Adresse</p>
    <p>Code postal / Ville</p>


    <p>Faite à (Ville), le (Date).</p>


    <p>PJ : Curriculum Vitae</p>
    <p>Objet : Candidature au poste de (emploi)</p>


    <p>(Madame, Monsieur),</p>

    <p>Etant actuellement à la recherche d’un emploi, je me permets de vous proposer ma candidature au poste de
        (emploi).</p>

    <p>En effet, mon profil correspond à la description recherchée sur l’offre d’emploi (préciser où l’annonce a été
        vue).</p>

    <p>(Si le candidat possède peu d’expérience professionnelle) Ma formation en (préciser la formation) m'a permis
        d'acquérir de nombreuses compétences parmi celles que vous recherchez.</p>

    <p>Je possède tous les atouts qui me permettront de réussir dans le rôle que vous voudrez bien me confier.
        Motivation, rigueur et écoute sont les maîtres mots de mon comportement professionnel.</p>

    <p>(Si le candidat possède une expérience significative dans le poste à pourvoir).</p>

    <p>Mon expérience en tant que (emploi) m’a permis d’acquérir toutes les connaissances nécessaires à la bonne
        exécution des tâches du poste à pourvoir.</p>

    <p>Régulièrement confronté aux aléas du métier, je suis capable de répondre aux imprévus en toute autonomie.</p>

    <p>Intégrer votre entreprise représente pour moi un réel enjeu d’avenir dans lequel mon travail et mon honnêteté
        pourront s’exprimer pleinement.</p>

    <p>Restant à votre disposition pour toute information complémentaire, je suis disponible pour vous rencontrer lors
        d’un entretien à votre convenance</p>

    <p>Veuillez agréer, (Madame, Monsieur), l’expression de mes sincères salutations.</p>

    <p>nom prenom</p>

    <input type="submit" value="let's gooooo !">

</form>