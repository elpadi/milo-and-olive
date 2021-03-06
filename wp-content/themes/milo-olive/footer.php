        <footer id="footer"  class="footer">
            <ul class="social">
                <li class="social__item">
                    <a href="https://www.instagram.com/miloandolive/" title="Follow Milo + Olive on Instagram" target="_blank" id="instagram"></a>
                </li>
                <li class="social__item">
                    <a href="http://www.facebook.com/miloandolive" title="Add Milo + Olive on Facebook" target="_blank" id="facebook"></a>
                </li>
                <li class="social__item">
                    <a href="https://twitter.com/MiloandOlive?lang=en" title="Follow Milo + Olive on Twitter" target="_blank" id="twitter"></a>
                </li>
            </ul>
            <p class="rc-family">
                <a href="https://www.rusticcanyonfamily.com/" target="_blank">A Rustic Canyon Family Restaurant</a>
            </p>
            <p class="site-credits">
                <a href="#" class="js-pop-up__trigger">site credits</a>
            </p>
            <div class="rc-foot"><?= str_replace(['%year%', '%site%'], [date('Y'), get_bloginfo('name')], get_field('global_foot', 'option')); ?></div>
        </footer>
    </div><!-- #wrapper -->

    <div class="pop-up  credits">
        <div class="credits__inner">
            <div class="credits__section">
                <h2 class="credits__title">
                  Design & Branding
                </h2>
                <p class="credits__name">
                    <a href="https://www.francescobelvedere.com/" target="_blank">Francesco Belvedere</a>
                </p>
            </div>
            <div class="credits__section">
                <h2 class="credits__title">
                Web Development
                </h2>
                <p class="credits__name">
                    <a href="https://www.sheilabuchanan.com/" target="_blank">Sheila Buchanan</a>
                </p>
            </div>
            <div class="credits__section">
                <h2 class="credits__title">
                Photography
                </h2>
                <p class="credits__name">
                    <a href="http://www.emilyhartphotography.com/" target="_blank">Emily Roth</a>
                </p>
                <p class="credits__name">
                    <a href="http://www.alamodejournals.com/" target="_blank">Rick Poon</a>
                </p>
                <p class="credits__name">
                    <a href="http://www.jakoblayman.com/" target="_blank">Jakob Layman</a>
                </p>
            </div>
        </div>
        <div class="pop-up__btn-wrap">
            <button class="js-close  pop-up__btn">
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
    <?php wp_footer(); ?>
    <script><?php include __DIR__ . '/assets/js/vendor/chownow.js'; ?></script>
</body>
</html>
