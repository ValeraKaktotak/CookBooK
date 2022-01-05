<?php

$weatherAPI = new OW_API( get_field( 'weather_api_key', 'option' ), get_field( 'city_api', 'option' ) );
$cityWeather   = $weatherAPI->get_city_weather();
$city = get_field( 'city_api', 'option' );
?>

<div class="container">
    <h1><?php echo __( 'Текущаа погода в ', DISHES_DB_TEXT_DOMAIN ) .  $cityWeather->name; ?></h1>
    <h1><?php echo $cityWeather->main->temp - 273 . ' °C'; ?></h1>
</div>