<?php
	use \App\Models\Views;
    $asset = new Views();
    
    /**
     * Use the Views() class :
     *     -> HTML : <?= $asset->img('image_name.png') ?>
     *     -> PHP :  $asset->img('image_name.jpg')
     * 
     * Methode of Views() :
     *     - $asset->img('filename with extension')
     *     - $asset->css('filename with extension')
     *     - $asset->js('filename with extension')
     * 
     * Exemple :
     *      <div>
     *          <img src="<?= $asset->img('toto/image_name.png') ?>" alt="">
     *      </div>
     */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Hack This Ananas !</title>
    <meta name="description" content="Dans le cadre du cours HTML5/CSS3 du DUT MMI de Laval, cette première page permet de comprendre les grands principes de découpage et de fonctionnement d'une page web" />
    <link rel="shortcut icon" href="<?= $asset->img('icone.ico') ?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?= $asset->css('style.css') ?>" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
</head>
    
    <body>
        
        <header>
            <div>
                <img id="logo" src="<?= $asset->img('logo.png') ?>" alt="Hack this ananas !" />
            <h1>Hack This Ananas</h1>
            </div>
            <div>
                <button id="bouton_inutile">Bouton purulent</button>
            </div>
        </header>
        
        <main>
            <div>
                <h2>Hack This Ananas</h2>    
            </div>
            <form action="/post" method="post" id="ajax-contact">
                <div>
                    <input name="url" id="url_video" placeholder="Convert to pineapple" >
                    <button type="submit" name="envoyer" id="envoyer"><img id="walking_pineapple" src="<?= $asset->img('walking_pineapple.png') ?>" alt="walking pineapple" /></button>
                </div>
            </form>
            
            
        </main>
        
        <footer>
        </footer>
        
        <script src="<?= $asset->js('style.js') ?>"></script>
    </body>
</html>