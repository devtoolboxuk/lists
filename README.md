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
- [Acknowledgements & Recognition](#Acknowledgements and Recognition)
- [Maintainers](#Maintainers)
- [License](#License)

## Background

Returns usesful lists such as Bad Bots, or possible Tor Exit Nodes

## Lists

[![BadBots](https://img.shields.io/badge/Bad%20Bots-536-Red.svg?style=plastic)](https://github.com/devtoolboxuk/lists/tree/master/src/Resources/BadBots.txt)

[![TorExitNodes](https://img.shields.io/badge/Tor%20Exit%20Nodes-1282-Blue.svg?style=plastic)](https://github.com/devtoolboxuk/lists/tree/master/src/Resources/TorExitNodes.txt)

[![Throw Away Domains](https://img.shields.io/badge/Throw%20Away%20Domains-2360-Blue.svg?style=plastic)](https://github.com/devtoolboxuk/lists/tree/master/src/Resources/ThrowAwayDomains.txt)


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



## List of some disposable emails database

- http://10minutemail.com
- http://spamdecoy.net
- http://temp-mail.org
- http://torvpn.com/temporaryemail.html
- http://www.bloggingwv.com/big-list-of-disposable-temporary-email-services/
- http://www.fakemailgenerator.com/
- http://www.warriorforum.com/main-internet-marketing-discussion-forum/147524-list-temporary-email-services-you-may-want-block-your-autoresponder-little-rant.html
- http://xenforo.com/community/threads/ban-temporary-email-addresses.5461/

## Acknowledgements and Recognition
- [@Dan](https://www.dan.me.uk/torlist/?exit) - Have ported over the list of possible tor exit nodes
- [@MattKetmo](https://github.com/MattKetmo) - Have ported over the throw away domain list


## Maintainers

[@DevToolboxUk](https://github.com/DevToolBoxUk).


## License

[MIT](LICENSE) © DevToolboxUK