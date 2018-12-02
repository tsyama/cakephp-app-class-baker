# AppClassBaker plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require tsyama/cakephp-app-class-baker --dev
```

## Usage

### 1. Add to config/bootstrap.php

```php
Plugin::load('AppClassBaker', ['bootstrap' => false, 'routes' => true]);
Configure::write('Bake.theme', 'AppClassBaker');
```

### 2. Run bake command to create AppEntity/AppTable file

```
bin/cake bake app_model
```

### 3. Run bake command to create Entity/Table file (As usual!)

```
bin/cake bake model articles
```