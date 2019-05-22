<?php
  class Book {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Fetch all products items from products table
    public function fetchAllProducts()
    {
      $this->db->query('SELECT * FROM products');
        $products = $this->db->resultSet();
        return $products;
    }
    
  }