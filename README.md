# Fatchip Oxid Sourcecode Injection Module
OXID Module for sourcecode injection                    
    With this module you can add additional content such as \
    CSS snippets or tracking codes, fed directly into the source code through  the admin page.
    
## Installation
- Copy the content into source/modules of the shop installation
- In the composer.json file in the base folder of the shop add the autoload configuration or extend if already existing:
```
"autoload-dev": {
    "psr-4": {
        "FATCHIP\\fcSrcInject\\": "./source/modules/fc/fcSrcInject"
    }
},
```
- Connect to the webserver with a console, navigate to the shop base folder and execute the following command:
 ```
vendor/bin/composer dump-autoload
 ```

- If your OXID Version >= 6.2, execute the following command
```
vendor/bin/oe-console oe:module:install-configuration source\modules\fc\fcSrcInject
```

- Log in to the shop admin area go to the module
- Enable the module
- In the module settings  
    - Set Head injection if needed
    - Set Body injection if needed

## Author
FATCHIP GmbH | https://www.fatchip.de | support@fatchip.de 

