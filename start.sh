#!/usr/bin/bash

arch=$(dpkg --print-architecture)
android=$(uname -o | grep "Android")
linux=$(uname -o | grep "Linux")

bash whatsapp.art

if [[ ${android} == "Android" ]]
then
  ./binary_x64_android
else
  ./binary_x64_linux
fi
