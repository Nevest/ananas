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



Hello World