<?php
/************
 * Atomic Data Definition Statement Support 
 */

/*******************
 * Supported DDL Statements
 */
 /*********************
  * Atomic DDL Characteristics
  */
 /*********************
  * Changes in DDL Statement Behavior 
  */
  /********************
   * Storage Engine Support
   */
  /*********************
   * Viewing DDL Logs
   */
/************************************************************************************************************************
 * 
 */
/****************
 * ALTER DATABASE Syntax 
 */
ALTER {DATABASE | SCHEMA} [db_name]
alter_specification ...

alter_specification:
[DEFAULT] CHARACTER SET [=] charset_name
| [DEFAULT] COLLATE [=] collation_name
/****************
 * ALTER EVENT Syntax
 */
ALTER
[DEFINER = { user | CURRENT_USER }]
EVENT event_name
[ON SCHEDULE schedule]
[ON COMPLETION [NOT] PRESERVE]
[RENAME TO new_event_name]
[ENABLE | DISABLE | DISABLE ON SLAVE]
[COMMENT 'string']
[DO event_body]
/*********************
 * ALTER FUNCTION Syntax
 */
ALTER FUNCTION func_name [characteristic ...]

characteristic:
COMMENT 'string'
    | LANGUAGE SQL
    | { CONTAINS SQL | NO SQL | READS SQL DATA | MODIFIES SQL DATA }
    | SQL SECURITY { DEFINER | INVOKER }
/********************
 * ALTER INSTANCE Syntax
 */
    ALTER INSTANCE instance_action
    
    instance_action: {
        ROTATE INNODB MASTER KEY
        | RELOAD TLS [NO ROLLBACK ON ERROR]
    }
/********************
 * ALTER LOGFILE GROUP Syntax
 */
    ALTER LOGFILE GROUP logfile_group
    ADD UNDOFILE 'file_name'
        [INITIAL_SIZE [=] size]
        [WAIT]
        ENGINE [=] engine_name
/**********************
 * 13.1.7 ALTER PROCEDURE Syntax
 */
    ALTER PROCEDURE proc_name [characteristic ...]
    
    characteristic:
    COMMENT 'string'
        | LANGUAGE SQL
        | { CONTAINS SQL | NO SQL | READS SQL DATA | MODIFIES SQL DATA }
        | SQL SECURITY { DEFINER | INVOKER }
/****************************
 * 13.1.8 ALTER SERVER Syntax
 */
        ALTER SERVER  server_name
        OPTIONS (option [, option] ...)
/*****************************
 * 13.1.9 ALTER TABLE Syntax
 */
        ALTER TABLE tbl_name
        [alter_specification [, alter_specification] ...]
        [partition_options]
        
        alter_specification:
        table_options
        | ADD [COLUMN] col_name column_definition
        [FIRST | AFTER col_name]
        | ADD [COLUMN] (col_name column_definition,...)
        | ADD {INDEX|KEY} [index_name]
        [index_type] (key_part,...) [index_option] ...
        | ADD {FULLTEXT|SPATIAL} [INDEX|KEY] [index_name]
        (key_part,...) [index_option] ...
        | ADD [CONSTRAINT [symbol]] PRIMARY KEY
        [index_type] (key_part,...)
        [index_option] ...
        | ADD [CONSTRAINT [symbol]] UNIQUE [INDEX|KEY]
        [index_name] [index_type] (key_part,...)
        [index_option] ...
        | ADD [CONSTRAINT [symbol]] FOREIGN KEY
        [index_name] (col_name,...)
        reference_definition
        | ADD check_constraint_definition
        | DROP CHECK symbol
        | ALTER CHECK symbol [NOT] ENFORCED
        | ALGORITHM [=] {DEFAULT|INSTANT|INPLACE|COPY}
        | ALTER [COLUMN] col_name {SET DEFAULT literal | DROP DEFAULT}
        | ALTER INDEX index_name {VISIBLE | INVISIBLE}
        | CHANGE [COLUMN] old_col_name new_col_name column_definition
        [FIRST|AFTER col_name]
        | [DEFAULT] CHARACTER SET [=] charset_name [COLLATE [=] collation_name]
        | CONVERT TO CHARACTER SET charset_name [COLLATE collation_name]
        | {DISABLE|ENABLE} KEYS
        | {DISCARD|IMPORT} TABLESPACE
        | DROP [COLUMN] col_name
        | DROP {INDEX|KEY} index_name
        | DROP PRIMARY KEY
        | DROP FOREIGN KEY fk_symbol
        | FORCE
        | LOCK [=] {DEFAULT|NONE|SHARED|EXCLUSIVE}
        | MODIFY [COLUMN] col_name column_definition
        [FIRST | AFTER col_name]
        | ORDER BY col_name [, col_name] ...
        | RENAME COLUMN old_col_name TO new_col_name
        | RENAME {INDEX|KEY} old_index_name TO new_index_name
        | RENAME [TO|AS] new_tbl_name
        | {WITHOUT|WITH} VALIDATION
        | ADD PARTITION (partition_definition)
        | DROP PARTITION partition_names
        | DISCARD PARTITION {partition_names | ALL} TABLESPACE
        | IMPORT PARTITION {partition_names | ALL} TABLESPACE
        | TRUNCATE PARTITION {partition_names | ALL}
        | COALESCE PARTITION number
        | REORGANIZE PARTITION partition_names INTO (partition_definitions)
        | EXCHANGE PARTITION partition_name WITH TABLE tbl_name [{WITH|WITHOUT} VALIDATION]
        | ANALYZE PARTITION {partition_names | ALL}
        | CHECK PARTITION {partition_names | ALL}
        | OPTIMIZE PARTITION {partition_names | ALL}
        | REBUILD PARTITION {partition_names | ALL}
        | REPAIR PARTITION {partition_names | ALL}
        | REMOVE PARTITIONING
        | UPGRADE PARTITIONING
        
        key_part: {col_name [(length)] | (expr)} [ASC | DESC]
        
        index_type:
        USING {BTREE | HASH}
        
        index_option:
        KEY_BLOCK_SIZE [=] value
        | index_type
        | WITH PARSER parser_name
        | COMMENT 'string'
            | {VISIBLE | INVISIBLE}
            
            check_constraint_definition:
            [CONSTRAINT [symbol]] CHECK (expr) [[NOT] ENFORCED]
            
            table_options:
            table_option [[,] table_option] ...
            
            table_option:
            AUTO_INCREMENT [=] value
            | AVG_ROW_LENGTH [=] value
            | [DEFAULT] CHARACTER SET [=] charset_name
            | CHECKSUM [=] {0 | 1}
            | [DEFAULT] COLLATE [=] collation_name
            | COMMENT [=] 'string'
                | COMPRESSION [=] {'ZLIB'|'LZ4'|'NONE'}
                | CONNECTION [=] 'connect_string'
                    | {DATA|INDEX} DIRECTORY [=] 'absolute path to directory'
                        | DELAY_KEY_WRITE [=] {0 | 1}
                        | ENCRYPTION [=] {'Y' | 'N'}
                        | ENGINE [=] engine_name
                        | INSERT_METHOD [=] { NO | FIRST | LAST }
                        | KEY_BLOCK_SIZE [=] value
                        | MAX_ROWS [=] value
                        | MIN_ROWS [=] value
                        | PACK_KEYS [=] {0 | 1 | DEFAULT}
                        | PASSWORD [=] 'string'
                            | ROW_FORMAT [=] {DEFAULT|DYNAMIC|FIXED|COMPRESSED|REDUNDANT|COMPACT}
                            | STATS_AUTO_RECALC [=] {DEFAULT|0|1}
                            | STATS_PERSISTENT [=] {DEFAULT|0|1}
                            | STATS_SAMPLE_PAGES [=] value
                            | TABLESPACE tablespace_name [STORAGE {DISK|MEMORY|DEFAULT}]
                            | UNION [=] (tbl_name[,tbl_name]...)
                            
                            partition_options:
                            (see CREATE TABLE options)
/*******************************
 * 13.1.9.1 ALTER TABLE Partition Operations
 */
/*********************************
 * 13.1.9.2 ALTER TABLE and Generated Columns
 */
/********************************
 * 13.1.9.3 ALTER TABLE Examples
 */
 /***************************
  * 13.1.10 ALTER TABLESPACE Syntax
  */
                            ALTER [UNDO] TABLESPACE tablespace_name
                            NDB only:
                            {ADD|DROP} DATAFILE 'file_name'
                                [INITIAL_SIZE [=] size]
                                [WAIT]
                                InnoDB and NDB:
                                [RENAME TO tablespace_name]
                                InnoDB only:
                                [SET {ACTIVE|INACTIVE}]
                                [ENCRYPTION [=] {'Y' | 'N'}]
                                InnoDB and NDB:
                                [ENGINE [=] engine_name]
/********************************
 * 13.1.11 ALTER VIEW Syntax
 */
                                ALTER
                                [ALGORITHM = {UNDEFINED | MERGE | TEMPTABLE}]
                                [DEFINER = { user | CURRENT_USER }]
                                [SQL SECURITY { DEFINER | INVOKER }]
                                VIEW view_name [(column_list)]
                                AS select_statement
                                [WITH [CASCADED | LOCAL] CHECK OPTION]
/****************************
 * 13.1.12 CREATE DATABASE Syntax
 */
                                CREATE {DATABASE | SCHEMA} [IF NOT EXISTS] db_name
                                [create_specification] ...
                                
                                create_specification:
                                [DEFAULT] CHARACTER SET [=] charset_name
                                | [DEFAULT] COLLATE [=] collation_name
/*****************************
 * 13.1.13 CREATE EVENT Syntax
 */
                                CREATE
                                [DEFINER = { user | CURRENT_USER }]
                                EVENT
                                [IF NOT EXISTS]
                                event_name
                                ON SCHEDULE schedule
                                [ON COMPLETION [NOT] PRESERVE]
                                [ENABLE | DISABLE | DISABLE ON SLAVE]
                                [COMMENT 'string']
                                DO event_body;
                                
                                schedule:
                                AT timestamp [+ INTERVAL interval] ...
                                | EVERY interval
                                [STARTS timestamp [+ INTERVAL interval] ...]
                                [ENDS timestamp [+ INTERVAL interval] ...]
                                
                                interval:
                                quantity {YEAR | QUARTER | MONTH | DAY | HOUR | MINUTE |
                                WEEK | SECOND | YEAR_MONTH | DAY_HOUR | DAY_MINUTE |
                                DAY_SECOND | HOUR_MINUTE | HOUR_SECOND | MINUTE_SECOND}
/****************************
 * 13.1.14 CREATE FUNCTION Syntax
 */
/*************************
 * 13.1.15 CREATE INDEX Syntax
 */
                                CREATE [UNIQUE | FULLTEXT | SPATIAL] INDEX index_name
                                [index_type]
                                ON tbl_name (key_part,...)
                                [index_option]
                                [algorithm_option | lock_option] ...
                                
                                key_part: {col_name [(length)] | (expr)} [ASC | DESC]
                                
                                index_option:
                                KEY_BLOCK_SIZE [=] value
                                | index_type
                                | WITH PARSER parser_name
                                | COMMENT 'string'
                                    | {VISIBLE | INVISIBLE}
                                    
                                    index_type:
                                    USING {BTREE | HASH}
                                    
                                    algorithm_option:
                                    ALGORITHM [=] {DEFAULT | INPLACE | COPY}
                                    
                                    lock_option:
                                    LOCK [=] {DEFAULT | NONE | SHARED | EXCLUSIVE}
/*********************
 * 13.1.16 CREATE LOGFILE GROUP Syntax
 */    
                                    CREATE LOGFILE GROUP logfile_group
                                    ADD UNDOFILE 'undo_file'
                                        [INITIAL_SIZE [=] initial_size]
                                        [UNDO_BUFFER_SIZE [=] undo_buffer_size]
                                        [REDO_BUFFER_SIZE [=] redo_buffer_size]
                                        [NODEGROUP [=] nodegroup_id]
                                        [WAIT]
                                        [COMMENT [=] 'string']
                                        ENGINE [=] engine_name
/**************************************
 * 13.1.17 CREATE PROCEDURE and CREATE FUNCTION Syntax
 */
                                    CREATE
                                    [DEFINER = { user | CURRENT_USER }]
                                    PROCEDURE sp_name ([proc_parameter[,...]])
                                    [characteristic ...] routine_body
                                    
                                    CREATE
                                    [DEFINER = { user | CURRENT_USER }]
                                    FUNCTION sp_name ([func_parameter[,...]])
                                    RETURNS type
                                    [characteristic ...] routine_body
                                    
                                    proc_parameter:
                                    [ IN | OUT | INOUT ] param_name type
                                    
                                    func_parameter:
                                    param_name type
                                    
                                    type:
                                    Any valid MySQL data type
                                    
                                    characteristic:
                                    COMMENT 'string'
                                        | LANGUAGE SQL
                                        | [NOT] DETERMINISTIC
                                        | { CONTAINS SQL | NO SQL | READS SQL DATA | MODIFIES SQL DATA }
                                        | SQL SECURITY { DEFINER | INVOKER }
                                        
                                        routine_body:
                                        Valid SQL routine statement
/**************************
 * 13.1.18 CREATE SERVER Syntax
 */
                                        CREATE SERVER server_name
                                        FOREIGN DATA WRAPPER wrapper_name
                                        OPTIONS (option [, option] ...)
                                        
                                        option:
                                        { HOST character-literal
                                        | DATABASE character-literal
                                        | USER character-literal
                                        | PASSWORD character-literal
                                        | SOCKET character-literal
                                        | OWNER character-literal
                                        | PORT numeric-literal }
/****************************
 * 13.1.19 CREATE SPATIAL REFERENCE SYSTEM Syntax
*/
                                        CREATE OR REPLACE SPATIAL REFERENCE SYSTEM
                                        srid srs_attribute ...
                                        
                                        CREATE SPATIAL REFERENCE SYSTEM
                                        [IF NOT EXISTS]
                                        srid srs_attribute ...
                                        
                                        srs_attribute: {
                                            NAME 'srs_name'
                                                | DEFINITION 'definition'
                                                    | ORGANIZATION 'org_name' IDENTIFIED BY org_id
                                                    | DESCRIPTION 'description'
                                        }
                                        
                                        srid, org_id: 32-bit unsigned integer
/********************************
 * 13.1.20 CREATE TABLE Syntax
 */
                                        CREATE [TEMPORARY] TABLE [IF NOT EXISTS] tbl_name
                                        (create_definition,...)
                                        [table_options]
                                        [partition_options]
                                        
                                        CREATE [TEMPORARY] TABLE [IF NOT EXISTS] tbl_name
                                        [(create_definition,...)]
                                        [table_options]
                                        [partition_options]
                                        [IGNORE | REPLACE]
                                        [AS] query_expression
                                        
                                        CREATE [TEMPORARY] TABLE [IF NOT EXISTS] tbl_name
                                        { LIKE old_tbl_name | (LIKE old_tbl_name) }
                                        
                                        create_definition:
                                        col_name column_definition
                                        | {INDEX|KEY} [index_name] [index_type] (key_part,...)
                                        [index_option] ...
                                        | {FULLTEXT|SPATIAL} [INDEX|KEY] [index_name] (key_part,...)
                                        [index_option] ...
                                        | [CONSTRAINT [symbol]] PRIMARY KEY
                                        [index_type] (key_part,...)
                                        [index_option] ...
                                        | [CONSTRAINT [symbol]] UNIQUE [INDEX|KEY]
                                        [index_name] [index_type] (key_part,...)
                                        [index_option] ...
                                        | [CONSTRAINT [symbol]] FOREIGN KEY
                                        [index_name] (col_name,...)
                                        reference_definition
                                        | check_constraint_definition
                                        
                                        column_definition:
                                        data_type [NOT NULL | NULL] [DEFAULT {literal | (expr)} ]
                                        [AUTO_INCREMENT] [UNIQUE [KEY]] [[PRIMARY] KEY]
                                        [COMMENT 'string']
                                        [COLLATE collation_name]
                                        [COLUMN_FORMAT {FIXED|DYNAMIC|DEFAULT}]
                                        [STORAGE {DISK|MEMORY|DEFAULT}]
                                        [reference_definition]
                                        [check_constraint_definition]
                                        | data_type
                                        [COLLATE collation_name]
                                        [GENERATED ALWAYS] AS (expr)
                                        [VIRTUAL | STORED] [NOT NULL | NULL]
                                        [UNIQUE [KEY]] [[PRIMARY] KEY]
                                        [COMMENT 'string']
                                        [reference_definition]
                                        [check_constraint_definition]
                                        
                                        data_type:
                                        (see Chapter 11, Data Types)
                                        
                                        key_part: {col_name [(length)] | (expr)} [ASC | DESC]
                                        
                                        index_type:
                                        USING {BTREE | HASH}
                                        
                                        index_option:
                                        KEY_BLOCK_SIZE [=] value
                                        | index_type
                                        | WITH PARSER parser_name
                                        | COMMENT 'string'
                                            | {VISIBLE | INVISIBLE}
                                            
                                            check_constraint_definition:
                                            [CONSTRAINT [symbol]] CHECK (expr) [[NOT] ENFORCED]
                                            
                                            reference_definition:
                                            REFERENCES tbl_name (key_part,...)
                                            [MATCH FULL | MATCH PARTIAL | MATCH SIMPLE]
                                            [ON DELETE reference_option]
                                            [ON UPDATE reference_option]
                                            
                                            reference_option:
                                            RESTRICT | CASCADE | SET NULL | NO ACTION | SET DEFAULT
                                            
                                            table_options:
                                                table_option [[,] table_option] ...
                                                
                                                table_option:
                                                AUTO_INCREMENT [=] value
                                                | AVG_ROW_LENGTH [=] value
                                                | [DEFAULT] CHARACTER SET [=] charset_name
                                                | CHECKSUM [=] {0 | 1}
                                                | [DEFAULT] COLLATE [=] collation_name
                                                | COMMENT [=] 'string'
                                                    | COMPRESSION [=] {'ZLIB'|'LZ4'|'NONE'}
                                                    | CONNECTION [=] 'connect_string'
                                                        | {DATA|INDEX} DIRECTORY [=] 'absolute path to directory'
                                                            | DELAY_KEY_WRITE [=] {0 | 1}
                                                            | ENCRYPTION [=] {'Y' | 'N'}
                                                            | ENGINE [=] engine_name
                                                            | INSERT_METHOD [=] { NO | FIRST | LAST }
                                                            | KEY_BLOCK_SIZE [=] value
                                                            | MAX_ROWS [=] value
                                                            | MIN_ROWS [=] value
                                                            | PACK_KEYS [=] {0 | 1 | DEFAULT}
                                                            | PASSWORD [=] 'string'
                                                                | ROW_FORMAT [=] {DEFAULT|DYNAMIC|FIXED|COMPRESSED|REDUNDANT|COMPACT}
                                                                | STATS_AUTO_RECALC [=] {DEFAULT|0|1}
                                                                | STATS_PERSISTENT [=] {DEFAULT|0|1}
                                                                | STATS_SAMPLE_PAGES [=] value
                                                                | TABLESPACE tablespace_name [STORAGE {DISK|MEMORY|DEFAULT}]
                                                                | UNION [=] (tbl_name[,tbl_name]...)
                                                                
                                                                partition_options:
                                                                PARTITION BY
                                                                { [LINEAR] HASH(expr)
                                                                | [LINEAR] KEY [ALGORITHM={1|2}] (column_list)
                                                                | RANGE{(expr) | COLUMNS(column_list)}
                                                                | LIST{(expr) | COLUMNS(column_list)} }
                                                                [PARTITIONS num]
                                                                [SUBPARTITION BY
                                                                { [LINEAR] HASH(expr)
                                                                | [LINEAR] KEY [ALGORITHM={1|2}] (column_list) }
                                                                [SUBPARTITIONS num]
                                                                ]
                                                                [(partition_definition [, partition_definition] ...)]
                                                                
                                                                partition_definition:
                                                                PARTITION partition_name
                                                                [VALUES
                                                                {LESS THAN {(expr | value_list) | MAXVALUE}
                                                                |
                                                                IN (value_list)}]
                                                                [[STORAGE] ENGINE [=] engine_name]
                                                                [COMMENT [=] 'string' ]
                                                                [DATA DIRECTORY [=] 'data_dir']
                                                                [INDEX DIRECTORY [=] 'index_dir']
                                                                [MAX_ROWS [=] max_number_of_rows]
                                                                [MIN_ROWS [=] min_number_of_rows]
                                                                [TABLESPACE [=] tablespace_name]
                                                                [(subpartition_definition [, subpartition_definition] ...)]
                                                                
                                                                subpartition_definition:
                                                                SUBPARTITION logical_name
                                                                [[STORAGE] ENGINE [=] engine_name]
                                                                [COMMENT [=] 'string' ]
                                                                [DATA DIRECTORY [=] 'data_dir']
                                                                [INDEX DIRECTORY [=] 'index_dir']
                                                                [MAX_ROWS [=] max_number_of_rows]
                                                                [MIN_ROWS [=] min_number_of_rows]
                                                                [TABLESPACE [=] tablespace_name]
                                                                
                                                                query_expression:
                                                                SELECT ...   (Some valid select or union statement)
/************
 * 13.1.20 CREATE TABLE Syntax
 */
                                                                CREATE [TEMPORARY] TABLE [IF NOT EXISTS] tbl_name
                                                                (create_definition,...)
                                                                [table_options]
                                                                [partition_options]
                                                                
                                                                CREATE [TEMPORARY] TABLE [IF NOT EXISTS] tbl_name
                                                                [(create_definition,...)]
                                                                [table_options]
                                                                [partition_options]
                                                                [IGNORE | REPLACE]
                                                                [AS] query_expression
                                                                
                                                                CREATE [TEMPORARY] TABLE [IF NOT EXISTS] tbl_name
                                                                { LIKE old_tbl_name | (LIKE old_tbl_name) }
                                                                
                                                                create_definition:
                                                                col_name column_definition
                                                                | {INDEX|KEY} [index_name] [index_type] (key_part,...)
                                                                [index_option] ...
                                                                | {FULLTEXT|SPATIAL} [INDEX|KEY] [index_name] (key_part,...)
                                                                [index_option] ...
                                                                | [CONSTRAINT [symbol]] PRIMARY KEY
                                                                [index_type] (key_part,...)
                                                                [index_option] ...
                                                                | [CONSTRAINT [symbol]] UNIQUE [INDEX|KEY]
                                                                [index_name] [index_type] (key_part,...)
                                                                [index_option] ...
                                                                | [CONSTRAINT [symbol]] FOREIGN KEY
                                                                [index_name] (col_name,...)
                                                                reference_definition
                                                                | check_constraint_definition
                                                                
                                                                column_definition:
                                                                data_type [NOT NULL | NULL] [DEFAULT {literal | (expr)} ]
                                                                [AUTO_INCREMENT] [UNIQUE [KEY]] [[PRIMARY] KEY]
                                                                [COMMENT 'string']
                                                                [COLLATE collation_name]
                                                                [COLUMN_FORMAT {FIXED|DYNAMIC|DEFAULT}]
                                                                [STORAGE {DISK|MEMORY|DEFAULT}]
                                                                [reference_definition]
                                                                [check_constraint_definition]
                                                                | data_type
                                                                [COLLATE collation_name]
                                                                [GENERATED ALWAYS] AS (expr)
                                                                [VIRTUAL | STORED] [NOT NULL | NULL]
                                                                [UNIQUE [KEY]] [[PRIMARY] KEY]
                                                                [COMMENT 'string']
                                                                [reference_definition]
                                                                [check_constraint_definition]
                                                                
                                                                data_type:
                                                                (see Chapter 11, Data Types)
                                                                
                                                                key_part: {col_name [(length)] | (expr)} [ASC | DESC]
                                                                
                                                                index_type:
                                                                USING {BTREE | HASH}
                                                                
                                                                index_option:
                                                                KEY_BLOCK_SIZE [=] value
                                                                | index_type
                                                                | WITH PARSER parser_name
                                                                | COMMENT 'string'
                                                                    | {VISIBLE | INVISIBLE}
                                                                    
                                                                    check_constraint_definition:
                                                                    [CONSTRAINT [symbol]] CHECK (expr) [[NOT] ENFORCED]
                                                                    
                                                                    reference_definition:
                                                                    REFERENCES tbl_name (key_part,...)
                                                                    [MATCH FULL | MATCH PARTIAL | MATCH SIMPLE]
                                                                    [ON DELETE reference_option]
                                                                    [ON UPDATE reference_option]
                                                                    
                                                                    reference_option:
                                                                    RESTRICT | CASCADE | SET NULL | NO ACTION | SET DEFAULT
                                                                    
                                                                    table_options:
                                                                        table_option [[,] table_option] ...
                                                                        
                                                                        table_option:
                                                                        AUTO_INCREMENT [=] value
                                                                        | AVG_ROW_LENGTH [=] value
                                                                        | [DEFAULT] CHARACTER SET [=] charset_name
                                                                        | CHECKSUM [=] {0 | 1}
                                                                        | [DEFAULT] COLLATE [=] collation_name
                                                                        | COMMENT [=] 'string'
                                                                            | COMPRESSION [=] {'ZLIB'|'LZ4'|'NONE'}
                                                                            | CONNECTION [=] 'connect_string'
                                                                                | {DATA|INDEX} DIRECTORY [=] 'absolute path to directory'
                                                                                    | DELAY_KEY_WRITE [=] {0 | 1}
                                                                                    | ENCRYPTION [=] {'Y' | 'N'}
                                                                                    | ENGINE [=] engine_name
                                                                                    | INSERT_METHOD [=] { NO | FIRST | LAST }
                                                                                    | KEY_BLOCK_SIZE [=] value
                                                                                    | MAX_ROWS [=] value
                                                                                    | MIN_ROWS [=] value
                                                                                    | PACK_KEYS [=] {0 | 1 | DEFAULT}
                                                                                    | PASSWORD [=] 'string'
                                                                                        | ROW_FORMAT [=] {DEFAULT|DYNAMIC|FIXED|COMPRESSED|REDUNDANT|COMPACT}
                                                                                        | STATS_AUTO_RECALC [=] {DEFAULT|0|1}
                                                                                        | STATS_PERSISTENT [=] {DEFAULT|0|1}
                                                                                        | STATS_SAMPLE_PAGES [=] value
                                                                                        | TABLESPACE tablespace_name [STORAGE {DISK|MEMORY|DEFAULT}]
                                                                                        | UNION [=] (tbl_name[,tbl_name]...)
                                                                                        
                                                                                        partition_options:
                                                                                        PARTITION BY
                                                                                        { [LINEAR] HASH(expr)
                                                                                        | [LINEAR] KEY [ALGORITHM={1|2}] (column_list)
                                                                                        | RANGE{(expr) | COLUMNS(column_list)}
                                                                                        | LIST{(expr) | COLUMNS(column_list)} }
                                                                                        [PARTITIONS num]
                                                                                        [SUBPARTITION BY
                                                                                        { [LINEAR] HASH(expr)
                                                                                        | [LINEAR] KEY [ALGORITHM={1|2}] (column_list) }
                                                                                        [SUBPARTITIONS num]
                                                                                        ]
                                                                                        [(partition_definition [, partition_definition] ...)]
                                                                                        
                                                                                        partition_definition:
                                                                                        PARTITION partition_name
                                                                                        [VALUES
                                                                                        {LESS THAN {(expr | value_list) | MAXVALUE}
                                                                                        |
                                                                                        IN (value_list)}]
                                                                                        [[STORAGE] ENGINE [=] engine_name]
                                                                                        [COMMENT [=] 'string' ]
                                                                                        [DATA DIRECTORY [=] 'data_dir']
                                                                                        [INDEX DIRECTORY [=] 'index_dir']
                                                                                        [MAX_ROWS [=] max_number_of_rows]
                                                                                        [MIN_ROWS [=] min_number_of_rows]
                                                                                        [TABLESPACE [=] tablespace_name]
                                                                                        [(subpartition_definition [, subpartition_definition] ...)]
                                                                                        
                                                                                        subpartition_definition:
                                                                                        SUBPARTITION logical_name
                                                                                        [[STORAGE] ENGINE [=] engine_name]
                                                                                        [COMMENT [=] 'string' ]
                                                                                        [DATA DIRECTORY [=] 'data_dir']
                                                                                        [INDEX DIRECTORY [=] 'index_dir']
                                                                                        [MAX_ROWS [=] max_number_of_rows]
                                                                                        [MIN_ROWS [=] min_number_of_rows]
                                                                                        [TABLESPACE [=] tablespace_name]
                                                                                        
                                                                                        query_expression:
                                                                                        SELECT ...   (Some valid select or union statement)
/***********************
 * 13.1.20.1 CREATE TABLE Statement Retention
 */
/**************************
 * 13.1.20.2 Files Created by CREATE TABLE
 */
/***************************
 * 13.1.20.3 CREATE TEMPORARY TABLE Syntax
 */      
/**************************
 * 13.1.20.4 CREATE TABLE ... LIKE Syntax
 */
 /****************************
  * 13.1.20.5 CREATE TABLE ... SELECT Syntax
  */
 /**********************
  * 13.1.20.6 Using FOREIGN KEY Constraints
  */
  /*************************
   * 13.1.20.7 CHECK Constraints
   */
  /*********************
   * 13.1.20.8 Silent Column Specification Changes
   */
   /**********************
    * 13.1.20.9 CREATE TABLE and Generated Columns
    */
   /*************************
    * 13.1.20.10 Secondary Indexes and Generated Columns
    */
    /****************
     * 13.1.20.11 Setting NDB_TABLE Options
     */
/*******************
 * 13.1.21 CREATE TABLESPACE Syntax
 */
                                                                                        CREATE [UNDO] TABLESPACE tablespace_name
                                                                                        
                                                                                        InnoDB and NDB:
                                                                                        [ADD DATAFILE 'file_name']
                                                                                        
                                                                                        InnoDB only:
                                                                                        [FILE_BLOCK_SIZE = value]
                                                                                        [ENCRYPTION [=] {'Y' | 'N'}]
                                                                                        
                                                                                        NDB only:
                                                                                        USE LOGFILE GROUP logfile_group
                                                                                        [EXTENT_SIZE [=] extent_size]
                                                                                        [INITIAL_SIZE [=] initial_size]
                                                                                        [AUTOEXTEND_SIZE [=] autoextend_size]
                                                                                        [MAX_SIZE [=] max_size]
                                                                                        [NODEGROUP [=] nodegroup_id]
                                                                                        [WAIT]
                                                                                        [COMMENT [=] 'string']
                                                                                        
                                                                                        InnoDB and NDB:
                                                                                        [ENGINE [=] engine_name]
/******************
 * 13.1.22 CREATE TRIGGER Syntax
 */
                                                                                        CREATE
                                                                                        [DEFINER = { user | CURRENT_USER }]
                                                                                        TRIGGER trigger_name
                                                                                        trigger_time trigger_event
                                                                                        ON tbl_name FOR EACH ROW
                                                                                        [trigger_order]
                                                                                        trigger_body
                                                                                        
                                                                                        trigger_time: { BEFORE | AFTER }
                                                                                        
                                                                                        trigger_event: { INSERT | UPDATE | DELETE }
                                                                                        
                                                                                        trigger_order: { FOLLOWS | PRECEDES } other_trigger_name
/****************
 * 13.1.23 CREATE VIEW Syntax
 */
                                                                                        CREATE
                                                                                        [OR REPLACE]
                                                                                        [ALGORITHM = {UNDEFINED | MERGE | TEMPTABLE}]
                                                                                        [DEFINER = { user | CURRENT_USER }]
                                                                                        [SQL SECURITY { DEFINER | INVOKER }]
                                                                                        VIEW view_name [(column_list)]
                                                                                        AS select_statement
                                                                                        [WITH [CASCADED | LOCAL] CHECK OPTION]
/******************
 * 13.1.24 DROP DATABASE Syntax
 */
                                                                                        DROP {DATABASE | SCHEMA} [IF EXISTS] db_name
/*******************
 * 13.1.25 DROP EVENT Syntax
 */
                                                                                        DROP EVENT [IF EXISTS] event_name
/****************
 * 13.1.26 DROP FUNCTION Syntax
 */
/****************
 * 13.1.27 DROP INDEX Syntax
 */                         
                                                                                        DROP INDEX index_name ON tbl_name
                                                                                        [algorithm_option | lock_option] ...
                                                                                        
                                                                                        algorithm_option:
                                                                                        ALGORITHM [=] {DEFAULT|INPLACE|COPY}
                                                                                        
                                                                                        lock_option:
                                                                                        LOCK [=] {DEFAULT|NONE|SHARED|EXCLUSIVE}
/**********************
 * 13.1.28 DROP LOGFILE GROUP Syntax
 */
                                                                                        DROP LOGFILE GROUP logfile_group
                                                                                        ENGINE [=] engine_name
/**********************
 * 13.1.29 DROP PROCEDURE and DROP FUNCTION Syntax
 */
                                                                                        DROP {PROCEDURE | FUNCTION} [IF EXISTS] sp_name
/*******************
 * 13.1.30 DROP SERVER Syntax
 */                        
                                                                                        DROP SERVER [ IF EXISTS ] server_name
/*****************
 * 13.1.31 DROP SPATIAL REFERENCE SYSTEM Syntax
 */
                                                                                        DROP SPATIAL REFERENCE SYSTEM
                                                                                        [IF EXISTS]
                                                                                        srid
                                                                                        
                                                                                        srid: 32-bit unsigned integer
/*******************
 * 13.1.32 DROP TABLE Syntax
 */
                                                                                        DROP [TEMPORARY] TABLE [IF EXISTS]
                                                                                        tbl_name [, tbl_name] ...
                                                                                        [RESTRICT | CASCADE]
/********************
 * 13.1.33 DROP TABLESPACE Syntax
 */
                                                                                        DROP [UNDO] TABLESPACE tablespace_name
                                                                                        [ENGINE [=] engine_name]
/**************
 * 13.1.34 DROP TRIGGER Syntax
 */
                                                                                        DROP TRIGGER [IF EXISTS] [schema_name.]trigger_name
/****************
 * 13.1.35 DROP VIEW Syntax
 */
                                                                                        DROP VIEW [IF EXISTS]
                                                                                        view_name [, view_name] ...
                                                                                        [RESTRICT | CASCADE]
/**************
 * 13.1.36 RENAME TABLE Syntax
 */
                                                                                        RENAME TABLE
                                                                                        tbl_name TO new_tbl_name
                                                                                        [, tbl_name2 TO new_tbl_name2] ...
/********************
 * 13.1.37 TRUNCATE TABLE Syntax
 */
                                                                                        TRUNCATE [TABLE] tbl_name
