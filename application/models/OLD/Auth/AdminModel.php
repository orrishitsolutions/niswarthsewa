<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class AdminModel extends CI_Model {
    private $users;
    public function __construct() {
        parent::__construct();
        $this->users = "users";
    }

    
    public function categoriesedit($id)
    {
        return $this->db->from('categories')->where('id',$id)->get()->row_array();
    }

    public function getUserDetails(){
        return $this->db->where('id',$this->session->userdata('id'))->from($this->users)->get()->row_array();
    }

    //profile section started;
    public function emailExist(){
        $exist = $this->db->where('email',$this->session->userdata('email'))->where('id !=',$this->session->userdata('id'))->from($this->users)->get()->row();
        if($exist){
            return true;
        }else{
            return false;
        }
    }

    public function phoneExist(){
        $exist = $this->db->where('phone',$this->session->userdata('phone'))->where('id !=',$this->session->userdata('id'))->from($this->users)->get()->row();
        if($exist){
            return true;
        }else{
            return false;
        }
    }

    public function profileremove(){
        
        try{
            $this->db->where('id',$this->session->userdata('id'))->set('profile','')->update($this->users);
            return 'profile has been updated.';
        } catch (Exception $e) {
        //alert the user.
            return $e->getMessage();
        }
        
    }
    public function updateRecord($update){
        try{
            $this->db->where('id',$this->session->userdata('id'))->set($update)->update($this->users);
            $db_error = $this->db->error();
            return 'changes has been saved.';
        } catch (Exception $e) {
        //alert the user.
            return $e->getMessage();
        }
        
    }

    public function getpassword(){
        return $this->db->where('id',$this->session->userdata('id'))->select('password')->from($this->users)->get()->row_array();
    }

    public function changePassword($pass){
        try{
            $this->db->where('id',$this->session->userdata('id'))->set('password',password_hash($pass,PASSWORD_BCRYPT))->update($this->users);
            $db_error = $this->db->error();
            return 'password has been change.';
        } catch (Exception $e) {
        //alert the user.
            return $e->getMessage();
        }
    }
    
    
}