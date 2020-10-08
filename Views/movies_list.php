<?php 
    require_once("header.php");
?>

<main class="container">
    <h1>Movies</h1>
    <div class="custom-scrollbar table-wrapper-scroll-y">    
        <div class="row">
                <?php foreach ($cinemas as $key => $value) { ?>
                    <div class="col-md-4">    
                
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top rounded" src="<?php echo $value->getPoster() ?>" alt="Card image cap" >
                            <div class="card-body">
                                <h5 class="card-title"><strong><?php echo $value->getTitle() ?></strong></h5>
                            </div>
                        </div>
                        <br>
                    </div>
                <?php } ?>
        </div>
    </div>           
</main>
