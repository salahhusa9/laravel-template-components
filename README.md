# Laravel template components, can use with vuexy and metronic templates

[![Latest Version on Packagist](https://img.shields.io/packagist/v/salahhusa9/laravel-template-components.svg?style=flat-square)](https://packagist.org/packages/salahhusa9/laravel-template-components)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/salahhusa9/laravel-template-components/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/salahhusa9/laravel-template-components/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/salahhusa9/laravel-template-components/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/salahhusa9/laravel-template-components/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/salahhusa9/laravel-template-components.svg?style=flat-square)](https://packagist.org/packages/salahhusa9/laravel-template-components)

This package is a collection of components that can be used with vuexy and metronic templates, and it can be used with any other template by changing the config file.

## Installation

You can install the package via composer:

```bash
composer require salahhusa9/laravel-template-components
```

You can publish the config file with:

```bash
php artisan laravel-template-components:install
```

## Usage

### Input Component
```html
<x-template-components-input />
```
He accept all normal attributes of input tag and add some new attributes:
- div-class: add class to div tag
- label-class: add class to label tag
- other attributes will be added to input tag

### Button Component
```html
<x-template-components-button />
```
He accept all normal attributes of button tag and add some new attributes:
- div-class: add class to div tag
- span-text-class: add class to span tag that contain button text
- indicator-progress-class: add class to span tag that contain button progress indicator
- loading-text: text that will be shown when button is loading
- spinner-class: add class to span tag that contain button spinner
- other attributes will be added to button tag

we support livewire loading state, so if you use livewire you can use loading state like this:
```html
<x-template-components-button wire:target="save" />
```

### Select Component
```html
<x-template-components-select>
    <option value="1">option 1</option>
    <option value="2">option 2</option>
</x-template-components-select>
```
He accept all normal attributes of select tag and add some new attributes:
- div-class: add class to div tag
- label-class: add class to label tag
- other attributes will be added to select tag

### Textarea Component
```html
<x-template-components-textarea />
```
He accept all normal attributes of textarea tag and add some new attributes:
- div-class: add class to div tag
- label-class: add class to label tag
- other attributes will be added to textarea tag

### Form Component
```html
<x-template-components-form>
    
</x-template-components-form>
```
he accept all normal attributes of form tag and add some new attributes:
- route: route name that will be used in form action
- other attributes will be added to form tag

## Supported Templates

- [Vuexy](https://demos.pixinvent.com/vuexy-html-admin-template/landing/)
- [Metronic](https://preview.keenthemes.com/metronic/demo1/index.html)

| Version           | Supported          |
| ----------------- | ------------------ |
| Vuexy             | :white_check_mark: |
| Metronic          | :white_check_mark: |
| Html Standards    | :white_check_mark: |
| Bootstrap Classes | :white_check_mark: |

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [salahhusa9](https://github.com/salahhusa9)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
