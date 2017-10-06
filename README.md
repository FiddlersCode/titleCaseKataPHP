# Title Case Kata
by Paula Muldoon 

### About
This kata is taken from [CodeWars](http://www.codewars.com/kata/5202ef17a402dd033c000009/train/haskell). I modified the instructions considerably in order to clarify the requirements.

### The Brief
Write a function that converts a string into title case.  The string may be given in any combination of upper/lower case, eg:
- "THE MAN who MIStook hIS Wife for A HaT"
- "his dark materials"
- "PILLARS OF THE EARTH"

Title case means that each word in the string is either 
- capitalised ("Cold Comfort Farm")
- considered to be an exception and not capitalised ("Stars and Stripes Forever")
- the first word is always capitalised ("The Lord of the Rings")

The function may receive an optional list of exceptions. 

- the exceptions are given as a string with each word separated by a space ("a an the of")
- the exceptions should not be capitalised unless they start the title


### Arguments

- First argument (required): the original string to be converted.
- Second argument (optional): space-delimited list of excepted words that must always be lowercase unless one is the first word in the string. 
### Examples

- ("a clash of KINGS", "a an the of") should return "A Clash of Kings"
- ("THE WIND IN THE WILLOWS", "The In") should return "The Wind in the Willows"
- ("the quick brown fox") should return "The Quick Brown Fox"

### To run

- Run `composer init` and create the `composer.json` file
- Run `composer install`
- To run tests: `phpunit tests`
```bash
phpunit tests
```

### Processes
* TDD


### Technologies used

* [PHP 5.6.3](http://www.php.net/)
* [PHPUnit 5.7.21](https://phpunit.de/)

