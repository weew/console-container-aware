# Container aware console application

[![Build Status](https://img.shields.io/travis/weew/console-container-aware.svg)](https://travis-ci.org/weew/console-container-aware)
[![Code Quality](https://img.shields.io/scrutinizer/g/weew/console-container-aware.svg)](https://scrutinizer-ci.com/g/weew/console-container-aware)
[![Test Coverage](https://img.shields.io/coveralls/weew/console-container-aware.svg)](https://coveralls.io/github/weew/console-container-aware)
[![Version](https://img.shields.io/packagist/v/weew/console-container-aware.svg)](https://packagist.org/packages/weew/console-container-aware)
[![Licence](https://img.shields.io/packagist/l/weew/console-container-aware.svg)](https://packagist.org/packages/weew/console-container-aware)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Usage](#usage)

## Installation

`composer require weew/console-container-aware`

## Introduction

This package integrates [weew/console](https://github.com/weew/console) with [weew/container](https://github.com/weew/container) and allows invocation of commands trough the container.

## Usage

Simply create a container aware instance of `Console` and pass in an instance of `IContainer`.

```php
$console = new Weew\Console\ContainerAware\Console(new Container());
```
