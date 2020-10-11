<?php 
    require_once("header.php");
?>

<main class="container_movies">
    <h1>Movies</h1>
    <div class="custom-scrollbar table-wrapper-scroll-y">    
        <div class="row">
            <?php foreach ($cinemas as $key => $value) { ?>
                <div class="col-md-3">    
                    <button type="button" class="btn btn-dark"  data-id="<?php echo $value->getId() ?>" data-toggle="modal" data-target=".movie"> 
                        
                        <figure class="figure">
                            <img class="figure-img img-fluid rounded" src="<?php echo $value->getPoster() ?>" width="60%" >
                            <figcaption class="figure-caption"><?php echo $value->getTitle() ?></figcaption>
                        </figure>
                        
                    </button>
                </div>
                <br>
            <?php } ?>

            <div class="modal fade movie"  id="" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="media">
                            <img class="align-self-center mr-3" src="<?php echo $value->getPoster() ?>" width="70%">
                            <div class="media-body">
                                <h5 class="mt-0"><?php echo $value->getTitle() ?></h5>
                                        
                                <p> <?php echo $value->getSynopsis() ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          


        </div>
    </div>           
</main>
