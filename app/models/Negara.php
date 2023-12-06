<?php

namespace App\Models;

use App\Core\Model;

class Negara extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_negara";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $capital = $_POST['capital'];
            $presiden = $_POST['presiden'];

            $sql = "INSERT INTO tb_negara
            SET negara_kode=:negara_kode, negara_nama=:negara_nama, negara_capital=:negara_capital, negara_presiden=:negara_presiden";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":negara_kode", $kode);
            $stmt->bindParam(":negara_nama", $nama);
            $stmt->bindParam(":negara_capital", $capital);
            $stmt->bindParam(":negara_presiden", $presiden);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_negara WHERE negara_id=:negara_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":negara_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $capital = $_POST['capital'];
            $presiden = $_POST['presiden'];
            $id = $_POST['id'];

            if (!empty($kode)) {
                  $sql = "UPDATE tb_negara
                  SET negara_kode=:negara_kode, negara_nama=:negara_nama, negara_capital=:negara_capital, negara_presiden=:negara_presiden
                  WHERE negara_id=:negara_id";
            } else {
                  $sql = "UPDATE tb_negara
                  SET negara_nama=:negara_nama, negara_capital=:negara_capital, negara_presiden=:negara_presiden
                  WHERE negara_id=:negara_id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":negara_kode", $kode);
            $stmt->bindParam(":negara_nama", $nama);
            $stmt->bindParam(":negara_capital", $capital);
            $stmt->bindParam(":negara_presiden", $presiden);
            $stmt->bindParam(":negara_id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_negara WHERE negara_id=:negara_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":negara_id", $id);
            $stmt->execute();
      }
}
