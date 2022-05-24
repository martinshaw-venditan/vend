# Vend

A Laravel Tinker-like REPL for the Venditan Commerce platform.

Currently, it's work in progress, anyone in the Venditan group is welcome to contribute.

## Installation

1. Add changes from https://github.com/martinshaw-venditan/venditan-commerce/tree/feature/xxxxx/vend-concept into your project. For now as local changes.

2. Run `composer require martinshaw-venditan/vend:dev-master` in the `venditan-commerce` directory. 

3. Run `composer run vend:sigma` within the `venditan-commerce` directory to use the Vend CLI with the local VC and as the Sigma App ID.

If you would like to use the CLI with a different app ID, add an appropriate entry in the VC `composer.json` scripts section, following the convention of `"vend:sigma": "docker exec -it vc_app_1 bash -c \"/app/vc-local/custom/vendor/bin/vend Sigma\" < /dev/tty"`.

## Convenience methods

You can use the following convenience methods to load the relevant domain objects...

`$c(3145149);` will load the Sprint 3c (Customer) object with the customer ID of 3145149.

`$i(1234);` will load the Inventory object with the inventory ID of 1234.

`$o(2795383);` will load the Order object with the order ID of 2795383.

`$oByC(3145149);` will load an array containing all Order objects associated with the customer ID of 3145149.

_Use of useLocal inspired by https://www.sitepoint.com/say-hello-to-boris-a-better-repl-for-php/ and https://github.com/borisrepl/boris/wiki/Basic-Usage_

## Known issues

* It really messes with the line / max-width formatting of my terminal (iTerm 2 & PHPStorm terminal).
* Because I am using Composer run-script as a shorthand for executing Vend script within the VC project, it is causing timeout after 300 seconds of lack of user input into /dev/tty.  
    * This can be fixed by making Vend a package which is required system-globally rather than making changes to the VC repo, after this change, I will be able to run `vend Sigma` regardless of which directory I am in because I am affecting the docker container by its name and not the VC code.
