#!/bin/bash

  convert -fill none -stroke '#000000' -font Verdana-Bold-Italic \
          -pointsize 34 label:'      Стекло Групп\nwww.steklo-group.ru' \
          -blur 0x0 -background none -rotate -30 \
          resources/img/watermark.gif \