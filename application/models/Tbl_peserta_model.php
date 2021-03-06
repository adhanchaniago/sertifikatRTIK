<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_peserta_model extends CI_Model
{

    public $table = 'tbl_peserta';
    public $id = 'idPeserta';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('idPeserta', $q);
	$this->db->or_like('namaPeserta', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('telepon', $q);
	$this->db->or_like('wilayah', $q);
	$this->db->or_like('fb', $q);
	$this->db->or_like('tw', $q);
	$this->db->or_like('ig', $q);
	$this->db->or_like('tgldaftar', $q);
	$this->db->or_like('foto', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('level', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('idPeserta', $q);
	$this->db->or_like('namaPeserta', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('telepon', $q);
	$this->db->or_like('wilayah', $q);
	$this->db->or_like('fb', $q);
	$this->db->or_like('tw', $q);
	$this->db->or_like('ig', $q);
	$this->db->or_like('tgldaftar', $q);
	$this->db->or_like('foto', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('level', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Tbl_peserta_model.php */
/* Location: ./application/models/Tbl_peserta_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-02 19:04:09 */
/* http://harviacode.com */