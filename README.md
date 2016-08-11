# POGOEncrypt-PHP
Pure PHP implementation of Pokemon Go encrypt.c

# Installation
This repository can be installed via composer:
``` bash
composer require pogo-php/pogoencrypt-php
```

# Usage
The following method can be used to perform uk6 encryption:
``` php
POGOEncrypt\Encrypt::encrypt($input, $iv)
```

# Tests
To check if the output is as expected, you can run
``` bash
php tests.php
```