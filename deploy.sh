#!/bin/sh

jekyll build -s ./axl162
#rsync -crzv --delete _site/ eliza:~/public_html/
rsync -crzv _site/ wallace:~/public_html/
