#!/bin/bash

case "$1" in
input)
   bash ./Record_from_$2.sh
   ;;
output)
   bash ./Playback_to_$2.sh
   ;;
reset)
   bash ./Reset_paths.sh
   ;;
*)
   echo "Usage: $0 {input|output|reset} name"
esac

exit 0
