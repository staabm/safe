<?php

namespace Safe;

use Safe\Exceptions\EioException;

/**
 *
 *
 * @param int $delay
 * @param int $pri
 * @param callable|null $callback
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_busy(int $delay, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_busy($delay, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param string $path
 * @param int $mode
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_chmod(string $path, int $mode, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_chmod($path, $mode, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param string $path
 * @param int $uid
 * @param int $gid
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_chown(string $path, int $uid, int $gid = -1, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_chown($path, $uid, $gid, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $fd
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_close($fd, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_close($fd, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param callable $execute Specifies the request function that should match the following prototype:
 *
 *
 * callback is event completion callback that should match the following
 * prototype:
 *
 *
 * data is the data passed to
 * execute via data argument
 * without modifications
 * result value returned by execute
 * @param int $pri
 * @param callable $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_custom(callable $execute, int $pri, callable $callback, $data = null)
{
    error_clear_last();
    $safeResult = \eio_custom($execute, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $fd
 * @param mixed $fd2
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_dup2($fd, $fd2, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_dup2($fd, $fd2, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @throws EioException
 *
 */
function eio_event_loop(): void
{
    error_clear_last();
    $safeResult = \eio_event_loop();
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
}


/**
 *
 *
 * @param mixed $fd
 * @param int $mode
 * @param int $offset
 * @param int $length
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_fallocate($fd, int $mode, int $offset, int $length, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_fallocate($fd, $mode, $offset, $length, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $fd
 * @param int $mode
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_fchmod($fd, int $mode, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_fchmod($fd, $mode, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $fd
 * @param int $uid
 * @param int $gid
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_fchown($fd, int $uid, int $gid = -1, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_fchown($fd, $uid, $gid, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $fd
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_fdatasync($fd, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_fdatasync($fd, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $fd
 * @param int $pri
 * @param callable $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_fstat($fd, int $pri, callable $callback, $data = null)
{
    error_clear_last();
    if ($data !== null) {
        $safeResult = \eio_fstat($fd, $pri, $callback, $data);
    } else {
        $safeResult = \eio_fstat($fd, $pri, $callback);
    }
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $fd
 * @param int $pri
 * @param callable $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_fstatvfs($fd, int $pri, callable $callback, $data = null)
{
    error_clear_last();
    if ($data !== null) {
        $safeResult = \eio_fstatvfs($fd, $pri, $callback, $data);
    } else {
        $safeResult = \eio_fstatvfs($fd, $pri, $callback);
    }
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $fd
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_fsync($fd, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_fsync($fd, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $fd
 * @param int $offset
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_ftruncate($fd, int $offset = 0, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_ftruncate($fd, $offset, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $fd
 * @param float $atime
 * @param float $mtime
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_futime($fd, float $atime, float $mtime, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_futime($fd, $atime, $mtime, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param callable $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param null|string $data
 * @return resource
 * @throws EioException
 *
 */
function eio_grp(callable $callback, ?string $data = null)
{
    error_clear_last();
    $safeResult = \eio_grp($callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param string $path
 * @param int $pri
 * @param callable $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_lstat(string $path, int $pri, callable $callback, $data = null)
{
    error_clear_last();
    $safeResult = \eio_lstat($path, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param string $path
 * @param int $mode
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_mkdir(string $path, int $mode, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_mkdir($path, $mode, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param string $path
 * @param int $mode
 * @param int $dev
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_mknod(string $path, int $mode, int $dev, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_mknod($path, $mode, $dev, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_nop(int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_nop($pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $fd
 * @param int $offset
 * @param int $length
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_readahead($fd, int $offset, int $length, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_readahead($fd, $offset, $length, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param string $path
 * @param int $flags
 * @param int $pri
 * @param callable $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param null|string $data
 * @return resource Node types:
 *
 *
 *
 *
 * EIO_DT_UNKNOWN
 * (int)
 *
 *
 *
 * Unknown node type(very common). Further stat needed.
 *
 *
 *
 *
 *
 * EIO_DT_FIFO
 * (int)
 *
 *
 *
 * FIFO node type
 *
 *
 *
 *
 *
 * EIO_DT_CHR
 * (int)
 *
 *
 *
 * Node type
 *
 *
 *
 *
 *
 * EIO_DT_MPC
 * (int)
 *
 *
 *
 * Multiplexed char device (v7+coherent) node type
 *
 *
 *
 *
 *
 * EIO_DT_DIR
 * (int)
 *
 *
 *
 * Directory node type
 *
 *
 *
 *
 *
 * EIO_DT_NAM
 * (int)
 *
 *
 *
 * Xenix special named file node type
 *
 *
 *
 *
 *
 * EIO_DT_BLK
 * (int)
 *
 *
 *
 * Node type
 *
 *
 *
 *
 *
 * EIO_DT_MPB
 * (int)
 *
 *
 *
 * Multiplexed block device (v7+coherent)
 *
 *
 *
 *
 *
 * EIO_DT_REG
 * (int)
 *
 *
 *
 * Node type
 *
 *
 *
 *
 *
 * EIO_DT_NWK
 * (int)
 *
 *
 *
 *
 *
 *
 *
 *
 * EIO_DT_CMP
 * (int)
 *
 *
 *
 * HP-UX network special node type
 *
 *
 *
 *
 *
 * EIO_DT_LNK
 * (int)
 *
 *
 *
 * Link node type
 *
 *
 *
 *
 *
 * EIO_DT_SOCK
 * (int)
 *
 *
 *
 * Socket node type
 *
 *
 *
 *
 *
 * EIO_DT_DOOR
 * (int)
 *
 *
 *
 * Solaris door node type
 *
 *
 *
 *
 *
 * EIO_DT_WHT
 * (int)
 *
 *
 *
 * Node type
 *
 *
 *
 *
 *
 * EIO_DT_MAX
 * (int)
 *
 *
 *
 * Highest node type value
 *
 *
 *
 *
 *
 * @throws EioException
 *
 */
function eio_readdir(string $path, int $flags, int $pri, callable $callback, ?string $data = null)
{
    error_clear_last();
    $safeResult = \eio_readdir($path, $flags, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param string $path
 * @param int $pri
 * @param callable $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param null|string $data
 * @return resource
 * @throws EioException
 *
 */
function eio_readlink(string $path, int $pri, callable $callback, ?string $data = null)
{
    error_clear_last();
    $safeResult = \eio_readlink($path, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param string $path
 * @param string $new_path
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_rename(string $path, string $new_path, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_rename($path, $new_path, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param string $path
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_rmdir(string $path, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_rmdir($path, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $fd
 * @param int $offset
 * @param int $whence whence values are:
 *
 * EIO_SEEK_SET - Set position equal to offset bytes.
 * EIO_SEEK_CUR - Set position to current location plus offset.
 * EIO_SEEK_END - Set position to end-of-file plus offset.
 *
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_seek($fd, int $offset, int $whence, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_seek($fd, $offset, $whence, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $out_fd
 * @param mixed $in_fd
 * @param int $offset
 * @param int $length
 * @param int $pri
 * @param callable $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param string $data
 * @return resource
 * @throws EioException
 *
 */
function eio_sendfile($out_fd, $in_fd, int $offset, int $length, ?int $pri = null, ?callable $callback = null, ?string $data = null)
{
    error_clear_last();
    if ($data !== null) {
        $safeResult = \eio_sendfile($out_fd, $in_fd, $offset, $length, $pri, $callback, $data);
    } elseif ($callback !== null) {
        $safeResult = \eio_sendfile($out_fd, $in_fd, $offset, $length, $pri, $callback);
    } elseif ($pri !== null) {
        $safeResult = \eio_sendfile($out_fd, $in_fd, $offset, $length, $pri);
    } else {
        $safeResult = \eio_sendfile($out_fd, $in_fd, $offset, $length);
    }
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param string $path
 * @param int $pri
 * @param callable $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_stat(string $path, int $pri, callable $callback, $data = null)
{
    error_clear_last();
    $safeResult = \eio_stat($path, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param string $path
 * @param int $pri
 * @param callable $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_statvfs(string $path, int $pri, callable $callback, $data = null)
{
    error_clear_last();
    if ($data !== null) {
        $safeResult = \eio_statvfs($path, $pri, $callback, $data);
    } else {
        $safeResult = \eio_statvfs($path, $pri, $callback);
    }
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param string $path
 * @param string $new_path
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_symlink(string $path, string $new_path, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_symlink($path, $new_path, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $fd
 * @param int $offset
 * @param int $nbytes
 * @param int $flags
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_sync_file_range($fd, int $offset, int $nbytes, int $flags, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_sync_file_range($fd, $offset, $nbytes, $flags, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param int $pri
 * @param callable|null $callback
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_sync(int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_sync($pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $fd
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_syncfs($fd, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_syncfs($fd, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param string $path
 * @param int $offset
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_truncate(string $path, int $offset = 0, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_truncate($path, $offset, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param string $path
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_unlink(string $path, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_unlink($path, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param string $path
 * @param float $atime
 * @param float $mtime
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_utime(string $path, float $atime, float $mtime, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_utime($path, $atime, $mtime, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param mixed $fd
 * @param string $str
 * @param int $length
 * @param int $offset
 * @param int $pri
 * @param callable|null $callback
 * callback function is called when the request is done.
 * It should match the following prototype:
 *
 *
 * data
 * is custom data passed to the request.
 *
 *
 * result
 * request-specific result value; basically, the value returned by corresponding
 * system call.
 *
 *
 * req
 * is optional request resource which can be used with functions like eio_get_last_error.
 *
 *
 * @param mixed $data
 * @return resource
 * @throws EioException
 *
 */
function eio_write($fd, string $str, int $length = 0, int $offset = 0, int $pri = EIO_PRI_DEFAULT, ?callable $callback = null, $data = null)
{
    error_clear_last();
    $safeResult = \eio_write($fd, $str, $length, $offset, $pri, $callback, $data);
    if ($safeResult === false) {
        throw EioException::createFromPhpError();
    }
    return $safeResult;
}
