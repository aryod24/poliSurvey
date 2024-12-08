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
        $query = $this->db->prepare("INSERT INTO {$this->table} (survey_id, user_id, survey_jenis, survey_kode, survey_nama, survey_deskripsi, survey_tanggal) values(?,?,?,?,?,?,?)");

        // ambil data tanggal dari form
        $tanggal = date('Y-m-d H:i:s', strtotime($data['survey_tanggal']));

        // binding parameter ke query, "s" berarti string, "ss" berarti dua string
        $query->bind_param('iisssss', $data['survey_id'], $data['user_id'], $data['survey_jenis'], $data['survey_kode'], $data['survey_nama'], $data['survey_deskripsi'], $tanggal);

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

        // ambil data tanggal dari form
        $tanggal = date('Y-m-d H:i:s', strtotime($data['survey_tanggal']));

        // binding parameter ke query
        $query->bind_param('iisssssi', $data['survey_id'], $data['user_id'], $data['survey_jenis'], $data['survey_kode'], $data['survey_nama'], $data['survey_deskripsi'], $tanggal, $id);

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

    public function getEnumValues() {
        $result = $this->db->query("SHOW COLUMNS FROM {$this->table} LIKE 'survey_jenis'");
        $row = $result->fetch_assoc();
        preg_match("/^enum\(\'(.*)\'\)$/", $row['Type'], $matches);
        return explode("','", $matches[1]);
    }
}
