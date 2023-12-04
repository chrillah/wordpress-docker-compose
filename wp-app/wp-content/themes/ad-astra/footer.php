<footer id="footer">
    <div class="footer-container">
        <div class="footer-top">
            <div>
                <h4>Kort om oss</h4>
                <?php
                if (is_active_sidebar('about-widget')) {
                    dynamic_sidebar('about-widget');
                }
                ?>
            </div>
            <div>
                <h4>Kontaktuppgifter</h4>
                <?php if (is_active_sidebar("adress widget")) {
                    dynamic_sidebar("adress widget");
                } ?>
            </div>
            <div>
                <h4>Social media</h4>
                <?php
                if (is_active_sidebar('link-widget')) {
                    dynamic_sidebar('link-widget');
                }
                ?>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy; <span class="another-font">Ad Astra</span>,
                <?php echo date('Y') ?>
            </p>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>
