<?php

APIRoute::version('v1', ['namespace' => 'Vinfo\Http\Controllers\Api', 'prefix' => 'api/admin'], function () {

    APIRoute::post('geometries/related/search', 'GeometriesController@searchGeometried');
    
});

APIRoute::version('v1', ['namespace' => 'Vinfo\Http\Controllers\Api', 'prefix' => 'api/admin'], function () {

    APIRoute::post('regions/tree/search/{exclude?}', 'RegionsController@searchRegions');
    
});


APIRoute::version('v1', ['namespace' => 'Vinfo\Http\Controllers\Api'], function () {
    
});