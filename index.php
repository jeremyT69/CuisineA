<?php
  define ('_RECIPES_IMG_PATH_', 'uploads/recipes/');
?>


<?php

$recipes = [
  ['title' => 'Mousse au Chocolat', 'Description' => 'Mousse au chocolat example text to build on the card title and make up the bulk of the card\'s content.', 'image' => '1-chocolate-au-mousse.jpg'],
  ['title' => 'Gratin Dauphinois', 'Description' => 'Gratin dauphinois example text to build on the card title and make up the bulk of the card\'s content.', 'image' => '2-gratin-dauphinois.jpg'],
  ['title' => 'Salade de Chèvre', 'Description' => 'Salade de chèvre example text to build on the card title and make up the bulk of the card\'s content.', 'image' => '3-salade.jpg'],
];

require_once ('templates/header.php');

?>




    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="Image CuisineA" loading="lazy" width="350">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">CuisineA - Recettes de cuisine</h1>
        <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque maxime aut cupiditate animi accusamus quaerat perferendis at culpa velit sunt quos a earum, voluptatibus ipsa obcaecati placeat error non asperiores?
          Sunt necessitatibus eveniet numquam. Dicta quibusdam, eos eaque similique possimus iure ullam delectus ea officiis ab, modi magni, nobis fuga tempora dignissimos suscipit soluta dolorum cumque illum velit sunt inventore.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Voir nos recettes</button>
        </div>
      </div>
    </div>

    <div class="row">

      <?php foreach ($recipes as $recipe) { ?>

        <div class="col-md-4">
          <div class="card">
            <img src="<?=_RECIPES_IMG_PATH_.$recipe ['image']; ?>" class="card-img-top" alt="<?=$recipe ['title']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?=$recipe ['title']; ?></h5>
              <p class="card-text"><?=$recipe ['Description']; ?>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

      <?php } ?>

    </div>

<?php
require_once ('templates/footer.php');
?>
    