<?php

/* load the class from the package */
require_once NAILS_COMMON_PATH . 'core/CORE_NAILS_Controller.php';

class NAILS_Controller extends CORE_NAILS_Controller
{
    public function __construct()
    {
        parent::__construct();

        // --------------------------------------------------------------------------

        //  CSS
        $this->asset->load('bootstrap/dist/css/bootstrap.min.css', 'APP-BOWER');
        $this->asset->load('fontawesome/css/font-awesome.min.css', 'APP-BOWER');
        $this->asset->load('styles.css', 'APP');

        // --------------------------------------------------------------------------

        //  Js
        $this->asset->load('jquery/dist/jquery.min.js', 'APP-BOWER');
        $this->asset->load('bootstrap/dist/js/bootstrap.min.js', 'APP-BOWER');
        $this->asset->load('retinajs/dist/retina.min.js', 'APP-BOWER');
        $this->asset->load('mustache/mustache.min.js', 'APP-BOWER');
        $this->asset->load('app.min.js', 'APP');
    }
}
