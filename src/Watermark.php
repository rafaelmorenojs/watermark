<?php

namespace rafaelmorenojs\Watermark;
/**
 * 
 */

class Watermark
{
	/**
	 * [render description]
	 * @param  string $stamp [description]
	 * @param  string $image [description]
	 * @return [type]        [description]
	 */
	public function render(string $stamp, string $image)
	{
		$stamp = imagecreatefrompng($stamp);
		$image = imagecreatefromjpeg($image);

		$rightMargin = 10; // MARGEN DERECHO
		$lowerMargin = 10; // MARGEN INFERIOR
		$width = imagesx($stamp);
		$high = imagesy($stamp);

		$x = 10;
		$y = -390;
		for ($i=0; $i < 20; $i++) {
			$y = $y + 400;
			imagecopy($image, $stamp, 80, $y, 0, 0, imagesx($stamp), imagesy($stamp));
			imagecopy($image, $stamp, 500, $y, 0, 0, imagesx($stamp), imagesy($stamp));
			imagecopy($image, $stamp, 1000, $y, 0, 0, imagesx($stamp), imagesy($stamp));
		}

		header('Content-type: image/jpeg');
		imagepng($image);
		imagedestroy($image);
	}
}