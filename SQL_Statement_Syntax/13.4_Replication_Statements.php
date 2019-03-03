<?php
/*******************
 * 13.4 Replication Statements
 */

/***********8
 * 13.4.1 SQL Statements for Controlling Master Servers
 */
/***********
 * 13.4.1.1 PURGE BINARY LOGS Syntax
 */
PURGE { BINARY | MASTER } LOGS
{ TO 'log_name' | BEFORE datetime_expr }
/*************
 * 13.4.1.2 RESET MASTER Syntax
 */
RESET MASTER [TO binary_log_file_index_number]
/***********
 * 13.4.1.3 SET sql_log_bin Syntax
 */
SET sql_log_bin = {OFF|ON}
 /***********
  * 13.4.2 SQL Statements for Controlling Slave Servers
  */
/*************
 * 13.4.2.1 CHANGE MASTER TO Syntax
 */
CHANGE MASTER TO option [, option] ... [ channel_option ]

option:
MASTER_BIND = 'interface_name'
    | MASTER_HOST = 'host_name'
        | MASTER_USER = 'user_name'
            | MASTER_PASSWORD = 'password'
                | MASTER_PORT = port_num
                | MASTER_CONNECT_RETRY = interval
                | MASTER_RETRY_COUNT = count
                | MASTER_DELAY = interval
                | MASTER_HEARTBEAT_PERIOD = interval
                | MASTER_LOG_FILE = 'master_log_name'
                    | MASTER_LOG_POS = master_log_pos
                    | MASTER_AUTO_POSITION = {0|1}
                    | RELAY_LOG_FILE = 'relay_log_name'
                        | RELAY_LOG_POS = relay_log_pos
                        | MASTER_SSL = {0|1}
                        | MASTER_SSL_CA = 'ca_file_name'
                            | MASTER_SSL_CAPATH = 'ca_directory_name'
                                | MASTER_SSL_CERT = 'cert_file_name'
                                    | MASTER_SSL_CRL = 'crl_file_name'
                                        | MASTER_SSL_CRLPATH = 'crl_directory_name'
                                            | MASTER_SSL_KEY = 'key_file_name'
                                                | MASTER_SSL_CIPHER = 'cipher_list'
                                                    | MASTER_SSL_VERIFY_SERVER_CERT = {0|1}
                                                    | MASTER_TLS_VERSION = 'protocol_list'
                                                        | MASTER_PUBLIC_KEY_PATH = 'key_file_name'
                                                            | GET_MASTER_PUBLIC_KEY = {0|1}
                                                            | IGNORE_SERVER_IDS = (server_id_list)
                                                            
                                                            channel_option:
                                                            FOR CHANNEL channel
                                                            
                                                            server_id_list:
                                                            [server_id [, server_id] ... ]
/************
 * 13.4.2.2 CHANGE REPLICATION FILTER Syntax
 */
                                                            CHANGE REPLICATION FILTER filter[, filter]
                                                            [, ...] [FOR CHANNEL channel]
                                                            
                                                            filter:
                                                            REPLICATE_DO_DB = (db_list)
                                                            | REPLICATE_IGNORE_DB = (db_list)
                                                            | REPLICATE_DO_TABLE = (tbl_list)
                                                            | REPLICATE_IGNORE_TABLE = (tbl_list)
                                                            | REPLICATE_WILD_DO_TABLE = (wild_tbl_list)
                                                            | REPLICATE_WILD_IGNORE_TABLE = (wild_tbl_list)
                                                            | REPLICATE_REWRITE_DB = (db_pair_list)
                                                            
                                                            db_list:
                                                            db_name[, db_name][, ...]
                                                            
                                                            tbl_list:
                                                            db_name.table_name[, db_name.table_name][, ...]
                                                            wild_tbl_list:
                                                            'db_pattern.table_pattern'[, 'db_pattern.table_pattern'][, ...]
                                                            
                                                            db_pair_list:
                                                            (db_pair)[, (db_pair)][, ...]
                                                            
                                                            db_pair:
                                                            from_db, to_db
/********
 * 13.4.2.3 MASTER_POS_WAIT() Syntax
 */
                                                            SELECT MASTER_POS_WAIT('master_log_file', master_log_pos [, timeout][, channel])
/******
 * 13.4.2.4 RESET SLAVE Syntax
 */
                                                            RESET SLAVE [ALL] [channel_option]
                                                            
                                                            channel_option:
                                                            FOR CHANNEL channel
/********
 * 13.4.2.5 SET GLOBAL sql_slave_skip_counter Syntax
 */
                                                            SET GLOBAL sql_slave_skip_counter = N
/****************
 * 13.4.2.6 START SLAVE Syntax
 */
                                                            START SLAVE [thread_types] [until_option] [connection_options] [channel_option]
                                                            
                                                            thread_types:
                                                            [thread_type [, thread_type] ... ]
                                                            
                                                            thread_type:
                                                            IO_THREAD | SQL_THREAD
                                                            
                                                            until_option:
                                                            UNTIL {   {SQL_BEFORE_GTIDS | SQL_AFTER_GTIDS} = gtid_set
                                                            |   MASTER_LOG_FILE = 'log_name', MASTER_LOG_POS = log_pos
                                                            |   RELAY_LOG_FILE = 'log_name', RELAY_LOG_POS = log_pos
                                                            |   SQL_AFTER_MTS_GAPS  }
                                                            
                                                            connection_options:
                                                            [USER='user_name'] [PASSWORD='user_pass'] [DEFAULT_AUTH='plugin_name'] [PLUGIN_DIR='plugin_dir']
                                                            
                                                            
                                                            channel_option:
                                                            FOR CHANNEL channel
                                                            
                                                            gtid_set:
                                                            uuid_set [, uuid_set] ...
                                                            | ''
                                                                
                                                            uuid_set:
                                                            uuid:interval[:interval]...
                                                            
                                                            uuid:
                                                            hhhhhhhh-hhhh-hhhh-hhhh-hhhhhhhhhhhh
                                                            
                                                            h:
                                                            [0-9,A-F]
                                                            
                                                            interval:
                                                            n[-n]
                                                            
                                                            (n >= 1)
/*********
 * 13.4.2.7 STOP SLAVE Syntax
 */
                                                            STOP SLAVE [thread_types]
                                                            
                                                            thread_types:
                                                            [thread_type [, thread_type] ... ]
                                                            
                                                            thread_type: IO_THREAD | SQL_THREAD
                                                            
                                                            channel_option:
                                                            FOR CHANNEL channel
 /************
  * 13.4.3 SQL Statements for Controlling Group Replication
  */
 /*********
  * 13.4.3.1 START GROUP_REPLICATION Syntax
  */
                                                            START GROUP_REPLICATION
  /*********
   * 13.4.3.2 STOP GROUP_REPLICATION Syntax
   */
                                                            STOP GROUP_REPLICATION
   /****
    * 13.4.3.3 Function which Configures Group Replication Primary
    */
                                                            STRING group_replication_set_as_primary(member_uuid)
   /*******
    * 13.4.3.4 Functions which Configure the Group Replication Mode
    */
                                                            STRING group_replication_switch_to_single_primary_mode([str])
    /********
     * 13.4.3.5 Functions to Inspect and Configure the Maximum Consensus Instances of a Group
     */
                                                            STRING group_replication_get_write_concurrency()