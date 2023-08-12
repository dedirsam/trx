<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Pagination extends CI_Pagination
{

    public function __construct()
    {
        parent::__construct();
    }

    public function initialize($params = array())
    {
        parent::initialize($params);

        // Convert $this->total_rows to an integer
        $this->total_rows = (int) $this->total_rows;

        // Convert $this->per_page to an integer
        $this->per_page = (int) $this->per_page;
    }

    public function calculate_total_pages()
    {
        // Calculate the total number of pages
        return (int) ceil($this->total_rows / $this->per_page);
    }
}
