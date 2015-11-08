<?php
require 'vendor/autoload.php';

$sharedConfig = [
    'region'  => 'us-west-2',
    'version' => 'latest',
    'profile' => 'default'
];

$sdk = new Aws\Sdk($sharedConfig);

$s3client = $sdk->createS3();

$result = $s3client->putObject([
    'Bucket' => 'bucket-teste-1093591249021201',
    'Key'    => 'huehuehue',
    'Body'   => 'this is the body!'
]);

?>