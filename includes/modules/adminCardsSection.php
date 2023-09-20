<section class="cardsSection">
    <div class="container">
        <div class="row row-cols-xs-1 row-cols-sm-2 row-cols-lg-4 g-3">
            <?php foreach($properties as $property): ?>
            <div class="col">
                <div href="property.php" class="card" >
                    <div class="card-cover">
                        <img src="<?php echo $property->img1 ?>" class="card-img-top" alt="...">
                    </div>
                    <div class="card-content">
                        <h5 class="card-title"><?php echo $property->name ?></h5>
                        <p class="code"><strong>code:</strong> <?php echo $property->code ?></p>
                        <div class="btn-wrapper mt-3 d-flex flex-column">
                            <a href="#" class="btn btn-sm btn-primary mt-1">Edit property</a>
                            <a href="#" class="btn btn-sm btn-danger mt-1">Delete property</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>