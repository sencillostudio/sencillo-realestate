<section class="cardsSection">
    <div class="container">
        <div class="row row-cols-xs-1 row-cols-sm-2 row-cols-lg-4 g-3">
            <?php for ($i=0; $i < 7; $i++) : ?>
            <div class="col">
                <a href="property.php" class="card" >
                    <div class="card-cover">
                        <img src="src/img/misc/property-cover-example.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-content">
                        <h5 class="card-title">Property Name</h5>
                        <p class="price"><strong>price:</strong> $450</p>
                        <p class="type"><strong>type:</strong> House</p>
                        <p class="code"><strong>code:</strong> prop0053</p>
                        <p class="description">Spacious country house nestled in the tranquil countryside. With its stunning views, the home exudes rustic charm while offering modern (...)</p>
                    </div>
                </a>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>