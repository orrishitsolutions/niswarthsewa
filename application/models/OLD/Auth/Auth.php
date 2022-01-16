<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auth extends CI_Model {
    private $table;
    public function __construct() {
        parent::__construct();
        $this->table="users";
    }



    /**
     * 
     * @param type $data user input
     * @return boolean if user found return the row else return false
     */
    public function isUserExist($data) {
        $this->db->where($data);
        
        $query = $this->db->get($this->table);
        if ($query->num_rows() == 1 ) {
            return $query->row_array();
        } else {
            return false;
        }
    }
    
    // public function updateTime($userInput,$lastLogin){
    //     $username=$userInput['username'];
    //     $password=$userInput['password'];
    //     $this->db->where('username',$username);
    //     $this->db->where('password',$password);
    //     return $this->db->update($this->table, $lastLogin);
    // }
    
    
    
}