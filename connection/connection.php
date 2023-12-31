<?php

    $connection = mysqli_connect("localhosts","root","","vip");
    /*
        mysqli_connect() : function return connection true

        take arguments :-

        1 : hostname {x}
        2 : username {x}
        3 : password
        4 : database
    */ 
    if ($connection)
    {
        echo (" connection successfully ");
    }
    else
    {
        die (mysqli_connect_errno()." connection error : ".mysqli_connect_error());
    }
    $query = "insert into onam values(2)";

    $result = mysqli_query($connection,$query);
    /*
        mysqli_query(); : function return response of mysqli 
    
        take arguments :-

        1 :  connection     {x}
        2 :  query          {x}
    */
    if (mysqli_close($connection))
    {
        echo (" connection closed ");
    }
    /*
        mysqli_close : function return ture false of connection cut

        take argument :-

        1 :     connection  {x}
    */ 
?>

affected_rows() 	Returns the number of affected rows in the previous MySQL operation
autocommit() 	Turns on or off auto-committing database modifications
begin_transaction() 	Starts a transaction
change_user() 	Changes the user of the specified database connection
character_set_name() 	Returns the default character set for the database connection
close() 	Closes a previously opened database connection
commit() 	Commits the current transaction
connect() 	Opens a new connection to the MySQL server
connect_errno() 	Returns the error code from the last connection error
connect_error() 	Returns the error description from the last connection error
data_seek() 	Adjusts the result pointer to an arbitrary row in the result-set
debug() 	Performs debugging operations
dump_debug_info() 	Dumps debugging info into the log
errno() 	Returns the last error code for the most recent function call
error() 	Returns the last error description for the most recent function call
error_list() 	Returns a list of errors for the most recent function call
fetch_all() 	Fetches all result rows as an associative array, a numeric array, or both
fetch_array() 	Fetches a result row as an associative, a numeric array, or both
fetch_assoc() 	Fetches a result row as an associative array
fetch_field() 	Returns the next field in the result-set, as an object
fetch_field_direct() 	Returns meta-data for a single field in the result-set, as an object
fetch_fields() 	Returns an array of objects that represent the fields in a result-set
fetch_lengths() 	Returns the lengths of the columns of the current row in the result-set
fetch_object() 	Returns the current row of a result-set, as an object
fetch_row() 	Fetches one row from a result-set and returns it as an enumerated array
field_count() 	Returns the number of columns for the most recent query
field_seek() 	Sets the field cursor to the given field offset
get_charset() 	Returns a character set object
get_client_info() 	Returns the MySQL client library version
get_client_stats() 	Returns statistics about client per-process
get_client_version() 	Returns the MySQL client library version as an integer
get_connection_stats() 	Returns statistics about the client connection
get_host_info() 	Returns the MySQL server hostname and the connection type
get_proto_info() 	Returns the MySQL protocol version
get_server_info() 	Returns the MySQL server version
get_server_version() 	Returns the MySQL server version as an integer
info() 	Returns information about the last executed query
init() 	Initializes MySQLi and returns a resource for use with real_connect()
insert_id() 	Returns the auto-generated id from the last query
kill() 	Asks the server to kill a MySQL thread
more_results() 	Checks if there are more results from a multi query
multi_query() 	Performs one or more queries on the database
next_result() 	Prepares the next result-set from multi_query()
options() 	Sets extra connect options and affect behavior for a connection
ping() 	Pings a server connection, or tries to reconnect if the connection has gone down
poll() 	Polls connections
prepare() 	Prepares an SQL statement for execution
query() 	Performs a query against a database
real_connect() 	Opens a new connection to the MySQL server
real_escape_string() 	Escapes special characters in a string for use in an SQL statement
real_query() 	Executes a single SQL query
reap_async_query() 	Returns result from an async SQL query
refresh() 	Refreshes/flushes tables or caches, or resets the replication server information
rollback() 	Rolls back the current transaction for the database
select_db() 	Select the default database for database queries
set_charset() 	Sets the default client character set
set_local_infile_default() 	Unsets user defined handler for load local infile command
set_local_infile_handler() 	Set callback function for LOAD DATA LOCAL INFILE command
sqlstate() 	Returns the SQLSTATE error code for the error
ssl_set() 	Used to establish secure connections using SSL
stat() 	Returns the current system status
stmt_init() 	Initializes a statement and returns an object for use with stmt_prepare()
store_result() 	Transfers a result-set from the last query
thread_id() 	Returns the thread ID for the current connection
thread_safe() 	Returns whether the client library is compiled as thread-safe
use_result() 	Initiates the retrieval of a result-set from the last query executed
warning_count() 	Returns the number of warnings from the last query in the connection