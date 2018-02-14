public function executeWithMultipleThreads(array $productsList, int $threads = 4): void {
	$processes = [];

	for ($i = 0; $i < $this->threads; $i++) {
		$pid = pcntl_fork();

		if ($pid === -1) {
			throw new RuntimeException('Failed to start child process');
		}

		if ($pid > 0) {
			$processes[] = $pid;
		} else {
			foreach (productsList[$i] as $product) {
				$this->productService->addProductImages($product);
			}
			exit;
		}
	}
	foreach ($processes as $pid) {
		pcntl_waitpid($pid, $status);
	}
}