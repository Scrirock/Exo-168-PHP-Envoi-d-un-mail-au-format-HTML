<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *
 */

$to = '';

$html = '
    <html lang="fr">
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                Plein de truc cool se sont passées. flash special au alentour de l\'allemange ou il paraitrait que d\'autre
                truc ce passe. Vers l\'ouest rien d\'important mais un proffesseur aurait trouver quelque choses. Rien de sur.
                c\'est tout pour aujourd\'hui nous essayeront de faire d\'autre truc demain.
            </div>
        </body>
    </html>
';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$succeed = mail($to, "test avec html", $html, implode("\r\n", $headers));