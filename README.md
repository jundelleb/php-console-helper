# PHP Console Helpers
A simple command-line helper functions built for developers. This package uses the following libraries:

* fzaninotto's [Faker](https://github.com/fzaninotto/Faker)

Getting Setup
------------
1. `git clone https://github.com/jundelleb/php-console-helper.git php-console-helper`

2. Add to `PATH` enviroment variables to access it globally.
3. Make it executable for unix based systems `chmod +x pch`.

Helpers
------------
* `Faker` (faker)
* `Converter`(convert)

Basic Usage
------------
 ###### 1. Generate random name: `./pch faker name`
 Output: `Isom Medhurst`
 
 ###### 2. Generate a sentence with 10 words: `./pch faker sentence --params=10`
 Output: `Aut qui et eum itaque voluptatibus qui rem sit blanditiis.`
 
 Please visit [Faker](https://github.com/fzaninotto/Faker) for complete lists of available formatters.
 
 ###### 3. Convert input string to md5: `./pch convert:md5 test`
 Output: `098f6bcd4621d373cade4e832627b4f6`
 
 ###### 4. Convert input string to base64 encoded: `./pch convert:base64 test`
 Output: `dGVzdA==`
 
 ###### 5. Decode base64 encoded string: `./pch convert:base64 dGVzdA== --decode`
 Output: `test`


Enjoy! :)