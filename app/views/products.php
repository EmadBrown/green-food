<section id="jumbotronSection" class="shadow">
    <div class="row jumbotron align-items-end" style="background: url('img/shop.jpg') no-repeat center bottom fixed;">
        <div class="col-md-3 bg-transparent text-center text-white">
            <h1 class="display-2 "> All Products </h1>
        </div>
    </div>
</section>

<section id="allProductsSection" class="px-1 py-5">

<?php 
foreach ($data['products'] as $key => $product) {
   
    if(($key % 4) == 0) {
        echo  '<div class="row text-white">' ;
    }

       echo '<div class="col text-center bg-white py-5 border-3 shadow">
                <img src="' . $product->image_url .'" alt="">
                <p class="lead text-center">
                    '. $product->name .'<br>
                    <span class="pric">
                        from $'. $product->price .'
                    </span>
                </p>
            </div>';

    if(($key % 4) == 3) {
        echo '</div>' ; 
    }

}
echo  count($data['products']) % 4 != 0 ? '</div>' : ''; 

?>
</section>

