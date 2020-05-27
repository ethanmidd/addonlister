<?php
    class Addon{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        // Get All Addons
        public function getAllAddons(){
            $this->db->query("SELECT addons.*, categories.name AS cname
                    FROM addons
                    INNER JOIN categories
                    ON addons.category_id = categories.id
                    ORDER BY post_date DESC
                    ");
            // Assign Result Set
            $results = $this->db->resultSet();

            return $results;
        }

        //Get Categories
        public function getCategories(){
            $this->db->query("SELECT * FROM categories");
            // Assign Result Set
            $results = $this->db->resultSet();

            return $results;
        }

        // Get Jobs By Category
        public function getByCategory($category){
            $this->db->query("SELECT addons.*, categories.name AS cname
                         FROM addons
                         INNER JOIN categories
                         ON addons.category_id = categories.id
                         WHERE addons.category_id = $category
                         ORDER BY post_date DESC
                         ");
           // Assign Result Set
           $results = $this->db->resultSet();

           return $results;
        }

        // Get category
        public function getCategory($category_id){
                $this->db->query("SELECT * FROM categories WHERE id = :category_id"
                    );
                $this->db->bind(':category_id' , $category_id);

                // Assign Row
                $row = $this->db->single();

                return $row;
        }

        // Get Addon
        public function getAddon($id){
            $this->db->query("SELECT * FROM addons WHERE id = :id");

            $this->db->bind(':id' , $id);

            // Assign Row
            $row = $this->db->single();

            return $row;
        }

        // Create Job
        public function create($data){
            //Insert Query
            $this->db->query("INSERT INTO addons (category_id, addon_title, description, developer, file_size)
            VALUES (:category_id, :addon_title, :description, :developer, :file_size");
             //Bind Data
            $this->db->bind(':category_id', $data['category_id']);
            $this->db->bind(':addon_title', $data['addon_title']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':developer', $data['developer']);
            $this->db->bind(':file_size', $data['file_size']);
            //Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }
    }