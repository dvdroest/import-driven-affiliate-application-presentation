protected function mapProperties(){
	$affiliateMappingData = $this->getAffiliateMappingData();
	foreach($affiliateMappingData as $key => $value){
		$string = $this->getPropertyValue($this->feedWineNode,$value);
		if($string !== null && $string !== ''){
			$this->setWineProperty($key,$string,true);
		}
	}
}