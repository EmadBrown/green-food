
<div id="navbar">
    <div id="registration" class="text-right d-none d-md-flex justify-content-end py-1">
    <?php if(isset($_SESSION['user_id'])) { ?>
        <div class="col-md-1 bord text-center">
            <a href="<?php echo URLROOT; ?>home" class="lead"><?php echo 'Hi '. ucfirst($_SESSION['user_name']); ?></a>
        </div>
        <div class="col-md-1 text-center">
            <a href="<?php echo URLROOT; ?>users/logout" class="lead">Logout</a>
        </div>
    <?php } else { ?>
        <div class="col-md-1 text-center">
            <a href="<?php echo URLROOT; ?>users/login" class="lead">Login </a>
        </div>
        <div class="col-md-1 bord text-center">
            <a href="<?php echo URLROOT; ?>users/register" class="lead">Register</a>
        </div>
    <?php } ?>
    </div>
    <nav id="nav" class="row shadow">
        <div id="logo" class="col-md-3 py-2 align-self-center text-center">
            <a href="<?php echo URLROOT; ?>home">
                <img src="img/logo.png" alt="" width="200" height="">
            </a>
        </div>

        <div class="col-md-9">
            <ul id="bar" class="d-block d-md-flex justify-content-around p-0">
                <li>
                    <a href="<?php echo URLROOT; ?>home">HOME</a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>products">PRODUCTS</a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>blogs">BLOGS</a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>contact">CONTACT</a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-shopping-cart x9"></i> CART
                    </a>
                </li>
                
                <?php if(isset($_SESSION['user_id'])) { ?> 
                    <li class="d-block d-md-none">
                        <a href="<?php echo URLROOT; ?>home">
                        <?php echo 'Hi '. ucfirst($_SESSION['user_name']); ?>
                        </a>
                    </li>
                    <li class="d-block d-md-none">
                        <a href="<?php echo URLROOT; ?>users/logout">
                            Logout
                        </a>
                    </li>
                <?php } else { ?>
                    <li class="d-block d-md-none">
                    <a href="<?php echo URLROOT; ?>users/register">
                        REGISTER
                    </a>
                    </li>
                    <li class="d-block d-md-none">
                        <a href="<?php echo URLROOT; ?>users/login">
                            LOGIN
                        </a>
                    </li>
                <?php } ?>       
            </ul>
        </div>
    </nav>
</div>