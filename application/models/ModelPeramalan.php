<?php

class ModelPeramalan extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	

	public function get_hasil(){
		$sekarang = date("Y-m-d");

		$batas = date("Y-m-d",strtotime("-90 days"));
		$data = $this->db
		->where(array(
			'tanggal >='=>$batas,
			'tanggal <' =>$sekarang
		))
		->get("penjualan")->result();
		if (empty($data)) {
			return;
		}
		$hari_ini = 0;
		$besok = 0;
		$lusa = 0;
		$response = array();
		$no =0;
		foreach ($data as $value) {
			array_push($response,array(
				'tanggal' =>$value->tanggal,
				'jumlah' => $value->jumlah,
				'hasil' => NULL
			));
			$hari_ini += $value->jumlah;
			if ($no>0) {
				$besok += $value->jumlah;
			
			}
			if ($no>1) {
				$lusa += $value->jumlah;
			
			}
			$no++;
		}
		// die(var_dump($no));
		$ramalan_hari_ini = $hari_ini/$no;
		array_push($response,array(
				'tanggal' =>date("Y-m-d"),
				'jumlah' => "-",
				'hasil' => $ramalan_hari_ini
			));
		$besok += $ramalan_hari_ini;
		$ramalan_besok = $besok/$no;
		array_push($response,array(
				'tanggal' =>date("Y-m-d",strtotime("+1 days")),
				'jumlah' => "-",
				'hasil' => $ramalan_besok
			));
		$lusa += $ramalan_besok;
		$ramalan_lusa = $lusa/$no;

		array_push($response,array(
				'tanggal' =>date("Y-m-d",strtotime("+2 days")),
				'jumlah' => "-",
				'hasil' => $ramalan_lusa
			));

		$label = json_encode([date("d-m-Y"),date("Y-m-d",strtotime("+1 days")),date("Y-m-d",strtotime("+2 days"))]);
		$data = json_encode([round($ramalan_hari_ini),round($ramalan_besok),round($ramalan_lusa)]);
		$grafik = array(
			"labels" => $label,
			'data' => $data
		);
		$rekomendasi = array();
		$stok = $this->db->get("bahan_bakar")->row_array();
		array_push($rekomendasi,array(
				'tanggal' =>date("Y-m-d"),
				'hasil' => $ramalan_hari_ini,
				'rekomendasi' => $ramalan_hari_ini-$stok['stok_akhir'],
				'stok' => $stok['stok_akhir']
			));
		array_push($rekomendasi,array(
				'tanggal' =>date("Y-m-d",strtotime("+1 days")),
				'hasil' => $ramalan_besok,
				'rekomendasi' => $ramalan_hari_ini+$ramalan_besok-$stok['stok_akhir'],
				'stok' => $stok['stok_akhir']
			));
		array_push($rekomendasi,array(
				'tanggal' =>date("Y-m-d",strtotime("+2 days")),
				'hasil' => $ramalan_lusa,
				'rekomendasi' => $ramalan_hari_ini+$ramalan_besok+$ramalan_lusa-$stok['stok_akhir'],
				'stok' => $stok['stok_akhir']
			));


		return array(
			"response" =>$response,
			'grafik' => $grafik,
			'rekom' => $rekomendasi
		);
	}

}