<?php namespace Ngmy\L4Dav\Service\Http;
/**
 * Part of the L4Dav package.
 *
 * Licensed under MIT License.
 *
 * @package    L4Dav
 * @version    0.5.0
 * @author     Ngmy <y.nagamiya@gmail.com>
 * @license    http://opensource.org/licenses/MIT MIT License
 * @copyright  (c) 2014, Ngmy <y.nagamiya@gmail.com>
 * @link       https://github.com/ngmy/l4-dav
 */

use Ngmy\L4Dav\Service\Http\ResponseInterface;

/**
 * A cURL response class.
 *
 * @package L4Dav
 */
class CurlResponse extends \anlutro\cURL\Response implements ResponseInterface {

	/**
	 * Get the response body.
	 *
	 * @access public
	 * @return string Returns the response body.
	 */
	public function getBody()
	{
		return $this->body;
	}

	/**
	 * Get the status code.
	 *
	 * @access public
	 * @return integer Returns the status code.
	 */
	public function getStatus()
	{
		return (int) $this->statusCode;
	}

	/**
	 * Get the status message.
	 *
	 * @access public
	 * @return string Returns the status message.
	 */
	public function getMessage()
	{
		return $this->statusText;
	}

}
