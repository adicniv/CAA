<?php
/********
 * Prepared SQL Statement Syntax
 */
/***
 * 13.5.1 PREPARE Syntax
 */
PREPARE stmt_name FROM preparable_stmt
 /*******
  * 13.5.2 EXECUTE Syntax
  */
EXECUTE stmt_name
[USING @var_name [, @var_name] ...]
 /*****
  * 13.5.3 DEALLOCATE PREPARE Syntax
  */
{DEALLOCATE | DROP} PREPARE stmt_name