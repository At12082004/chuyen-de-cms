<?php
/**
 * Custom Footer for Group C (Bootstrap + Font Awesome)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */
?>

<!-- =========================
     FOOTER CHÍNH (NỀN XANH)
     ========================= -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<section id="footer" class="text-white" style="background:#007b5e;">
    <div class="container py-5">

        <!-- QUICK LINKS -->
        <div class="row text-center text-md-left">
            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase mb-3">Quick Links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo home_url('?page_id=24'); ?>">About</a></li>
            <li><a href="<?php echo home_url('?page_id=79'); ?>">FAQ</a></li>
            <li><a href="<?php echo home_url('?page_id=82'); ?>">Get Started</a></li>
            <li><a href="<?php echo home_url('?page_id=85'); ?>">Videos</a></li>
                </ul>
            </div>
   
            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase mb-3">Resources</h5>
               <ul>
            <li><a href="<?php echo home_url('?page_id=88'); ?>">Privacy Policy</a></li>
            <li><a href="<?php echo home_url('?page_id=91'); ?>">Terms of Service</a></li>
            <li><a href="<?php echo home_url('?page_id=94'); ?>">Support</a></li>
            <li><a href="<?php echo home_url('?page_id=98'); ?>">Contact Us</a></li>
        </ul>
            </div>

            <div class="col-md-4 mb-4"> 
                <h5 class="text-uppercase mb-3">Contact</h5>
                <ul class="list-unstyled">
                    <li><i class="fa fa-map-marker"></i> 123 Green Street, HCMC</li>
                    <li><i class="fa fa-phone"></i> (+84) 76 589 1627</li>
                    <li><i class="fa fa-envelope"></i> info@example.com</li>
                </ul>
            </div>
        </div>

        <hr class="bg-light">

        <!-- SOCIAL ICONS -->
        <div class="text-center mb-3">
            <a href="https://www.facebook.com/" target="_blank" class="text-white mx-2"><i class="fa fa-facebook fa-lg"></i></a>
            <a href="https://twitter.com/" target="_blank" class="text-white mx-2"><i class="fa fa-twitter fa-lg"></i></a>
            <a href="https://www.instagram.com/" target="_blank" class="text-white mx-2"><i class="fa fa-instagram fa-lg"></i></a>
            <a href="mailto:youremail@gmail.com" class="text-white mx-2"><i class="fa fa-envelope fa-lg"></i></a>
            <a href="https://www.youtube.com/" target="_blank" class="text-white mx-2"><i class="fa fa-youtube-play fa-lg"></i></a>
        </div>

        <hr class="bg-light">

        <!-- COPYRIGHT -->
        <div class="text-center small text-light">
            <p>
                <u><a href="https://www.nationaltransaction.com/" class="text-white">National Transaction Corporation</a></u>
                is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]
            </p>
            <p class="h6 mb-0">© All rights reserved. <a href="https://www.sunlimetech.com" class="text-warning">Sunlimetech</a></p>
        </div>
    </div>
</section>

<?php wp_footer(); ?>
</body>
</html>
