<?php

class M_brg extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('barang_uas'); // nama table
	}

	public function tambah_data($data, $table)
	{
		return $this->db->insert($table, $data);
	}

	public function edit_data($where,$data,$table)
	{
		$this->db->where('kode', $where); // WHERE parameter1 = parameter2
		$this->db->update($table,$data); // SET title = '{$title}', name = '{$name}', date = '{$date}'
//      UPDATE $table
//      SET title = '{$title}', name = '{$name}', date = '{$date}' << berasal dari array
//      WHERE id = $id
	}

	public function delete_data($kode,$table)
	{
		$this->db->delete($table, $kode);  // Produces: // DELETE FROM mytable  // WHERE id = $id (lihat di home_controller)
	}

	public function tampil_detail_data($table,$key1,$key2)
	{
		$query = $this->db->query("SELECT * FROM ".$table." WHERE ".$key1."='".$key2."';");
		return $query;
	}
}
