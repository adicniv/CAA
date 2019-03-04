<?php
/************
 * 13.8.1 DESCRIBE Syntax
 */
/***********
 * 13.8.2 EXPLAIN Syntax
 */
{EXPLAIN | DESCRIBE | DESC}
tbl_name [col_name | wild]

{EXPLAIN | DESCRIBE | DESC}
[explain_type]
{explainable_stmt | FOR CONNECTION connection_id}

explain_type: {
    FORMAT = format_name
}

format_name: {
    TRADITIONAL
    | JSON
}

explainable_stmt: {
    SELECT statement
    | DELETE statement
    | INSERT statement
    | REPLACE statement
    | UPDATE statement
}
    /**********
     * 13.8.3 HELP Syntax
     */
HELP 'search_string'
/************
 * 13.8.4 USE Syntax
 */
USE db_name