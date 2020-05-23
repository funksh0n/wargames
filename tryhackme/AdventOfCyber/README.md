# Advent of Cyber
Register account and decode `authid` cookie.  The fixed part is `v4er9ll1!ss`.

## Day 1
_echo naturally adds a newline, stop it with -n_
```bash
echo -n 'dXNlcm5hbWV2NGVyOWxsMSFzcw==' | base64 -d
# bWNpbnZlbnRvcnl2NGVyOWxsMSFzcw==
```
