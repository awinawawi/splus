<?php

/**
 * Request.php
 * php version 7.2.0
 *
 * @category Trait
 * @package  Xendit\ApiOperations
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit\ApiOperations;

use Xendit\Exceptions\InvalidArgumentException;

/**
 * Trait Request
 *
 * @category Trait
 * @package  Xendit\ApiOperations
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
trait Request
{
    /**
     * Parameters validation
     *
     * @param array $params         user's parameters
     * @param array $requiredParams required parameters
     *
     * @return bool
     */
    protected static function validateParams($params = [], $requiredParams = [])
    {
        $currParams = array_diff_key(array_flip($requiredParams), $params);
        if ($params && !is_array($params)) {
            $message = "You must pass an array as params.";
            throw new InvalidArgumentException($message);
        }
        if (count($currParams) > 0) {
            $message = "You must pass required parameters on your params. "
            . "Check https://xendit.github.io/apireference/ for more information.";
            throw new InvalidArgumentException($message);
        }
    }

    /**
     * Send request to Api Requestor
     *
     * @param $method  string
     * @param $url     string ext url to the API
     * @param $params  array parameters
     * @param $headers array customer's optional headers
     *
     * @return array
     * @throws \Xendit\Exceptions\AuthenticationException
     * @throws \Xendit\Exceptions\ApiExceptions
     */
    protected static function _request($method,
        $url,
        $params = [],
        $headers = []
    ) {
        $requestor = new \Xendit\ApiRequestor();
        return $requestor->request($method, $url, $params, $headers);
    }
}
