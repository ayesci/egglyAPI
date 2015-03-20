<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookmarks extends CI_Controller {

    public function index()
    {
        $this->load->model("Model_bookmarks", '', true);
        $res = $this->Model_bookmarks->get_bookmarks();
        header("Content-type: application/json");
        echo json_encode($res);


    }
}
