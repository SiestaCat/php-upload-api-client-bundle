# PHP upload api client bundle

Symfony bundle for https://github.com/SiestaCat/php-upload-api-client library

Install:

```
composer require siestacat/upload-api-client-bundle
```

Usage:

```
use Siestacat\PhpUploadApiClient\Client;

$upload_token = $client->request();

//<<Here the client upload the files from browser>>

//Get the uploaded files:

// Siestacat\PhpUploadApiClient\File[]
$files = $client->getFiles($upload_token);

//Download single file. Get the tmp path of downloaded file:

$downloaded_file = $client->download($upload_token, $file[0]->hash);

```


Tests:

```
git clone https://github.com/SiestaCat/php-upload-api-client-bundle.git
cd php-upload-api-client-bundle
composer install
composer run-script test
```
