# JobApis Job Board Client Skeleton

## Using this repository

This repository is to be used as a skeleton for setting up new job board API clients, and it includes information on how to go about creating a new client. This repository is loosely based on the [PHP League's Skeleton project](https://github.com/thephpleague/skeleton).

If you have questions, create an issue in the Github repository and we will try to resolve it as quickly as possible.

### What's included?

- `README.md` Instructions for setting up, testing, and using the package with examples of working code.
- `CHANGELOG.md` A record of changes to the package.
- `composer.json` The standard composer package for job board API clients. Individual clients may require additional packages or scripts.
- `phpunit.xml.dist` The standard [PHPUnit](https://phpunit.de/) configuration file.
- `.scrutinizer.yml` The standard [Scrutinizer](https://scrutinizer-ci.com/) configuration file.
- `.travis.yml` The standard [Travis](https://travis-ci.org/) configuration file.
- `src/` This directory contains the Query and Provider classes for the new client.
- `tests/src/` This directory contains tests for the Query and Provider classes.

### How do I create a new client package?

All JobApis clients rely on the low-level [Jobs Common](https://github.com/jobapis/jobs-common) package, and should use the latest version. Jobs Common handles most of the heavy lifting, but your new client package will need to provide `Query` and `Provider` classes. The `Query` class contains the root URL of the API, all the API query parameters, and details about default and required values.

The `Provider` class will use the `Query` to make a call to the API and parse the results. Most of the work you have to do as a developer is map the API's response to the Job Object attributes. While the bulk of the work is in the `Query` and `Provider` classes, here is a checklist of things that should be done when setting up a new package:

- [ ] Replace `:package_name`, `:provider_name`, `:author_name`, and `:author_link` with the appropriate values in `composer.json`, `README.md`, and `CHANGELOG.md`.
- [ ] Update the name of the `SkeletonQuery` class to the new client's name.
- [ ] Add all the abstract methods and API parameters to the `Query` class.
- [ ] Add tests for the `Query` class to the `tests/src` directory.
- [ ] Update the name of the `SkeletonProvider` class to the new client's name.
- [ ] Add all the abstract methods and API parameters to the `Provider` class.
- [ ] Add tests for the `Provider` class to the `tests/src` directory.
- [ ] Add the package to Packagist.
- [ ] Set up Travis and Scrutinizer to run linting and tests.
- [ ] Tag a new release on Github.

*Remove everything above this line when creating a new client.*

-----

# [![JobApis.com](https://i.imgur.com/9VOAkrZ.png)](https://www.jobapis.com) :package_name

[![Twitter URL](https://img.shields.io/twitter/url/https/twitter.com/jobapis.svg?style=social&label=Follow%20%40jobapis)](https://twitter.com/jobapis)
[![Latest Version](https://img.shields.io/github/release/jobapis/:package_name.svg?style=flat-square)](https://github.com/jobapis/:package_name/releases)
[![Software License](https://img.shields.io/badge/license-APACHE%202.0-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/jobapis/:package_name/master.svg?style=flat-square&1)](https://travis-ci.org/jobapis/:package_name)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/jobapis/:package_name.svg?style=flat-square)](https://scrutinizer-ci.com/g/jobapis/:package_name/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/jobapis/:package_name.svg?style=flat-square)](https://scrutinizer-ci.com/g/jobapis/:package_name)
[![Total Downloads](https://img.shields.io/packagist/dt/jobapis/:package_name.svg?style=flat-square)](https://packagist.org/packages/jobapis/:package_name)

## About

> This is where you write a couple sentences describing this package. Link to the job board's API docs and website if possible.

### Example

> Update this example as necessary.

```php
$client = new SkeletonProvider(new SkeletonQuery());
$jobs = $client->getJobs();
```

See [Usage](#usage) section below for more detailed examples.

### Mission

[JobApis](https://www.jobapis.com) makes job board and company data more accessible through open source software. To learn more, visit [JobApis.com](https://www.jobapis.com), or contact us at [admin@jobapis.com](mailto:admin@jobapis.com).


## Requirements
- [PHP 5.5+](http://www.php.net/)
- [Composer](https://getcomposer.org/)


## Installation

You can install this package using Composer. From the command line, run:

```bash
$ composer require jobapis/:package_name
```


## Usage

> Detailed usage examples go here. Update this section based on the package's parameters.
 
```php
$query = new JobApis\Jobs\Client\Queries\SkeletonQuery();
```

Then inject the query object into the provider.

```php
$client = new JobApis\Jobs\Client\Providers\SkeletonProvider($query);
```

And call the "getJobs" method to retrieve results.

```php
$jobs = $client->getJobs();
```

The `getJobs()` method will return a [Collection](https://github.com/jobapis/jobs-common/blob/master/src/Collection.php) of [Job](https://github.com/jobapis/jobs-common/blob/master/src/Job.php) objects based on Schema.org's [JobPosting](https://schema.org/JobPosting) specification.


## Testing

1. Clone this repository from Github.
2. Install the dependencies with Composer: `$ composer install`.
3. Run the test suite: `$ ./vendor/bin/phpunit`.
4. (Optional) Run the test suite with real HTTP calls to the API: `$ REAL_CALL=1 ./vendor/bin/phpunit`.

A code coverage report will be generated in the `build/` directory at the root of the project.


## Contributing

Contributions are welcomed and encouraged! Please see [JobApis' contribution guidelines](https://www.jobapis.com/contributing/) for details, or create an issue in Github if you have any questions.

## Legal

### Disclaimer

This package is not affiliated with or supported by :provider_name and we are not responsible for any use or misuse of this software.

### License

This package uses the Apache 2.0 license. Please see the [License File](https://www.jobapis.com/license/) for more information.

### Copyright

Copyright 2017, [:author_name](:author_link).
