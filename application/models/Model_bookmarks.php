<?php

Class Model_bookmarks extends CI_Model
{
    public function get_bookmarks()
    {
        $sql = "SELECT bookmarks.id, url, title, id_category, name as category
                FROM bookmarks
                JOIN categories ON categories.id = bookmarks.id_category
                ";
        $query = $this->db->query($sql);
        $res = [];
        foreach($query->result_array() as $row)
        {
            $res[] = $row;
        }
        return $res;
    }

    public function add_bookmarks($url, $title, $id_category)
    {
        $sql = "INSERT INTO bookmarks(url, title, id_category)
                VALUES (?, ?, ?)";
        $data = [$url, $title, $id_category];
        $this->db->query($sql, $data);

        return $this->db->insert_id();
    }





}