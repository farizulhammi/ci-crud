<?php
class Siswa_model extends CI_Model {

    function get(){
        return $this->db->get('siswa');
    }
    function add($tabel,$data){
        $this->db->insert($tabel,$data);
    }
    
    function delete($where, $tabel){
        $this->db->where($where);
        $this->db->delete($tabel);
        redirect(base_url('siswa/'));
    }

    function edit($where, $tabel){
        return $this->db->get_where($tabel, $where);
    }

    function update($where, $tabel, $data){
        $this->db->where($where);
        $this->db->update($tabel, $data);
        redirect(base_url('siswa/'));
    }
}