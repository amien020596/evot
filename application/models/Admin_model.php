<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {


    public function daftar_pemilih(){
        $query = $this->db->get('pemilih');
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return false;
        }   
    }
    public function add_pemilih(){
        $data = array(
            'idpemilih'=>$this->input->post('nim'),
            'nama_pemilih'=>$this->input->post('nama'),
            'angkatan'=>$this->input->post('angkatan'),
            'password_pemilih'=>$this->input->post('password'),
            'status'=>'belum'
        );
        $query = $this->db->insert('pemilih',$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function delete_pemilih($id){
        $where = array(
            'idpemilih'=>$id
        );
        $query = $this->db->delete('pemilih',$where);
        if($query==true){
            return true;
        }else{
            return false;
        }
    }
    public function get_data_update($id){
        $where = array(
            'idpemilih'=>$id
        );
        $query = $this->db->get_where('pemilih',$where);
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function do_update_pemilih($id){
        $where = array(
            'idpemilih'=>$id
        );
        $data = array(
            'nama_pemilih'=>$this->input->post('nama'),
            'angkatan'=>$this->input->post('angkatan'),
            'password_pemilih'=>$this->input->post('password'),
            
        );
        $query = $this->db->update('pemilih',$data,$where);
        if($query==true){
            return true;
        }else{
            return false;
        }
    }
    //kandidat ketua BEM
    public function kandidat_bem(){
        $query =$this->db->get('kandidat_bem');
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return false;
        }
    }

    public function insert_ketua_bem($data){
        $query = $this->db->insert('kandidat_bem',$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }

    //kandidat wakil BEM
    public function insert_wakil_bem($data,$id){
        $where = array(
            'no_urut'=>$id
        );
        $query = $this->db->update('kandidat_bem',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    //hapus kandidat bem
    public function hapus_kandidat_bem($id){
        $where = array(
            'idkandidat_BEM'=>$id
        );
        $query = $this->db->delete('kandidat_bem',$where);
        if($query==true){
            return true;
        }else{
            return false;
        }
    }
    public function get_update_ketua_bem($id){
        $where = array(
            'idkandidat_BEM'=>$id
        );
        $query = $this->db->get_where('kandidat_bem',$where);
        if($query->num_rows()>0)
        {
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function update_ketua_bem($data,$id){
        $where = array(
            'idkandidat_BEM'=>$id
        );

        $query = $this->db->update('kandidat_bem',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function get_update_wakil_bem($id){
        $where = array(
            'idkandidat_BEM'=>$id
        );
        $query = $this->db->get_where('kandidat_bem',$where);
        if($query->num_rows()>0)
        {
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function update_wakil_bem($data,$id){
        $where =array(
            'idkandidat_BEM'=>$id
        );
        $query = $this->db->update('kandidat_bem',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    //liat daftar senat
    public function kandidat_senat(){
        $query =$this->db->get('kandidat_senat');
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    //input data senat
    public function insert_senat($data){
        $query = $this->db->insert('kandidat_senat',$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    //hapus senat
    public function hapus_senat($id){
        $where = array(
            'idkandidat_senat'=>$id
        );
        $query = $this->db->delete('kandidat_senat',$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    //get update senat
    public function get_update_senat($id){
        $where = array(
            'idkandidat_senat'=>$id
        );
        $query = $this->db->get_where('kandidat_senat',$where);
        if($query->num_rows()>0)
        {
            return $query->result_array();
        }else{
            return false;
        }
    }
    //update senat
    public function update_senat($data,$id){
        $where = array(
            'idkandidat_senat'=>$id
        );
        $query = $this->db->update('kandidat_senat',$data,$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }

    public function hitung_bem($urut){
        $where =array(
            'BEM'=>$urut
        );
        $this->db->where($where);
        $this->db->from('hasil_vote');
        $query = $this->db->count_all_results();

         if($query>=0){
             return $query;
          }else{
              return false;
          }
    }

    public function hitung_senat($urut, $angkatan){
        $where =array(
            'SENAT'=> $urut,
            'angkatan' => $angkatan
        );
        $this->db->where($where);
        $this->db->from('hasil_vote');
        $query = $this->db->count_all_results();

         if($query>=0){
             return $query;
          }else{
              return false;
          }
    }

    public function stotal_bem(){
        $this->db->from('pemilih');
        $query = $this->db->count_all_results();

        if($query >= 0){
            return $query;
        }else{
            return false;
        }
    }

    public function stotal_senat(){
        $where = "angkatan !='2011' AND angkatan !='2012' AND angkatan !='2013' AND angkatan !='2014'";
        $this->db->where($where);
        $this->db->from('pemilih');
        $query = $this->db->count_all_results();

        if($query >= 0){
            return $query;
        }else{
            return false;
        }
    }
    
    public function sudah_bem(){
        $where = "BEM != 'NULL'";
        $this->db->where($where);
        $this->db->from('hasil_vote');
        $query = $this->db->count_all_results();

        if($query >= 0){
            return $query;
        }else{
            return false;
        } 
    }

    public function sudah_senat(){
        $where = "SENAT != 'NULL'";
        $this->db->where($where);
        $this->db->from('hasil_vote');
        $query = $this->db->count_all_results();

        if($query >= 0){
            return $query;
        }else{
            return false;
        } 
    }

    public function belum_bem(){
        $where = "status = 'belum'";
        $this->db->where($where);
        $this->db->from('pemilih');
        $query = $this->db->count_all_results();

        if($query >= 0){
            return $query;
        }else{
            return false;
        }
    }

    public function belum_senat(){
        $where = "(angkatan !='2011' AND angkatan !='2012' AND angkatan !='2013' AND angkatan !='2014') AND status = 'belum'";
        $this->db->where($where);
        $this->db->from('pemilih');
        $query = $this->db->count_all_results();

        if($query >= 0){
            return $query;
        }else{
            return false;
        }
    }

    public function total_senat_angkatan($angkatan) {
        $where = array('angkatan' => $angkatan );
        $this->db->where($where);
        $this->db->from('pemilih');
        $query = $this->db->count_all_results();

        if($query > 0){
            return $query;
        }else{
            return 0;
        }   
    }    

    public function sudah_senat_angkatan($angkatan) {
        $where = array(
            'angkatan' => $angkatan,
            'status'   => 'sudah'
        );
        $this->db->where($where);
        $this->db->from('pemilih');
        $query = $this->db->count_all_results();

        if($query >= 0){
            return $query;
        }else{
            return false;
        }   
    }

    public function belum_senat_angkatan($angkatan) {
        $where = array(
            'angkatan' => $angkatan,
            'status'   => 'belum'
        );
        $this->db->where($where);
        $this->db->from('pemilih');
        $query = $this->db->count_all_results();

        if($query > 0){
            return $query;
        }else{
            return 0;
        }   
    }
    
    public function get_jml_kandidat_bem(){
        $this->db->from('kandidat_bem');
        $query = $this->db->count_all_results();

        if($query >= 0){
            return $query;
        }else{
            return false;
        }       
    }

    public function get_jml_kandidat_senat($angkatan){
        $where = array('angkatan' => $angkatan );
        $this->db->where($where);
        $this->db->from('kandidat_senat');
        $query = $this->db->count_all_results();

        if($query >= 0){
            return $query;
        }else{
            return false;
        }       
    }    

    public function get_data_kandidat_bem($urut) {
        $where = array('no_urut' => $urut );
        $this->db->where($where);
        $query = $this->db->get('kandidat_bem')->result();
        foreach ($query as $res) {
            return $res;
        }
    }

    public function get_data_kandidat_senat($urut,$angkatan) {
        $where = array('angkatan' => $angkatan, 'no_urut' => $urut);
        $this->db->where($where);
        $query = $this->db->get('kandidat_senat')->result();
        foreach ($query as $res) {
            return $res;
        }
    }

    public function reset(){
        $this->db->trans_start();
        $this->db->query('DELETE FROM hasil_vote');
        $this->db->query('ALTER TABLE hasil_vote AUTO_INCREMENT 1');
        $this->db->query('DELETE FROM kandidat_bem');
        $this->db->query('ALTER TABLE kandidat_bem AUTO_INCREMENT 1');
        $this->db->query('DELETE FROM kandidat_senat');
        $this->db->query('ALTER TABLE kandidat_senat AUTO_INCREMENT 1');
        $this->db->trans_complete();      

        if ($this->db->trans_status() === TRUE)
        {
            return true;
        }else{
            return false;
        }
        
    }
    public function reset_pemilih(){
        $this->db->trans_start();
        $this->db->query('DELETE FROM pemilih');
        $this->db->trans_complete();      

        if ($this->db->trans_status() === TRUE)
        {
            return true;
        }else{
            return false;
        }
        
    }
}