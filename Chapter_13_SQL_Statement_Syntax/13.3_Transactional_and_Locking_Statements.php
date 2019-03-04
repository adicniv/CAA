<?php
/************
 * Transactional and Locking Statements
 */
/*************************
 * 13.3.1 START TRANSACTION, COMMIT, and ROLLBACK Syntax
 */
START TRANSACTION
[transaction_characteristic [, transaction_characteristic] ...]

transaction_characteristic: {
    WITH CONSISTENT SNAPSHOT
    | READ WRITE
    | READ ONLY
}

BEGIN [WORK]
COMMIT [WORK] [AND [NO] CHAIN] [[NO] RELEASE]
ROLLBACK [WORK] [AND [NO] CHAIN] [[NO] RELEASE]
SET autocommit = {0 | 1}
 /*****************
  * 13.3.2 Statements That Cannot Be Rolled Back
  */
 /**********************
  * 13.3.3 Statements That Cause an Implicit Commit
  */
  /********************
   * 13.3.4 SAVEPOINT, ROLLBACK TO SAVEPOINT, and RELEASE SAVEPOINT Syntax
   */
SAVEPOINT identifier
ROLLBACK [WORK] TO [SAVEPOINT] identifier
RELEASE SAVEPOINT identifier
  /*******************
   * 13.3.5 LOCK INSTANCE FOR BACKUP and UNLOCK INSTANCE Syntax
   */
LOCK INSTANCE FOR BACKUP

UNLOCK INSTANCE
   /**********
    * 13.3.6 LOCK TABLES and UNLOCK TABLES Syntax
    */
LOCK TABLES
tbl_name [[AS] alias] lock_type
[, tbl_name [[AS] alias] lock_type] ...

lock_type: {
    READ [LOCAL]
    | [LOW_PRIORITY] WRITE
}

UNLOCK TABLES
   /**************
    * 13.3.7 SET TRANSACTION Syntax
    */
SET [GLOBAL | SESSION] TRANSACTION
transaction_characteristic [, transaction_characteristic] ...

transaction_characteristic: {
    ISOLATION LEVEL level
    | access_mode
}

level: {
    REPEATABLE READ
    | READ COMMITTED
    | READ UNCOMMITTED
    | SERIALIZABLE
}

access_mode: {
    READ WRITE
    | READ ONLY
}
    /**************
     * 13.3.8 XA Transactions
     */
/***********
 * 13.3.8.1 XA Transaction SQL Syntax
 */
XA {START|BEGIN} xid [JOIN|RESUME]

XA END xid [SUSPEND [FOR MIGRATE]]

XA PREPARE xid

XA COMMIT xid [ONE PHASE]

XA ROLLBACK xid

XA RECOVER [CONVERT XID]
     /**************
      * 13.3.8.2 XA Transaction States
      */