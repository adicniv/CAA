<?php
Class MySQLi{
    /********************************
     * 属性
     * 
     * *******************************
     */
    /**
     * 获取上次 Mysql 操作受影响的行数
     * Gets the number of affected rows in a previous MySQL operation
     * @param unknown $param
     * @return string
     */
    function mysqli_affected_rows($param) {
        $mysqli::affected_rows;
        return "";
    }
    /**
     *返回 Mysql 客户端版本信息，类型为 string
     *Returns the MySQL client version as a string
     * @param unknown $param
     * @return string
     */
    function mysqli_get_client_info($param) {
        $mysqli::client_info;
        return "";
    }
    /**
     *返回 Mysql 客户端版本信息，类型为 integer
     *Returns MySQL client version info as an integer
     * @param unknown $param
     * @return string
     */
    function mysqli_get_client_version($param) {
        $mysqli::client_version;
        return "";
    }
    /**
     *返回最后一次连接数据库的错误代码
     *Returns the error code from last connect call
     * @param unknown $param
     * @return string
     */
    function mysqli_connect_errno($param) {
        $mysqli::connect_errno;
        return "";
    }
    /**
     *返回最后一次连接数据库的错误描述，类型为字符串
     *Returns a string description of the last connect error
     * @param unknown $param
     * @return string
     */
    function mysqli_connect_error($param) {
        $mysqli::connect_error;
        return "";
    }
    /**
     *返回最近一次函数调用所产生的错误代码
     *Returns the error code for the most recent function call
     * @param unknown $param
     * @return string
     */
    function mysqli_errno($param) {
        $mysqli::errno;
        return "";
    }
    /**
     *返回最近一次错误代码的描述，类型是字符串
     *Returns a string description of the last error
     * @param unknown $param
     * @return string
     */
    function mysqli_error($param) {
        $mysqli::error;
        return "";
    }
    /**
     *返回最近一次查询中，包含的列的数量
     *Returns the number of columns for the most recent query 
     * @param unknown $param
     * @return string
     */
    function mysqli_field_count($param) {
        mysqli::field_count;
        return "";
    }
    /**
     *返回字符串，表示数据库连接所使用的类型
     *Returns a string representing the type of connection used
     * @param unknown $param
     * @return string
     */
    function mysqli_get_host_info($param) {
        $mysqli::host_info;
        return "";
    }
    /**
     *返回使用的 MySQL 协议的版本信息
     *Returns the version of the MySQL protocol used
     * @param unknown $param
     * @return string
     */
    function mysqli_get_proto_info($param) {
        $mysqli::protocol_version;
        return "";
    }
    /**
     *返回 MySQL 服务器的版本
     *Returns the version of the MySQL server
     * @param unknown $param
     * @return string
     */
    function mysqli_get_server_info($param) {
        $mysqli::server_info;
        return "";
    }
    /**
     *返回 MySQL 服务器的版本，类型为 integer
     *Returns the version of the MySQL server as an integer
     * @param unknown $param
     * @return string
     */
    function mysqli_get_server_version($param) {
        $mysqli::server_version;
        return "";
    }
    /**
     *获取最近一次数据库查询的信息
     *Retrieves information about the most recently executed query
     * @param unknown $param
     * @return string
     */
    function mysqli_info($param) {
        $mysqli::info;
        return "";
    }
    /**
     *返回上次查询中所使用的自动生成的 ID
     *Returns the auto generated id used in the last query
     * @param unknown $param
     * @return string
     */
    function mysqli_insert_id($param) {
        $mysqli::insert_id;
        return "";
    }
    /**
     *返回上次 MySQL 操作的数据库状态错误（SQLSTATE error）
     *Returns the SQLSTATE error from previous MySQL operation
     * @param unknown $param
     * @return string
     */
    function mysqli_sqlstate($param) {
        $mysqli::sqlstate;
        return "";
    }
    /**
     *根据数据库链接，返回最后一次数据库查询内警告的数量
     *Returns the number of warnings from the last query for the given link
     * @param unknown $param
     * @return string
     */
    function mysqli_warning_count($param) {
        $mysqli::warning_count;
        return "";
    }
    /*****************************************
     * 方法
     * Methods
     * ***************************************
     */
    /**
     *打开或关闭数据库的自动提交（auto-committing）功能
     *Turns on or off auto-committing database modifications
     * @param unknown $param
     * @return string
     */
    function mysqli_autocommit($param) {
        mysqli::autocommit();
        return "";
    }
    /**
     *更改指定数据库连接所使用的用户
     *Changes the user of the specified database connection
     * @param unknown $param
     * @return string
     */
    function mysqli_change_user($param) {
        mysqli::change_user();
        return "";
    }
    /**
     *返回数据库连接的默认字符集
     *Returns the default character set for the database connection
     * @param unknown $param
     * @return string
     */
    function mysqli_character_set_name($param) {
        mysqli::character_set_name();
        mysqli::client_encoding; //别名
        return "";
    }
    /**
     *关闭先前打开的数据库连接
     *Closes a previously opened database connection
     * @param unknown $param
     * @return string
     */
    function mysqli_close($param) {
        mysqli::close;
        return "";
    }
    /**
     *提交当前的数据库事务
     *Commits the current transaction
     * @param unknown $param
     * @return string
     */
    function mysqli_commit($param) {
        mysqli::commit();
        return "";
    }
    /**
     *打开新连接到 MySQL 服务器［注意：静态方法]
     *Open a new connection to the MySQL server [Note: static (i.e. class) method]
     * @param unknown $param
     * @return string
     */
    function fmysqli_connect($param) {
        mysqli::__construct();
        return "";
    }
    /**
     *执行调试操作
     *Performs debugging operations
     * @param unknown $param
     * @return string
     */
    function mysqli_debug($param) {
        mysqli::debug();
        return "";
    }
    /**
     *将调试信息转储到日志中
     *Dump debugging information into the log
     * @param unknown $param
     * @return string
     */
    function 	mysqli_dump_debug_info($param) {
        mysqli::dump_debug_info;
        return "";
    }
    /**
     *返回包含字符集信息的对象
     *Returns a character set object
     * @param unknown $param
     * @return string
     */
    function 	mysqli_get_charset($param) {
        mysqli::get_charset();
        return "";
    }
    /**
     *返回客户端连接的统计信息。仅可用于 mysqlnd。
     *Returns client connection statistics. Available only with mysqlnd.
     * @param unknown $param
     * @return string
     */
    function mysqli_get_connection_stats($param) {
        mysqli::get_connection_stats();
        return "";
    }
    /**
     *返回 MySQL 客户端版本的字符串信息
     *	Returns the MySQL client version as a string
     * @param unknown $param
     * @return string
     */
    function M_mysqli_get_client_info($param) {
        mysqli::get_client_info();
        return "";
    }
    /**
     *返回每个客户端进程的统计信息。 仅可用于 mysqlnd。
     *Returns client per-process statistics. Available only with mysqlnd.
     * @param unknown $param
     * @return string
     */
    function mysqli_get_client_stats($param) {
        mysqli::get_client_stats();
        return "";
    }
    /**
     *返回客户端的 Zval 缓存统计信息。 仅可用于 mysqlnd。
     *Returns client Zval cache statistics. Available only with mysqlnd.
     * @param unknown $param
     * @return string
     */
    function 	mysqli_get_cache_stats($param) {
        mysqli::get_cache_stats();
        return "";
    }
    /**
     *返回 MySQLi 连接上的 MySQL 服务器的版本字符串
     *Returns a string representing the version of the MySQL server that the MySQLi extension is connected to
     * @param unknown $param
     * @return string
     */
    function 	M_mysqli_get_server_info($param) {
        mysqli::get_server_info();
        return "";
    }
    /**
     *	文档暂缺
     *NOT DOCUMENTED
     * @param unknown $param
     * @return string
     */
    function 	mysqli_get_warnings($param) {
        mysqli::get_warnings();
        return "";
    }
    /**
     *初始化 MySQLi，返回资源类型的值，可供 mysqli_real_connect 使用。 [不要在对象上调用，它返回了 $mysqli 对象]
     *Initializes MySQLi and returns a resource for use with mysqli_real_connect. [Not called on an object, as it returns a $mysqli object.]
     * @param unknown $param
     * @return string
     */
    function mysqli_init($param) {
        mysqli::init();
        return "";
    }
    /**
     *请求服务器杀死一个 MySQL 线程
     *Asks the server to kill a MySQL thread
     * @param unknown $param
     * @return string
     */
    function mysqli_kill($param) {
        mysqli::kill();
        return "";
    }
    /**
     *检查多语句查询内是否还有更多查询结果
     *Check if there are any more query results from a multi query
     * @param unknown $param
     * @return string
     */
    function mysqli_more_results($param) {
        mysqli::more_results();
        return "";
    }
    /**
     *在数据库内执行多语句查询
     *Performs a query on the database
     * @param unknown $param
     * @return string
     */
    function mysqli_multi_query($param) {
        mysqli::multi_query();
        return "";
    }
    /**
     *从 multi_query 中准备下一个结果集
     *	Prepare next result from multi_query
     * @param unknown $param
     * @return string
     */
    function 	mysqli_next_result($param) {
        mysqli::next_result();
        return "";
    }
    /**
     *设置选项
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
     *Ping 服务器链接，如果链接已经断开，尝试重连
     *Pings a server connection, or tries to reconnect if the connection has gone down
     * @param unknown $param
     * @return string
     */
    function mysqli_ping($param) {
        mysqli::ping();
    }
    /**
     *准备（prepare）需要执行的 SQL 语句
     *Prepare an SQL statement for execution
     * @param unknown $param
     * @return string
     */
    function mysqli_prepare($param) {
        mysqli::prepare();
        return "";
    }
    /**
     *在数据库内执行查询
     *Performs a query on the database
     * @param unknown $param
     * @return string
     */
    function mysqli_query($param) {
        mysqli::query();
        return "";
    }
    /**
     *打开一个 MySQL 服务端的连接
     *Opens a connection to a mysql server
     * @param unknown $param
     * @return string
     */
    function mysqli_real_connect($param) {
        mysqli::real_connect();
        return "";
    }
    /**
     *转义特殊字符，用于 SQL 语句，该转换会考虑连接中当前的字符集
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
     *执行 SQL 查询
     *Execute an SQL query
     * @param unknown $param
     * @return string
     */
    function mysqli_real_query($param) {
        mysqli::real_query();
        return "";
    }
    /**
     *刷新表或缓存，或重置复制（replication）服务器信息
     *Flushes tables or caches, or resets the replication server information
     * @param unknown $param
     * @return string
     */
    function 	mysqli_refresh($param) {
        mysqli::refresh();
        return "";
    }
    /**
     *回滚当前事务
     *Rolls back current transaction
     * @param unknown $param
     * @return string
     */
    function mysqli_rollback($param) {
        mysqli::rollback();
        return "";
    }
    /**
     *为数据库查询设置默认数据库
     *Selects the default database for database queries
     * @param unknown $param
     * @return string
     */
    function mysqli_select_db($param) {
        mysqli::select_db();
        return "";
    }
    /**
     *设置默认的客户端字符集
     *Sets the default client character set
     * @param unknown $param
     * @return string
     */
    function mysqli_set_charset($param) {
        mysqli::set_charset();
        return "";
    }
    /**
     *清除用户设置的 load data local infile 命令的处理程序
     *Unsets user defined handler for load local infile command
     * @param unknown $param
     * @return string
     */
    function 	mysqli_set_local_infile_default($param) {
        mysqli::set_local_infile_default();
        return "";
    }
    /**
     *设置 LOAD DATA LOCAL INFILE 命令执行的回调函数
     *Set callback function for LOAD DATA LOCAL INFILE command
     * @param unknown $param
     * @return string
     */
    function 	mysqli_set_local_infile_handler($param) {
        mysqli::set_local_infile_handler();
        return "";
    }
    /**
     *	使用 SSL 建立安全连接
     *Used for establishing secure connections using SSL
     * @param unknown $param
     * @return string
     */
    function mysqli_ssl_set($param) {
        mysqli::ssl_set();
        return "";
    }
    /**
     *	获取当前系统状态
     *Gets the current system status
     * @param unknown $param
     * @return string
     */
    function mysqli_stat($param) {
        mysqli::stat();
        return "";
    }
    /**
     *初始化语句并且返回供 mysqli_stmt_prepare 使用的对象
     *Initializes a statement and returns an object for use with mysqli_stmt_prepare
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_init($param) {
        mysqli::stmt_init();
        return "";
    }
    /**
     *传输最后一个查询的结果集
     *Transfers a result set from the last query
     * @param unknown $param
     * @return string
     */
    function mysqli_store_result($param) {
        mysqli::store_result();
        return "";
    }
    /**
     *返回当前连接的线程ID
     *Returns the thread ID for the current connection
     * @param unknown $param
     * @return string
     */
    function mysqli_thread_id($param) {
        mysqli::thread_id();
        return "";
    }
    /**
     *返回是否设定了线程安全
     *Returns whether thread safety is given or not
     * @param unknown $param
     * @return string
     */
    function mysqli_thread_safe($param) {
        mysqli::thread_safe();
        return "";
    }
    /**
     *初始化一个结果集的取回
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
     *返回受上次执行语句影响的总行数：修改、删除或插入
     *Returns the total number of rows changed, deleted, or inserted by the last executed statement
     * @param unknown $param
     * @return string
     */
    function 	mysqli_stmt_affected_rows($param) {
        $mysqli_stmt::affected_rows;
        return "";
    }
    /**
     *返回最近一次语句调用的错误代码
     *Returns the error code for the most recent statement call
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_errno($param) {
        $mysqli_stmt::errno;
        return "";
    }
    /**
     *	返回最后一条语句错误的字符串描述
     *Returns a string description for last statement error
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_error($param) {
        $mysqli_stmt::error;
        return "";
    }
    /**
     *返回语句内的字段数量 - 文档暂缺
     *Returns the number of field in the given statement - not documented
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_field_count($param) {
        $mysqli_stmt::field_count;
        return "";
    }
    /**
     *获取上次 INSERT 操作生成的ID
     *Get the ID generated from the previous INSERT operation
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_insert_id($param) {
        $mysqli_stmt::insert_id;
        return "";
    }
    /**
     *返回语句结果集中的行数
     *Return the number of rows in statements result set
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_num_rows($param) {
        $mysqli_stmt::num_rows;
        return "";
    }
    /**
     *返回语句中参数的数量
     *Returns the number of parameter for the given statement
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_param_count($param) {
        $mysqli_stmt::param_count;
        return "";
    }
    /**
     *返回上次执行 SQL 语句的 SQLSTATE 错误代码
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
     * 方法
     * 
     * 
     * ******************************
     */
    /**
     *用于获取语句属性的当前值
     *Used to get the current value of a statement attribute
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_attr_get($param) {
        mysqli_stmt::attr_get();
        return "";
    }
    /**
     *用于修改 prepared 语句的行为
     *Used to modify the behavior of a prepared statement
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_attr_set($param) {
        mysqli_stmt::attr_set();
        return "";
    }
    /**
     *绑定变量参数到 prepared 语句
     *Binds variables to a prepared statement as parameters
     * @param unknown $param
     * @return string
     */
    function 	mysqli_stmt_bind_param($param) {
        mysqli_stmt::bind_param();
        return "";
    }
    /**
     *绑定变量参数到 prepared 语句，用于结果存储
     *Binds variables to a prepared statement for result storage
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_bind_result($param) {
        mysqli_stmt::bind_result();
        return "";
    }
    /**
     *关闭 prepared 语句
     *Closes a prepared statement
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_close($param) {
        mysqli_stmt::close();
        return "";
    }
    /**
     *定位到结果集中的任意行
     *Seeks to an arbitrary row in statement result set
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_data_seek($param) {
        mysqli_stmt::data_seek();
        return "";
    }
    /**
     *执行 prepared 查询
     *Executes a prepared Query
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_execute($param) {
        mysqli_stmt::execute();
        return "";
    }
    /**
     *	获取 prepared 语句中的结果，到指定变量中
     *Fetch results from a prepared statement into the bound variables
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_fetch($param) {
        mysqli_stmt::fetch();
        return "";
    }
    /**
     *释放给定语句处理存储的结果集所占内存
     *Frees stored result memory for the given statement handle
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_free_result($param) {
        mysqli_stmt::free_result();
        return "";
    }
    /**
     *获取 prepared 语句中的结果。 仅可用于 mysqlnd。
     *Gets a result set from a prepared statement. Available only with mysqlnd.
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_get_result($param) {
        mysqli_stmt::get_result();
        return "";
    }
    /**
     *	暂无文档
     *NOT DOCUMENTED
     * @param unknown $param
     * @return string
     */
    function 	mysqli_stmt_get_warnings($param) {
        mysqli_stmt::get_warnings();
        return "";
    }
    /**
     *检查多语句查询中是否还有更多结果
     *Checks if there are more query results from a multiple query
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_more_results($param) {
        mysqli_stmt::more_results();
        return "";
    }
    /**
     *读取多语句查询中下一条结果
     *Reads the next result from a multiple query
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_next_result($param) {
        mysqli_stmt::next_result();
        return "";
    }
    /**
     *参见 $mysqli_stmt::num_rows 中的属性
     *See also property $mysqli_stmt::num_rows
     * @param unknown $param
     * @return string
     */
    function 	M_mysqli_stmt_num_rows($param) {
        mysqli_stmt::num_rows();
        return "";
    }
    /**
     *准备执行 SQL 语句
     *	Prepare an SQL statement for execution
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_prepare($param) {
        mysqli_stmt::prepare();
        return "";
    }
    /**
     *重置 prepare 语句
     *Resets a prepared statement
     * @param unknown $param
     * @return string
     */
    function function_namemysqli_stmt_reset($param) {
        mysqli_stmt::reset();
        return "";
    }
    /**
     *返回 prepare 语句结果集内的元数据
     *Returns result set metadata from a prepared statement
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_result_metadata($param) {
        mysqli_stmt::result_metadata();
        return "";
    }
    /**
     *以块形式发送数据
     *Send data in blocks
     * @param unknown $param
     * @return string
     */
    function mysqli_stmt_send_long_data($param) {
        mysqli_stmt::send_long_data();
        return "";
    }
    /**
     *从 prepare 语句中传输储存结果集
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
     * 方法
     * 
     * *********************************
     */
    /**
     *获取当前字段在结果集指针中的开始位置
     *Get current field offset of a result pointer
     * @param unknown $param
     * @return string
     */
    function mysqli_field_tell($param) {
        $mysqli_result::current_field;
        return "";
    }
    /**
     *获取结果中字段数量
     *Get the number of fields in a result
     * @param unknown $param
     * @return string
     */
    function mysqli_num_fields($param) {
        $mysqli_result::field_count;
        return "";
    }
    /**
     *返回结果集中当前行的列长度
     *Returns the lengths of the columns of the current row in the result set
     * @param unknown $param
     * @return string
     */
    function mysqli_fetch_lengths($param) {
        $mysqli_result::lengths;
        return "";
    }
    /**
     *获取结果中行的数量
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
     * 方法
     * **************************
     */
    /**
     *将结果中的结果指针调整到任意行
     *Adjusts the result pointer to an arbitrary row in the result
     * @param unknown $param
     * @return string
     */
    function mysqli_data_seek($param) {
        mysqli_result::data_seek();
        return "";
    }
    /**
     *抓取所有的结果行并且以关联数据，数值索引数组，或者两者皆有的方式返回结果集。 仅可用于 mysqlnd。
     *Fetches all result rows and returns the result set as an associative array, a numeric array, or both. Available only with mysqlnd.
     * @param unknown $param
     * @return string
     */
    function mysqli_fetch_all($param) {
        mysqli_result::fetch_all();
        return "";
    }
    /**
     *以一个关联数组，数值索引数组，或者两者皆有的方式抓取一行结果
     *Fetch a result row as an associative, a numeric array, or both
     * @param unknown $param
     * @return string
     */
    function	mysqli_fetch_array($param) {
        mysqli_result::fetch_array();
        return "";
    }
    /**
     *以一个关联数组方式抓取一行结果
     *Fetch a result row as an associative array
     * @param unknown $param
     * @return string
     */
    function mysqli_fetch_assoc($param) {
        mysqli_result::fetch_assoc();
        return "";
    }
    /**
     *抓取一个单字段的元数据
     *Fetch meta-data for a single field
     * @param unknown $param
     * @return string
     */
    function mysqli_fetch_field_direct($param) {
        mysqli_result::fetch_field_direct();
        return "";
    }
    /**
     *返回结果集中的下一个字段
     *Returns the next field in the result set
     * @param unknown $param
     * @return string
     */
    function fmysqli_fetch_field($param) {
        mysqli_result::fetch_field();
        return "";
    }
    /**
     *返回一个代表结果集字段的对象数组
     *Returns an array of objects representing the fields in a result set
     * @param unknown $param
     * @return string
     */
    function 	mysqli_fetch_fields($param) {
        mysqli_result::fetch_fields();
        return "";
    }
    /**
     *以一个对象的方式返回一个结果集中的当前行
     *Returns the current row of a result set as an object
     * @param unknown $param
     * @return string
     */
    function 	mysqli_fetch_object($param) {
        mysqli_result::fetch_object();
        return "";
    }
    /**
     *以一个枚举数组方式返回一行结果
     *Get a result row as an enumerated array
     * @param unknown $param
     * @return string
     */
    function 	mysqli_fetch_row($param) {
        mysqli_result::fetch_row();
        return "";
    }
    /**
     *设置结果指针到特定的字段开始位置
     *Set result pointer to a specified field offset
     * @param unknown $param
     * @return string
     */
    function 	mysqli_field_seek($param) {
        mysqli_result::field_seek();
        return "";
    }
    /**
     *释放与一个结果集相关的内存
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
     *方法 
     * 
     * 
     * ********************************
     */
    /**
     *文档暂缺
     *NOT DOCUMENTED
     * @param unknown $param
     * @return string
     */
    function mysqli_embedded_server_end($param) {
        mysqli_driver::embedded_server_end();
        return "";
    }
    /**
     *文档暂缺
     *NOT DOCUMENTED
     * @param unknown $param
     * @return string
     */
    function mysqli_embedded_server_start($param) {
        mysqli_driver::embedded_server_start();
        return "";
    }   
}