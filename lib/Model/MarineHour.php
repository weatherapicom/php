<?php
/**
 * MarineHour
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Weather API
 *
 * # Introduction WeatherAPI.com provides access to weather and geo data via a JSON/XML restful API. It allows developers to create desktop, web and mobile applications using this data very easy. We provide following data through our API:     - Real-time weather - 14 day weather forecast - Historical Weather - Marine Weather and Tide Data - Future Weather (Upto 365 days ahead) - Daily and hourly intervals - 15 min interval (Enterprise only) - Astronomy - Time zone - Location data - Sports - Search or Autocomplete API - Weather Alerts - Air Quality Data - Bulk Request  # Getting Started    You need to [signup](https://www.weatherapi.com/signup.aspx) and then you can find your API key under [your account](https://www.weatherapi.com/login.aspx), and start using API right away!  Try our weather API by using interactive [API Explorer](https://www.weatherapi.com/api-explorer.aspx).  We also have SDK for popular framework/languages available on [Github](https://github.com/weatherapicom/) for quick integrations.  If you find any features missing or have any suggestions, please [contact us](https://www.weatherapi.com/contact.aspx).    # Authentication    API access to the data is protected by an API key. If at anytime, you find the API key has become vulnerable, please regenerate the key using Regenerate button next to the API key.    Authentication to the WeatherAPI.com API is provided by passing your API key as request parameter through an API .      ##  key parameter  key=YOUR API KEY
 *
 * OpenAPI spec version: 1.0.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.36
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * MarineHour Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarineHour implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'marine_hour';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'time_epoch' => 'int',
        'time' => 'string',
        'temp_c' => 'float',
        'temp_f' => 'float',
        'is_day' => 'int',
        'condition' => '\Swagger\Client\Model\ForecastCondition',
        'wind_mph' => 'float',
        'wind_kph' => 'float',
        'wind_degree' => 'float',
        'wind_dir' => 'string',
        'pressure_mb' => 'float',
        'pressure_in' => 'float',
        'precip_mm' => 'float',
        'precip_in' => 'float',
        'humidity' => 'float',
        'cloud' => 'float',
        'feelslike_c' => 'float',
        'feelslike_f' => 'float',
        'windchill_c' => 'float',
        'windchill_f' => 'float',
        'heatindex_c' => 'float',
        'heatindex_f' => 'float',
        'dewpoint_c' => 'float',
        'dewpoint_f' => 'float',
        'will_it_rain' => 'int',
        'chance_of_rain' => 'float',
        'will_it_snow' => 'int',
        'chance_of_snow' => 'float',
        'vis_km' => 'float',
        'vis_miles' => 'float',
        'gust_mph' => 'float',
        'gust_kph' => 'float',
        'sig_ht_mt' => 'float',
        'swell_ht_mt' => 'float',
        'swell_ht_ft' => 'float',
        'swell_dir' => 'float',
        'swell_dir_16_point' => 'float',
        'swell_period_secs' => 'float',
        'uv' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'time_epoch' => 'int32',
        'time' => null,
        'temp_c' => null,
        'temp_f' => null,
        'is_day' => 'int32',
        'condition' => null,
        'wind_mph' => null,
        'wind_kph' => null,
        'wind_degree' => null,
        'wind_dir' => null,
        'pressure_mb' => null,
        'pressure_in' => null,
        'precip_mm' => null,
        'precip_in' => null,
        'humidity' => null,
        'cloud' => null,
        'feelslike_c' => null,
        'feelslike_f' => null,
        'windchill_c' => null,
        'windchill_f' => null,
        'heatindex_c' => null,
        'heatindex_f' => null,
        'dewpoint_c' => null,
        'dewpoint_f' => null,
        'will_it_rain' => 'int32',
        'chance_of_rain' => null,
        'will_it_snow' => 'int32',
        'chance_of_snow' => null,
        'vis_km' => null,
        'vis_miles' => null,
        'gust_mph' => null,
        'gust_kph' => null,
        'sig_ht_mt' => null,
        'swell_ht_mt' => null,
        'swell_ht_ft' => null,
        'swell_dir' => null,
        'swell_dir_16_point' => null,
        'swell_period_secs' => null,
        'uv' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'time_epoch' => 'time_epoch',
        'time' => 'time',
        'temp_c' => 'temp_c',
        'temp_f' => 'temp_f',
        'is_day' => 'is_day',
        'condition' => 'condition',
        'wind_mph' => 'wind_mph',
        'wind_kph' => 'wind_kph',
        'wind_degree' => 'wind_degree',
        'wind_dir' => 'wind_dir',
        'pressure_mb' => 'pressure_mb',
        'pressure_in' => 'pressure_in',
        'precip_mm' => 'precip_mm',
        'precip_in' => 'precip_in',
        'humidity' => 'humidity',
        'cloud' => 'cloud',
        'feelslike_c' => 'feelslike_c',
        'feelslike_f' => 'feelslike_f',
        'windchill_c' => 'windchill_c',
        'windchill_f' => 'windchill_f',
        'heatindex_c' => 'heatindex_c',
        'heatindex_f' => 'heatindex_f',
        'dewpoint_c' => 'dewpoint_c',
        'dewpoint_f' => 'dewpoint_f',
        'will_it_rain' => 'will_it_rain',
        'chance_of_rain' => 'chance_of_rain',
        'will_it_snow' => 'will_it_snow',
        'chance_of_snow' => 'chance_of_snow',
        'vis_km' => 'vis_km',
        'vis_miles' => 'vis_miles',
        'gust_mph' => 'gust_mph',
        'gust_kph' => 'gust_kph',
        'sig_ht_mt' => 'sig_ht_mt',
        'swell_ht_mt' => 'swell_ht_mt',
        'swell_ht_ft' => 'swell_ht_ft',
        'swell_dir' => 'swell_dir',
        'swell_dir_16_point' => 'swell_dir_16_point',
        'swell_period_secs' => 'swell_period_secs',
        'uv' => 'uv'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'time_epoch' => 'setTimeEpoch',
        'time' => 'setTime',
        'temp_c' => 'setTempC',
        'temp_f' => 'setTempF',
        'is_day' => 'setIsDay',
        'condition' => 'setCondition',
        'wind_mph' => 'setWindMph',
        'wind_kph' => 'setWindKph',
        'wind_degree' => 'setWindDegree',
        'wind_dir' => 'setWindDir',
        'pressure_mb' => 'setPressureMb',
        'pressure_in' => 'setPressureIn',
        'precip_mm' => 'setPrecipMm',
        'precip_in' => 'setPrecipIn',
        'humidity' => 'setHumidity',
        'cloud' => 'setCloud',
        'feelslike_c' => 'setFeelslikeC',
        'feelslike_f' => 'setFeelslikeF',
        'windchill_c' => 'setWindchillC',
        'windchill_f' => 'setWindchillF',
        'heatindex_c' => 'setHeatindexC',
        'heatindex_f' => 'setHeatindexF',
        'dewpoint_c' => 'setDewpointC',
        'dewpoint_f' => 'setDewpointF',
        'will_it_rain' => 'setWillItRain',
        'chance_of_rain' => 'setChanceOfRain',
        'will_it_snow' => 'setWillItSnow',
        'chance_of_snow' => 'setChanceOfSnow',
        'vis_km' => 'setVisKm',
        'vis_miles' => 'setVisMiles',
        'gust_mph' => 'setGustMph',
        'gust_kph' => 'setGustKph',
        'sig_ht_mt' => 'setSigHtMt',
        'swell_ht_mt' => 'setSwellHtMt',
        'swell_ht_ft' => 'setSwellHtFt',
        'swell_dir' => 'setSwellDir',
        'swell_dir_16_point' => 'setSwellDir16Point',
        'swell_period_secs' => 'setSwellPeriodSecs',
        'uv' => 'setUv'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'time_epoch' => 'getTimeEpoch',
        'time' => 'getTime',
        'temp_c' => 'getTempC',
        'temp_f' => 'getTempF',
        'is_day' => 'getIsDay',
        'condition' => 'getCondition',
        'wind_mph' => 'getWindMph',
        'wind_kph' => 'getWindKph',
        'wind_degree' => 'getWindDegree',
        'wind_dir' => 'getWindDir',
        'pressure_mb' => 'getPressureMb',
        'pressure_in' => 'getPressureIn',
        'precip_mm' => 'getPrecipMm',
        'precip_in' => 'getPrecipIn',
        'humidity' => 'getHumidity',
        'cloud' => 'getCloud',
        'feelslike_c' => 'getFeelslikeC',
        'feelslike_f' => 'getFeelslikeF',
        'windchill_c' => 'getWindchillC',
        'windchill_f' => 'getWindchillF',
        'heatindex_c' => 'getHeatindexC',
        'heatindex_f' => 'getHeatindexF',
        'dewpoint_c' => 'getDewpointC',
        'dewpoint_f' => 'getDewpointF',
        'will_it_rain' => 'getWillItRain',
        'chance_of_rain' => 'getChanceOfRain',
        'will_it_snow' => 'getWillItSnow',
        'chance_of_snow' => 'getChanceOfSnow',
        'vis_km' => 'getVisKm',
        'vis_miles' => 'getVisMiles',
        'gust_mph' => 'getGustMph',
        'gust_kph' => 'getGustKph',
        'sig_ht_mt' => 'getSigHtMt',
        'swell_ht_mt' => 'getSwellHtMt',
        'swell_ht_ft' => 'getSwellHtFt',
        'swell_dir' => 'getSwellDir',
        'swell_dir_16_point' => 'getSwellDir16Point',
        'swell_period_secs' => 'getSwellPeriodSecs',
        'uv' => 'getUv'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['time_epoch'] = isset($data['time_epoch']) ? $data['time_epoch'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['temp_c'] = isset($data['temp_c']) ? $data['temp_c'] : null;
        $this->container['temp_f'] = isset($data['temp_f']) ? $data['temp_f'] : null;
        $this->container['is_day'] = isset($data['is_day']) ? $data['is_day'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['wind_mph'] = isset($data['wind_mph']) ? $data['wind_mph'] : null;
        $this->container['wind_kph'] = isset($data['wind_kph']) ? $data['wind_kph'] : null;
        $this->container['wind_degree'] = isset($data['wind_degree']) ? $data['wind_degree'] : null;
        $this->container['wind_dir'] = isset($data['wind_dir']) ? $data['wind_dir'] : null;
        $this->container['pressure_mb'] = isset($data['pressure_mb']) ? $data['pressure_mb'] : null;
        $this->container['pressure_in'] = isset($data['pressure_in']) ? $data['pressure_in'] : null;
        $this->container['precip_mm'] = isset($data['precip_mm']) ? $data['precip_mm'] : null;
        $this->container['precip_in'] = isset($data['precip_in']) ? $data['precip_in'] : null;
        $this->container['humidity'] = isset($data['humidity']) ? $data['humidity'] : null;
        $this->container['cloud'] = isset($data['cloud']) ? $data['cloud'] : null;
        $this->container['feelslike_c'] = isset($data['feelslike_c']) ? $data['feelslike_c'] : null;
        $this->container['feelslike_f'] = isset($data['feelslike_f']) ? $data['feelslike_f'] : null;
        $this->container['windchill_c'] = isset($data['windchill_c']) ? $data['windchill_c'] : null;
        $this->container['windchill_f'] = isset($data['windchill_f']) ? $data['windchill_f'] : null;
        $this->container['heatindex_c'] = isset($data['heatindex_c']) ? $data['heatindex_c'] : null;
        $this->container['heatindex_f'] = isset($data['heatindex_f']) ? $data['heatindex_f'] : null;
        $this->container['dewpoint_c'] = isset($data['dewpoint_c']) ? $data['dewpoint_c'] : null;
        $this->container['dewpoint_f'] = isset($data['dewpoint_f']) ? $data['dewpoint_f'] : null;
        $this->container['will_it_rain'] = isset($data['will_it_rain']) ? $data['will_it_rain'] : null;
        $this->container['chance_of_rain'] = isset($data['chance_of_rain']) ? $data['chance_of_rain'] : null;
        $this->container['will_it_snow'] = isset($data['will_it_snow']) ? $data['will_it_snow'] : null;
        $this->container['chance_of_snow'] = isset($data['chance_of_snow']) ? $data['chance_of_snow'] : null;
        $this->container['vis_km'] = isset($data['vis_km']) ? $data['vis_km'] : null;
        $this->container['vis_miles'] = isset($data['vis_miles']) ? $data['vis_miles'] : null;
        $this->container['gust_mph'] = isset($data['gust_mph']) ? $data['gust_mph'] : null;
        $this->container['gust_kph'] = isset($data['gust_kph']) ? $data['gust_kph'] : null;
        $this->container['sig_ht_mt'] = isset($data['sig_ht_mt']) ? $data['sig_ht_mt'] : null;
        $this->container['swell_ht_mt'] = isset($data['swell_ht_mt']) ? $data['swell_ht_mt'] : null;
        $this->container['swell_ht_ft'] = isset($data['swell_ht_ft']) ? $data['swell_ht_ft'] : null;
        $this->container['swell_dir'] = isset($data['swell_dir']) ? $data['swell_dir'] : null;
        $this->container['swell_dir_16_point'] = isset($data['swell_dir_16_point']) ? $data['swell_dir_16_point'] : null;
        $this->container['swell_period_secs'] = isset($data['swell_period_secs']) ? $data['swell_period_secs'] : null;
        $this->container['uv'] = isset($data['uv']) ? $data['uv'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets time_epoch
     *
     * @return int
     */
    public function getTimeEpoch()
    {
        return $this->container['time_epoch'];
    }

    /**
     * Sets time_epoch
     *
     * @param int $time_epoch time_epoch
     *
     * @return $this
     */
    public function setTimeEpoch($time_epoch)
    {
        $this->container['time_epoch'] = $time_epoch;

        return $this;
    }

    /**
     * Gets time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param string $time time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets temp_c
     *
     * @return float
     */
    public function getTempC()
    {
        return $this->container['temp_c'];
    }

    /**
     * Sets temp_c
     *
     * @param float $temp_c temp_c
     *
     * @return $this
     */
    public function setTempC($temp_c)
    {
        $this->container['temp_c'] = $temp_c;

        return $this;
    }

    /**
     * Gets temp_f
     *
     * @return float
     */
    public function getTempF()
    {
        return $this->container['temp_f'];
    }

    /**
     * Sets temp_f
     *
     * @param float $temp_f temp_f
     *
     * @return $this
     */
    public function setTempF($temp_f)
    {
        $this->container['temp_f'] = $temp_f;

        return $this;
    }

    /**
     * Gets is_day
     *
     * @return int
     */
    public function getIsDay()
    {
        return $this->container['is_day'];
    }

    /**
     * Sets is_day
     *
     * @param int $is_day is_day
     *
     * @return $this
     */
    public function setIsDay($is_day)
    {
        $this->container['is_day'] = $is_day;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return \Swagger\Client\Model\ForecastCondition
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \Swagger\Client\Model\ForecastCondition $condition condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets wind_mph
     *
     * @return float
     */
    public function getWindMph()
    {
        return $this->container['wind_mph'];
    }

    /**
     * Sets wind_mph
     *
     * @param float $wind_mph wind_mph
     *
     * @return $this
     */
    public function setWindMph($wind_mph)
    {
        $this->container['wind_mph'] = $wind_mph;

        return $this;
    }

    /**
     * Gets wind_kph
     *
     * @return float
     */
    public function getWindKph()
    {
        return $this->container['wind_kph'];
    }

    /**
     * Sets wind_kph
     *
     * @param float $wind_kph wind_kph
     *
     * @return $this
     */
    public function setWindKph($wind_kph)
    {
        $this->container['wind_kph'] = $wind_kph;

        return $this;
    }

    /**
     * Gets wind_degree
     *
     * @return float
     */
    public function getWindDegree()
    {
        return $this->container['wind_degree'];
    }

    /**
     * Sets wind_degree
     *
     * @param float $wind_degree wind_degree
     *
     * @return $this
     */
    public function setWindDegree($wind_degree)
    {
        $this->container['wind_degree'] = $wind_degree;

        return $this;
    }

    /**
     * Gets wind_dir
     *
     * @return string
     */
    public function getWindDir()
    {
        return $this->container['wind_dir'];
    }

    /**
     * Sets wind_dir
     *
     * @param string $wind_dir wind_dir
     *
     * @return $this
     */
    public function setWindDir($wind_dir)
    {
        $this->container['wind_dir'] = $wind_dir;

        return $this;
    }

    /**
     * Gets pressure_mb
     *
     * @return float
     */
    public function getPressureMb()
    {
        return $this->container['pressure_mb'];
    }

    /**
     * Sets pressure_mb
     *
     * @param float $pressure_mb pressure_mb
     *
     * @return $this
     */
    public function setPressureMb($pressure_mb)
    {
        $this->container['pressure_mb'] = $pressure_mb;

        return $this;
    }

    /**
     * Gets pressure_in
     *
     * @return float
     */
    public function getPressureIn()
    {
        return $this->container['pressure_in'];
    }

    /**
     * Sets pressure_in
     *
     * @param float $pressure_in pressure_in
     *
     * @return $this
     */
    public function setPressureIn($pressure_in)
    {
        $this->container['pressure_in'] = $pressure_in;

        return $this;
    }

    /**
     * Gets precip_mm
     *
     * @return float
     */
    public function getPrecipMm()
    {
        return $this->container['precip_mm'];
    }

    /**
     * Sets precip_mm
     *
     * @param float $precip_mm precip_mm
     *
     * @return $this
     */
    public function setPrecipMm($precip_mm)
    {
        $this->container['precip_mm'] = $precip_mm;

        return $this;
    }

    /**
     * Gets precip_in
     *
     * @return float
     */
    public function getPrecipIn()
    {
        return $this->container['precip_in'];
    }

    /**
     * Sets precip_in
     *
     * @param float $precip_in precip_in
     *
     * @return $this
     */
    public function setPrecipIn($precip_in)
    {
        $this->container['precip_in'] = $precip_in;

        return $this;
    }

    /**
     * Gets humidity
     *
     * @return float
     */
    public function getHumidity()
    {
        return $this->container['humidity'];
    }

    /**
     * Sets humidity
     *
     * @param float $humidity humidity
     *
     * @return $this
     */
    public function setHumidity($humidity)
    {
        $this->container['humidity'] = $humidity;

        return $this;
    }

    /**
     * Gets cloud
     *
     * @return float
     */
    public function getCloud()
    {
        return $this->container['cloud'];
    }

    /**
     * Sets cloud
     *
     * @param float $cloud cloud
     *
     * @return $this
     */
    public function setCloud($cloud)
    {
        $this->container['cloud'] = $cloud;

        return $this;
    }

    /**
     * Gets feelslike_c
     *
     * @return float
     */
    public function getFeelslikeC()
    {
        return $this->container['feelslike_c'];
    }

    /**
     * Sets feelslike_c
     *
     * @param float $feelslike_c feelslike_c
     *
     * @return $this
     */
    public function setFeelslikeC($feelslike_c)
    {
        $this->container['feelslike_c'] = $feelslike_c;

        return $this;
    }

    /**
     * Gets feelslike_f
     *
     * @return float
     */
    public function getFeelslikeF()
    {
        return $this->container['feelslike_f'];
    }

    /**
     * Sets feelslike_f
     *
     * @param float $feelslike_f feelslike_f
     *
     * @return $this
     */
    public function setFeelslikeF($feelslike_f)
    {
        $this->container['feelslike_f'] = $feelslike_f;

        return $this;
    }

    /**
     * Gets windchill_c
     *
     * @return float
     */
    public function getWindchillC()
    {
        return $this->container['windchill_c'];
    }

    /**
     * Sets windchill_c
     *
     * @param float $windchill_c windchill_c
     *
     * @return $this
     */
    public function setWindchillC($windchill_c)
    {
        $this->container['windchill_c'] = $windchill_c;

        return $this;
    }

    /**
     * Gets windchill_f
     *
     * @return float
     */
    public function getWindchillF()
    {
        return $this->container['windchill_f'];
    }

    /**
     * Sets windchill_f
     *
     * @param float $windchill_f windchill_f
     *
     * @return $this
     */
    public function setWindchillF($windchill_f)
    {
        $this->container['windchill_f'] = $windchill_f;

        return $this;
    }

    /**
     * Gets heatindex_c
     *
     * @return float
     */
    public function getHeatindexC()
    {
        return $this->container['heatindex_c'];
    }

    /**
     * Sets heatindex_c
     *
     * @param float $heatindex_c heatindex_c
     *
     * @return $this
     */
    public function setHeatindexC($heatindex_c)
    {
        $this->container['heatindex_c'] = $heatindex_c;

        return $this;
    }

    /**
     * Gets heatindex_f
     *
     * @return float
     */
    public function getHeatindexF()
    {
        return $this->container['heatindex_f'];
    }

    /**
     * Sets heatindex_f
     *
     * @param float $heatindex_f heatindex_f
     *
     * @return $this
     */
    public function setHeatindexF($heatindex_f)
    {
        $this->container['heatindex_f'] = $heatindex_f;

        return $this;
    }

    /**
     * Gets dewpoint_c
     *
     * @return float
     */
    public function getDewpointC()
    {
        return $this->container['dewpoint_c'];
    }

    /**
     * Sets dewpoint_c
     *
     * @param float $dewpoint_c dewpoint_c
     *
     * @return $this
     */
    public function setDewpointC($dewpoint_c)
    {
        $this->container['dewpoint_c'] = $dewpoint_c;

        return $this;
    }

    /**
     * Gets dewpoint_f
     *
     * @return float
     */
    public function getDewpointF()
    {
        return $this->container['dewpoint_f'];
    }

    /**
     * Sets dewpoint_f
     *
     * @param float $dewpoint_f dewpoint_f
     *
     * @return $this
     */
    public function setDewpointF($dewpoint_f)
    {
        $this->container['dewpoint_f'] = $dewpoint_f;

        return $this;
    }

    /**
     * Gets will_it_rain
     *
     * @return int
     */
    public function getWillItRain()
    {
        return $this->container['will_it_rain'];
    }

    /**
     * Sets will_it_rain
     *
     * @param int $will_it_rain will_it_rain
     *
     * @return $this
     */
    public function setWillItRain($will_it_rain)
    {
        $this->container['will_it_rain'] = $will_it_rain;

        return $this;
    }

    /**
     * Gets chance_of_rain
     *
     * @return float
     */
    public function getChanceOfRain()
    {
        return $this->container['chance_of_rain'];
    }

    /**
     * Sets chance_of_rain
     *
     * @param float $chance_of_rain chance_of_rain
     *
     * @return $this
     */
    public function setChanceOfRain($chance_of_rain)
    {
        $this->container['chance_of_rain'] = $chance_of_rain;

        return $this;
    }

    /**
     * Gets will_it_snow
     *
     * @return int
     */
    public function getWillItSnow()
    {
        return $this->container['will_it_snow'];
    }

    /**
     * Sets will_it_snow
     *
     * @param int $will_it_snow will_it_snow
     *
     * @return $this
     */
    public function setWillItSnow($will_it_snow)
    {
        $this->container['will_it_snow'] = $will_it_snow;

        return $this;
    }

    /**
     * Gets chance_of_snow
     *
     * @return float
     */
    public function getChanceOfSnow()
    {
        return $this->container['chance_of_snow'];
    }

    /**
     * Sets chance_of_snow
     *
     * @param float $chance_of_snow chance_of_snow
     *
     * @return $this
     */
    public function setChanceOfSnow($chance_of_snow)
    {
        $this->container['chance_of_snow'] = $chance_of_snow;

        return $this;
    }

    /**
     * Gets vis_km
     *
     * @return float
     */
    public function getVisKm()
    {
        return $this->container['vis_km'];
    }

    /**
     * Sets vis_km
     *
     * @param float $vis_km vis_km
     *
     * @return $this
     */
    public function setVisKm($vis_km)
    {
        $this->container['vis_km'] = $vis_km;

        return $this;
    }

    /**
     * Gets vis_miles
     *
     * @return float
     */
    public function getVisMiles()
    {
        return $this->container['vis_miles'];
    }

    /**
     * Sets vis_miles
     *
     * @param float $vis_miles vis_miles
     *
     * @return $this
     */
    public function setVisMiles($vis_miles)
    {
        $this->container['vis_miles'] = $vis_miles;

        return $this;
    }

    /**
     * Gets gust_mph
     *
     * @return float
     */
    public function getGustMph()
    {
        return $this->container['gust_mph'];
    }

    /**
     * Sets gust_mph
     *
     * @param float $gust_mph gust_mph
     *
     * @return $this
     */
    public function setGustMph($gust_mph)
    {
        $this->container['gust_mph'] = $gust_mph;

        return $this;
    }

    /**
     * Gets gust_kph
     *
     * @return float
     */
    public function getGustKph()
    {
        return $this->container['gust_kph'];
    }

    /**
     * Sets gust_kph
     *
     * @param float $gust_kph gust_kph
     *
     * @return $this
     */
    public function setGustKph($gust_kph)
    {
        $this->container['gust_kph'] = $gust_kph;

        return $this;
    }

    /**
     * Gets sig_ht_mt
     *
     * @return float
     */
    public function getSigHtMt()
    {
        return $this->container['sig_ht_mt'];
    }

    /**
     * Sets sig_ht_mt
     *
     * @param float $sig_ht_mt sig_ht_mt
     *
     * @return $this
     */
    public function setSigHtMt($sig_ht_mt)
    {
        $this->container['sig_ht_mt'] = $sig_ht_mt;

        return $this;
    }

    /**
     * Gets swell_ht_mt
     *
     * @return float
     */
    public function getSwellHtMt()
    {
        return $this->container['swell_ht_mt'];
    }

    /**
     * Sets swell_ht_mt
     *
     * @param float $swell_ht_mt swell_ht_mt
     *
     * @return $this
     */
    public function setSwellHtMt($swell_ht_mt)
    {
        $this->container['swell_ht_mt'] = $swell_ht_mt;

        return $this;
    }

    /**
     * Gets swell_ht_ft
     *
     * @return float
     */
    public function getSwellHtFt()
    {
        return $this->container['swell_ht_ft'];
    }

    /**
     * Sets swell_ht_ft
     *
     * @param float $swell_ht_ft swell_ht_ft
     *
     * @return $this
     */
    public function setSwellHtFt($swell_ht_ft)
    {
        $this->container['swell_ht_ft'] = $swell_ht_ft;

        return $this;
    }

    /**
     * Gets swell_dir
     *
     * @return float
     */
    public function getSwellDir()
    {
        return $this->container['swell_dir'];
    }

    /**
     * Sets swell_dir
     *
     * @param float $swell_dir swell_dir
     *
     * @return $this
     */
    public function setSwellDir($swell_dir)
    {
        $this->container['swell_dir'] = $swell_dir;

        return $this;
    }

    /**
     * Gets swell_dir_16_point
     *
     * @return float
     */
    public function getSwellDir16Point()
    {
        return $this->container['swell_dir_16_point'];
    }

    /**
     * Sets swell_dir_16_point
     *
     * @param float $swell_dir_16_point swell_dir_16_point
     *
     * @return $this
     */
    public function setSwellDir16Point($swell_dir_16_point)
    {
        $this->container['swell_dir_16_point'] = $swell_dir_16_point;

        return $this;
    }

    /**
     * Gets swell_period_secs
     *
     * @return float
     */
    public function getSwellPeriodSecs()
    {
        return $this->container['swell_period_secs'];
    }

    /**
     * Sets swell_period_secs
     *
     * @param float $swell_period_secs swell_period_secs
     *
     * @return $this
     */
    public function setSwellPeriodSecs($swell_period_secs)
    {
        $this->container['swell_period_secs'] = $swell_period_secs;

        return $this;
    }

    /**
     * Gets uv
     *
     * @return int
     */
    public function getUv()
    {
        return $this->container['uv'];
    }

    /**
     * Sets uv
     *
     * @param int $uv uv
     *
     * @return $this
     */
    public function setUv($uv)
    {
        $this->container['uv'] = $uv;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

