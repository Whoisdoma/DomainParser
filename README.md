Whoisdoma Domain Parser
=====================

A domain name parser to parse and to validate a domain name.

At first it will parse a given string to split it by the hostname and top-level domain name.
This will be done with a list from Mozilla and we also added some missing second-level domain
names. Afterwards we will convert the domain name to it punycode and unicode notation. If an
error occures by doing so, e.g. characters that are not allowed. It will kill these characters
and set a flag to false. This flag is used for the validation.

Copyright (c) 2016 XAOS Interactive (http://xaosia.com) | Whoisdoma (http://whoisdoma.com)
Licensed under the MIT License (the "License").

Installation
------------
Installing using composer: `composer require Whoisdoma/DomainParser`

Installing from source: `git clone git://github.com/Whoisdoma/DomainParser.git` or [download the latest release](https://github.com/Whoisdoma/DomainParser/zipball/master)

Move the source code to your preferred project folder.

Usage
-----
* Include Parser.php
```
require_once 'DomainParser/Parser.php';
```

* Create Parser() object
```
$Parser = new Whoisdoma\DomainParser\Parser();
```

* Call parse() method
```
$result = $Parser->parse($string);
```

* Please note, if the given string doesn't contain a domain name the default tld
.com will be added to the query. You may change this by adding a tld to the parse
method call.
```
$result = $Parser->parse($string, $yourPreferredDefaultTld);
```

* You may choose 5 different return types. the types are array, object, json, serialize and
xml. By default it is object. If you want to change that call the format method before calling
the parse method or provide to the constructer. If you are not using object and an
error occurs, then exceptions will not be trapped within the response and thrown directy.
```
$Parser->setFormat('json');
$Parser = new Whoisdoma\DomainParser\Parser('json');
```

3rd Party Libraries
-------------------
Thanks to developers of following used libraries:
* phlyLabs: http://phlylabs.de
* mozilla: http://www.mozilla.org 

ChangeLog
---------
See ChangeLog at https://github.com/Whoisdoma/DomainParser/blob/master/CHANGELOG.md

Issues
------
Please report any issues via https://github.com/Whoisdoma/DomainParser/issues

LICENSE and COPYRIGHT
---------------------
Copyright (c) 2016 XAOS Interactive (http://xaosia.com) | Whoisdoma (http://whoisdoma.com)

License: https://github.com/Whoisdoma/DomainParser/blob/master/LICENSE
