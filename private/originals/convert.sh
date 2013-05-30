#!/bin/bash          
echo Converting images... 
convert wab_border_background.png -resize 970x ../../public/app/webroot/img/wab_border_background.png
convert wab_footer.png -resize 970x ../../public/app/webroot/img/wab_footer.png
convert wab_header.png -resize 970x ../../public/app/webroot/img/wab_header.png 
