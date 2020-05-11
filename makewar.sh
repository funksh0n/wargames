#!/bin/bash

NAME=$1
IP=$2
if [ -z ${IP+x} ]; then echo "ip not set"; else echo "ip set"; fi
mkdir /war/$NAME
nmap --script=vuln -A -vv -oA /war/$NAME/nmap $IP
