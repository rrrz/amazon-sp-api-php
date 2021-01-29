<?php
/**
 * CatalogApi
 * PHP version 5.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Catalog Items.
 *
 * The Selling Partner API for Catalog Items helps you programmatically retrieve item details for items in the catalog.
 *
 * OpenAPI spec version: v0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ClouSale\AmazonSellingPartnerAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use InvalidArgumentException;
use ClouSale\AmazonSellingPartnerAPI\ApiException;
use ClouSale\AmazonSellingPartnerAPI\Configuration;
use ClouSale\AmazonSellingPartnerAPI\HeaderSelector;
use ClouSale\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use ClouSale\AmazonSellingPartnerAPI\Models\GetCatalogItemResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\ListCatalogCategoriesResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\ListCatalogItemsResponse;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * CatalogApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class CatalogApiDeprecated {
    use SellingPartnerApiRequest;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig() {
        return $this->config;
    }

    /**
     * Operation getCatalogItem.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @return GetCatalogItemResponse
     * @throws ApiException             on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getCatalogItem($marketplace_id, $asin) {
        list($response) = $this->getCatalogItemWithHttpInfo($marketplace_id, $asin);

        return $response;
    }

    /**
     * Operation getCatalogItemWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\GetCatalogItemResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getCatalogItemWithHttpInfo($marketplace_id, $asin) {
        $request = $this->getCatalogItemRequest($marketplace_id, $asin);
        return $this->sendRequest($request, GetCatalogItemResponse::class);
    }

    /**
     * Operation getCatalogItemAsync.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getCatalogItemAsync($marketplace_id, $asin) {
        return $this->getCatalogItemAsyncWithHttpInfo($marketplace_id, $asin)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCatalogItemAsyncWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getCatalogItemAsyncWithHttpInfo($marketplace_id, $asin) {
        $returnType = GetCatalogItemResponse::class;
        $request = $this->getCatalogItemRequest($marketplace_id, $asin);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ('\SplFileObject' === $returnType) {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ('string' !== $returnType) {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
                }
            );
    }

    /**
     * Create request for operation 'getCatalogItem'.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @return \GuzzleHttp\Psr7\Request
     * @throws InvalidArgumentException
     *
     */
    protected function getCatalogItemRequest($marketplace_id, $asin) {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplace_id || (is_array($marketplace_id) && 0 === count($marketplace_id))) {
            throw new InvalidArgumentException('Missing the required parameter $marketplace_id when calling getCatalogItem');
        }
        // verify the required parameter 'asin' is set
        if (null === $asin || (is_array($asin) && 0 === count($asin))) {
            throw new InvalidArgumentException('Missing the required parameter $asin when calling getCatalogItem');
        }

        $resourcePath = '/catalog/v0/items/{asin}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplace_id) {
            $queryParams['MarketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id);
        }

        // path params
        if (null !== $asin) {
            $resourcePath = str_replace(
                '{' . 'asin' . '}',
                ObjectSerializer::toPathValue($asin),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation listCatalogCategories.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (optional)
     * @param string $seller_sku Used to identify items in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (optional)
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ListCatalogCategoriesResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function listCatalogCategories($marketplace_id, $asin = null, $seller_sku = null) {
        list($response) = $this->listCatalogCategoriesWithHttpInfo($marketplace_id, $asin, $seller_sku);

        return $response;
    }

    /**
     * Operation listCatalogCategoriesWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (optional)
     * @param string $seller_sku Used to identify items in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (optional)
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\ListCatalogCategoriesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function listCatalogCategoriesWithHttpInfo($marketplace_id, $asin = null, $seller_sku = null) {
        $returnType = ListCatalogCategoriesResponse::class;
        $request = $this->listCatalogCategoriesRequest($marketplace_id, $asin, $seller_sku);
        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation listCatalogCategoriesAsync.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (optional)
     * @param string $seller_sku Used to identify items in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (optional)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function listCatalogCategoriesAsync($marketplace_id, $asin = null, $seller_sku = null) {
        return $this->listCatalogCategoriesAsyncWithHttpInfo($marketplace_id, $asin, $seller_sku)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listCatalogCategoriesAsyncWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (optional)
     * @param string $seller_sku Used to identify items in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (optional)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function listCatalogCategoriesAsyncWithHttpInfo($marketplace_id, $asin = null, $seller_sku = null) {
        $returnType = ListCatalogCategoriesResponse::class;
        $request = $this->listCatalogCategoriesRequest($marketplace_id, $asin, $seller_sku);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ('\SplFileObject' === $returnType) {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ('string' !== $returnType) {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
                }
            );
    }

    /**
     * Create request for operation 'listCatalogCategories'.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (optional)
     * @param string $seller_sku Used to identify items in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (optional)
     *
     * @return \GuzzleHttp\Psr7\Request
     * @throws InvalidArgumentException
     *
     */
    protected function listCatalogCategoriesRequest($marketplace_id, $asin = null, $seller_sku = null) {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplace_id || (is_array($marketplace_id) && 0 === count($marketplace_id))) {
            throw new InvalidArgumentException('Missing the required parameter $marketplace_id when calling listCatalogCategories');
        }

        $resourcePath = '/catalog/v0/categories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplace_id) {
            $queryParams['MarketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id);
        }
        // query params
        if (null !== $asin) {
            $queryParams['ASIN'] = ObjectSerializer::toQueryValue($asin);
        }
        // query params
        if (null !== $seller_sku) {
            $queryParams['SellerSKU'] = ObjectSerializer::toQueryValue($seller_sku);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation listCatalogItems.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which items are returned. (required)
     * @param string $query Keyword(s) to use to search for items in the catalog. Example: &#x27;harry potter books&#x27;. (optional)
     * @param string $query_context_id An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items. (optional)
     * @param string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (optional)
     * @param string $upc A 12-digit bar code used for retail packaging. (optional)
     * @param string $ean A European article number that uniquely identifies the catalog item, manufacturer, and its attributes. (optional)
     * @param string $isbn The unique commercial book identifier used to identify books internationally. (optional)
     * @param string $jan A Japanese article number that uniquely identifies the product, manufacturer, and its attributes. (optional)
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ListCatalogItemsResponse
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     */
    public function listCatalogItems($marketplace_id, $query = null, $query_context_id = null, $seller_sku = null, $upc = null, $ean = null, $isbn = null, $jan = null) {
        list($response) = $this->listCatalogItemsWithHttpInfo($marketplace_id, $query, $query_context_id, $seller_sku, $upc, $ean, $isbn, $jan);

        return $response;
    }

    /**
     * Operation listCatalogItemsWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which items are returned. (required)
     * @param string $query Keyword(s) to use to search for items in the catalog. Example: &#x27;harry potter books&#x27;. (optional)
     * @param string $query_context_id An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items. (optional)
     * @param string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (optional)
     * @param string $upc A 12-digit bar code used for retail packaging. (optional)
     * @param string $ean A European article number that uniquely identifies the catalog item, manufacturer, and its attributes. (optional)
     * @param string $isbn The unique commercial book identifier used to identify books internationally. (optional)
     * @param string $jan A Japanese article number that uniquely identifies the product, manufacturer, and its attributes. (optional)
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\ListCatalogItemsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     */
    public function listCatalogItemsWithHttpInfo($marketplace_id, $query = null, $query_context_id = null, $seller_sku = null, $upc = null, $ean = null, $isbn = null, $jan = null) {
        $returnType = ListCatalogItemsResponse::class;
        $request = $this->listCatalogItemsRequest($marketplace_id, $query, $query_context_id, $seller_sku, $upc, $ean, $isbn, $jan);
        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation listCatalogItemsAsync.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which items are returned. (required)
     * @param string $query Keyword(s) to use to search for items in the catalog. Example: &#x27;harry potter books&#x27;. (optional)
     * @param string $query_context_id An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items. (optional)
     * @param string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (optional)
     * @param string $upc A 12-digit bar code used for retail packaging. (optional)
     * @param string $ean A European article number that uniquely identifies the catalog item, manufacturer, and its attributes. (optional)
     * @param string $isbn The unique commercial book identifier used to identify books internationally. (optional)
     * @param string $jan A Japanese article number that uniquely identifies the product, manufacturer, and its attributes. (optional)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function listCatalogItemsAsync($marketplace_id, $query = null, $query_context_id = null, $seller_sku = null, $upc = null, $ean = null, $isbn = null, $jan = null) {
        return $this->listCatalogItemsAsyncWithHttpInfo($marketplace_id, $query, $query_context_id, $seller_sku, $upc, $ean, $isbn, $jan)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listCatalogItemsAsyncWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which items are returned. (required)
     * @param string $query Keyword(s) to use to search for items in the catalog. Example: &#x27;harry potter books&#x27;. (optional)
     * @param string $query_context_id An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items. (optional)
     * @param string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (optional)
     * @param string $upc A 12-digit bar code used for retail packaging. (optional)
     * @param string $ean A European article number that uniquely identifies the catalog item, manufacturer, and its attributes. (optional)
     * @param string $isbn The unique commercial book identifier used to identify books internationally. (optional)
     * @param string $jan A Japanese article number that uniquely identifies the product, manufacturer, and its attributes. (optional)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function listCatalogItemsAsyncWithHttpInfo($marketplace_id, $query = null, $query_context_id = null, $seller_sku = null, $upc = null, $ean = null, $isbn = null, $jan = null) {
        $returnType = ListCatalogItemsResponse::class;
        $request = $this->listCatalogItemsRequest($marketplace_id, $query, $query_context_id, $seller_sku, $upc, $ean, $isbn, $jan);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ('\SplFileObject' === $returnType) {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ('string' !== $returnType) {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
                }
            );
    }

    /**
     * Create request for operation 'listCatalogItems'.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which items are returned. (required)
     * @param string $query Keyword(s) to use to search for items in the catalog. Example: &#x27;harry potter books&#x27;. (optional)
     * @param string $query_context_id An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items. (optional)
     * @param string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (optional)
     * @param string $upc A 12-digit bar code used for retail packaging. (optional)
     * @param string $ean A European article number that uniquely identifies the catalog item, manufacturer, and its attributes. (optional)
     * @param string $isbn The unique commercial book identifier used to identify books internationally. (optional)
     * @param string $jan A Japanese article number that uniquely identifies the product, manufacturer, and its attributes. (optional)
     *
     * @return \GuzzleHttp\Psr7\Request
     * @throws InvalidArgumentException
     *
     */
    protected function listCatalogItemsRequest($marketplace_id, $query = null, $query_context_id = null, $seller_sku = null, $upc = null, $ean = null, $isbn = null, $jan = null) {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplace_id || (is_array($marketplace_id) && 0 === count($marketplace_id))) {
            throw new InvalidArgumentException('Missing the required parameter $marketplace_id when calling listCatalogItems');
        }

        $resourcePath = '/catalog/v0/items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplace_id) {
            $queryParams['MarketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id);
        }
        // query params
        if (null !== $query) {
            $queryParams['Query'] = ObjectSerializer::toQueryValue($query);
        }
        // query params
        if (null !== $query_context_id) {
            $queryParams['QueryContextId'] = ObjectSerializer::toQueryValue($query_context_id);
        }
        // query params
        if (null !== $seller_sku) {
            $queryParams['SellerSKU'] = ObjectSerializer::toQueryValue($seller_sku);
        }
        // query params
        if (null !== $upc) {
            $queryParams['UPC'] = ObjectSerializer::toQueryValue($upc);
        }
        // query params
        if (null !== $ean) {
            $queryParams['EAN'] = ObjectSerializer::toQueryValue($ean);
        }
        // query params
        if (null !== $isbn) {
            $queryParams['ISBN'] = ObjectSerializer::toQueryValue($isbn);
        }
        // query params
        if (null !== $jan) {
            $queryParams['JAN'] = ObjectSerializer::toQueryValue($jan);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}
