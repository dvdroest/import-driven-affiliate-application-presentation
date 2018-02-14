public function isSupportedImage($imagePath){
	$supportedImageTypes = [
		IMAGETYPE_GIF,
		IMAGETYPE_JPEG,
		IMAGETYPE_PNG
	];

	$imgType = exif_imagetype($imagePath);

	return in_array($imgType, $supportedImageTypes, true);
}