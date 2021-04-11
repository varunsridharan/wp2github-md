# WP2GithubMD Parser
WordPress Readme To Github Readme Converter

[![Latest Stable Version][latest-stable-version-img]][latest-stable-version-link]
[![Latest Unstable Version][latest-Unstable-version-img]][latest-Unstable-version-link]
[![Total Downloads][total-downloads-img]][total-downloads-link]
[![WP][wpcs-img]][wpcs-link]
[![License][license-img]][license-link]
[![composer.lock available][composerlock-img]][composerlock-link]

## Installation
The preferred way to install this extension is through [Composer][composer].

To install **WP2GithubMd library**, simply:

    $ composer require varunsridharan/wp2github-md

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    $ composer require varunsridharan/wp2github-md --prefer-source

You can also **clone the complete repository** with Git:

    $ git clone https://github.com/varunsridharan/wp2github-md.git

Or **install it manually**:

[Download WP2GithubMd.zip][downloadzip]:

    $ wget https://github.com/varunsridharan/wp2github-md/archive/master.zip

## Usage
### Command Line
```
wp2github-md "your-plugin-slug" "current-path/readme.txt" "save-markdown/readme.md"
```
### Composer
**Composer.json**
```json
{
  "scripts" : {
    "wp2github-md": "wp2github-md 'plugin-slug' 'readme.txt' 'readme.md' "
  }
}
```

**Composer Run** : `composer wp2github-md`

### PHP
```php
<?php
require_once __DIR__.'/vendor/autoload.php';

$markdown = \WP2Github_MD\Converter::convert(file_get_contents(__DIR__.'/readme.txt'),'your-plugin-slug');
file_put_contents(__DIR__.'/readme.md',$markdown);
```

---

Thanks To : https://github.com/wpreadme2markdown/wp-readme-to-markdown for creating this aweosme library i have created this to make an improved version.


---

<!-- START common-footer.mustache  -->

<!-- END common-footer.mustache  -->


[composer]: http://getcomposer.org/download/
[downloadzip]:https://github.com/varunsridharan/wp2github-md/archive/master.zip

[latest-stable-version-img]: https://poser.pugx.org/varunsridharan/wp2github-md/version
[latest-Unstable-version-img]: https://poser.pugx.org/varunsridharan/wp2github-md/v/unstable
[total-downloads-img]: https://poser.pugx.org/varunsridharan/wp2github-md/downloads
[Latest-Unstable-version-img]: https://poser.pugx.org/varunsridharan/wp2github-md/v/unstable
[wpcs-img]: https://img.shields.io/badge/WordPress-Standar-1abc9c.svg
[license-img]: https://poser.pugx.org/varunsridharan/wp2github-md/license
[composerlock-img]: https://poser.pugx.org/varunsridharan/wp2github-md/composerlock

[latest-stable-version-link]: https://packagist.org/packages/varunsridharan/wp2github-md
[latest-Unstable-version-link]: https://packagist.org/packages/varunsridharan/wp2github-md
[total-downloads-link]: https://packagist.org/packages/varunsridharan/wp2github-md
[Latest-Unstable-Version-link]: https://packagist.org/packages/varunsridharan/wp2github-md
[wpcs-link]: https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/
[license-link]: https://packagist.org/packages/varunsridharan/wp2github-md
[composerlock-link]: https://packagist.org/packages/varunsridharan/wp2github-md
