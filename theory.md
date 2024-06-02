# Selenium

## Selenium server

Download latest selenium server: https://www.seleniumhq.org/download

Unzip it, give it permissions and put it into one of your paths.   
Find out your existing paths:    
```
$ echo $PATH
/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin
```

In this case we decide to use `usr/local/bin`   

## WebDriver

Go to your project directory and run: `composer require facebook/webdriver`   

##  ChromeDriver

Down a version of ChromeDriver thats compatible with your current chrome:

### Find out your chrome version
```
$ google-chrome --version
Google Chrome 73.0.3683.86 
```

### See available version of ChromeDriver: 

https://chromedriver.storage.googleapis.com

### Download it: 

`$ wget https://chromedriver.storage.googleapis.com/73.0.3683.68/chromedriver_linux64.zip`

Unzip it, give it permissions and put it into your path `usr/local/bin`

## Run Selenium server:
```
java -Dwebdriver.chrome.driver=/usr/local/bin/chromedriver/chromedriver -jar 
/usr/local/bin/selenium-server-standalone-3.141.59.jar
```

## Run test file:

`php test.php`

### The test file

`/var/www/html/autotest/test.php`

### Results

![](/Illustrations/selenium_run_test.png)

![](/Illustrations/selenium_test_results.png)

---

# How it works

`/var/www/html/autotest/test.php`   
uses   
`/var/www/html/autotest/vendor/facebook/webdriver/`   
which uses   
`/usr/local/bin/chromedriver/`   

![](/Illustrations/selenium_archi.png)

---

# Tutorials

- https://blog.programster.org/getting-started-with-selenium-testing-using-php
- https://github.com/php-webdriver/php-webdriver
- https://gist.github.com/mrchrisadams/1012376
