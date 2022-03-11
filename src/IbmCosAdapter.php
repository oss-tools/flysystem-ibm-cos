<?php

namespace OSSTools\Flysystem\IBMCloudObjectStorage;

use Aws\S3\S3Client;
use League\Flysystem\AwsS3V3\AwsS3V3Adapter;

/**
 * Class IbmCosFilesystem
 * @package Tavux\Flysytem\IBMCloudObjectStorage
 *
 */
class IbmCosAdapter extends AwsS3V3Adapter{

    /**
     * IbmCosAdapter constructor.
     * @param array $params
     * - key
     * - secret
     * - region
     * - version (optional)
     * - endpoint
     * @param string $bucket
     */
    public function __construct(array $params, string $bucket)
    {
        $client = S3Client::factory([
            'region' => $params['region'],
            'credentials' => [
                'key' => $params['key'],
                'secret' => $params['secret'],
            ],
            'version' => $params['version'] ?? 'latest',
            'endpoint' => $params['endpoint'],
        ]);

        parent::__construct($client, $bucket);
    }

}
