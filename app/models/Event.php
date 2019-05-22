<?php
  class Event {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Fetch all blogs titles from blogs table
    public function fetchAllBlogs()
    {
      $this->db->query('SELECT * FROM blogs');
        $blogs = $this->db->resultSet();
        return $blogs;
    }
    
    public function getSingleBlog($slug)
    {
        $this->db->query('SELECT * FROM blogs WHERE slug = :slug');
        $this->db->bind(':slug', $slug);
        
        $blog = $this->db->single();
        return $blog;
    }
    
  }