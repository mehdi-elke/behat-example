Examples of tests with behat

Install dependencies with:
```
composer install
```

Start selenium server:
```
java -jar selenium-server-4.1.0.jar standalone --port 4444
```

The application should be available at http://localhost:8080
If you use docker, you can use https://github.com/mehdi-elke/nginx-php


Execute tests:
```
./vendor/bin/behat
```


cart.feature contains tests of Cart class
web.feature contains tests of UI with selenium
