# Advent of Cyber

## Day 1
Register account and decode `authid` cookie.  The fixed part is `v4er9ll1!ss`.

_echo naturally adds a newline, stop it with -n_
```bash
echo -n 'dXNlcm5hbWV2NGVyOWxsMSFzcw==' | base64 -d
# bWNpbnZlbnRvcnl2NGVyOWxsMSFzcw==
```

## Day 2
```bash
dirsearch -u http://10.10.77.202:3000/ -w /opt/wordlists/dirbuster/directory-list-2.3-small.txt -e html
```