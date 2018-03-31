<?php
	
	/*
		class menghitung jumlah kata
		author : edrian hadinata
	*/
	
	class Kata
	{
		//set string paragraf
		//@string
		private $paragraf;
		
		//set pattern defenition
		//@array
		private $pattern;
		
		//set jumlah karakter
		//@int
		private $jumlahKarakter;
		
		//set jumlah karakter alpha
		//@int
		private $numKarakter;
		
		//constructor
		public function __construct($paragraf)
		{
			$this->paragraf = $paragraf;
			$this->setPattern();
			$this->setJumlahKarakter();
		}
		
		private function setPattern()
		{
			$this->pattern = array("[^a-zA-Z\(\)]");
		}
		
		private function setJumlahKarakter()
		{
			$char = 0;
			$par = explode(" ",$this->paragraf);
			$this->numKarakter = count($par);
			foreach($par as $parag){
				foreach($this->pattern as $patt){
					if(preg_match("/".$patt."/",$parag)==true){
						$char++;
					}
				}
			}
			$this->jumlahKarakter = $this->numKarakter - $char;
		}
		
		public function getJumlahKarakter()
		{
			return $this->jumlahKarakter;
		}
	}
	

?>