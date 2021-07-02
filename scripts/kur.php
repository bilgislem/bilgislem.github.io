<?php


class KurBilgi
{
	private $kurUrl= array("gumusUrl" => "https://www.bloomberght.com/piyasa/refdata/gumus-ons","altinUrl" => "https://www.bloomberght.com/piyasa/refdata/altin-ons","isvecUrl" => "https://www.bloomberght.com/piyasa/refdata/isvec-kronu","kanadaUrl" => "https://www.bloomberght.com/piyasa/refdata/kanada-dolari","avustralyaUrl" => "https://www.bloomberght.com/piyasa/refdata/avustralya-dolari","danimarkaUrl" => "https://www.bloomberght.com/piyasa/refdata/danimarka-kronu","norvecUrl" => "https://www.bloomberght.com/piyasa/refdata/norvec-kronu","riyalUrl" => "https://www.bloomberght.com/piyasa/refdata/suudi-arabistan-riyali","frangUrl" => "https://www.bloomberght.com/piyasa/refdata/isvicre-frangi","sterlinUrl" => "https://www.bloomberght.com/piyasa/refdata/ingiliz-sterlini","yenUrl" => "https://www.bloomberght.com/piyasa/refdata/japon-yeni","euroUrl" => "https://www.bloomberght.com/piyasa/refdata/euro","dolarUrl" => "https://www.bloomberght.com/piyasa/refdata/dolar");
	
	public function gunlukGetir()
	{
		/*$html = <<<EOL
			<table border=1>
EOL;
		$sutun="";
		$satir="";		
		foreach($this->kurUrl as $key=>$url)
		{
			$kur = json_decode(file_get_contents($url));
			$sutun.= "<th>".str_replace("-"," ",strtoupper(basename($url)))."</th>";
			$satir.="<td>".$kur->SeriesData[count($kur->SeriesData)-1][1]."</td>";
		}
		$html.="<tr>".$sutun."</tr>";
		$html.="<tr>".$satir."</tr>";
		$html.="</table>";
		return $html;*/		
		$dizi = array();
		foreach($this->kurUrl as $url)
		{
			$kur = json_decode(file_get_contents($url));
			$name = str_replace("-"," ",strtoupper(basename($url)));
			$std = new stdclass;
			$std->name=$name;
			$std->kurBilgi=$kur->SeriesData[count($kur->SeriesData)-1][1];
			array_push($dizi,$std);
		}
		return json_encode($dizi);
	}

	public function tumGetir()
	{
		$stdMain = new stdclass;
		$diziMain=array();
		foreach($this->kurUrl as $url)
		{
			$dizi = array();
			$kurStd = new stdclass;
			$kur = json_decode(file_get_contents($url));
			$nameStd = new stdclass;
			$nameStd->name = str_replace("-"," ",strtoupper(basename($url)));
			foreach($kur->SeriesData as $data)
			{
				$kurStd->tarih=$data[0];
				$kurStd->kurBilgi = $data[1];
				array_push($dizi,$kurStd);
			}
			$nameStd->bilgi = $dizi;			
			array_push($diziMain,$nameStd);
		}
		
		$stdMain->kur = $diziMain;
		return json_encode($stdMain);
	}
}

?>
