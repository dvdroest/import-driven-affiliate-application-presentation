public function sanitise($value) {
	if(is_int($value)){
		return $this->sanitiseInt($value);
	}
	return $this->sanitiseString($value);
}
private function sanitiseString(string $value) {
	$sanitisedValue = filter_var($value, FILTER_SANITIZE_STRING);
	return $sanitisedValue ?? '';
}
private function sanitiseInt(int $value) {
	return (int) $value;
}