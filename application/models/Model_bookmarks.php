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

    public function add_bookmark($url, $title, $id_category)
    {
        $sql = "INSERT INTO bookmarks(url, title, id_category)
                VALUES (?, ?, ?)";
        $data = [$url, $title, $id_category];
        $this->db->query($sql, $data);
        $id = $this->db->insert_id();
        return $id;
    }

    public function getBookmarkById($newBookmarkId)
    {
        $sql = "SELECT bookmarks.id,  url, title, categories.name as category
                FROM bookmarks
                JOIN categories ON categories.id = bookmarks.id_category
                WHERE bookmarks.id = ?
                ";
        $data = [$newBookmarkId];
        $query = $this->db->query($sql, $data);
        $res = $query->row_array();
        return $res;
    }

    public function deleteBookmarkById($BookmarkId)
    {
        $sql =" DELETE
                FROM bookmarks
                WHERE bookmarks.id = ?
                LIMIT 1
                ";
        $data = [$BookmarkId];
        $res = $this->db->query($sql, $data);
        return $res;
    }


}