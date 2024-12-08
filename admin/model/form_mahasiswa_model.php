<?php 
class Mahasiswa{
    public $db;
    protected $table = 't_responden_mahasiswa';

    public function __construct(){
        include_once('model/koneksi.php');
        $this->db = $db;
        $this->db->set_charset('utf8');
    }

    public function getData(){
        // query untuk mengambil data dari tabel bank_soal
        return $this->db->query("select distinct responden_tanggal, responden_nama, responden_prodi, responden_nim, responden_email, responden_hp, tahun_masuk from {$this->table} ");
    }

    public function deleteData($id){
        // query untuk delete data
        $query = $this->db->prepare("delete from {$this->table} where responden_mahasiswa_id = ?");

        // binding parameter ke query
        $query->bind_param('i', $id);

        // eksekusi query
        $query->execute();
    }
}