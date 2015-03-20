<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public function index()
    {
        $this->load->model("Model_categories", '', true);
        $res = $this->Model_categories->get_categories();
        header("Content-type: application/json");
        echo json_encode($res);

    }
}