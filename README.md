# covid-19-helper

> A website to help people that can't move the a shop to buy first necessity stuff.


## How does it work?

This is a landing page where people can propose their help or ask for help to
get some basics furnitures like toilette paper, food, etc...


## Tech

The project is made to be basic as possible to be usable by other peoples easily :

- html
- css
- js
- php

## Translation management

The project use a very simple I18N library that will autodetect the language file of the user and automatically load the translation inside public/langs.

### Usage

```php
<?= __('$key') ?>
```

### Little helper

You can save any not found translation directly in the translation file by adding ?writeMode=true.

```bash
php -S localhost:8000 -t public
```


## Installation

Make sure all dependencies have been installed before moving on:

- [Node.js](http://nodejs.org/) >= 8.0.0

```bash
npm install
```

### Commands

```bash
npm run dev     # build assets for development mode
npm run watch   # build assets in development mode and watch for change
npm run prod    # build assets for production mode
npm run start   # run a static server on http://127.0.0.1:3333/
```

## Versioning

Versioned using [SemVer](http://semver.org/).


## Contribution

Please raise an issue if you find any. Pull requests are welcome!


## License

This project is licensed under the MIT License - see the [LICENSE](https://github.com/GraphtyLove/covid-19-helper/blob/master/LICENSE) file for details.
