#!/bin/bash
pwd
tools/phpDocumentor -t docs -d src --encoding=utf-8 --markers=FIXME,TODO --title="Html Object Model" --visibility=private,protected,public --sourcecode --template=default