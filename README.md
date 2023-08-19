# php-whois
A php whois client. Also supports ip addresses and ASNs.<br>
When given a domain with the sub domain it tries to resolve the base domain/subdomain<br>
Thanks to [FurqanSoftware/node-whois](https://github.com/FurqanSoftware/node-whois) for the basic server list<br>
<br>
How to use:
```php
<?php
$whoisclient = new whois();
$whoisclient->lookup(QUERY, MAXREFERRALS /* The maximum number of referrals to follow */, TIMEOUT /* server timeout */, _SERVEROVERRIDE /* a manual server override */); // The last option is reserved for internal stuff
$whoisclient->addServer(DOMAIN /* the base domain to query for */, HOST /* the address of the server */, QUERY /* Optional: what to send to the server. you can supply the query by using "{query}" */);
```
Examples:
```php
<?php
$whoisclient = new whois();
// domain
print_r($whoisclient->lookup("google.com"));
/*
Array
(
    [data] => xxxxxx // raw whois data 
    [referrals] => 1 // number of referrals that happened
    [server] => whois.markmonitor.com // the last server that we were referred to
    [query] => google.com // the final query that we sent to the server
)
*/
// ip
print_r($whoisclient->lookup("8.8.8.8"));
/*
Array
(
    [data] => xxxxxx // raw whois data 
    [referrals] => 0
    [server] => whois.arin.net
    [query] => 8.8.8.8
)
*/
// ip
print_r($whoisclient->lookup("AS15169"));
/*
Array
(
    [data] => xxxxxx // raw whois data 
    [referrals] => 0
    [server] => whois.radb.net
    [query] => AS15169
)
*/
```