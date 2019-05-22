<?php
  class Demo {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Insert demo fiels from demo table
    public function contact($data)
    {
      $this->db->query('INSERT INTO demo (name, email, message) VALUES(:name, :email, :message)');

          // Bind values
          $this->db->bind(':name', $data['name']);
          $this->db->bind(':email', $data['email']);
          $this->db->bind(':message', $data['message']);
  
          // Execute
          if($this->db->execute()){
            return true;
          } else {
            return false;
          }
    }

    
  }