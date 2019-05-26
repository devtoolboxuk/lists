# Lists

[![Build Status](https://api.travis-ci.org/devtoolboxuk/lists.svg?branch=master)](https://travis-ci.org/devtoolboxuk/lists)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/devtoolboxuk/lists/master.svg?style=plastic)](https://scrutinizer-ci.com/g/devtoolboxuk/lists/?branch=master)
[![Coveralls](https://coveralls.io/repos/github/devtoolboxuk/lists/badge.svg?branch=master)](https://coveralls.io/github/devtoolboxuk/lists?branch=master)
[![CodeCov](https://img.shields.io/codecov/c/github/devtoolboxuk/lists.svg?style=plastic)](https://codecov.io/gh/devtoolboxuk/lists)

[![Latest Stable Version](https://img.shields.io/packagist/v/devtoolboxuk/lists.svg?style=plastic)](https://packagist.org/packages/devtoolboxuk/lists)
[![Total Downloads](https://img.shields.io/packagist/dt/devtoolboxuk/lists.svg?style=plastic)](https://packagist.org/packages/devtoolboxuk/lists)
[![License](https://img.shields.io/packagist/l/devtoolboxuk/lists.svg?style=plastic)](https://packagist.org/packages/devtoolboxuk/lists)

[![Maintained](https://img.shields.io/maintenance/yes/2019.svg?style=plastic)](https://github.com/DevToolBoxUk)
[![Last Updated](https://img.shields.io/badge/Updated-26%2F05%2F2019-brightgreen.svg?style=plastic)](https://github.com/DevToolBoxUk)


## Table of Contents

- [Background](#Background)
- [Usage](#Usage)
- [Help Support This Project](#Help Support This Project)

- [Maintainers](#Maintainers)
- [License](#License)

## Background

Returns usesful lists such as Bad Bots, or possible Tor Exit Nodes

## Usage

```sh
$ composer require devtoolboxuk/lists
```

Then include Composer's generated vendor/autoload.php to enable autoloading:

```php
require 'vendor/autoload.php';
```

```php
use devtoolboxuk\lists;

$this->listService = new ListService();
```

#### Get Bad Bots
```php
$this->listService->getArray('Bad Bots');
$this->listService->getJson('Bad Bots');
```

## Help Support This Project

[![Help Support This Project](https://github.com/devtoolboxuk/lists/tree/master/src/assets/buy-me-a-coffee-button.png)](https://Ko-fi.com/devtoolboxuk )


## Maintainers

[@DevToolboxUk](https://github.com/DevToolBoxUk).


## License

[MIT](LICENSE) © DevToolboxUK