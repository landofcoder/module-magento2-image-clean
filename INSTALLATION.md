## How to installation

1. Setup module via composer (recommend):

Please run commands:

```
composer require landofcoder/module-image-clean
```

Then run commands:

```
php bin/magento setup:upgrade --keep-generated
php bin/magento setup:static-content:deploy -f
php bin/magento cache:clean
```
2. Setup module via FTP and run magento 2 commands:

The extension include 2 module: Lof_All, Lof_ImageClean

- Connect your server with FTP client (example: FileZilla).
- Upload module files in the module packages in to folder: app/code/Lof/ImageClean , app/code/Lof/All
- Access SSH terminal, then run commands:

```
php bin/magento setup:upgrade --keep-generated
php bin/magento setup:static-content:deploy -f
php bin/magento cache:clean
```

3. How to use

- To manage subscribers. Go to admin > ImageClean > Clean Unuse Images
- Support console command:
```
php bin/magento lof:imageclean:clean
```