<?php

namespace rafaelmorenojs\Watermark;
/**
 * 
 */

class Watermark
{
	/**
	 * Ruta del directorio de la stampa que queremos usar como marca de agua
	 * @var string
	 */
	private  $stamp;

	/**
	 * Ruta del directorio de la imagen a la que queremos agregarle la marca de agua
	 * @var [type]
	 */
	private $image;

	/**
	 * [__construct description]
	 * @param string $stamp [description]
	 * @param string $image [description]
	 */
	function __construct(string $stamp, string $image)
	{
		$this->stamp = $stamp;
		$this->image = $image;
	}

	/**
	 * [render description]
	 * @return [type] [description]
	 */
	public function render()
	{
		$stamp = imagecreatefrompng($this->stamp);
		$image = imagecreatefromjpeg($this->image);

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