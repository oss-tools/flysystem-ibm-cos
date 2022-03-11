# Flysystem Adapter for IBM Cloud Object Storage

This is an [IBM Cloud Object Storage](https://www.ibm.com/cloud/object-storage) adapter for [Flysystem](http://flysystem.thephpleague.com/).


## Note
This package is a detached fork of [tavux/flysystem-ibm-cos](https://github.com/tavux/flysystem-ibm-cos)

## Installation

Composer is the best way, as with all of Flysystem!

```bash
composer require oss-tools/flysystem-ibm-cos
```

## Usage

Initial setup would be something like this:

```php
use OSSTools\Flysystem\IBMCloudObjectStorage\IbmCosAdapter;
use League\Flysystem\Filesystem;

$storage = new Filesystem(
    new IbmCosAdapter([
        'key' => '<access_key>',
        'secret' => '<access_secret_key>',
        'region' => '<region>',
        'endpoint' => '<endpoint>',
    ], '<bucket>')
);

var_dump($storage->listContents(''));
```




