#!/bin/bash

# create a symlink in /bin if xampp is not registered
if ! command -v xampp &> /dev/null; then
    echo "Xampp cannot be found in /bin."
    echo "Creating a symlink..."
    sudo ln /opt/lampp/xampp /bin
fi


if [ -z $1 ] || [ $1 = "start" ]; then
    # start xampp services
    sudo xampp startapache
    sudo xampp startmysql

    echo "Live on http://localhost:80/boat-safari-trip-management/"

elif [ $1 = "stop" ]; then
    sudo xampp stop
else
    echo "Invalid argument"
    exit
fi

