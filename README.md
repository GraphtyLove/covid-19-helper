# Covid-19-helper

A website to help people that can't move the a shop to buy first necessity stuff.

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

## CLI

```bash
php -S localhost:8000 -t public
```

### Install 

```bash
npm run i
```

### Commands

```bash
npm run dev     # build assets for development mode
npm run watch   # build assets in development mode and watch for change
npm run prod    # build assets for production mode
```
