<?php

class Component_model extends Nails_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_table        = 'component';
        $this->_table_prefix = 'c';
    }

    // --------------------------------------------------------------------------

    protected function _format_object(&$obj)
    {
    	parent::_format_object($obj);

    	if (empty($obj->homepage)) {

    		$obj->homepage = $obj->repository;
    	}
    }
}