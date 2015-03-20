<?php

Class Model_categories extends CI_Model
{
    public function get_categories()
    {
        $sql = "SELECT categories.id, name
                FROM categories
                ";
        $query = $this->db->query($sql);
        $res = [];
        foreach($query->result_array() as $row)
        {
            $res[] = $row;
        }
        return $res;
    }

}