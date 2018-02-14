if (empty($wine->getName())) {
	throw new Exception('Skipping wine: no name');
}
if (strlen($wine->getLongDescription()) < $this->minDescriptionLength) {
	throw new Exception('Skipping wine: description too short');
}
if ($wine->getCountry() === null || $wine->getWineType() === null) {
	throw new Exception('Skipping wine: no mapping possible');
}