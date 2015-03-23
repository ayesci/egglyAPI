<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookmarks extends CI_Controller {

    public function index()
    {
        if($_SERVER["REQUEST_METHOD"]=="GET")
        {
            $this->load->model("Model_bookmarks", '', true);
            $res = $this->Model_bookmarks->get_bookmarks();
            header("Content-type: application/json");
            echo json_encode($res);
        }

        elseif($_SERVER["REQUEST_METHOD"]=="POST") // si la méthode est en POST
        {
            // on extrait les données reçues en POST
            $postdata = file_get_contents("php://input");
            $postdata = (array)json_decode($postdata);
            $postdata["title"];

            $this->load->model("Model_bookmarks", '', true);
            $res = $this->Model_bookmarks->add_bookmarks($postdata['url'], $postdata['title'], $postdata['id_category']);
            $postdata['id']=$res;
            header("Content-type: application/json");
            echo json_encode($postdata);
        }

    }

}
