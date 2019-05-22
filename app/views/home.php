<section id="jumbotronSection" class="shadow">
    <div class="row jumbotron align-items-center" style="background: url('img/eating-green.jpg') no-repeat center center;">
        <div class="col bg-transparent text-white py-5 text-center">
            <h1 class="display-2"> Discover the Green Foods Difference </h1>
            <p> Clean, honest nutrition that's 100% guaranteed </p>            
            <a href="products">
                <button class="btn btn-white outline">Show Now</button>
            </a>
        </div>
    </div>
</section>

<section id="welcomeSection" class="py-5">
    <div class="row">
        <div class="col-md-6 pb-md-5 p-5 bg-white border-3 shadow">
            <img src="img/homepage_720x.gif" alt="" class="">
        </div>

        <div class="col-md-6 bg-white p-5 border-3 shadow align-self-center">
            <h1 class="display-2">
                Welcome to the Wide World of Green Foods
            </h1>
            <p class="lead">
                Plant-powered healing from the inside out. Wellness is what makes our world turn. How you feel
                affects everything from your mood to your motivation, and it all hinges on the food you eat.
            </p>
            <a href="products">
                <button class="btn text-white bg-green">Shop Our Products</button>
            </a>
        </div>
    </div>
</section>

<section id="fuelingSection" class="bg-white p-0 p-md-5 shadow">
    <div class="row">
        <div class="col-md-6 p-5 bg-white shadow">
            <h2 class="display-2">
                How Are You Fueling Your Day?
            </h2>
            <p class="lead">
                Whether you’re looking to power up your athletic pursuits, give your kids a better start to
                their
                day — and their life — or correct imbalances to achieve a happier, more healthful existence,
                plant-powered products by Green Foods are ready to play an important role.
            </p>
            <a href="products">
                <button class="btn text-white bg-green">Shop Our Products</button>
            </a>
        </div>
    </div>
</section>

<section id="allProductsSection"  data-products="products" class="px-1 py-5">
    <div class="row">
        <div class="col-12 bg-white py-5 border shadow text-center">
            <h2 class="display-2">Customer Favorites</h2>
        </div>
    </div>
<?php 
    foreach ($data['products'] as $key => $product) {
       if($key >=8 ){
        break;
       }
       
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

?>

   <!-- <span class="quantity" data-quantity="0">1</span> -->
   
    <div class="row py-5 text-center">
        <div class="col">
            <a href="products">
                <button class="btn bg-green text-white">
                    Viwe All
                </button>
            </a>
        </div>
    </div>
</section>

<section id="findUsSection">
    <div class="row bg-white py-5">
        <div class="col text-center">
            <h1 class="display-2">Find Us On Instagram</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div id="cf4a1" class="col shadow border"></div>
        <div id="cf4a2" class="col shadow border"></div>
        <div id="cf4a3" class="col shadow border"></div>
        <div id="cf4a4" class="col shadow border"></div>
        <div id="cf4a5" class="col shadow border"></div>
    </div>
</section>