// Used to pre-warm cache before running the actual import
$skipCacheWarmup = Validator::validateBoolean($input->getOption(self::OPTION_SKIP_CACHE_WARMUP));
if ( ! $skipCacheWarmup) {
	$removeXmlCache = $input->getOption(self::OPTION_CLEAR_CACHE);
	$icecatImporter->warmupDownloadCache($groupedIcecatIndexProducts, $removeXmlCache);
}