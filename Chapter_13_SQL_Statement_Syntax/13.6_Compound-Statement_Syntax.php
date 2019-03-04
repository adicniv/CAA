<?php
/**********
 * Compound-Statement Syntax
 */
/******
 * 13.6.1 BEGIN ... END Compound-Statement Syntax
 */
[begin_label:] BEGIN
[statement_list]
END [end_label]
 /******
  * 13.6.2 Statement Label Syntax
  */
[begin_label:] BEGIN
[statement_list]
END [end_label]

[begin_label:] LOOP
statement_list
END LOOP [end_label]

[begin_label:] REPEAT
statement_list
UNTIL search_condition
END REPEAT [end_label]

[begin_label:] WHILE search_condition DO
statement_list
END WHILE [end_label]
 /******
  * 13.6.3 DECLARE Syntax
  */
  /********
   * 13.6.4 Variables in Stored Programs
   */
/**
 * 13.6.4.1 Local Variable DECLARE Syntax
 */
DECLARE var_name [, var_name] ... type [DEFAULT value]
/**********
 * 13.6.4.2 Local Variable Scope and Resolution
 */
CREATE PROCEDURE sp1 (x VARCHAR(5))
BEGIN
DECLARE xname VARCHAR(5) DEFAULT 'bob';
DECLARE newname VARCHAR(5);
DECLARE xid INT;

SELECT xname, id INTO newname, xid
FROM table1 WHERE xname = xname;
SELECT newname;
END;
  /*********
   * 13.6.5 Flow Control Statements
   */
/*********
 * 13.6.5.1 CASE Syntax
 */
CASE case_value
WHEN when_value THEN statement_list
[WHEN when_value THEN statement_list] ...
[ELSE statement_list]
END CASE
CASE
WHEN search_condition THEN statement_list
[WHEN search_condition THEN statement_list] ...
[ELSE statement_list]
END CASE
/********
 * 13.6.5.2 IF Syntax
 */
IF search_condition THEN statement_list
[ELSEIF search_condition THEN statement_list] ...
[ELSE statement_list]
END IF
/*******
 * 13.6.5.3 ITERATE Syntax
 */
ITERATE label
/*********
 * 13.6.5.4 LEAVE Syntax
 */
LEAVE label
/********
 * 13.6.5.5 LOOP Syntax
 */
[begin_label:] LOOP
statement_list
END LOOP [end_label]
/***********
 * 13.6.5.6 REPEAT Syntax
 */
[begin_label:] REPEAT
statement_list
UNTIL search_condition
END REPEAT [end_label]
/*********
 * 13.6.5.7 RETURN Syntax
 */
RETURN expr
/**********
 * 13.6.5.8 WHILE Syntax
 */
[begin_label:] WHILE search_condition DO
statement_list
END WHILE [end_label]
   /******
    * 13.6.6 Cursors
    */
   /***********
    * 13.6.7 Condition Handling
    */