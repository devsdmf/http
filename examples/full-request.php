<?php

/**
 * Slice Framework (http://sliceframework.com)
 * Copyright (C) 2013 devSDMF Software Development Inc.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 */

/**
 * Slice Framework - Example File
 *
 * Performing a full POST request
 */

use Slice\Http\Client;

# Initializing Client
$client = new Client();

# Set method
$client->setMethod($client::POST);

# Set URI
$client->setUri('http://localhost/ws/');

# Set GET parameters
$client->setParameterGet('fooGet','barGet');

# Set POST parameters
$client->setParameterPost(array(
	'var1'=>'value1',
	'var2'=>'value2',
));

# Set headers
$client->setHeaders('foo','bar');

# Set HTTP version
$client->setHTTPVersion($client::HTTP_0);

# Performing request
$response = $client->request();