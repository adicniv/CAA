<?php
Class MySQLi{
    /********************************
     * ����
     * 
     * *******************************
     */
    /**
     * ��ȡ�ϴ� Mysql ������Ӱ�������
     * Gets the number of affected rows in a previous MySQL operation
     * @param unknown $param
     * @return string
     */
    function mysqli_affected_rows($param) {
        $mysqli::affected_rows;
        return "";
    }
    /**
     *���� Mysql �ͻ��˰汾��Ϣ������Ϊ string
     *Returns the MySQL client version as a string
     * @param unknown $param
     * @return string
     */
    function mysqli_get_client_info($param) {
        $mysqli::client_info;
        return "";
    }
    /**
     *���� Mysql �ͻ��˰汾��Ϣ������Ϊ integer
     *Returns MySQL client version info as an integer
     * @param unknown $param
     * @return string
     */
    function mysqli_get_client_version($param) {
        $mysqli::client_version;
        return "";
    }
    /**
     *�������һ���������ݿ�Ĵ������
     *Returns the error code from last connect call
     * @param unknown $param
     * @return string
     */
    function mysqli_connect_errno($param) {
        $mysqli::connect_errno;
        return "";
    }
    /**
     *�������һ���������ݿ�Ĵ�������������Ϊ�ַ���
     *Returns a string description of the last connect error
     * @param unknown $param
     * @return string
     */
    function mysqli_connect_error($param) {
        $mysqli::connect_error;
        return "";
    }
    /**
     *�������һ�κ��������������Ĵ������
     *Returns the error code for the most recent function call
     * @param unknown $param
     * @return string
     */
    function mysqli_errno($param) {
        $mysqli::errno;
        return "";
    }
    /**
     *�������һ�δ��������������������ַ���
     *Returns a string description of the last error
     * @param unknown $param
     * @return string
     */
    function mysqli_error($param) {
        $mysqli::error;
        return "";
    }
    /**
     *�������һ�β�ѯ�У��������е�����
     *Returns the number of columns for the most recent query 
     * @param unknown $param
     * @return string
     */
    function mysqli_field_count($param) {
        mysqli::field_count;
        return "";
    }
    /**
     *�����ַ�������ʾ���ݿ�������ʹ�õ�����
     *Returns a string representing the type of connection used
     * @param unknown $param
     * @return string
     */
    function mysqli_get_host_info($param) {
        $mysqli::host_info;
        return "";
    }
    /**
     *����ʹ�õ� MySQL Э��İ汾��Ϣ
     *Returns the version of the MySQL protocol used
     * @param unknown $param
     * @return string
     */
    function mysqli_get_proto_info($param) {
        $mysqli::protocol_version;
        return "";
    }
    /**
     *���� MySQL �������İ汾
     *Returns the version of the MySQL server
     * @param unknown $param
     * @return string
     */
    function mysqli_get_server_info($param) {
        $mysqli::server_info;
        return "";
    }
    /**
     *���� MySQL �������İ汾������Ϊ integer
     *Returns the version of the MySQL server as an integer
     * @param unknown $param
     * @return string
     */
    function mysqli_get_server_version($param) {
        $mysqli::server_version;
        return "";
    }
    /**
     *��ȡ���һ�����ݿ��ѯ����Ϣ
     *Retrieves information about the most recently executed query
     * @param unknown $param
     * @return string
     */
    function mysqli_info($param) {
        $mysqli::info;
        return "";
    }
    /**
     *�����ϴβ�ѯ����ʹ�õ��Զ����ɵ� ID
     *Returns the auto generated id used in the last query
     * @param unknown $param
     * @return string
     */
    function mysqli_insert_id($param) {
        $mysqli::insert_id;
        return "";
    }
    /**
     *�����ϴ� MySQL ���������ݿ�״̬����SQLSTATE error��
     *Returns the SQLSTATE error from previous MySQL operation
     * @param unknown $param
     * @return string
     */
    function mysqli_sqlstate($param) {
        $mysqli::sqlstate;
        return "";
    }
    /**
     *�������ݿ����ӣ��������һ�����ݿ��ѯ�ھ��������
     *Returns the number of warnings from the last query for the given link
     * @param unknown $param
     * @return string
     */
    function mysqli_warning_count($param) {
        $mysqli::warning_count;
        return "";
    }
    /*****************************************
     * ����
     * Methods
     * ***************************************
     */
    /**
     *�򿪻�ر����ݿ���Զ��ύ��auto-committing������
     *Turns on or off auto-committing database modifications
     * @param unknown $param
     * @return string
     */
    function mysqli_autocommit($param) {
        mysqli::autocommit();
        return "";
    }
    /**
     *����ָ�����ݿ�������ʹ�õ��û�
     *Changes the user of the specified database connection
     * @param unknown $param
     * @return string
     */
    function mysqli_change_user($param) {
        mysqli::change_user();
        return "";
    }
    /**
     *�������ݿ����ӵ�Ĭ���ַ���
     *Returns the default character set for the database connection
     * @param unknown $param
     * @return string
     */
    function mysqli_character_set_name($param) {
        mysqli::character_set_name();
        mysqli::client_encoding; //����
        return "";
    }
    /**
     *�ر���ǰ�򿪵����ݿ�����
     *Closes a previously opened database connection
     * @param unknown $param
     * @return string
     */
    function mysqli_close($param) {
        mysqli::close;
        return "";
    }
    /**
     *�ύ��ǰ�����ݿ�����
     *Commits the current transaction
     * @param unknown $param
     * @return string
     */
    function mysqli_commit($param) {
        mysqli::commit();
        return "";
    }
    /**
     *�������ӵ� MySQL ��������ע�⣺��̬����]
     *Open a new connection to the MySQL server [Note: static (i.e. class) method]
     * @param unknown $param
     * @return string
     */
    function fmysqli_connect($param) {
        mysqli::__construct();
        return "";
    }
    /**
     *ִ�е��Բ���
     *Performs debugging operations
     * @param unknown $param
     * @return string
     */
    function mysqli_debug($param) {
        mysqli::debug();
        return "";
    }
    /**
     *��������Ϣת������־��
     *Dump debugging information into the log
     * @param unknown $param
     * @return string
     */
    function 	mysqli_dump_debug_info($param) {
        mysqli::dump_debug_info;
        return "";
    }
    /**
     *���ذ����ַ�����Ϣ�Ķ���
     *Returns a character set object
     * @param unknown $param
     * @return string
     */
    function 	mysqli_get_charset($param) {
        mysqli::get_charset();
        return "";
    }
    /**
     *���ؿͻ������ӵ�ͳ����Ϣ���������� mysqlnd��
     *Returns client connection statistics. Available only with mysqlnd.
     * @param unknown $param
     * @return string
     */
    function mysqli_get_connection_stats($param) {
        mysqli::get_connection_stats();
        return "";
    }
    /**
     *���� MySQL �ͻ��˰汾���ַ�����Ϣ
     *	Returns the MySQL client version as a string
     * @param unknown $param
     * @return string
     */
    function M_mysqli_get_client_info($param) {
        mysqli::get_client_info();
        return "";
    }
    /**
     *����ÿ���ͻ��˽��̵�ͳ����Ϣ�� �������� mysqlnd��
     *Returns client per-process statistics. Available only with mysqlnd.
     * @param unknown $param
     * @return string
     */
    function mysqli_get_client_stats($param) {
        mysqli::get_client_stats();
        return "";
    }
    /**
     *���ؿͻ��˵� Zval ����ͳ����Ϣ�� �������� mysqlnd��
     *Returns client Zval cache statistics. Available only with mysqlnd.
     * @param unknown $param
     * @return string
     */
    function 	mysqli_get_cache_stats($param) {
        mysqli::get_cache_stats();
        return "";
    }
    /**
     *���� MySQLi �����ϵ� MySQL �������İ汾�ַ���
     *Returns a string representing the version of the MySQL server that the MySQLi extension is connected to
     * @param unknown $param
     * @return string
     */
    function 	M_mysqli_get_server_info($param) {
        mysqli::get_server_info();
        return "";
    }
    /**
     *	�ĵ���ȱ
     *NOT DOCUMENTED
     * @param unknown $param
     * @return string
     */
    function 	mysqli_get_warnings($param) {
        mysqli::get_warnings();
        return "";
    }
    /**
     *��ʼ�� MySQLi��������Դ���͵�ֵ���ɹ� mysqli_real_connect ʹ�á� [��Ҫ�ڶ����ϵ��ã��������� $mysqli ����]
     *Initializes MySQLi and returns a resource for use with mysqli_real_connect. [Not called on an object, as it returns a $mysqli object.]
     * @param unknown $param
     * @return string
     */
    function mysqli_init($param) {
        mysqli::init();
        return "";
    }
    /**
     *���������ɱ��һ�� MySQL �߳�
     *Asks the server to kill a MySQL thread
     * @param unknown $param
     * @return string
     */
    function mysqli_kill($param) {
        mysqli::kill();
        return "";
    }
    /**
     *��������ѯ���Ƿ��и����ѯ���
     *Check if there are any more query results from a multi query
     * @param unknown $param
     * @return string
     */
    function mysqli_more_results($param) {
        mysqli::more_results();
        return "";
    }
    /**
     *�����ݿ���ִ�ж�����ѯ
     *Performs a query on the database
     * @param unknown $param
     * @return string
     */
    function mysqli_multi_query($param) {
        mysqli::multi_query();
        return "";
    }
    /**
     *�� multi_query ��׼����һ�������
     *	Prepare next result from multi_query
     * @param unknown $param
     * @return string
     */
    function 	mysqli_next_result($param) {
        mysqli::next_result();
        return "";
    }
    /**
     *����ѡ��
     *Set options
     * @param unknown $param
     * @return string
     */
    function mysqli_options($param) {
        mysqli::options();
        mysqli_set_opt();
        return "";
    }
    /**
     *Ping ���������ӣ���������Ѿ��Ͽ�����������
     *Pings a server connection, or tries to reconnect if the connection has gone down
     * @param unknown $param
     * @return string
     */
    function mysqli_ping($param) {
        mysqli::ping();
    }
    /**
     *׼����prepare����Ҫִ�е� SQL ���
     *Prepare an SQL statement for execution
     * @param unknown $param
     * @return string
     */
    function mysqli_prepare($param) {
        mysqli::prepare();
        return "";
    }
    /**
     *�����ݿ���ִ�в�ѯ
     *Performs a query on the database
     * @param unknown $param
     * @return string
     */
    function mysqli_query($param) {
        mysqli::query();
        return "";
    }
    /**
     *��һ�� MySQL ����˵�����
     *Opens a connection to a mysql server
     * @param unknown $param
     * @return string
     */
    function mysqli_real_connect($param) {
        mysqli::real_connect();
        return "";
    }
    /**
     *ת�������ַ������� SQL ��䣬��ת���ῼ�������е�ǰ���ַ���
     *Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
     * @param unknown $param
     * @return string
     */
    function mysqli_real_escape_string($param) {
        mysqli::real_escape_string();
        mysqli::escape_string();//Alias
        return "";
    }
    /**
     *ִ�� SQL ��ѯ
     *Execute an SQL query
     * @param unknown $param
     * @return string
     */
    function mysqli_real_query($param) {
        mysqli::real_query();
        return "";
    }
    /**
     *ˢ�±�򻺴棬�����ø��ƣ�replication����������Ϣ
     *Flushes tables or caches, or resets the replication server information
     * @param unknown $param
     * @return string
     */
    function 	mysqli_refresh($param) {
        mysqli::refresh();
        return "";
    }
    /**
     *�ع���ǰ����
     *Rolls back current transaction
     * @param unknown $param
     * @return string
     */
    function mysqli_rollback($param) {
        mysqli::rollback();
        return "";
    }
    /**
     *Ϊ���ݿ��ѯ����Ĭ�����ݿ�
     *Selects the default database for database queries
     * @param unknown $param
     * @return string
     */
    function mysqli_select_db($param) {
        mysqli::select_db();
        return "";
    }
    /**
     *����Ĭ�ϵĿͻ����ַ���
     *Sets the default client character set
     * @param unknown $param
     * @return string
     */
    function mysqli_set_charset($param) {
        mysqli::set_charset();
        return "";
    }
    /**
     *����û����õ� load data local infile ����Ĵ������
     *Unsets user defined handler for load local infile command
     * @param unknown $param
     * @return string
     */
    function 	mysqli_set_local_infile_default($param) {
        mysqli::set_local_infile_default();
        return "";
    }
    /**
     *���� LOAD DATA LOCAL INFILE ����ִ�еĻص�����
     *Set callback function for LOAD DATA LOCAL INFILE command
     * @param unknown $param
     * @return string
     */
    function 	mysqli_set_local_infile_handler($param) {
        mysqli::set_local_infile_handler();
        return "";
    }
    /**
     *	ʹ�� SSL ������ȫ����
     *Used for establishing secure connections using SSL
     * @param unknown $param
     * @return string
     */
    function mysqli_ssl_set($param) {
        mysqli::ssl_set();
        return "";
    }
    /**
     *	��ȡ��ǰϵͳ״̬
     *Gets the current system status
     * @param unknown $param
     * @return string
     */
    function mysqli_stat($param) {
        mysqli::stat();
        return "";
    }
    /**
     *��ʼ����䲢�ҷ��ع� mysqli_stmt_prepare ʹ�õĶ���
     *Initializes a statement and returns an object for use with mysqli_stmt_prepare
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_init($param) {
        mysqli::stmt_init();
        return "";
    }
    /**
     *�������һ����ѯ�Ľ����
     *Transfers a result set from the last query
     * @param unknown $param
     * @return string
     */
    function mysqli_store_result($param) {
        mysqli::store_result();
        return "";
    }
    /**
     *���ص�ǰ���ӵ��߳�ID
     *Returns the thread ID for the current connection
     * @param unknown $param
     * @return string
     */
    function mysqli_thread_id($param) {
        mysqli::thread_id();
        return "";
    }
    /**
     *�����Ƿ��趨���̰߳�ȫ
     *Returns whether thread safety is given or not
     * @param unknown $param
     * @return string
     */
    function mysqli_thread_safe($param) {
        mysqli::thread_safe();
        return "";
    }
    /**
     *��ʼ��һ���������ȡ��
     *Initiate a result set retrieval
     * @param unknown $param
     * @return string
     */
    function 	mysqli_use_result($param) {
        mysqli::use_result();
        return "";
    }
}    
class MySQL_STMT{    
    /**
     *�������ϴ�ִ�����Ӱ������������޸ġ�ɾ�������
     *Returns the total number of rows changed, deleted, or inserted by the last executed statement
     * @param unknown $param
     * @return string
     */
    function 	mysqli_stmt_affected_rows($param) {
        $mysqli_stmt::affected_rows;
        return "";
    }
    /**
     *�������һ�������õĴ������
     *Returns the error code for the most recent statement call
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_errno($param) {
        $mysqli_stmt::errno;
        return "";
    }
    /**
     *	�������һ����������ַ�������
     *Returns a string description for last statement error
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_error($param) {
        $mysqli_stmt::error;
        return "";
    }
    /**
     *��������ڵ��ֶ����� - �ĵ���ȱ
     *Returns the number of field in the given statement - not documented
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_field_count($param) {
        $mysqli_stmt::field_count;
        return "";
    }
    /**
     *��ȡ�ϴ� INSERT �������ɵ�ID
     *Get the ID generated from the previous INSERT operation
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_insert_id($param) {
        $mysqli_stmt::insert_id;
        return "";
    }
    /**
     *������������е�����
     *Return the number of rows in statements result set
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_num_rows($param) {
        $mysqli_stmt::num_rows;
        return "";
    }
    /**
     *��������в���������
     *Returns the number of parameter for the given statement
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_param_count($param) {
        $mysqli_stmt::param_count;
        return "";
    }
    /**
     *�����ϴ�ִ�� SQL ���� SQLSTATE �������
     *Returns SQLSTATE error from previous statement operation
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_sqlstate($param) {
        $mysqli_stmt::sqlstate;
        return "";
    }
    /***********************************
     * 
     * 
     * 
     * ����
     * 
     * 
     * ******************************
     */
    /**
     *���ڻ�ȡ������Եĵ�ǰֵ
     *Used to get the current value of a statement attribute
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_attr_get($param) {
        mysqli_stmt::attr_get();
        return "";
    }
    /**
     *�����޸� prepared ������Ϊ
     *Used to modify the behavior of a prepared statement
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_attr_set($param) {
        mysqli_stmt::attr_set();
        return "";
    }
    /**
     *�󶨱��������� prepared ���
     *Binds variables to a prepared statement as parameters
     * @param unknown $param
     * @return string
     */
    function 	mysqli_stmt_bind_param($param) {
        mysqli_stmt::bind_param();
        return "";
    }
    /**
     *�󶨱��������� prepared ��䣬���ڽ���洢
     *Binds variables to a prepared statement for result storage
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_bind_result($param) {
        mysqli_stmt::bind_result();
        return "";
    }
    /**
     *�ر� prepared ���
     *Closes a prepared statement
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_close($param) {
        mysqli_stmt::close();
        return "";
    }
    /**
     *��λ��������е�������
     *Seeks to an arbitrary row in statement result set
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_data_seek($param) {
        mysqli_stmt::data_seek();
        return "";
    }
    /**
     *ִ�� prepared ��ѯ
     *Executes a prepared Query
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_execute($param) {
        mysqli_stmt::execute();
        return "";
    }
    /**
     *	��ȡ prepared ����еĽ������ָ��������
     *Fetch results from a prepared statement into the bound variables
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_fetch($param) {
        mysqli_stmt::fetch();
        return "";
    }
    /**
     *�ͷŸ�����䴦��洢�Ľ������ռ�ڴ�
     *Frees stored result memory for the given statement handle
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_free_result($param) {
        mysqli_stmt::free_result();
        return "";
    }
    /**
     *��ȡ prepared ����еĽ���� �������� mysqlnd��
     *Gets a result set from a prepared statement. Available only with mysqlnd.
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_get_result($param) {
        mysqli_stmt::get_result();
        return "";
    }
    /**
     *	�����ĵ�
     *NOT DOCUMENTED
     * @param unknown $param
     * @return string
     */
    function 	mysqli_stmt_get_warnings($param) {
        mysqli_stmt::get_warnings();
        return "";
    }
    /**
     *��������ѯ���Ƿ��и�����
     *Checks if there are more query results from a multiple query
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_more_results($param) {
        mysqli_stmt::more_results();
        return "";
    }
    /**
     *��ȡ������ѯ����һ�����
     *Reads the next result from a multiple query
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_next_result($param) {
        mysqli_stmt::next_result();
        return "";
    }
    /**
     *�μ� $mysqli_stmt::num_rows �е�����
     *See also property $mysqli_stmt::num_rows
     * @param unknown $param
     * @return string
     */
    function 	M_mysqli_stmt_num_rows($param) {
        mysqli_stmt::num_rows();
        return "";
    }
    /**
     *׼��ִ�� SQL ���
     *	Prepare an SQL statement for execution
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_prepare($param) {
        mysqli_stmt::prepare();
        return "";
    }
    /**
     *���� prepare ���
     *Resets a prepared statement
     * @param unknown $param
     * @return string
     */
    function function_namemysqli_stmt_reset($param) {
        mysqli_stmt::reset();
        return "";
    }
    /**
     *���� prepare ��������ڵ�Ԫ����
     *Returns result set metadata from a prepared statement
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_result_metadata($param) {
        mysqli_stmt::result_metadata();
        return "";
    }
    /**
     *�Կ���ʽ��������
     *Send data in blocks
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_send_long_data($param) {
        mysqli_stmt::send_long_data();
        return "";
    }
    /**
     *�� prepare ����д��䴢������
     *Transfers a result set from a prepared statement
     * @param unknown $param
     * @return string
     */
    function 	mysqli_stmt_store_result($param) {
        mysqli_stmt::store_result();
        return "";
    }
}
class mysqli_result{
    
    /***********************************
     * 
     * ����
     * 
     * *********************************
     */
    /**
     *��ȡ��ǰ�ֶ��ڽ����ָ���еĿ�ʼλ��
     *Get current field offset of a result pointer
     * @param unknown $param
     * @return string
     */
    function mysqli_field_tell($param) {
        $mysqli_result::current_field;
        return "";
    }
    /**
     *��ȡ������ֶ�����
     *Get the number of fields in a result
     * @param unknown $param
     * @return string
     */
    function mysqli_num_fields($param) {
        $mysqli_result::field_count;
        return "";
    }
    /**
     *���ؽ�����е�ǰ�е��г���
     *Returns the lengths of the columns of the current row in the result set
     * @param unknown $param
     * @return string
     */
    function mysqli_fetch_lengths($param) {
        $mysqli_result::lengths;
        return "";
    }
    /**
     *��ȡ������е�����
     *Gets the number of rows in a result
     * @param unknown $param
     * @return string
     */
    function mysqli_num_rows($param) {
        $mysqli_result::num_rows;
        return "";
    }
    /******************************
     * 
     * ����
     * **************************
     */
    /**
     *������еĽ��ָ�������������
     *Adjusts the result pointer to an arbitrary row in the result
     * @param unknown $param
     * @return string
     */
    function mysqli_data_seek($param) {
        mysqli_result::data_seek();
        return "";
    }
    /**
     *ץȡ���еĽ���в����Թ������ݣ���ֵ�������飬�������߽��еķ�ʽ���ؽ������ �������� mysqlnd��
     *Fetches all result rows and returns the result set as an associative array, a numeric array, or both. Available only with mysqlnd.
     * @param unknown $param
     * @return string
     */
    function mysqli_fetch_all($param) {
        mysqli_result::fetch_all();
        return "";
    }
    /**
     *��һ���������飬��ֵ�������飬�������߽��еķ�ʽץȡһ�н��
     *Fetch a result row as an associative, a numeric array, or both
     * @param unknown $param
     * @return string
     */
    function	mysqli_fetch_array($param) {
        mysqli_result::fetch_array();
        return "";
    }
    /**
     *��һ���������鷽ʽץȡһ�н��
     *Fetch a result row as an associative array
     * @param unknown $param
     * @return string
     */
    function mysqli_fetch_assoc($param) {
        mysqli_result::fetch_assoc();
        return "";
    }
    /**
     *ץȡһ�����ֶε�Ԫ����
     *Fetch meta-data for a single field
     * @param unknown $param
     * @return string
     */
    function mysqli_fetch_field_direct($param) {
        mysqli_result::fetch_field_direct();
        return "";
    }
    /**
     *���ؽ�����е���һ���ֶ�
     *Returns the next field in the result set
     * @param unknown $param
     * @return string
     */
    function fmysqli_fetch_field($param) {
        mysqli_result::fetch_field();
        return "";
    }
    /**
     *����һ�����������ֶεĶ�������
     *Returns an array of objects representing the fields in a result set
     * @param unknown $param
     * @return string
     */
    function 	mysqli_fetch_fields($param) {
        mysqli_result::fetch_fields();
        return "";
    }
    /**
     *��һ������ķ�ʽ����һ��������еĵ�ǰ��
     *Returns the current row of a result set as an object
     * @param unknown $param
     * @return string
     */
    function 	mysqli_fetch_object($param) {
        mysqli_result::fetch_object();
        return "";
    }
    /**
     *��һ��ö�����鷽ʽ����һ�н��
     *Get a result row as an enumerated array
     * @param unknown $param
     * @return string
     */
    function 	mysqli_fetch_row($param) {
        mysqli_result::fetch_row();
        return "";
    }
    /**
     *���ý��ָ�뵽�ض����ֶο�ʼλ��
     *Set result pointer to a specified field offset
     * @param unknown $param
     * @return string
     */
    function 	mysqli_field_seek($param) {
        mysqli_result::field_seek();
        return "";
    }
    /**
     *�ͷ���һ���������ص��ڴ�
     *Frees the memory associated with a result
     * @param unknown $param
     * @return string
     */
    function mysqli_free_result($param) {
        mysqli_result::free();
        mysqli_result::close;
        mysqli_result::free_result;
        return "";
    }
}
class mysqlli_driver{
    /********************************
     * 
     *���� 
     * 
     * 
     * ********************************
     */
    /**
     *�ĵ���ȱ
     *NOT DOCUMENTED
     * @param unknown $param
     * @return string
     */
    function mysqli_embedded_server_end($param) {
        mysqli_driver::embedded_server_end();
        return "";
    }
    /**
     *�ĵ���ȱ
     *NOT DOCUMENTED
     * @param unknown $param
     * @return string
     */
    function mysqli_embedded_server_start($param) {
        mysqli_driver::embedded_server_start();
        return "";
    }   
}