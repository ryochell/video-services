<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tag_model extends MY_Model
{
    public $table = 'tags';

    public $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
    }
}