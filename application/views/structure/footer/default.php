    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-left">
                    <span class="copyright">Built by <a href="http://shedcollective.org">Shed</a> in London</span>
                </div>
                <div class="col-md-4 text-center">
                    <ul class="list-inline social-buttons">
                        <li><a href="http://twitter.com/shedcollective"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="http://facebook.com/shedcollective"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="http://instagram.com/shedhq"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 text-right">
                    <ul class="list-inline quicklinks">
                        <li>Nails is available under the <a href="http://opensource.org/licenses/MIT" target="_blank">MIT license</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        var ENVIRONMENT     = '<?=strtoupper( ENVIRONMENT )?>';
        window.SITE_URL     = '<?=site_url( '', isPageSecure() )?>';
        window.NAILS_LANG   = {};
        window.NAILS_API    = {};
        window.APP_JS       = {};
    </script>
    <?php

    $this->asset->output('JS');
    $this->asset->output('JS-INLINE');

    ?>
</body>
</html>