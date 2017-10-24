<?php

	class identitas {
		public $sekolah;
		public $alamat;
		public $kelas;
		public $hoby;

		function __construct ($sekolah, $alamat, $kelas, $hoby) {
			$this->sekolah = $sekolah;
			$this->alamat = $alamat;
			$this->kelas = $kelas;
			$this->hoby = $hoby;
		}

		function get_sekolah(){
			return $this->sekolah;
		}

		function get_alamat(){
			return $this->alamat;
		}

		function get_kelas(){
			return $this->kelas;
		}

		function get_hoby(){
			return $this->hoby;
		}
	}



?>