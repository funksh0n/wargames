#!/bin/bash

NAME=$1
IP=$2
if [ -z ${IP+x} ]; then echo "ip not set"; else echo "ip set"; fi
mkdir /war/$NAME
touch /war/$NAME/README.md
sudo nmap --script=vuln -A -vv -oA /war/$NAME/nmap $IP &
dirbuster -H -l /opt/wordlists/dirbuster/directory-list-2.3-medium.txt -t 200 -r /war/$NAME/ $IP