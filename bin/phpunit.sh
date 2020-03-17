#!/bin/bash
pwd
vendor/bin/phpunit --coverage-html coverage --coverage-text --whitelist=src --colors --testdox ./tests