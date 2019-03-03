<?php
/********************
 * Data Manipulation Statements
 */

/******************
 * 13.2.1 CALL Syntax
 */
CALL sp_name([parameter[,...]])
CALL sp_name[()]
/*********************
 * 13.2.2 DELETE Syntax
 */
DELETE [LOW_PRIORITY] [QUICK] [IGNORE] FROM tbl_name [[AS] tbl_alias]
[PARTITION (partition_name [, partition_name] ...)]
[WHERE where_condition]
[ORDER BY ...]
[LIMIT row_count]
/********************
 * 13.2.3 DO Syntax
 */
DO expr [, expr] ...
 /*********************
  * 13.2.4 HANDLER Syntax
  */
HANDLER tbl_name OPEN [ [AS] alias]

HANDLER tbl_name READ index_name { = | <= | >= | < | > } (value1,value2,...)
[ WHERE where_condition ] [LIMIT ... ]
HANDLER tbl_name READ index_name { FIRST | NEXT | PREV | LAST }
[ WHERE where_condition ] [LIMIT ... ]
HANDLER tbl_name READ { FIRST | NEXT }
[ WHERE where_condition ] [LIMIT ... ]

HANDLER tbl_name CLOSE
 /***********************
  * 13.2.5 IMPORT TABLE Syntax
  */
IMPORT TABLE FROM sdi_file [, sdi_file] ...
  /*********************************
   * 13.2.6 INSERT Syntax
   */
INSERT [LOW_PRIORITY | DELAYED | HIGH_PRIORITY] [IGNORE]
[INTO] tbl_name
[PARTITION (partition_name [, partition_name] ...)]
[(col_name [, col_name] ...)]
{VALUES | VALUE} (value_list) [, (value_list)] ...
[ON DUPLICATE KEY UPDATE assignment_list]

INSERT [LOW_PRIORITY | DELAYED | HIGH_PRIORITY] [IGNORE]
[INTO] tbl_name
[PARTITION (partition_name [, partition_name] ...)]
SET assignment_list
[ON DUPLICATE KEY UPDATE assignment_list]

INSERT [LOW_PRIORITY | HIGH_PRIORITY] [IGNORE]
[INTO] tbl_name
[PARTITION (partition_name [, partition_name] ...)]
[(col_name [, col_name] ...)]
SELECT ...
[ON DUPLICATE KEY UPDATE assignment_list]

value:
{expr | DEFAULT}

value_list:
value [, value] ...

assignment:
col_name = value

assignment_list:
assignment [, assignment] ...
/********************
 * 13.2.6.1 INSERT ... SELECT Syntax
 */
INSERT [LOW_PRIORITY | HIGH_PRIORITY] [IGNORE]
[INTO] tbl_name
[PARTITION (partition_name [, partition_name] ...)]
[(col_name [, col_name] ...)]
SELECT ...
[ON DUPLICATE KEY UPDATE assignment_list]

value:
{expr | DEFAULT}

assignment:
col_name = value

assignment_list:
assignment [, assignment] ...
/********************
 * 13.2.6.2 INSERT ... ON DUPLICATE KEY UPDATE Syntax
 */
INSERT INTO t1 (a,b,c) VALUES (1,2,3)
ON DUPLICATE KEY UPDATE c=c+1;

UPDATE t1 SET c=c+1 WHERE a=1;
/*****************
 * 13.2.6.3 INSERT DELAYED Syntax
 */
INSERT DELAYED ...
  /************************
   * 13.2.7 LOAD DATA Syntax
   */
LOAD DATA
[LOW_PRIORITY | CONCURRENT] [LOCAL]
INFILE 'file_name'
    [REPLACE | IGNORE]
    INTO TABLE tbl_name
    [PARTITION (partition_name [, partition_name] ...)]
    [CHARACTER SET charset_name]
    [{FIELDS | COLUMNS}
    [TERMINATED BY 'string']
    [[OPTIONALLY] ENCLOSED BY 'char']
    [ESCAPED BY 'char']
    ]
    [LINES
        [STARTING BY 'string']
        [TERMINATED BY 'string']
    ]
    [IGNORE number {LINES | ROWS}]
    [(col_name_or_user_var
        [, col_name_or_user_var] ...)]
        [SET col_name={expr | DEFAULT},
        [, col_name={expr | DEFAULT}] ...]
   /***********************
    * 13.2.8 LOAD XML Syntax
    */
        LOAD XML
        [LOW_PRIORITY | CONCURRENT] [LOCAL]
        INFILE 'file_name'
            [REPLACE | IGNORE]
            INTO TABLE [db_name.]tbl_name
            [CHARACTER SET charset_name]
            [ROWS IDENTIFIED BY '<tagname>']
            [IGNORE number {LINES | ROWS}]
            [(field_name_or_user_var
                [, field_name_or_user_var] ...)]
                [SET col_name={expr | DEFAULT},
                [, col_name={expr | DEFAULT}] ...]
   /*******************
    * 13.2.9 REPLACE Syntax
    */
                REPLACE [LOW_PRIORITY | DELAYED]
                [INTO] tbl_name
                [PARTITION (partition_name [, partition_name] ...)]
                [(col_name [, col_name] ...)]
                {VALUES | VALUE} (value_list) [, (value_list)] ...
                
                REPLACE [LOW_PRIORITY | DELAYED]
                [INTO] tbl_name
                [PARTITION (partition_name [, partition_name] ...)]
                SET assignment_list
                
                REPLACE [LOW_PRIORITY | DELAYED]
                [INTO] tbl_name
                [PARTITION (partition_name [, partition_name] ...)]
                [(col_name [, col_name] ...)]
                SELECT ...
                
                value:
                {expr | DEFAULT}
                
                value_list:
                value [, value] ...
                
                assignment:
                col_name = value
                
                assignment_list:
                assignment [, assignment] ...
    /**************************
     * 13.2.10 SELECT Syntax
     */
                SELECT
                [ALL | DISTINCT | DISTINCTROW ]
                [HIGH_PRIORITY]
                [STRAIGHT_JOIN]
                [SQL_SMALL_RESULT] [SQL_BIG_RESULT] [SQL_BUFFER_RESULT]
                SQL_NO_CACHE [SQL_CALC_FOUND_ROWS]
                select_expr [, select_expr ...]
                [FROM table_references
                    [PARTITION partition_list]
                    [WHERE where_condition]
                    [GROUP BY {col_name | expr | position}, ... [WITH ROLLUP]]
                    [HAVING where_condition]
                    [WINDOW window_name AS (window_spec)
                        [, window_name AS (window_spec)] ...]
                        [ORDER BY {col_name | expr | position}
                        [ASC | DESC], ... [WITH ROLLUP]]
                        [LIMIT {[offset,] row_count | row_count OFFSET offset}]
                        [INTO OUTFILE 'file_name'
                            [CHARACTER SET charset_name]
                            export_options
                            | INTO DUMPFILE 'file_name'
                            | INTO var_name [, var_name]]
                            [FOR {UPDATE | SHARE} [OF tbl_name [, tbl_name] ...] [NOWAIT | SKIP LOCKED]
                            | LOCK IN SHARE MODE]]
/*********************
 * 13.2.10.1 SELECT ... INTO Syntax
 */
                            /***
                             * 13.2.10.2 JOIN Syntax
                             */
                            /***************
                             * 13.2.10.3 UNION Syntax
                             */
    /****************************
     * 13.2.11 Subquery Syntax
     */
                            /********************
                             * 13.2.11.1 The Subquery as Scalar Operand
                             */
                            CREATE TABLE t1 (s1 INT, s2 CHAR(5) NOT NULL);
                            INSERT INTO t1 VALUES(100, 'abcde');
                            SELECT (SELECT s2 FROM t1);
                            /*******************
                             * 13.2.11.2 Comparisons Using Subqueries
                             */
                            non_subquery_operand comparison_operator (subquery)
                            /*******************
                             * 13.2.11.3 Subqueries with ANY, IN, or SOME
                             */
                            operand comparison_operator ANY (subquery)
                            operand IN (subquery)
                            operand comparison_operator SOME (subquery)
                            /*******************
                             * 13.2.11.4 Subqueries with ALL
                             */
                            operand comparison_operator ALL (subquery)
                            /*****************
                             * 13.2.11.5 Row Subqueries
                             */
                            SELECT * FROM t1
                            WHERE (col1,col2) = (SELECT col3, col4 FROM t2 WHERE id = 10);
                            SELECT * FROM t1
                            WHERE ROW(col1,col2) = (SELECT col3, col4 FROM t2 WHERE id = 10);
                            /********************
                             * 13.2.11.6 Subqueries with EXISTS or NOT EXISTS
                             */
                            SELECT column1 FROM t1 WHERE EXISTS (SELECT * FROM t2);
                            /*********************
                             * 13.2.11.7 Correlated Subqueries
                             */
                            SELECT * FROM t1
                            WHERE column1 = ANY (SELECT column1 FROM t2
                                WHERE t2.column2 = t1.column2);
                            /*****
                             * 13.2.11.8 Derived Tables
                             */
                            SELECT ... FROM (subquery) [AS] tbl_name ...
                            SELECT * FROM JSON_TABLE(arg_list) [AS] tbl_name ...
                            SELECT ... FROM (subquery) [AS] tbl_name (col_list) ...
                            /*****
                             * 13.2.11.9 Lateral Derived Tables
                             */
                            SELECT
                            salesperson.name,
                            -- find maximum sale size for this salesperson
                            (SELECT MAX(amount) AS amount
                                FROM all_sales
                                WHERE all_sales.salesperson_id = salesperson.id)
                                AS amount,
                                -- find customer for this maximum size
                                (SELECT customer_name
                                    FROM all_sales
                                    WHERE all_sales.salesperson_id = salesperson.id
                                    AND all_sales.amount =
                                    -- find maximum size, again
                                    (SELECT MAX(amount) AS amount
                                        FROM all_sales
                                        WHERE all_sales.salesperson_id = salesperson.id))
                                        AS customer_name
                                        FROM
                                        salesperson;
                                        SELECT
                                        salesperson.name,
                                        max_sale.amount,
                                        max_sale_customer.customer_name
                                        FROM
                                        salesperson,
                                        -- calculate maximum size, cache it in transient derived table max_sale
                                        (SELECT MAX(amount) AS amount
                                            FROM all_sales
                                            WHERE all_sales.salesperson_id = salesperson.id)
                                            AS max_sale,
                                            -- find customer, reusing cached maximum size
                                            (SELECT customer_name
                                                FROM all_sales
                                                WHERE all_sales.salesperson_id = salesperson.id
                                                AND all_sales.amount =
                                                -- the cached maximum size
                                                max_sale.amount)
                                                AS max_sale_customer;
                            /***************
                             * 13.2.11.10 Subquery Errors
                             */
                                                SELECT * FROM t1 WHERE s1 IN (SELECT s2 FROM t2 ORDER BY s1 LIMIT 1)
                            /**************
                             * 13.2.11.11 Optimizing Subqueries
                             */
                                                SELECT * FROM t1 WHERE t1.column1 IN
                                                (SELECT column1 FROM t2 ORDER BY column1);
                                                SELECT * FROM t1 WHERE t1.column1 IN
                                                (SELECT DISTINCT column1 FROM t2);
                                                SELECT * FROM t1 WHERE EXISTS
                                                (SELECT * FROM t2 LIMIT 1);
                            /************
                             * 13.2.11.12 Rewriting Subqueries as Joins
                             * SELECT * FROM t1 WHERE id IN (SELECT id FROM t2);
                             */
     /*****************************
      * 13.2.12 UPDATE Syntax
      */
                                                UPDATE [LOW_PRIORITY] [IGNORE] table_reference
                                                SET assignment_list
                                                [WHERE where_condition]
                                                [ORDER BY ...]
                                                [LIMIT row_count]
                                                
                                                value:
                                                {expr | DEFAULT}
                                                
                                                assignment:
                                                col_name = value
                                                
                                                assignment_list:
                                                assignment [, assignment] ...
     /*************************
      * 13.2.13 WITH Syntax (Common Table Expressions)
      */
                                                WITH
                                                cte1 AS (SELECT a, b FROM table1),
                                                cte2 AS (SELECT c, d FROM table2)
                                                SELECT b, d FROM cte1 JOIN cte2
                                                WHERE cte1.a = cte2.c;