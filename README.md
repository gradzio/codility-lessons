# Codility Lessons - PHP

| Build Status | Code Coverage | Minimum PHP Version |
| :---: | :---: | :---: |
| [![Build Status](https://travis-ci.org/gradzio/codility-lessons.svg?branch=master)](https://travis-ci.org/gradzio/codility-lessons) | [![codecov](https://codecov.io/gh/gradzio/codility-lessons/branch/master/graph/badge.svg)](https://codecov.io/gh/gradzio/codility-lessons) | [![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.2-4AC51C.svg?style=flat-square)](http://php.net/) |

My solutions for Codility lessons using PHP.

Criteria to pass is always reaching 100% correctness.

Each Component contains Test.php file that represents BDD approach, implementation in .php file and .md file with description of the challenge.

Simply navigate to Lessons folder and the move to each lesson and open files.

## Installation

`composer install` which will install composer packages

## CI pipeline

I am using travis and you can check its configuration in `.travis.yml` file

After each commit to master it will run following commands:

### Linting

`composer lint` which will check for PSR1 and PSR2 style

### Testing

`composer test` which will for breaking unit tests using phpunit