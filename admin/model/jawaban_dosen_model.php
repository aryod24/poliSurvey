<?php 
class jDosen{
    public $db;
    protected $table = 't_jawaban_dosen';

    public function __construct(){
        include_once('model/koneksi.php');
        $this->db = $db;
        $this->db->set_charset('utf8');
    }

    public function getData(){
        // query untuk mengambil data dari tabel bank_soal
        return $this->db->query("select * from {$this->table} ");
    }

    public function getDosenById($id){

        // query untuk mengambil data berdasarkan id
        $query = $this->db->prepare("SELECT t.jawaban_dosen_id, t.responden_dosen_id, s.soal_nama, t.jawaban, k.survey_nama
        FROM t_jawaban_dosen as t LEFT JOIN t_responden_dosen as r ON t.responden_dosen_id = r.responden_dosen_id
        JOIN m_survey_soal as s ON s.soal_id = t.soal_id
        JOIN m_survey as k ON s.survey_id = k.survey_id
        WHERE r.responden_nip = ?");
        
        // binding parameter ke query "i" berarti integer. Biar tidak kena SQL Injection
        $query->bind_param('i', $id);

        // eksekusi query
        $query->execute();

        // ambil hasil query
        return $query->get_result();
    }
    

    public function deleteData($id){
        // query untuk delete data
        $query = $this->db->prepare("delete from {$this->table} where jawaban_dosen_id = ?");

        // binding parameter ke query
        $query->bind_param('i', $id);

        // eksekusi query
        $query->execute();
    }
}