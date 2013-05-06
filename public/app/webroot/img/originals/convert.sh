#!/bin/bash          
echo Converting images... 
convert wab_border_background.png -resize 970x ../wab_border_background.png
convert wab_footer.png -resize 970x ../wab_footer.png
convert wab_header.png -resize 970x ../wab_header.png 
