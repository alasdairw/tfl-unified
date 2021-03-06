<?php
/**
 * AirQualityApi
 * PHP version 5
 *
 * @category Class
 * @package  Abulia\TflUnified\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Transport for London Unified API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Abulia\TflUnified\Swagger\Api;

use \Abulia\TflUnified\Swagger\ApiClient;
use \Abulia\TflUnified\Swagger\ApiException;
use \Abulia\TflUnified\Swagger\Configuration;
use \Abulia\TflUnified\Swagger\ObjectSerializer;

/**
 * AirQualityApi Class Doc Comment
 *
 * @category Class
 * @package  Abulia\TflUnified\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AirQualityApi
{
    /**
     * API Client
     *
     * @var \Abulia\TflUnified\Swagger\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Abulia\TflUnified\Swagger\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Abulia\TflUnified\Swagger\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Abulia\TflUnified\Swagger\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Abulia\TflUnified\Swagger\ApiClient $apiClient set the API client
     *
     * @return AirQualityApi
     */
    public function setApiClient(\Abulia\TflUnified\Swagger\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation airQualityGet
     *
     * Gets air quality data feed
     *
     * @throws \Abulia\TflUnified\Swagger\ApiException on non-2xx response
     * @return \Abulia\TflUnified\Swagger\Model\Object
     */
    public function airQualityGet()
    {
        list($response) = $this->airQualityGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation airQualityGetWithHttpInfo
     *
     * Gets air quality data feed
     *
     * @throws \Abulia\TflUnified\Swagger\ApiException on non-2xx response
     * @return array of \Abulia\TflUnified\Swagger\Model\Object, HTTP status code, HTTP response headers (array of strings)
     */
    public function airQualityGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/AirQuality";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json', 'application/xml', 'text/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('app_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['app_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('app_id');
        if (strlen($apiKey) !== 0) {
            $queryParams['app_id'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Abulia\TflUnified\Swagger\Model\Object',
                '/AirQuality'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Abulia\TflUnified\Swagger\Model\Object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Abulia\TflUnified\Swagger\Model\Object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
