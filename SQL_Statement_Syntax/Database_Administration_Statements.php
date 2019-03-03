<?php
/***********
 * Database Administration Statements
 */
/********
 * 13.7.1 Account Management Statements
 */
/*******
 * 13.7.1.1 ALTER USER Syntax
 */
ALTER USER [IF EXISTS]
user [auth_option] [, user [auth_option]] ...
[REQUIRE {NONE | tls_option [[AND] tls_option] ...}]
[WITH resource_option [resource_option] ...]
[password_option | lock_option] ...

ALTER USER [IF EXISTS] USER() user_func_auth_option

ALTER USER [IF EXISTS]
user DEFAULT ROLE
{NONE | ALL | role [, role ] ...}

user:
(see Section 6.2.4, ¡°Specifying Account Names¡±)

auth_option: {
    IDENTIFIED BY 'auth_string'
        [REPLACE 'current_auth_string']
        [RETAIN CURRENT PASSWORD]
        | IDENTIFIED WITH auth_plugin
        | IDENTIFIED WITH auth_plugin BY 'auth_string'
            [REPLACE 'current_auth_string']
            [RETAIN CURRENT PASSWORD]
            | IDENTIFIED WITH auth_plugin AS 'hash_string'
                | DISCARD OLD PASSWORD
}

user_func_auth_option: {
    IDENTIFIED BY 'auth_string'
        [REPLACE 'current_auth_string']
        [RETAIN CURRENT PASSWORD]
        | DISCARD OLD PASSWORD
}

tls_option: {
    SSL
    | X509
    | CIPHER 'cipher'
        | ISSUER 'issuer'
            | SUBJECT 'subject'
}

resource_option: {
    MAX_QUERIES_PER_HOUR count
    | MAX_UPDATES_PER_HOUR count
    | MAX_CONNECTIONS_PER_HOUR count
    | MAX_USER_CONNECTIONS count
}

password_option: {
    PASSWORD EXPIRE [DEFAULT | NEVER | INTERVAL N DAY]
    | PASSWORD HISTORY {DEFAULT | N}
    | PASSWORD REUSE INTERVAL {DEFAULT | N DAY}
    | PASSWORD REQUIRE CURRENT [DEFAULT | OPTIONAL]
}

lock_option: {
    ACCOUNT LOCK
    | ACCOUNT UNLOCK
}
/*****
 * 13.7.1.2 CREATE ROLE Syntax
 */
CREATE ROLE [IF NOT EXISTS] role [, role ] ...
/********
 * 13.7.1.3 CREATE USER Syntax
 */
CREATE USER [IF NOT EXISTS]
user [auth_option] [, user [auth_option]] ...
DEFAULT ROLE role [, role ] ...
[REQUIRE {NONE | tls_option [[AND] tls_option] ...}]
[WITH resource_option [resource_option] ...]
[password_option | lock_option] ...

user:
(see Section 6.2.4, ¡°Specifying Account Names¡±)

auth_option: {
    IDENTIFIED BY 'auth_string'
        | IDENTIFIED WITH auth_plugin
        | IDENTIFIED WITH auth_plugin BY 'auth_string'
            | IDENTIFIED WITH auth_plugin AS 'hash_string'
}

tls_option: {
    SSL
    | X509
    | CIPHER 'cipher'
        | ISSUER 'issuer'
            | SUBJECT 'subject'
}

resource_option: {
    MAX_QUERIES_PER_HOUR count
    | MAX_UPDATES_PER_HOUR count
    | MAX_CONNECTIONS_PER_HOUR count
    | MAX_USER_CONNECTIONS count
}

password_option: {
    PASSWORD EXPIRE [DEFAULT | NEVER | INTERVAL N DAY]
    | PASSWORD HISTORY {DEFAULT | N}
    | PASSWORD REUSE INTERVAL {DEFAULT | N DAY}
    | PASSWORD REQUIRE CURRENT [DEFAULT | OPTIONAL]
}

lock_option: {
    ACCOUNT LOCK
    | ACCOUNT UNLOCK
}
/*********
 * 13.7.1.4 DROP ROLE Syntax
 */
DROP ROLE [IF EXISTS] role [, role ] ...
/***********
 * 13.7.1.5 DROP USER Syntax
 */
DROP USER [IF EXISTS] user [, user] ...
/********
 * 13.7.1.6 GRANT Syntax
 */
GRANT
priv_type [(column_list)]
[, priv_type [(column_list)]] ...
ON [object_type] priv_level
TO user_or_role [, user_or_role] ...
[WITH GRANT OPTION]

GRANT PROXY ON user_or_role
TO user_or_role [, user_or_role] ...
[WITH GRANT OPTION]

GRANT role [, role] ...
TO user_or_role [, user_or_role] ...
[WITH ADMIN OPTION]

object_type: {
    TABLE
    | FUNCTION
    | PROCEDURE
}

priv_level: {
    *
    | *.*
    | db_name.*
    | db_name.tbl_name
    | tbl_name
    | db_name.routine_name
}

user_or_role: {
    user
    | role
}

user:
(see Section 6.2.4, ¡°Specifying Account Names¡±)

role:
(see Section 6.2.5, ¡°Specifying Role Names¡±)
/******
 * 13.7.1.7 RENAME USER Syntax
 */
RENAME USER old_user TO new_user
[, old_user TO new_user] ...
/*******
 * 13.7.1.8 REVOKE Syntax
 */
REVOKE
priv_type [(column_list)]
[, priv_type [(column_list)]] ...
ON [object_type] priv_level
FROM user_or_role [, user_or_role] ...

REVOKE ALL [PRIVILEGES], GRANT OPTION
FROM user_or_role [, user_or_role] ...

REVOKE PROXY ON user_or_role
FROM user_or_role [, user_or_role] ...

REVOKE role [, role ] ...
FROM user_or_role [, user_or_role ] ...

user_or_role: {
    user
    | role
}

user:
(see Section 6.2.4, ¡°Specifying Account Names¡±)

role:
(see Section 6.2.5, ¡°Specifying Role Names¡±.
/**********
 * 13.7.1.9 SET DEFAULT ROLE Syntax
 */
    SET DEFAULT ROLE
    {NONE | ALL | role [, role ] ...}
    TO user [, user ] ...
/********
 * 13.7.1.10 SET PASSWORD Syntax
 */
    SET PASSWORD [FOR user] = 'auth_string'
        [REPLACE 'current_auth_string']
        [RETAIN CURRENT PASSWORD]
/********
 * 13.7.1.11 SET ROLE Syntax
 */
    SET DEFAULT ROLE
    {NONE | ALL | role [, role ] ...}
    TO user [, user ] ...
 /****
  * 13.7.2 Resource Group Management Statements
  */
    /******
     * 13.7.2.1 ALTER RESOURCE GROUP Syntax
     */
    ALTER RESOURCE GROUP group_name
    [VCPU [=] vcpu_spec [, vcpu_spec] ...]
    [THREAD_PRIORITY [=] N]
    [ENABLE|DISABLE [FORCE]]
    
    vcpu_spec: {N | M - N}
    /*********
     * 13.7.2.2 CREATE RESOURCE GROUP Syntax
     */
    CREATE RESOURCE GROUP group_name
    TYPE = {SYSTEM|USER}
    [VCPU [=] vcpu_spec [, vcpu_spec] ...]
    [THREAD_PRIORITY [=] N]
    [ENABLE|DISABLE]
    
    vcpu_spec: {N | M - N}
    /*******
     * 13.7.2.3 DROP RESOURCE GROUP Syntax
     */
    DROP RESOURCE GROUP group_name [FORCE]
    /***********
     * 13.7.2.4 SET RESOURCE GROUP Syntax
     */
    SET RESOURCE GROUP group_name
    [FOR thread_id [, thread_id] ...]
 /****
  * 13.7.3 Table Maintenance Statements
  */
    
  /********
   * 13.7.4 Component, Plugin, and User-Defined Function Statements
   */
  /********
   * 13.7.5 SET Syntax
   */
   /*********
    * 13.7.6 SHOW Syntax
    */
   /******
    * 13.7.7 Other Administrative Statements
    */