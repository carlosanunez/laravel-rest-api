<?php

Route::any('api/templates/(:num?)', array(
    'as' => 'api.templates',
    'uses' => 'api::templates@index',
));