let language = navigator.language || navigator.userLanguage;

let pageText

switch (language) {
    case "en-US": let pageText = require('../en.json')
    case "en-GB": let pageText = require('../en.json')
    case "en": let pageText = require('../en.json')
    case "nl": let pageText = require('../fr.json')
    case "fr": let pageText = require('../nl.json')
    case "fr-fr": let pageText = require('../nl.json')
}