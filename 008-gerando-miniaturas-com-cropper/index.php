<?php

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Cropper\Cropper;
use Faker\Factory;

$fake = Factory::create("pt-br");
$generate = false;

if($generate){
    for ($img = 0; $img < 3; $img++){
        $fake->image(
            __DIR__."/images",
            600,
            300);
    }
}
$c = new Cropper("images/cache");

for($image = 1; $image < 4; $image++){
    ?>
    <article>
        <h1>Imagem <?=$image;?></h1>
        <img src="images/<?=$image?>.jpg" alt=""/>
        <img src="<?=$c->make(
                "images/{$image}.jpg",
                300,
                300); ?>"/>
        <img src="<?=$c->make(
            "images/{$image}.jpg",
            300,
            150); ?>"/>
    </article>
    <?php

    //rotina de delete
    $c->flush("1.jpg");
   # $c->flush();
}

