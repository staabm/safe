<?php

namespace Safe;

use Safe\Exceptions\SqlsrvException;

/**
 *
 *
 * @param resource $conn
 * @throws SqlsrvException
 *
 */
function sqlsrv_begin_transaction($conn): void
{
    error_clear_last();
    $safeResult = \sqlsrv_begin_transaction($conn);
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $stmt
 * @throws SqlsrvException
 *
 */
function sqlsrv_cancel($stmt): void
{
    error_clear_last();
    $safeResult = \sqlsrv_cancel($stmt);
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $conn
 * @return array Returns an associative array with keys described in the table below.
 *
 * Array returned by sqlsrv_client_info
 *
 *
 *
 * Key
 * Description
 *
 *
 *
 *
 * DriverDllName
 * SQLNCLI10.DLL
 *
 *
 * DriverODBCVer
 * ODBC version (xx.yy)
 *
 *
 * DriverVer
 * SQL Server Native Client DLL version (10.5.xxx)
 *
 *
 * ExtensionVer
 * php_sqlsrv.dll version (2.0.xxx.x)
 *
 *
 *
 *
 * @throws SqlsrvException
 *
 */
function sqlsrv_client_info($conn): array
{
    error_clear_last();
    $safeResult = \sqlsrv_client_info($conn);
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param resource $conn
 * @throws SqlsrvException
 *
 */
function sqlsrv_close($conn): void
{
    error_clear_last();
    $safeResult = \sqlsrv_close($conn);
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $conn
 * @throws SqlsrvException
 *
 */
function sqlsrv_commit($conn): void
{
    error_clear_last();
    $safeResult = \sqlsrv_commit($conn);
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
}


/**
 *
 *
 * @param string $setting
 * @param mixed $value The value of the specified setting. The following table shows possible values:
 *
 * Error and Logging Setting Options
 *
 *
 *
 * Setting
 * Options
 *
 *
 *
 *
 * WarningsReturnAsErrors
 * 1 (TRUE) or 0 (FALSE)
 *
 *
 * LogSubsystems
 * SQLSRV_LOG_SYSTEM_ALL (-1)
 * SQLSRV_LOG_SYSTEM_CONN (2)
 * SQLSRV_LOG_SYSTEM_INIT (1)
 * SQLSRV_LOG_SYSTEM_OFF (0)
 * SQLSRV_LOG_SYSTEM_STMT (4)
 * SQLSRV_LOG_SYSTEM_UTIL (8)
 *
 *
 * LogSeverity
 * SQLSRV_LOG_SEVERITY_ALL (-1)
 * SQLSRV_LOG_SEVERITY_ERROR (1)
 * SQLSRV_LOG_SEVERITY_NOTICE (4)
 * SQLSRV_LOG_SEVERITY_WARNING (2)
 *
 *
 *
 *
 * @throws SqlsrvException
 *
 */
function sqlsrv_configure(string $setting, $value): void
{
    error_clear_last();
    $safeResult = \sqlsrv_configure($setting, $value);
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $stmt
 * @throws SqlsrvException
 *
 */
function sqlsrv_execute($stmt): void
{
    error_clear_last();
    $safeResult = \sqlsrv_execute($stmt);
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $stmt
 * @param int $fetchType
 * @param int $row
 * @param int $offset
 * @return array|null
 * @throws SqlsrvException
 *
 */
function sqlsrv_fetch_array($stmt, ?int $fetchType = null, ?int $row = null, ?int $offset = null): ?array
{
    error_clear_last();
    if ($offset !== null) {
        $safeResult = \sqlsrv_fetch_array($stmt, $fetchType, $row, $offset);
    } elseif ($row !== null) {
        $safeResult = \sqlsrv_fetch_array($stmt, $fetchType, $row);
    } elseif ($fetchType !== null) {
        $safeResult = \sqlsrv_fetch_array($stmt, $fetchType);
    } else {
        $safeResult = \sqlsrv_fetch_array($stmt);
    }
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param resource $stmt
 * @param string $className
 * @param array $ctorParams
 * @param int $row The row to be accessed. This parameter can only be used if the specified
 * statement was prepared with a scrollable cursor. In that case, this parameter
 * can take on one of the following values:
 *
 * SQLSRV_SCROLL_NEXT
 * SQLSRV_SCROLL_PRIOR
 * SQLSRV_SCROLL_FIRST
 * SQLSRV_SCROLL_LAST
 * SQLSRV_SCROLL_ABSOLUTE
 * SQLSRV_SCROLL_RELATIVE
 *
 * @param int $offset
 * @return null|object
 * @throws SqlsrvException
 *
 */
function sqlsrv_fetch_object($stmt, ?string $className = null, ?array $ctorParams = null, ?int $row = null, ?int $offset = null): ?object
{
    error_clear_last();
    if ($offset !== null) {
        $safeResult = \sqlsrv_fetch_object($stmt, $className, $ctorParams, $row, $offset);
    } elseif ($row !== null) {
        $safeResult = \sqlsrv_fetch_object($stmt, $className, $ctorParams, $row);
    } elseif ($ctorParams !== null) {
        $safeResult = \sqlsrv_fetch_object($stmt, $className, $ctorParams);
    } elseif ($className !== null) {
        $safeResult = \sqlsrv_fetch_object($stmt, $className);
    } else {
        $safeResult = \sqlsrv_fetch_object($stmt);
    }
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param resource $stmt
 * @param int $row The row to be accessed. This parameter can only be used if the specified
 * statement was prepared with a scrollable cursor. In that case, this parameter
 * can take on one of the following values:
 *
 * SQLSRV_SCROLL_NEXT
 * SQLSRV_SCROLL_PRIOR
 * SQLSRV_SCROLL_FIRST
 * SQLSRV_SCROLL_LAST
 * SQLSRV_SCROLL_ABSOLUTE
 * SQLSRV_SCROLL_RELATIVE
 *
 * @param int $offset
 * @return bool|null
 * @throws SqlsrvException
 *
 */
function sqlsrv_fetch($stmt, ?int $row = null, ?int $offset = null): ?bool
{
    error_clear_last();
    if ($offset !== null) {
        $safeResult = \sqlsrv_fetch($stmt, $row, $offset);
    } elseif ($row !== null) {
        $safeResult = \sqlsrv_fetch($stmt, $row);
    } else {
        $safeResult = \sqlsrv_fetch($stmt);
    }
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param resource $stmt
 * @throws SqlsrvException
 *
 */
function sqlsrv_free_stmt($stmt): void
{
    error_clear_last();
    $safeResult = \sqlsrv_free_stmt($stmt);
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $stmt
 * @param int $fieldIndex
 * @param int $getAsType
 * @return mixed
 * @throws SqlsrvException
 *
 */
function sqlsrv_get_field($stmt, int $fieldIndex, ?int $getAsType = null)
{
    error_clear_last();
    if ($getAsType !== null) {
        $safeResult = \sqlsrv_get_field($stmt, $fieldIndex, $getAsType);
    } else {
        $safeResult = \sqlsrv_get_field($stmt, $fieldIndex);
    }
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param resource $stmt
 * @return bool|null
 * @throws SqlsrvException
 *
 */
function sqlsrv_next_result($stmt): ?bool
{
    error_clear_last();
    $safeResult = \sqlsrv_next_result($stmt);
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param resource $stmt
 * @return int
 * @throws SqlsrvException
 *
 */
function sqlsrv_num_fields($stmt): int
{
    error_clear_last();
    $safeResult = \sqlsrv_num_fields($stmt);
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param resource $stmt
 * @return int
 * @throws SqlsrvException
 *
 */
function sqlsrv_num_rows($stmt): int
{
    error_clear_last();
    $safeResult = \sqlsrv_num_rows($stmt);
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param resource $conn
 * @param string $sql
 * @param array $params An array specifying parameter information when executing a parameterized
 * query. Array elements can be any of the following:
 *
 * A literal value
 * A PHP variable
 * An array with this structure:
 * array($value [, $direction [, $phpType [, $sqlType]]])
 *
 * The following table describes the elements in the array structure above:
 * @param array $options
 * @return mixed
 * @throws SqlsrvException
 *
 */
function sqlsrv_prepare($conn, string $sql, ?array $params = null, ?array $options = null)
{
    error_clear_last();
    if ($options !== null) {
        $safeResult = \sqlsrv_prepare($conn, $sql, $params, $options);
    } elseif ($params !== null) {
        $safeResult = \sqlsrv_prepare($conn, $sql, $params);
    } else {
        $safeResult = \sqlsrv_prepare($conn, $sql);
    }
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param resource $conn
 * @param string $sql
 * @param array $params An array specifying parameter information when executing a parameterized query.
 * Array elements can be any of the following:
 *
 * A literal value
 * A PHP variable
 * An array with this structure:
 * array($value [, $direction [, $phpType [, $sqlType]]])
 *
 * The following table describes the elements in the array structure above:
 * @param array $options
 * @return mixed
 * @throws SqlsrvException
 *
 */
function sqlsrv_query($conn, string $sql, ?array $params = null, ?array $options = null)
{
    error_clear_last();
    if ($options !== null) {
        $safeResult = \sqlsrv_query($conn, $sql, $params, $options);
    } elseif ($params !== null) {
        $safeResult = \sqlsrv_query($conn, $sql, $params);
    } else {
        $safeResult = \sqlsrv_query($conn, $sql);
    }
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param resource $conn
 * @throws SqlsrvException
 *
 */
function sqlsrv_rollback($conn): void
{
    error_clear_last();
    $safeResult = \sqlsrv_rollback($conn);
    if ($safeResult === false) {
        throw SqlsrvException::createFromPhpError();
    }
}
