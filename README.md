# Magento 2 Image Clean

The module allow clean unused product images on magento 2 site

## How to installation

1. Setup module via FTP and run magento 2 commands:

The extension include 2 module: Lof_All, Lof_ImageClean

- Connect your server with FTP client (example: FileZilla).
- Upload module files in the module packages in to folder: app/code/Lof/ImageClean , app/code/Lof/All
- Access SSH terminal, then run commands:

```
php bin/magento setup:upgrade --keep-generated
php bin/magento setup:static-content:deploy -f
php bin/magento cache:clean
```

- To manage subscribers. Go to admin > ImageClean > Clean Unuse Images
- Support console command:
```
php bin/mageno lof:imageclean:clean
```