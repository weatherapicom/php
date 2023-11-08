# PHP client for WeatherAPI.com

# Introduction
WeatherAPI.com provides access to weather and geo data via a JSON/XML restful API. It allows developers to create desktop, web and mobile applications using this data very easy. 

We provide following data through our API:     
- Real-time weather
- 14 day weather forecast
- Historical Weather
- Marine Weather and Tide Data
- Future Weather (Upto 365 days ahead)
- Daily and hourly intervals
- 15 min interval (Enterprise only)
- Astronomy
- Time zone
- Location data
- Sports
- Search or Autocomplete API
- Weather Alerts
- Air Quality Data
- Bulk Request

# Getting Started    
You need to [signup](https://www.weatherapi.com/signup.aspx) and then you can find your API key under [your account](https://www.weatherapi.com/login.aspx), and start using API right away!  

Try our weather API by using interactive [API Explorer](https://www.weatherapi.com/api-explorer.aspx).  

We also have SDK for popular framework/languages available on [Github](https://github.com/weatherapicom/) for quick integrations.  

If you find any features missing or have any suggestions, please [contact us](https://www.weatherapi.com/contact.aspx).    

# Authentication    
API access to the data is protected by an API key. If at anytime, you find the API key has become vulnerable, please regenerate the key using Regenerate button next to the API key.    

Authentication to the WeatherAPI.com API is provided by passing your API key as request parameter through an API .      

##  key parameter  
key=YOUR API KEY

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.weatherapi.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APIsApi* | [**astronomy**](docs/Api/APIsApi.md#astronomy) | **GET** /astronomy.json | Astronomy API
*APIsApi* | [**forecastWeather**](docs/Api/APIsApi.md#forecastweather) | **GET** /forecast.json | Forecast API
*APIsApi* | [**futureWeather**](docs/Api/APIsApi.md#futureweather) | **GET** /future.json | Future API
*APIsApi* | [**historyWeather**](docs/Api/APIsApi.md#historyweather) | **GET** /history.json | History API
*APIsApi* | [**ipLookup**](docs/Api/APIsApi.md#iplookup) | **GET** /ip.json | IP Lookup API
*APIsApi* | [**marineWeather**](docs/Api/APIsApi.md#marineweather) | **GET** /marine.json | Marine Weather API
*APIsApi* | [**realtimeWeather**](docs/Api/APIsApi.md#realtimeweather) | **GET** /current.json | Realtime API
*APIsApi* | [**searchAutocompleteWeather**](docs/Api/APIsApi.md#searchautocompleteweather) | **GET** /search.json | Search/Autocomplete API
*APIsApi* | [**timeZone**](docs/Api/APIsApi.md#timezone) | **GET** /timezone.json | Time Zone API


## Documentation For Models

 - [Alerts](docs/Model/Alerts.md)
 - [AlertsAlert](docs/Model/AlertsAlert.md)
 - [ArrayOfSearch](docs/Model/ArrayOfSearch.md)
 - [Astronomy](docs/Model/Astronomy.md)
 - [AstronomyAstro](docs/Model/AstronomyAstro.md)
 - [Current](docs/Model/Current.md)
 - [CurrentAirQuality](docs/Model/CurrentAirQuality.md)
 - [CurrentCondition](docs/Model/CurrentCondition.md)
 - [Error400](docs/Model/Error400.md)
 - [Error401](docs/Model/Error401.md)
 - [Error403](docs/Model/Error403.md)
 - [Forecast](docs/Model/Forecast.md)
 - [ForecastAstro](docs/Model/ForecastAstro.md)
 - [ForecastCondition](docs/Model/ForecastCondition.md)
 - [ForecastDay](docs/Model/ForecastDay.md)
 - [ForecastDayCondition](docs/Model/ForecastDayCondition.md)
 - [ForecastForecastday](docs/Model/ForecastForecastday.md)
 - [ForecastHour](docs/Model/ForecastHour.md)
 - [Ip](docs/Model/Ip.md)
 - [Location](docs/Model/Location.md)
 - [Marine](docs/Model/Marine.md)
 - [MarineForecastday](docs/Model/MarineForecastday.md)
 - [MarineHour](docs/Model/MarineHour.md)
 - [Search](docs/Model/Search.md)


## Documentation For Authorization


## ApiKeyAuth

- **Type**: API key
- **API key parameter name**: key
- **Location**: URL query string


## Author




