# Container aware console application

[![Build Status](https://img.shields.io/travis/weew/php-console-container-aware.svg)](https://travis-ci.org/weew/php-console-container-aware)
[![Code Quality](https://img.shields.io/scrutinizer/g/weew/php-console-container-aware.svg)](https://scrutinizer-ci.com/g/weew/php-console-container-aware)
[![Test Coverage](https://img.shields.io/coveralls/weew/php-console-container-aware.svg)](https://coveralls.io/github/weew/php-console-container-aware)
[![Version](https://img.shields.io/packagist/v/weew/php-console-container-aware.svg)](https://packagist.org/packages/weew/php-console-container-aware)
[![Licence](https://img.shields.io/packagist/l/weew/php-console-container-aware.svg)](https://packagist.org/packages/weew/php-console-container-aware)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Usage](#usage)

## Installation

`composer require weew/php-console-container-aware`

## Introduction

This package integrates [weew/php-console](https://github.com/weew/php-console) with [weew/php-container](https://github.com/weew/php-container) and allows invocation of commands trough the container.

## Usage

Simply create a container aware instance of `Console` and pass in an instance of `IContainer`.

```php
$console = new Weew\Console\ContainerAware\Console(new Container());
```
