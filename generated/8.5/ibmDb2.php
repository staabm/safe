<?php

namespace Safe;

use Safe\Exceptions\IbmDb2Exception;

/**
 *
 *
 * @param resource $connection
 * @param \DB2_AUTOCOMMIT_OFF|\DB2_AUTOCOMMIT_ON $value One of the following constants:
 *
 *
 * DB2_AUTOCOMMIT_OFF
 *
 *
 * Turns AUTOCOMMIT off.
 *
 *
 *
 *
 * DB2_AUTOCOMMIT_ON
 *
 *
 * Turns AUTOCOMMIT on.
 *
 *
 *
 *
 * @return \DB2_AUTOCOMMIT_OFF|\DB2_AUTOCOMMIT_ON|bool
 * @throws IbmDb2Exception
 *
 */
function db2_autocommit($connection, $value = null)
{
    error_clear_last();
    if ($value !== null) {
        $safeResult = \db2_autocommit($connection, $value);
    } else {
        $safeResult = \db2_autocommit($connection);
    }
    if ($safeResult === false) {
        throw IbmDb2Exception::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param resource $stmt
 * @param int $parameter_number
 * @param string $variable_name
 * @param int $parameter_type
 * @param int $data_type
 * @param int $precision
 * @param int $scale
 * @throws IbmDb2Exception
 *
 */
function db2_bind_param($stmt, int $parameter_number, string $variable_name, int $parameter_type = DB2_PARAM_IN, int $data_type = 0, int $precision = -1, int $scale = 0): void
{
    error_clear_last();
    $safeResult = \db2_bind_param($stmt, $parameter_number, $variable_name, $parameter_type, $data_type, $precision, $scale);
    if ($safeResult === false) {
        throw IbmDb2Exception::createFromPhpError();
    }
}


/**
 * This function returns an object with read-only properties that return
 * information about the DB2 database client. The following table lists
 * the DB2 client properties:
 *
 * DB2 client properties
 *
 *
 *
 * Property name
 * Return type
 * Description
 *
 *
 *
 *
 * APPL_CODEPAGE
 * int
 * The application code page.
 *
 *
 * CONN_CODEPAGE
 * int
 * The code page for the current connection.
 *
 *
 * DATA_SOURCE_NAME
 * string
 * The data source name (DSN) used to create the current connection
 * to the database.
 *
 *
 * DRIVER_NAME
 * string
 * The name of the library that implements the DB2 Call
 * Level Interface (CLI) specification.
 *
 *
 * DRIVER_ODBC_VER
 * string
 * The version of ODBC that the DB2 client supports. This returns a
 * string "MM.mm" where MM is the major version and
 * mm is the minor version. The DB2 client always
 * returns "03.51".
 *
 *
 *
 * DRIVER_VER
 * string
 * The version of the client, in the form of a string "MM.mm.uuuu" where
 * MM is the major version,
 * mm is the minor version,
 * and uuuu is the update. For example, "08.02.0001"
 * represents major version 8, minor version 2, update 1.
 *
 *
 *
 * ODBC_SQL_CONFORMANCE
 * string
 *
 * The level of ODBC SQL grammar supported by the client:
 *
 *
 * MINIMUM
 *
 *
 * Supports the minimum ODBC SQL grammar.
 *
 *
 *
 *
 * CORE
 *
 *
 * Supports the core ODBC SQL grammar.
 *
 *
 *
 *
 * EXTENDED
 *
 *
 * Supports extended ODBC SQL grammar.
 *
 *
 *
 *
 *
 *
 *
 *
 * ODBC_VER
 * string
 * The version of ODBC that the ODBC driver manager supports. This
 * returns a string "MM.mm.rrrr" where MM is the major
 * version, mm is the minor version, and
 * rrrr is the release. The DB2 client always returns
 * "03.01.0000".
 *
 *
 *
 *
 *
 *
 * @param resource $connection
 * @return \stdClass
 * @throws IbmDb2Exception
 *
 */
function db2_client_info($connection): \stdClass
{
    error_clear_last();
    $safeResult = \db2_client_info($connection);
    if ($safeResult === false) {
        throw IbmDb2Exception::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param resource $connection
 * @throws IbmDb2Exception
 *
 */
function db2_close($connection): void
{
    error_clear_last();
    $safeResult = \db2_close($connection);
    if ($safeResult === false) {
        throw IbmDb2Exception::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $connection
 * @throws IbmDb2Exception
 *
 */
function db2_commit($connection): void
{
    error_clear_last();
    $safeResult = \db2_commit($connection);
    if ($safeResult === false) {
        throw IbmDb2Exception::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $stmt
 * @param array $parameters
 * @throws IbmDb2Exception
 *
 */
function db2_execute($stmt, array $parameters = []): void
{
    error_clear_last();
    $safeResult = \db2_execute($stmt, $parameters);
    if ($safeResult === false) {
        throw IbmDb2Exception::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $stmt
 * @throws IbmDb2Exception
 *
 */
function db2_free_result($stmt): void
{
    error_clear_last();
    $safeResult = \db2_free_result($stmt);
    if ($safeResult === false) {
        throw IbmDb2Exception::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $stmt
 * @throws IbmDb2Exception
 *
 */
function db2_free_stmt($stmt): void
{
    error_clear_last();
    $safeResult = \db2_free_stmt($stmt);
    if ($safeResult === false) {
        throw IbmDb2Exception::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $resource
 * @param string $option A valid statement or connection options. The following new options are available
 * as of ibm_db2 version 1.6.0. They provide useful tracking information
 * that can be set during execution with db2_get_option.
 *
 *
 * Prior versions of ibm_db2 do not support these new options.
 *
 *
 * When the value in each option is being set, some servers might not handle
 * the entire length provided and might truncate the value.
 *
 *
 * To ensure that the data specified in each option is converted correctly
 * when transmitted to a host system, use only the characters A through Z,
 * 0 through 9, and the underscore (_) or period (.).
 *
 *
 *
 *
 * userid
 *
 *
 * SQL_ATTR_INFO_USERID - A pointer to a null-terminated
 * character string used to identify the client user ID sent to the host
 * database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 16 characters.
 * This user-id is not to be confused with the authentication user-id, it is for
 * identification purposes only and is not used for any authorization.
 *
 *
 *
 *
 *
 *
 * acctstr
 *
 *
 * SQL_ATTR_INFO_ACCTSTR - A pointer to a null-terminated
 * character string used to identify the client accounting string sent to the
 * host database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 200 characters.
 *
 *
 *
 *
 *
 *
 * applname
 *
 *
 * SQL_ATTR_INFO_APPLNAME - A pointer to a null-terminated
 * character string used to identify the client application name sent to the
 * host database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 32 characters.
 *
 *
 *
 *
 *
 *
 * wrkstnname
 *
 *
 * SQL_ATTR_INFO_WRKSTNNAME - A pointer to a null-terminated
 * character string used to identify the client workstation name sent to the
 * host database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 18 characters.
 *
 *
 *
 *
 *
 *
 *
 * SQL_ATTR_INFO_USERID - A pointer to a null-terminated
 * character string used to identify the client user ID sent to the host
 * database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 16 characters.
 * This user-id is not to be confused with the authentication user-id, it is for
 * identification purposes only and is not used for any authorization.
 *
 *
 *
 * SQL_ATTR_INFO_ACCTSTR - A pointer to a null-terminated
 * character string used to identify the client accounting string sent to the
 * host database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 200 characters.
 *
 *
 *
 * SQL_ATTR_INFO_APPLNAME - A pointer to a null-terminated
 * character string used to identify the client application name sent to the
 * host database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 32 characters.
 *
 *
 *
 * SQL_ATTR_INFO_WRKSTNNAME - A pointer to a null-terminated
 * character string used to identify the client workstation name sent to the
 * host database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 18 characters.
 *
 *
 * @return string
 * @throws IbmDb2Exception
 *
 */
function db2_get_option($resource, string $option): string
{
    error_clear_last();
    $safeResult = \db2_get_option($resource, $option);
    if ($safeResult === false) {
        throw IbmDb2Exception::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param resource $stmt
 * @return int
 * @throws IbmDb2Exception
 *
 */
function db2_num_rows($stmt): int
{
    error_clear_last();
    $safeResult = \db2_num_rows($stmt);
    if ($safeResult === false) {
        throw IbmDb2Exception::createFromPhpError();
    }
    return $safeResult;
}


/**
 * This function closes a DB2 client connection created with
 * db2_pconnect and returns the corresponding resources
 * to the database server.
 *
 *
 * This function is only available on i5/OS in response to i5/OS system
 * administration requests.
 *
 *
 *
 * @param resource $connection
 * @throws IbmDb2Exception
 *
 */
function db2_pclose($connection): void
{
    error_clear_last();
    $safeResult = \db2_pclose($connection);
    if ($safeResult === false) {
        throw IbmDb2Exception::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $connection
 * @throws IbmDb2Exception
 *
 */
function db2_rollback($connection): void
{
    error_clear_last();
    $safeResult = \db2_rollback($connection);
    if ($safeResult === false) {
        throw IbmDb2Exception::createFromPhpError();
    }
}


/**
 * This function returns an object with read-only properties that return
 * information about the IBM DB2, Cloudscape, or Apache Derby database server.
 * The following table lists the database server properties:
 *
 * Database server properties
 *
 *
 *
 * Property name
 * Return type
 * Description
 *
 *
 *
 *
 * DBMS_NAME
 * string
 * The name of the database server to which you are
 * connected. For DB2 servers this is a combination of
 * DB2 followed by the operating system on which
 * the database server is running.
 *
 *
 * DBMS_VER
 * string
 * The version of the database server, in the form of a string
 * "MM.mm.uuuu" where MM is the major version,
 * mm is the minor version,
 * and uuuu is the update. For example, "08.02.0001"
 * represents major version 8, minor version 2, update 1.
 *
 *
 *
 * DB_CODEPAGE
 * int
 * The code page of the database to which you are connected.
 *
 *
 * DB_NAME
 * string
 * The name of the database to which you are connected.
 *
 *
 * DFT_ISOLATION
 * string
 *
 * The default transaction isolation level supported by the
 * server:
 *
 *
 * UR
 *
 *
 * Uncommitted read: changes are immediately visible by all
 * concurrent transactions.
 *
 *
 *
 *
 * CS
 *
 *
 * Cursor stability: a row read by one transaction can be altered and
 * committed by a second concurrent transaction.
 *
 *
 *
 *
 * RS
 *
 *
 * Read stability: a transaction can add or remove rows matching a
 * search condition or a pending transaction.
 *
 *
 *
 *
 * RR
 *
 *
 * Repeatable read: data affected by pending transaction is not
 * available to other transactions.
 *
 *
 *
 *
 * NC
 *
 *
 * No commit: any changes are visible at the end of a successful
 * operation. Explicit commits and rollbacks are not allowed.
 *
 *
 *
 *
 *
 *
 *
 *
 * IDENTIFIER_QUOTE_CHAR
 * string
 * The character used to delimit an identifier.
 *
 *
 * INST_NAME
 * string
 * The instance on the database server that contains the
 * database.
 *
 *
 * ISOLATION_OPTION
 * array
 * An array of the isolation options supported by the
 * database server. The isolation options are described in
 * the DFT_ISOLATION property.
 *
 *
 * KEYWORDS
 * array
 * An array of the keywords reserved by the database
 * server.
 *
 *
 * LIKE_ESCAPE_CLAUSE
 * bool
 * TRUE if the database server supports the
 * use of % and _ wildcard
 * characters. FALSE if the database server does not
 * support these wildcard characters.
 *
 *
 * MAX_COL_NAME_LEN
 * int
 * Maximum length of a column name supported by the database
 * server, expressed in bytes.
 *
 *
 * MAX_IDENTIFIER_LEN
 * int
 * Maximum length of an SQL identifier supported by the database
 * server, expressed in characters.
 *
 *
 * MAX_INDEX_SIZE
 * int
 * Maximum size of columns combined in an index supported by the
 * database server, expressed in bytes.
 *
 *
 * MAX_PROC_NAME_LEN
 * int
 * Maximum length of a procedure name supported by the database
 * server, expressed in bytes.
 *
 *
 * MAX_ROW_SIZE
 * int
 * Maximum length of a row in a base table supported by the
 * database server, expressed in bytes.
 *
 *
 * MAX_SCHEMA_NAME_LEN
 * int
 * Maximum length of a schema name supported by the database
 * server, expressed in bytes.
 *
 *
 * MAX_STATEMENT_LEN
 * int
 * Maximum length of an SQL statement supported by the database
 * server, expressed in bytes.
 *
 *
 * MAX_TABLE_NAME_LEN
 * int
 * Maximum length of a table name supported by the database
 * server, expressed in bytes.
 *
 *
 * NON_NULLABLE_COLUMNS
 * bool
 * TRUE if the database server supports columns that can be
 * defined as NOT NULL, FALSE if the database server does not support
 * columns defined as NOT NULL.
 *
 *
 * PROCEDURES
 * bool
 * TRUE if the database server supports the use of the CALL
 * statement to call stored procedures, FALSE if the database
 * server does not support the CALL statement.
 *
 *
 * SPECIAL_CHARS
 * string
 * A string containing all of the characters other than
 * a-Z, 0-9, and underscore that can be used in an identifier name.
 *
 *
 * SQL_CONFORMANCE
 * string
 *
 * The level of conformance to the ANSI/ISO SQL-92 specification
 * offered by the database server:
 *
 *
 * ENTRY
 *
 *
 * Entry-level SQL-92 compliance.
 *
 *
 *
 *
 * FIPS127
 *
 *
 * FIPS-127-2 transitional compliance.
 *
 *
 *
 *
 * FULL
 *
 *
 * Full level SQL-92 compliance.
 *
 *
 *
 *
 * INTERMEDIATE
 *
 *
 * Intermediate level SQL-92 compliance.
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 * @param resource $connection
 * @return \stdClass
 * @throws IbmDb2Exception
 *
 */
function db2_server_info($connection): \stdClass
{
    error_clear_last();
    $safeResult = \db2_server_info($connection);
    if ($safeResult === false) {
        throw IbmDb2Exception::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param resource $resource
 * @param array $options An associative array containing valid statement or connection
 * options. This parameter can be used to change autocommit values,
 * cursor types (scrollable or forward), and to specify the case of
 * the column names (lower, upper, or natural) that will appear in a
 * result set.
 *
 *
 * autocommit
 *
 *
 * Passing DB2_AUTOCOMMIT_ON turns
 * autocommit on for the specified connection resource.
 *
 *
 * Passing DB2_AUTOCOMMIT_OFF turns
 * autocommit off for the specified connection resource.
 *
 *
 *
 *
 * cursor
 *
 *
 * Passing DB2_FORWARD_ONLY specifies a
 * forward-only cursor for a statement resource. This is the
 * default cursor type, and is supported by all database
 * servers.
 *
 *
 * Passing DB2_SCROLLABLE specifies a
 * scrollable cursor for a statement resource. Scrollable
 * cursors enable result set rows to be accessed in
 * non-sequential order, but are only supported by
 * IBM DB2 Universal Database databases.
 *
 *
 *
 *
 * binmode
 *
 *
 * Passing DB2_BINARY specifies that
 * binary data will be returned as is. This is the default
 * mode. This is the equivalent of setting
 * ibm_db2.binmode=1 in php.ini.
 *
 *
 * Passing DB2_CONVERT specifies that
 * binary data will be converted to hexadecimal encoding,
 * and will be returned as such. This is the equivalent of
 * setting ibm_db2.binmode=2 in php.ini.
 *
 *
 * Passing DB2_PASSTHRU specifies that
 * binary data will be converted to NULL. This is the
 * equivalent of setting ibm_db2.binmode=3
 * in php.ini.
 *
 *
 *
 *
 * db2_attr_case
 *
 *
 * Passing DB2_CASE_LOWER specifies that
 * column names of the result set are returned in lower case.
 *
 *
 * Passing DB2_CASE_UPPER specifies that
 * column names of the result set are returned in upper case.
 *
 *
 * Passing DB2_CASE_NATURAL specifies that
 * column names of the result set are returned in natural
 * case.
 *
 *
 *
 *
 * deferred_prepare
 *
 *
 * Passing DB2_DEFERRED_PREPARE_ON turns deferred
 * prepare on for the specified statement resource.
 *
 *
 * Passing DB2_DEFERRED_PREPARE_OFF turns deferred
 * prepare off for the specified statement resource.
 *
 *
 *
 *
 *
 * The following new i5/OS options are available in ibm_db2 version 1.5.1
 * and later. These options apply only when running PHP and ibm_db2 natively on i5 systems.
 *
 *
 * i5_fetch_only
 *
 *
 * DB2_I5_FETCH_ON - Cursors are read-only
 * and cannot be used for positioned updates or deletes. This
 * is the default unless SQL_ATTR_FOR_FETCH_ONLY
 * environment has been set to SQL_FALSE.
 *
 *
 * DB2_I5_FETCH_OFF - Cursors can be used
 * for positioned updates and deletes.
 *
 *
 *
 *
 *
 * The following new option is available in ibm_db2 version 1.8.0 and later.
 *
 *
 * rowcount
 *
 *
 * DB2_ROWCOUNT_PREFETCH_ON - Client can request
 * the full row count prior to fetching, which means that
 * db2_num_rows returns the number of rows selected
 * even when a ROLLFORWARD_ONLY cursor is used.
 *
 *
 * DB2_ROWCOUNT_PREFETCH_OFF - Client cannot request
 * the full row count prior to fetching.
 *
 *
 *
 *
 *
 * The following new options are available in ibm_db2 version 1.7.0 and later.
 *
 *
 * trusted_user
 *
 *
 * To switch the user to a trusted user, pass the User ID (String)
 * of the trusted user as the value of this key. This option can
 * be set on a connection resource only. To use this option, trusted
 * context must be enabled on the connection resource.
 *
 *
 *
 *
 * trusted_password
 *
 *
 * The password (String) that corresponds to the user specified
 * by the trusted_user key.
 *
 *
 *
 *
 *
 * The following new options are available in ibm_db2 version 1.6.0 and later.
 * These options provide useful tracking information that can be accessed during
 * execution with db2_get_option.
 *
 *
 * When the value in each option is being set, some servers might not handle
 * the entire length provided and might truncate the value.
 *
 *
 * To ensure that the data specified in each option is converted correctly
 * when transmitted to a host system, use only the characters A through Z,
 * 0 through 9, and the underscore (_) or period (.).
 *
 *
 *
 *
 * userid
 *
 *
 * SQL_ATTR_INFO_USERID - A pointer to a null-terminated
 * character string used to identify the client user ID sent to the host
 * database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 16 characters.
 * This user-id is not to be confused with the authentication user-id, it is for
 * identification purposes only and is not used for any authorization.
 *
 *
 *
 *
 *
 *
 * acctstr
 *
 *
 * SQL_ATTR_INFO_ACCTSTR - A pointer to a null-terminated
 * character string used to identify the client accounting string sent to the
 * host database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 200 characters.
 *
 *
 *
 *
 *
 *
 * applname
 *
 *
 * SQL_ATTR_INFO_APPLNAME - A pointer to a null-terminated
 * character string used to identify the client application name sent to the
 * host database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 32 characters.
 *
 *
 *
 *
 *
 *
 * wrkstnname
 *
 *
 * SQL_ATTR_INFO_WRKSTNNAME - A pointer to a null-terminated
 * character string used to identify the client workstation name sent to the
 * host database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 18 characters.
 *
 *
 *
 *
 *
 *
 *
 * SQL_ATTR_INFO_USERID - A pointer to a null-terminated
 * character string used to identify the client user ID sent to the host
 * database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 16 characters.
 * This user-id is not to be confused with the authentication user-id, it is for
 * identification purposes only and is not used for any authorization.
 *
 *
 *
 * SQL_ATTR_INFO_ACCTSTR - A pointer to a null-terminated
 * character string used to identify the client accounting string sent to the
 * host database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 200 characters.
 *
 *
 *
 * SQL_ATTR_INFO_APPLNAME - A pointer to a null-terminated
 * character string used to identify the client application name sent to the
 * host database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 32 characters.
 *
 *
 *
 * SQL_ATTR_INFO_WRKSTNNAME - A pointer to a null-terminated
 * character string used to identify the client workstation name sent to the
 * host database server when using DB2 Connect.
 *
 *
 * DB2 for z/OS and OS/390 servers support up to a length of 18 characters.
 *
 *
 * @param int $type
 * @throws IbmDb2Exception
 *
 */
function db2_set_option($resource, array $options, int $type): void
{
    error_clear_last();
    $safeResult = \db2_set_option($resource, $options, $type);
    if ($safeResult === false) {
        throw IbmDb2Exception::createFromPhpError();
    }
}
