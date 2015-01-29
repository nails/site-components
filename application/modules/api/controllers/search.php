<?php

require NAILS_PATH . 'module-api/api/controllers/_api.php';

class Search extends NAILS_Api_Controller
{
    public function index()
    {
        //  Search
        $term    = $this->input->get_post('term');
        $include = $this->input->get_post('include');

        $includeModule = !empty($include['module']) && stringToBoolean($include['module']);
        $includeDriver = !empty($include['driver']) && stringToBoolean($include['driver']);
        $includeSkin   = !empty($include['skin']) && stringToBoolean($include['skin']);

        $types = array();

        if ($includeModule) {
            $types[] = 'module';
        }

        if ($includeDriver) {
            $types[] = 'driver';
        }

        if ($includeSkin) {
            $types[] = 'skin';
        }

        $searchData           = array('where' => array(), 'like' => array());
        $searchData['like'][] = array('name', $term);

        if ($types) {

            $searchData['where_in'][] = array('type', $types);
        }

        $this->load->model('component_model');

        $data            = array();
        $data['results'] = $this->component_model->get_all(1, 50, $searchData);

        $this->_out($data);
    }
}