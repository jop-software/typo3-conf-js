<div align="center">
    <h1>TYPO3 EXT:conf_js</h1>
    <p>Access your ext_conf in JavaScript</p>
</div>

[![CI Pipeline](https://github.com/jop-software/typo3-conf-js/actions/workflows/ci.yaml/badge.svg?branch=main)](https://github.com/jop-software/typo3-conf-js/actions/workflows/ci.yaml)

## Professional Support
Professional support is available, please contact [info@jop-software.de](mailto:info@jop-software.de) for more
information.

## Installation

Install this extension with composer.

```bash
composer require jop-software/typo3-conf-js
```

## Usage

The extension provides a simple ViewHelper that generated a `<script>` tag that makes the configuration available in
JavaScript.
The ViewHelper gets the extKey as an input, so you can control from which configuration you want to load the configuration.

Execute the ViewHelper in a fluid template

```html
{namespace confJs=JopSoftware\TYPO3\ConfJs\ViewHelpers}
<confJs:extensionConfiguration extKey="my_ext_key" />
```

And access the Configuration in JavaScript later

```javascript
let configuration = window.extConf.get("my_ext_key");
```

You can also find an extension, implementing this behaviour for testing in
[`./Tests/Packages/testing-site-package`](./Tests/Packages/testing-site-package).

## Security

Many times the extension configuration of an extension does contain secret information - like API Keys - that should not
get exposed to the end user.

Currently, the extension always exports the entire extension configuration, but you can choose which extensions get
exposed.

There already exists an issue ([#4](https://github.com/jop-software/typo3-conf-js/issues/4)) about only exposing parts
of the extension configuration, but this is not implemented at the moment.

## Supported TYPO3 Versions
| Extension Version | TYPO3 Version | PHP-Version |
|-------------------|---------------|-------------|
| 1.x               | 11.5          | 7.4 - 8.0   |
| 2.x               | 12.0          | 8.1         |

## Local Development
We use [DDEV](https://ddev.com) for local development.

You get a complete ddev setup in this repository, just run `ddev start`.

## License
This project is licensed under [GPL-2.0-or-later](https://www.gnu.org/licenses/old-licenses/gpl-2.0.html), see the
[LICENSE](./LICENSE) file for more information.

<div align="center">
    <p>&copy; 2022, <a href="mailto:info@jop-software.de">jop-software Inh. Johannes Przymusinski</a></p>
</div>
