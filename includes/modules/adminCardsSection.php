<section class="cardsSection">
    <div class="container">
        <div class="row row-cols-xs-1 row-cols-sm-2 row-cols-lg-4 g-3">
            <?php for ($i=0; $i < 7; $i++) : ?>
            <div class="col">
                <div href="property.php" class="card" >
                    <div class="card-cover">
                        <img src="../src/img/misc/property-cover-example.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-content">
                        <h5 class="card-title">Property Name</h5>
                        <p class="code"><strong>code:</strong> prop0053</p>
                        <div class="btn-wrapper mt-3 d-flex flex-column">
                            <a href="#" class="btn btn-sm btn-primary mt-1">Edit property</a>
                            <a href="#" class="btn btn-sm btn-danger mt-1">Delete property</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>