<?php

$dbCredentials = include __DIR__.'/db_credentials.php';
return [
    'displayErrorDetails' => true,
    'logErrorDetails' => true,
    'logErrors' => true,
	'db' => $dbCredentials
];