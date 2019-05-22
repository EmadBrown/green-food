<section id="jumbotronSection" class="shadow">
    <div class="row jumbotron align-items-end" style="background: url('img/contact.jpg') no-repeat center center;">
        <div class="col-md-3 bg-transparent text-center text-white">
            <h1 class="display-2"> Contact </h1>
        </div>
    </div>
</section>

<section id="storySection" class="">
    <div class="row bg-white border-3 py-5">
        <div class="col">
            <p class="lead py-1">
                For nearly four decades, Green Foods has treated our diverse customer base to high-quality,
                natural dietary supplements made with care and without a hint of compromise. As an industry
                leader, we take pride in developing clean, delicious products that marry taste and nutrition
                for results that are eye-opening in a multitude of ways.
            </p>
            <p class="lead">
                We believe in the potential found in fresh grasses, fruits, vegetables, herbs, and other whole
                foods, and that using those compounds to nourish our bodies is the key to good health. To that
                end, our dynamic catalog of natural, organic, and bioavailable products is brimming with
                essential vitamins, minerals, amino acids, and phytochemicals that, while effective separately,
                come together to form an exponentially more potent whole.
            </p>
        </div>
    </div>
</section>

<section id="contact">
    <div class="row bg-white border-3 py-1 py-md-2">
        <div class="col">
            <h2 class="display-2 text-center">
                Contact Us
            </h2>
        </div>
    </div>
    <form action="<?php echo URLROOT;?>contact" method="post">
        <div class="row bg-white justify-content-center py-5 border-3">
            <div class="col-md-6">
                <div class="col-12 text-center message">
                    <span class="success"><?php echo $data['success_message'] ?></span>
                    <span class="danger"><?php echo $data['error_message'] ?></span>
                </div>
                <div class="col-12">
                    <label for="name">NAME * <?php echo $data['error_message'] ?></label>
                    <input type="text" id="name" name="name" placeholder="Your name.." minlength="3" required>
                </div>
                <div class="col-12">
                    <label for="email">EMAIL * </label>
                    <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
                </div>
                <div class="col-12 py-2">
                    <label for="message">MESSAGE *</label>
                    <textarea id="message" name="message" minlength="10" required></textarea>
                </div>
                <div class="col-md-8">
                    <a href="blog/hot-and-cold.html">
                        <input type="submit" class="btn text-white bg-green" value="Submit">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.3232866799076!2d5.479897815519401!3d51.452220579626115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d921bb500e25%3A0x9add605999df4464!2sFontys+R1%2C+Rachelsmolen+1%2C+Eindhoven!5e0!3m2!1sen!2snl!4v1540719805078" 
                    class="border-3 shadow" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div> 
        </div>
    </form>

</section>

