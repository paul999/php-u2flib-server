php-u2flib-server
-----------------


[![Build Status](https://travis-ci.org/paul999/php-u2flib-server.svg?branch=master)](https://travis-ci.org/paul999/php-u2flib-server)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/paul999/php-u2flib-server/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/paul999/php-u2flib-server/)

Introduction
============
Serverside U2F library for PHP. Provides functionality for registering
tokens and authentication with said tokens.

To read more about U2F and how to use a U2F library, visit
link:http://developers.yubico.com/U2F[developers.yubico.com/U2F].

License
========
The project is licensed under a BSD license.  See the file COPYING for
exact wording.  For any copyright year range specified as YYYY-ZZZZ in
this package note that the range specifies every single year in that
closed interval.

Dependencies
============
The only dependency is the openssl extension to PHP that has to be enabled.

A composer.json is included in the distribution to make things simpler for
other project using composer.

Tests
=====
To run the test suite link:https://phpunit.de[PHPUnit] is required. To run it, type:

 $ phpunit
