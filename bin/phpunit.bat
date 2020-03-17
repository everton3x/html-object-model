@echo off

vendor\bin\phpunit --coverage-html coverage --coverage-text --whitelist=src --colors --testdox .\tests