# Text Helper

Small PHP helper library for working with text.

## Installation

```bash
composer require lobochkin/text-helper
```

## Usage

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Lobochkin\TextHelper\TextHelper;

echo TextHelper::slug('Hello World');
```

Result:

```
hello-world
```
