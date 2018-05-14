#!/bin/bash


echo -e "Content-type: text/html\n\n"

echo "<h1>Raspberry Pi Statuses</h1>"

echo "<h2>Which Raspberry Pi's are alive?</h2>"
echo "<pre>$(./rpistatus)</pre>"

