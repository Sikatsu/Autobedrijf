<?php

/**
 * This class is responsible for our API call and returns vehicle data from open rdw
 * @see       http://www.tussendoor.nl
 * @since      2.0.0
 */
class open_rdw_kenteken_api
{
    /**
     * The unique identifier of this plugin.
     *
     * @since    2.0.0
     * @var string $url    The url string used to make calls to open rdw.
     */
    protected $url;

    /**
     * Constructor of our class
     *
     * @since    2.0.0
     * @param string $url A string containing our API link.
     */
    public function __construct($url = '')
    {
        $this->url = ($url != '') ? $url : 'https://opendata.rdw.nl/resource/m9d7-ebf2.json';
    }

    /**
     * function that builds our call and returns the response.
     *
     * @since     2.0.0
     * @param  string $kenteken A string containing our license plate.
     * @return array  An array containing our vehicle information.
     */
    public function get_info($kenteken = 0)
    {
        
        // Clean our input
        $kenteken = $this->clean_license($kenteken);

        // Call our request and see if we get a response
        $response = $this->call($this->url . '?kenteken=' . $kenteken);
        
        // See if there are any "side calls to make"
        $sidecalls = preg_grep('/https:\/\/opendata.rdw.nl\/resource\/(\w+)/', $response);
        if (!empty($sidecalls)) {
            foreach ($sidecalls as $key => $value) {
                $sidecall = $this->call($value . '?kenteken=' . $kenteken);
                $response = array_merge($response, $sidecall);
                // Unset the API link, we don't need that crap in our response
                unset($response[$key]);
            }
        }

        if (!empty($response)) {
            return $response;
        } else {
            return null;
        }
    }

    /**
     * Returns our cleaned license plate.
     * Is public so we can also only clean the license.
     *
     * @since     2.0.0
     * @param  string $license A string containing the filled in license.
     * @return string Returns a cleaned license string.
     */
    public function clean_license($license)
    {
        return strtoupper(preg_replace('/[^A-Za-z0-9]/', '', $license));
    }

    /**
     * The code that initializes and configures our curl call
     * executes the curl and decodes the json string for use.
     *
     * @since    2.0.0
     * @param  string $request Our url request
     * @return array  Our vehicle data (if there is any)
     */
    private function call($request = '')
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $request,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_AUTOREFERER => true,
            CURLOPT_MAXREDIRS => 10,
        ]);

        $response = json_decode(curl_exec($curl), true);

        // Check for errors
        if (curl_error($curl)) {
            $response = curl_error($curl);
        }
        curl_close($curl);

        // If we have errors set that as response
        if (isset($response[0])) {
            $response = $response[0];
        }

        return $response;
    }
}
