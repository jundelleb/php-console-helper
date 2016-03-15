# PHP Console Helpers
[![Latest Stable Version](https://poser.pugx.org/jundelleb/php-console-helper/v/stable)](https://packagist.org/packages/jundelleb/php-console-helper) [![Total Downloads](https://poser.pugx.org/jundelleb/php-console-helper/downloads)](https://packagist.org/packages/jundelleb/php-console-helper) [![Latest Unstable Version](https://poser.pugx.org/jundelleb/php-console-helper/v/unstable)](https://packagist.org/packages/jundelleb/php-console-helper) [![License](https://poser.pugx.org/jundelleb/php-console-helper/license)](https://packagist.org/packages/jundelleb/php-console-helper)

A simple command-line helper functions built for developers. This package uses the following libraries:

* fzaninotto's [Faker](https://github.com/fzaninotto/Faker)

Getting Setup
------------
1. `composer global require jundelleb/php-console-helper`
2. Make sure to dd to `PATH` enviroment variables to access it globally.

Helpers
------------
* `Faker` (faker)
* `Converter`(convert)

Basic Usage
------------
1. Generate random name: `./pch faker name`

        Output: Isom Medhurst
 
2. Generate a sentence with 10 words: `./pch faker sentence --params=10`

        Output: Aut qui et eum itaque voluptatibus qui rem sit blanditiis.
 
 Please visit [Faker](https://github.com/fzaninotto/Faker) for complete lists of available formatters.
 
3. Convert input string to md5: `./pch convert:md5 test`

        Output: 098f6bcd4621d373cade4e832627b4f6
 
4. Convert input string to base64 encoded: `./pch convert:base64 test`

        Output: dGVzdA==
 
5. Decode base64 encoded string: `./pch convert:base64 dGVzdA== --decode`

        Output: test


Enjoy! :)