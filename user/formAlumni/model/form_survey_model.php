<?php 
class Survey{
    public $db;
    protected $table = 'm_survey';

    public function __construct(){
        include_once('model/koneksi.php');
        $this->db = $db;
        $this->db->set_charset('utf8');
    }

    public function insertData($data){
        // prepare statement untuk query insert
        $query = $this->db->prepare("insert into {$this->table} (survey_id, user_id, survey_jenis, survey_kode, survey_nama, survey_deskripsi, survey_tanggal) values(?,?,?,?,?,?,?)");

        // binding parameter ke query, "s" berarti string, "ss" berarti dua string
        $query->bind_param('iisssss', $data['survey_id'], $data['user_id'], $data['survey_jenis'], $data['survey_kode'], $data['survey_nama'], $data['survey_deskripsi'], $data['survey_tanggal']);
        
        // eksekusi query untuk menyimpan ke database
        $query->execute();
    }

    public function getData(){
        // query untuk mengambil data dari tabel bank_soal
        return $this->db->query("select * from {$this->table} ");
    }

    public function getDataById($id){

        // query untuk mengambil data berdasarkan id
        $query = $this->db->prepare("select * from {$this->table} where survey_id = ?");
        
        // binding parameter ke query "i" berarti integer. Biar tidak kena SQL Injection
        $query->bind_param('i', $id);

        // eksekusi query
        $query->execute();

        // ambil hasil query
        return $query->get_result();
    }

    public function updateData($id, $data){
        // query untuk update data
        $query = $this->db->prepare("update {$this->table} set user_id = ?, survey_jenis = ?, survey_kode = ?, survey_nama = ?, survey_deskripsi = ?, survey_tanggal =? where survey_id = ?");

        // binding parameter ke query
        $query->bind_param('iisssssi', $data['survey_id'], $data['user_id'], $data['survey_jenis'], $data['survey_kode'], $data['survey_nama'], $data['survey_deskripsi'], $data['survey_tanggal'], $id);

        // eksekusi query
        $query->execute();
    }

    public function deleteData($id){
        // query untuk delete data
        $query = $this->db->prepare("delete from {$this->table} where survey_id = ?");

        // binding parameter ke query
        $query->bind_param('i', $id);

        // eksekusi query
        $query->execute();
    }
}