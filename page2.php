<div class="container">
<img src="assets\img\download (4).gif" width="1000" class="img-fluid text-center"  alt="Merci d'avoir participé !">
 <div class="container text-center text-light p-5">
 <h5 class="ml-4 size-text ">Bonjour <?= $firstname ?>  <?= $name ?></h5>
 <p class="ml-4 size-text">Recapitulatif de votre formulaire...</p>
 <ul>
        <li>Date de Naissance :<?=$Birthday ?? 'Vous n\'avez rien mis'?></li>
        <li>Votre Pays de Naissance : <?=$country ?? 'Vous n\'avez rien mis'?></li>
        <li>Vous etes : <?= $nation ?? 'Vous n\'avez rien mis'?></li>
        <li>Votre Adresse mail est : <?= $mail ?? 'Vous n\'avez rien mis'?></li>
        <li>Votre numero de téléphone est le : <?= $phone ?? 'Vous n\'avez rien mis'?></li>
        <li>Votre diplome : <?= $diplome ?? 'Vous n\'avez rien mis'?></li>
        <li>Votre numero Pole Emploi est :<?= $poleEmploiNumber ?? 'Vous n\'avez rien mis'?></li>
        <li>Votre Nombre de badge est de : <?= $badgeNumber ?? 'Vous n\'avez rien mis'?></li>
        <li>Votre lien Code Academy est :<a href="<?= $linkPass ?? 'Vous n\'avez rien mis'?>"> Ton lien </a> </li>
        <li>Pour la question "Si vous étiez un super hero vous seriez qui et pourquoi ?", vous avez repondu :<?= $superHero ?? 'Vous n\'avez rien mis'?></li>
        <li>Pour "Racontez-nous un de vos 'hacks' (pas forcément technique ou informatique)", vous avez repondu :<?= $hack ?? 'Vous n\'avez rien mis'?></li>
        <li>Pour la question "Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?", vous avez repondu :  <?= $exp ?? 'Vous n\'avez rien mis'?></li>
 </ul>
 <img class="img-fluid ml-5 mt-5" src="assets\img\source.gif" alt="pulp fiction">
</div>
</div>