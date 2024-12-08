<?php 
class Soal{
    public $db;
    protected $table = 'm_survey_soal';

    public function __construct(){
        include_once('model/koneksi.php');
        $this->db = $db;
        $this->db->set_charset('utf8');
    }

    public function insertData($data) {
        // prepare statement untuk query insert
        $query = $this->db->prepare("INSERT INTO {$this->table} (soal_id, survey_id, kategori_id, no_urut, soal_jenis, soal_nama) VALUES (?, ?, ?, ?, ?, ?)");
    
        // binding parameter ke query, "iiisss" means the first four are integers and the last two are strings
        $query->bind_param('iiiiss', $data['soal_id'], $data['survey_id'], $data['kategori_id'], $data['no_urut'], $data['soal_jenis'], $data['soal_nama']);
    
        // eksekusi query untuk menyimpan ke database
        if (!$query->execute()) {
            throw new mysqli_sql_exception("Error executing query: " . $query->error);
        }
    }
    

    public function getData(){
        // query untuk mengambil data dari tabel bank_soal
        return $this->db->query("select * from {$this->table} ");
    }

    public function getDataById($id){

        // query untuk mengambil data berdasarkan id
        $query = $this->db->prepare("select * from {$this->table} where soal_id = ?");
        
        // binding parameter ke query "i" berarti integer. Biar tidak kena SQL Injection
        $query->bind_param('i', $id);

        // eksekusi query
        $query->execute();

        // ambil hasil query
        return $query->get_result();
    }

    public function updateData($id, $data){
        // query untuk update data
        $query = $this->db->prepare("update {$this->table} set soal_id = ?, survey_id = ?, kategori_id = ?, no_urut = ?, soal_jenis = ?, soal_nama = ? where soal_id = ?");

        // binding parameter ke query
        $query->bind_param('iiiissi', $data['soal_id'], $data['survey_id'], $data['kategori_id'], $data['no_urut'], $data['soal_jenis'], $data['soal_nama'], $id);

        // eksekusi query
        $query->execute();
    }

    public function deleteData($id){
        // query untuk delete data
        $query = $this->db->prepare("delete from {$this->table} where soal_id = ?");

        // binding parameter ke query
        $query->bind_param('i', $id);

        // eksekusi query
        $query->execute();
    }

    public function getEnumValues() {
        $result = $this->db->query("SHOW COLUMNS FROM {$this->table} LIKE 'soal_jenis'");
        $row = $result->fetch_assoc();
        preg_match("/^enum\(\'(.*)\'\)$/", $row['Type'], $matches);
        return explode("','", $matches[1]);
    }
}