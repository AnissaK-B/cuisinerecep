<div class="col-md-4">
        <div class="card" style="width: 18rem;">
       <img src="<?=_RECIPES_IMG_PATH_ .$recipe['image']?>" class="card-img-top" alt="mousse chocolat">
        <div class="card-body">
        <h5 class="card-title"><?=$recipe['titre']?></h5>
        <p class="card-text"><?= $recipe['description']?></p>
        <a href="recette.php?id=<?=$key; ?>"class="btn btn-primary">Voire la recette</a>
    </div>
   </div>
    </div>