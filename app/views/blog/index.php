<section id="blog" class="">
    <div class="row">
        <div class="col-12 bg-white p-md-5 p-1 border shadow">
            <h2 class="display-2">Green Foods Blog</h2>
        </div>
    </div>
    <?php 

    foreach ($data['blogs'] as $key => $blog){

        $class = ($key % 2) == 0? "order-md-1": "";
        echo 
            '<div class="row bg-white align-items-center py-5 border-3">
                <div class="col-md-6 blog-photo-cover '. $class .'" style="background-image:url('. URLROOT .'/'. $blog->image_url .')"></div>
                <div class="col-md-6 p-2 p-md-5">
                    <span class="text-muted"> BY '. $blog->author .':  '. $blog->created_at .'</span>
                    <h1>'. $blog->title .'</h1>
                    <a href="blogs/blog?slug='. $blog->slug .'">
                        <button type="submit" class="btn text-white bg-green">Continue reading</button>
                    </a>
                </div>
            </div>';

    }

    ?>
</section>