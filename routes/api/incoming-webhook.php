<?php

/*
 * This file is part of Piplin.
 *
 * Copyright (C) 2016-2017 piplin.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

Route::post('deploy/{hash}', [
    'as'   => 'webhook.deploy',
    'uses' => 'Api\IncomingWebhookController@deploy',
]);

Route::post('build/{hash}', [
    'as'   => 'webhook.build',
    'uses' => 'Api\IncomingWebhookController@build',
]);
