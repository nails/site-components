<?php

class Component_model extends Nails_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_table        = 'component';
        $this->_table_prefix = 'c';
    }
}