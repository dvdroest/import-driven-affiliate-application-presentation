/**
 * Returns if an item is in stock
 *
 * @param Object $feedNode
 *
 * @return bool
 */
protected function isItemInStock($feedNode): bool
{
	$stock = $this->readFeedPropertyValue($feedNode, 'stock');
	if( empty($stock) ){
		return false;
	} elseif ($stock[0] > 0) {
		return true;
	}
	return false;
}