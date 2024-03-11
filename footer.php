<?php
/* Footer things like the scripts and the other things that gonna load into the footer and the other steps if you want to add into the footer.php */
/*
* Contains footer
*/
?>

<footer id="footer" class="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="footer-info">
                <h3>VisionSpot</h3>
                <p>
                    Sezam Street <br>
                    North Pole<br><br>
                    <strong>Phone:</strong> +12 345 678 91011<br>
                    <strong>Email:</strong> info@visionspot.com<br>
                </p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">AI ChatGPT</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Docker</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Jira-agile</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Git-Github</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Slim-framework</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Our Newsletter</h4>
                <p>Stay in tuned</p>
                <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>

    <div class="footer-legal text-center">
        <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <div class="copyright">
                &copy; Copyright <strong><span>VisionSpot-test-for-study</span></strong>. All Rights Reserved-Not for commercial use
                </div>
            </div>

            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                <a href="#" class="twitter"><i class="twitter"></i></a>
                <a href="#" class="facebook"><i class="facebook"></i></a>
                <a href="#" class="instagram"><i class="instagram"></i></a>
                <a href="#" class="google-plus"><i class="skype"></i></a>
                <a href="#" class="linkedin"><i class="linkedin"></i></a>
            </div>

        </div>
    </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
    <!-- Prints scripts or data before the closing body tag on the front end. (Add admin bar to the index page.) -->
    <?php wp_footer(); ?>
</body>
</html>