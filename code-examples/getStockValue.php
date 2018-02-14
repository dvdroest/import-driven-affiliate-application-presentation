/**
 * AbstractProductImporter.php
 */
protected function getStockValue($feedNode) {
	$stock = $this->readFeedPropertyValue($feedNode, 'stock');
	if( empty($stock) ){
		return false;
	}
	return $stock;
}

/**
 * DaisyconImporter.php
 */
protected function isItemInStock($feedNode): bool
{
	$stock = $this->getStockValue($feedNode);
	return isset($stock[0]) && $stock[0] > 0;
}