	$str= mb_strtolower($dosya_adi,'UTF-8');
		//türkçe karakterleri dönüştür
		$str= str_replace(
			['ı','ş','ü','ğ','ç','ö'],
			['i','s','u','g','c','o'],
			$str
		);
		//harf ve sayılar hariç karakterleri - işaretine döndürür
		$str = preg_replace('/[^a-z0-9]/','-',$str);
		//birden fazla - işaretini teke düşür
		$str = preg_replace('/-+/','-',$str);
		mkdir("./üst klasör adı/".$str);
		
