<?php

class OW_API {

    private const BASE_URL = 'https://api.openweathermap.org/data/2.5';

    private const CACHE_KEY = 'o_weather_db_info_';

    public function __construct( private $api_key, private $city_name ) {
    }

    public function get_city_weather() {
        if ( !$result = $this->get_from_cache( __METHOD__ ) ) {
            $result = $this->request( 'weather', [] );
            $this->save_to_cache( __METHOD__, $result, 300 );
        }

        return $result;
    }

    private function get_from_cache( string $key ) {
        return get_transient( self::CACHE_KEY . $key );
    }

    private function save_to_cache( string $key, $value, int $expiration ): bool {
        return set_transient( self::CACHE_KEY . $key, $value, $expiration );
    }

    public function request( string $slug, array $params = [] ) {
        $params = array_merge( ['q' => $this->city_name], [ 'appid' => $this->api_key ], $params );

        $response = wp_remote_get( $this->build_url( $slug ), [ 'body' => $params ] );

        return json_decode( $response['body'] );
    }

    private function build_url( string $slug ): string {
        return self::BASE_URL . "/{$slug}";
    }
}