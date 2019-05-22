
<section id="blog">
    <div class="row bg-white align-items-center border-3">
        <div class="col-12 p-2 p-md-5">
            <span class="text-muted"> By  <?php print_r($data['blog']->author)?>  
                <?php print_r($data['blog']->created_at)?> </span>
            <h1 class="display-2"> <?php print_r($data['blog']->title)?> </h1>
        </div>
        <div class="col-md-12 blog-photo-cover" style=" background-image:url('<?php echo URLROOT; ?><?php print_r($data['blog']->image_url)?>')"></div>
        <div class="col-md-10 p-2 p-md-5">
        <?php print_r($data['blog']->body)?>
            </div>
        </div>
    </div>
</section>