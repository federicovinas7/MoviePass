<?php require_once(VIEWS_PATH."nav.php"); ?>
<main class="container-flex">
    <h1>Movies</h1>
    
    
   <?php foreach ($cinemas as $key => $value) { ?>
    
    <div>
        <img src="<?php echo $value->getPoster() ?>" class="rounded" width="10%" height="10%">
        <h4><?php echo $value->getTitle() ?></h4>
    </div>
        
    <br>
        
    <?php } ?>

</main>

