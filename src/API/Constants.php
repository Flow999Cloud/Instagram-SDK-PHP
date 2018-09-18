<?php

namespace Instagram\API;

class Constants {

    /*
	 * API Base URL.
	 */
    const BASE_URL = "https://i.instagram.com/api";

    /*
     * User Agent for API Requests
     */
    const USER_AGENT = "Instagram 9.2.0 Android (23/6.0.1; 640dpi; 1440x2560; samsung; SM-G935F; hero2lte; samsungexynos8890; en_NZ)";

    /*
	 * Key used to generate JSON Signatures
	 */
    const IG_SIGNATURE_KEY = "012a54f51c49aa8c5c322416ab1410909add32c966bbaa0fe3dc58ac43fd7ede";

    /*
     * Version of the Signature Key
     */
    const IG_SIGNATURE_KEY_VERSION = "4";

    /*
     * Connection Type
     */
    const IG_CAPABILITIES = "3Q==";

    /*
     * Installed Apps
     * Value: { "1": 0, "2": 0 }
     */
    const IG_INSTALLED_APPS = "eyIxIjowLCIyIjowfQ==";

    /*
     * Connection Type
     */
    const IG_CONNECTION_TYPE = "WIFI";

    /*
     * Connection Type
     */
    const ACCEPT_LANGUAGE = "en-NZ";

    /*
     * Connection Type
     */
    const ACCEPT_ENCODING = "gzip, deflate, sdch";

    /*
     * Your Timezone
     */
    const TIMEZONE = "Pacific/Auckland";

    /*
     * Your Timezone Offset
     */
    const TIMEZONE_OFFSET = 43200;

}