# Kirby Mobile Detect

Version 0.1.0

An implementation of the [Mobile Detect library](https://github.com/serbanghita/Mobile-Detect) ![Mobile Detect 2.8.24](http://b.repl.ca/v1/Mobile_Detect-2.8.24-green.png) for easy use with [Kirby](https://getkirby.com).

## Installation

### Download

[Download the files](https://github.com/texnixe/kirby-mobile-detect/archive/master.zip) and place them inside `site/plugins/kirby-mobile-detect`.

### Kirby CLI
Installing via Kirby's [command line interface](https://github.com/getkirby/cli):

    $ kirby plugin:install texnixe/kirby-mobile-detect

To update the plugin, run:

    $ kirby plugin:update texnixe/kirby-mobile-detect

### Git Submodule
You can add the Kirby Mobile Detect plugin as a Git submodule.

    $ cd your/project/root
    $ git submodule add https://github.com/texnixe/kirby-mobile-detect.git site/plugins/kirby-mobile-detect
    $ git submodule update --init --recursive
    $ git commit -am "Add Kirby Spreadsheet"

Run these commands to update the plugin:

    $ cd your/project/root
    $ git submodule foreach git checkout master
    $ git submodule foreach git pull
    $ git commit -am "Update submodules"
    $ git submodule update --init --recursive

### Usage examples

The plugin provides a function that instantiates a new instance of the Mobile_Detect class. You can then use all methods provided by the Mobile_Detect class.

#### Check for mobile environment

```
<?php
if (detect()->isMobile()) {
    // Your code here.
}
```

#### Check for tablet device

```
<?php
if (detect()->isTablet()) {
    // Your code here.
}
```

#### Only show code on desktop or tablet device

```
<?php
if(!detect()->isMobile() || detect()->isTablet()) {
    //code that will only be shown on desktop or tablet
}
```

#### Check for iPhone

```
<?php
if (detect()->isIphone()) {
    // Your code here.
}
```

#### Get the user agent

```
<?php
    echo detect()->getUserAgent();
```

For more information, see the [project's repo](https://github.com/serbanghita/Mobile-Detect), or check out the [demo for a list of available methods](http://demo.mobiledetect.net).


## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please create a new issue. If you find bugs or would like to share any improvements, please feel free to fork it on GitHub and create a pull request.

## License

Kirby Mobile Detect is licensed under the MIT license.

Copyright © 2017 Sonja Broda info@texniq.de https://www.texniq.de
