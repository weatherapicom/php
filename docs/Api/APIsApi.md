# Swagger\Client\APIsApi

All URIs are relative to *https://api.weatherapi.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**astronomy**](APIsApi.md#astronomy) | **GET** /astronomy.json | Astronomy API
[**forecastWeather**](APIsApi.md#forecastWeather) | **GET** /forecast.json | Forecast API
[**futureWeather**](APIsApi.md#futureWeather) | **GET** /future.json | Future API
[**historyWeather**](APIsApi.md#historyWeather) | **GET** /history.json | History API
[**ipLookup**](APIsApi.md#ipLookup) | **GET** /ip.json | IP Lookup API
[**realtimeWeather**](APIsApi.md#realtimeWeather) | **GET** /current.json | Realtime API
[**searchAutocompleteWeather**](APIsApi.md#searchAutocompleteWeather) | **GET** /search.json | Search/Autocomplete API
[**timeZone**](APIsApi.md#timeZone) | **GET** /timezone.json | Time Zone API


# **astronomy**
> object astronomy($q, $dt)

Astronomy API

Return Location and Astronomy Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Pass US Zipcode, UK Postcode, Canada Postalcode, IP address, Latitude/Longitude (decimal degree) or city name. Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to learn more.
$dt = new \DateTime("2013-10-20"); // \DateTime | Date on or after 1st Jan, 2015 in yyyy-MM-dd format

try {
    $result = $apiInstance->astronomy($q, $dt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->astronomy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Pass US Zipcode, UK Postcode, Canada Postalcode, IP address, Latitude/Longitude (decimal degree) or city name. Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to learn more. |
 **dt** | **\DateTime**| Date on or after 1st Jan, 2015 in yyyy-MM-dd format |

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forecastWeather**
> object forecastWeather($q, $days, $dt, $unixdt, $hour, $lang)

Forecast API

Forecast weather API method returns upto next 10 day weather forecast and weather alert as json. The data is returned as a Forecast Object.<br /><br />Forecast object contains astronomy data, day weather forecast and hourly interval weather information for a given city.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Pass US Zipcode, UK Postcode, Canada Postalcode, IP address, Latitude/Longitude (decimal degree) or city name. Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to learn more.
$days = 56; // int | Number of days of weather forecast. Value ranges from 1 to 14
$dt = new \DateTime("2013-10-20"); // \DateTime | Date should be between today and next 14 day in yyyy-MM-dd format. e.g. '2015-01-01'
$unixdt = 56; // int | Please either pass 'dt' or 'unixdt' and not both in same request. unixdt should be between today and next 14 day in Unix format. e.g. 1490227200
$hour = 56; // int | Must be in 24 hour. For example 5 pm should be hour=17, 6 am as hour=6
$lang = "lang_example"; // string | Returns 'condition:text' field in API in the desired language.<br /> Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to check 'lang-code'.

try {
    $result = $apiInstance->forecastWeather($q, $days, $dt, $unixdt, $hour, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->forecastWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Pass US Zipcode, UK Postcode, Canada Postalcode, IP address, Latitude/Longitude (decimal degree) or city name. Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to learn more. |
 **days** | **int**| Number of days of weather forecast. Value ranges from 1 to 14 |
 **dt** | **\DateTime**| Date should be between today and next 14 day in yyyy-MM-dd format. e.g. &#39;2015-01-01&#39; | [optional]
 **unixdt** | **int**| Please either pass &#39;dt&#39; or &#39;unixdt&#39; and not both in same request. unixdt should be between today and next 14 day in Unix format. e.g. 1490227200 | [optional]
 **hour** | **int**| Must be in 24 hour. For example 5 pm should be hour&#x3D;17, 6 am as hour&#x3D;6 | [optional]
 **lang** | **string**| Returns &#39;condition:text&#39; field in API in the desired language.&lt;br /&gt; Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to check &#39;lang-code&#39;. | [optional]

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **futureWeather**
> object futureWeather($q, $dt, $lang)

Future API

Future weather API method returns weather in a 3 hourly interval in future for a date between 14 days and 300 days from today in the future.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Pass US Zipcode, UK Postcode, Canada Postalcode, IP address, Latitude/Longitude (decimal degree) or city name. Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to learn more.
$dt = new \DateTime("2013-10-20"); // \DateTime | Date should be between 14 days and 300 days from today in the future in yyyy-MM-dd format (i.e. dt=2023-01-01)
$lang = "lang_example"; // string | Returns 'condition:text' field in API in the desired language.<br /> Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to check 'lang-code'.

try {
    $result = $apiInstance->futureWeather($q, $dt, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->futureWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Pass US Zipcode, UK Postcode, Canada Postalcode, IP address, Latitude/Longitude (decimal degree) or city name. Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to learn more. |
 **dt** | **\DateTime**| Date should be between 14 days and 300 days from today in the future in yyyy-MM-dd format (i.e. dt&#x3D;2023-01-01) | [optional]
 **lang** | **string**| Returns &#39;condition:text&#39; field in API in the desired language.&lt;br /&gt; Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to check &#39;lang-code&#39;. | [optional]

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **historyWeather**
> object historyWeather($q, $dt, $unixdt, $end_dt, $unixend_dt, $hour, $lang)

History API

History weather API method returns historical weather for a date on or after 1st Jan, 2010 as json. The data is returned as a Forecast Object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Pass US Zipcode, UK Postcode, Canada Postalcode, IP address, Latitude/Longitude (decimal degree) or city name. Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to learn more.
$dt = new \DateTime("2013-10-20"); // \DateTime | Date on or after 1st Jan, 2015 in yyyy-MM-dd format
$unixdt = 56; // int | Please either pass 'dt' or 'unixdt' and not both in same request.<br />unixdt should be on or after 1st Jan, 2015 in Unix format
$end_dt = new \DateTime("2013-10-20"); // \DateTime | Date on or after 1st Jan, 2015 in yyyy-MM-dd format<br />'end_dt' should be greater than 'dt' parameter and difference should not be more than 30 days between the two dates.
$unixend_dt = 56; // int | Date on or after 1st Jan, 2015 in Unix Timestamp format<br />unixend_dt has same restriction as 'end_dt' parameter. Please either pass 'end_dt' or 'unixend_dt' and not both in same request. e.g. unixend_dt=1490227200
$hour = 56; // int | Must be in 24 hour. For example 5 pm should be hour=17, 6 am as hour=6
$lang = "lang_example"; // string | Returns 'condition:text' field in API in the desired language.<br /> Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to check 'lang-code'.

try {
    $result = $apiInstance->historyWeather($q, $dt, $unixdt, $end_dt, $unixend_dt, $hour, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->historyWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Pass US Zipcode, UK Postcode, Canada Postalcode, IP address, Latitude/Longitude (decimal degree) or city name. Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to learn more. |
 **dt** | **\DateTime**| Date on or after 1st Jan, 2015 in yyyy-MM-dd format |
 **unixdt** | **int**| Please either pass &#39;dt&#39; or &#39;unixdt&#39; and not both in same request.&lt;br /&gt;unixdt should be on or after 1st Jan, 2015 in Unix format | [optional]
 **end_dt** | **\DateTime**| Date on or after 1st Jan, 2015 in yyyy-MM-dd format&lt;br /&gt;&#39;end_dt&#39; should be greater than &#39;dt&#39; parameter and difference should not be more than 30 days between the two dates. | [optional]
 **unixend_dt** | **int**| Date on or after 1st Jan, 2015 in Unix Timestamp format&lt;br /&gt;unixend_dt has same restriction as &#39;end_dt&#39; parameter. Please either pass &#39;end_dt&#39; or &#39;unixend_dt&#39; and not both in same request. e.g. unixend_dt&#x3D;1490227200 | [optional]
 **hour** | **int**| Must be in 24 hour. For example 5 pm should be hour&#x3D;17, 6 am as hour&#x3D;6 | [optional]
 **lang** | **string**| Returns &#39;condition:text&#39; field in API in the desired language.&lt;br /&gt; Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to check &#39;lang-code&#39;. | [optional]

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ipLookup**
> \Swagger\Client\Model\Ip ipLookup($q)

IP Lookup API

IP Lookup API method allows a user to get up to date information for an IP address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Pass IP address.

try {
    $result = $apiInstance->ipLookup($q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->ipLookup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Pass IP address. |

### Return type

[**\Swagger\Client\Model\Ip**](../Model/Ip.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **realtimeWeather**
> object realtimeWeather($q, $lang)

Realtime API

Current weather or realtime weather API method allows a user to get up to date current weather information in json and xml. The data is returned as a Current Object.<br /><br />Current object contains current or realtime weather information for a given city.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Pass US Zipcode, UK Postcode, Canada Postalcode, IP address, Latitude/Longitude (decimal degree) or city name. Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to learn more.
$lang = "lang_example"; // string | Returns 'condition:text' field in API in the desired language.<br /> Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to check 'lang-code'.

try {
    $result = $apiInstance->realtimeWeather($q, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->realtimeWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Pass US Zipcode, UK Postcode, Canada Postalcode, IP address, Latitude/Longitude (decimal degree) or city name. Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to learn more. |
 **lang** | **string**| Returns &#39;condition:text&#39; field in API in the desired language.&lt;br /&gt; Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to check &#39;lang-code&#39;. | [optional]

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAutocompleteWeather**
> \Swagger\Client\Model\ArrayOfSearch searchAutocompleteWeather($q)

Search/Autocomplete API

WeatherAPI.com Search or Autocomplete API returns matching cities and towns as an array of Location object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Pass US Zipcode, UK Postcode, Canada Postalcode, IP address, Latitude/Longitude (decimal degree) or city name. Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to learn more.

try {
    $result = $apiInstance->searchAutocompleteWeather($q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->searchAutocompleteWeather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Pass US Zipcode, UK Postcode, Canada Postalcode, IP address, Latitude/Longitude (decimal degree) or city name. Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to learn more. |

### Return type

[**\Swagger\Client\Model\ArrayOfSearch**](../Model/ArrayOfSearch.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeZone**
> \Swagger\Client\Model\Location timeZone($q)

Time Zone API

Return Location Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Pass US Zipcode, UK Postcode, Canada Postalcode, IP address, Latitude/Longitude (decimal degree) or city name. Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to learn more.

try {
    $result = $apiInstance->timeZone($q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->timeZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Pass US Zipcode, UK Postcode, Canada Postalcode, IP address, Latitude/Longitude (decimal degree) or city name. Visit [request parameter section](https://www.weatherapi.com/docs/#intro-request) to learn more. |

### Return type

[**\Swagger\Client\Model\Location**](../Model/Location.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

