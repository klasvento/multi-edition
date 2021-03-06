<?php namespace ZN\CryptoGraphy\Drivers;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use ZN\CryptoGraphy\CryptoMapping;
use ZN\Helpers\Converter;

class MhashDriver extends CryptoMapping
{
	/**
     * It encrypts the data.
     * 
     * @param string $data
     * @param array  $settings
     * 
     * @return string
     */
	public function encrypt($data, $settings)
	{
		$cipher = $settings['cipher'] ?? 'sha256';
	 	$key    = $settings['key']    ?? PROJECT_CONFIG['key'];
		$cipher = Converter::toConstant($cipher, 'MHASH_');

		return base64_encode(trim(mhash($cipher, $data, $key)));
	}

	/**
     * Generates a random password.
     * 
     * @param int $length
     * 
     * @return string
     */
	public function keygen($length)
	{
		return mhash_keygen_s2k(MHASH_MD5, md5(mt_rand()), md5(mt_rand()), $length);
	}
}
