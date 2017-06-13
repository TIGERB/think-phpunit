#!/bin/bash

#copy test demo folder and phpunit.xml examplefile
if [[ ! -d '../../../tests' ]]; then
    cp -r ./tests ../../../
    cp ./phpunit.xml ../../../
fi
