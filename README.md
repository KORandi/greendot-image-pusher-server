Installation
============

Make sure Composer is installed globally, as explained in the
[installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require greendot/image-pusher-server
```

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    Greendot\ImagePusher\ImagePusherServerBundle::class => ['all' => true],
];
```

### Step 3: Create configuration file

Create configuration file in `config/packages/image-puller-client.yaml`

```yaml
image_puller_client:
  jwt_user: <USER ID>
  jwt_pass: <SECRET>
```

Request format:
-----

Send picture as `form-data` with set `jwt-token` in header.