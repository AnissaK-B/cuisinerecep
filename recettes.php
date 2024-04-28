<?php 
define('_RECIPES_IMG_PATH_', 'uploads/recipes/');

$recipes = [
    ['titre' => 'Mousse au chocolat', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis eos illum', 'image' => '1-chocolate-au-mousse.jpg'],
    ['titre' => 'Gratin dauphinois', 'description' => 'Gratin ipsum dolor sit, amet consectetur adipisicing elit.', 'image' => '2-gratin-dauphinois.jpg'],
    ['titre' => 'Salade', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis eos illum', 'image' => '3-salade.jpg']
];

require_once('templates/header.php');
?>



 
       
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <h1>Liste des recettes</h1>
    </div>


<div class="row">

<?php
foreach($recipes as $key=> $recipe){
    include('templates/recipe_partial.php'); 
    ?>



<?php } 
require_once('templates/footer.php')
;

?>

    

