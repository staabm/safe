<?php

namespace Safe;

use Safe\Exceptions\SemException;

/**
 *
 *
 * @param int $key
 * @param int $permissions
 * @return \SysvMessageQueue
 * @throws SemException
 *
 */
function msg_get_queue(int $key, int $permissions = 0666): \SysvMessageQueue
{
    error_clear_last();
    $safeResult = \msg_get_queue($key, $permissions);
    if ($safeResult === false) {
        throw SemException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param int $key
 * @throws SemException
 *
 */
function msg_queue_exists(int $key): void
{
    error_clear_last();
    $safeResult = \msg_queue_exists($key);
    if ($safeResult === false) {
        throw SemException::createFromPhpError();
    }
}


/**
 *
 *
 * @param \SysvMessageQueue $queue
 * @param int $desired_message_type
 * @param int|null $received_message_type
 * @param int $max_message_size
 * @param mixed $message
 * @param bool $unserialize
 * @param int $flags The optional flags allows you to pass flags to the
 * low-level msgrcv system call.  It defaults to 0, but you may specify one
 * or more of the following values (by adding or ORing them together).
 *
 * Flag values for msg_receive
 *
 *
 *
 * MSG_IPC_NOWAIT
 * If there are no messages of the
 * desired_message_type, return immediately and do not
 * wait.  The function will fail and return an integer value
 * corresponding to MSG_ENOMSG.
 *
 *
 *
 * MSG_EXCEPT
 * Using this flag in combination with a
 * desired_message_type greater than 0 will cause the
 * function to receive the first message that is not equal to
 * desired_message_type.
 *
 *
 * MSG_NOERROR
 *
 * If the message is longer than max_message_size,
 * setting this flag will truncate the message to
 * max_message_size and will not signal an error.
 *
 *
 *
 *
 *
 * @param int|null $error_code
 * @throws SemException
 *
 */
function msg_receive(\SysvMessageQueue $queue, int $desired_message_type, ?int &$received_message_type, int $max_message_size, &$message, bool $unserialize = true, int $flags = 0, ?int &$error_code = null): void
{
    error_clear_last();
    $safeResult = \msg_receive($queue, $desired_message_type, $received_message_type, $max_message_size, $message, $unserialize, $flags, $error_code);
    if ($safeResult === false) {
        throw SemException::createFromPhpError();
    }
}


/**
 *
 *
 * @param \SysvMessageQueue $queue
 * @throws SemException
 *
 */
function msg_remove_queue(\SysvMessageQueue $queue): void
{
    error_clear_last();
    $safeResult = \msg_remove_queue($queue);
    if ($safeResult === false) {
        throw SemException::createFromPhpError();
    }
}


/**
 *
 *
 * @param \SysvMessageQueue $queue
 * @param int $message_type
 * @param mixed $message
 * @param bool $serialize
 * @param bool $blocking
 * @param int|null $error_code
 * @throws SemException
 *
 */
function msg_send(\SysvMessageQueue $queue, int $message_type, $message, bool $serialize = true, bool $blocking = true, ?int &$error_code = null): void
{
    error_clear_last();
    $safeResult = \msg_send($queue, $message_type, $message, $serialize, $blocking, $error_code);
    if ($safeResult === false) {
        throw SemException::createFromPhpError();
    }
}


/**
 *
 *
 * @param \SysvMessageQueue $queue
 * @param array $data
 * @throws SemException
 *
 */
function msg_set_queue(\SysvMessageQueue $queue, array $data): void
{
    error_clear_last();
    $safeResult = \msg_set_queue($queue, $data);
    if ($safeResult === false) {
        throw SemException::createFromPhpError();
    }
}


/**
 *
 *
 * @param \SysvMessageQueue $queue
 * @return array On success, the return value is an array whose keys and values have the following
 * meanings:
 *
 * Array structure for msg_stat_queue
 *
 *
 *
 * msg_perm.uid
 *
 * The uid of the owner of the queue.
 *
 *
 *
 * msg_perm.gid
 *
 * The gid of the owner of the queue.
 *
 *
 *
 * msg_perm.mode
 *
 * The file access mode of the queue.
 *
 *
 *
 * msg_stime
 *
 * The time that the last message was sent to the queue.
 *
 *
 *
 * msg_rtime
 *
 * The time that the last message was received from the queue.
 *
 *
 *
 * msg_ctime
 *
 * The time that the queue was last changed.
 *
 *
 *
 * msg_qnum
 *
 * The number of messages waiting to be read from the queue.
 *
 *
 *
 * msg_qbytes
 *
 * The maximum number of bytes allowed in one message queue. On
 * Linux, this value may be read and modified via
 * /proc/sys/kernel/msgmnb.
 *
 *
 *
 * msg_lspid
 *
 * The pid of the process that sent the last message to the queue.
 *
 *
 *
 * msg_lrpid
 *
 * The pid of the process that received the last message from the queue.
 *
 *
 *
 *
 *
 * @throws SemException
 *
 */
function msg_stat_queue(\SysvMessageQueue $queue): array
{
    error_clear_last();
    $safeResult = \msg_stat_queue($queue);
    if ($safeResult === false) {
        throw SemException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param \SysvSemaphore $semaphore
 * @param bool $non_blocking
 * @throws SemException
 *
 */
function sem_acquire(\SysvSemaphore $semaphore, bool $non_blocking = false): void
{
    error_clear_last();
    $safeResult = \sem_acquire($semaphore, $non_blocking);
    if ($safeResult === false) {
        throw SemException::createFromPhpError();
    }
}


/**
 *
 *
 * @param int $key
 * @param int $max_acquire
 * @param int $permissions
 * @param bool $auto_release
 * @return \SysvSemaphore
 * @throws SemException
 *
 */
function sem_get(int $key, int $max_acquire = 1, int $permissions = 0666, bool $auto_release = true): \SysvSemaphore
{
    error_clear_last();
    $safeResult = \sem_get($key, $max_acquire, $permissions, $auto_release);
    if ($safeResult === false) {
        throw SemException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param \SysvSemaphore $semaphore
 * @throws SemException
 *
 */
function sem_release(\SysvSemaphore $semaphore): void
{
    error_clear_last();
    $safeResult = \sem_release($semaphore);
    if ($safeResult === false) {
        throw SemException::createFromPhpError();
    }
}


/**
 *
 *
 * @param \SysvSemaphore $semaphore
 * @throws SemException
 *
 */
function sem_remove(\SysvSemaphore $semaphore): void
{
    error_clear_last();
    $safeResult = \sem_remove($semaphore);
    if ($safeResult === false) {
        throw SemException::createFromPhpError();
    }
}


/**
 *
 *
 * @param int $key
 * @param int|null $size
 * @param int $permissions
 * @return \SysvSharedMemory
 * @throws SemException
 *
 */
function shm_attach(int $key, ?int $size = null, int $permissions = 0666): \SysvSharedMemory
{
    error_clear_last();
    if ($permissions !== 0666) {
        $safeResult = \shm_attach($key, $size, $permissions);
    } elseif ($size !== null) {
        $safeResult = \shm_attach($key, $size);
    } else {
        $safeResult = \shm_attach($key);
    }
    if ($safeResult === false) {
        throw SemException::createFromPhpError();
    }
    return $safeResult;
}


/**
 *
 *
 * @param \SysvSharedMemory $shm
 * @return bool
 *
 */
function shm_detach(\SysvSharedMemory $shm): bool
{
    error_clear_last();
    $safeResult = \shm_detach($shm);
    return $safeResult;
}


/**
 *
 *
 * @param \SysvSharedMemory $shm
 * @param int $key
 * @param mixed $value
 * @throws SemException
 *
 */
function shm_put_var(\SysvSharedMemory $shm, int $key, $value): void
{
    error_clear_last();
    $safeResult = \shm_put_var($shm, $key, $value);
    if ($safeResult === false) {
        throw SemException::createFromPhpError();
    }
}


/**
 *
 *
 * @param \SysvSharedMemory $shm
 * @param int $key
 * @throws SemException
 *
 */
function shm_remove_var(\SysvSharedMemory $shm, int $key): void
{
    error_clear_last();
    $safeResult = \shm_remove_var($shm, $key);
    if ($safeResult === false) {
        throw SemException::createFromPhpError();
    }
}


/**
 *
 *
 * @param \SysvSharedMemory $shm
 * @throws SemException
 *
 */
function shm_remove(\SysvSharedMemory $shm): void
{
    error_clear_last();
    $safeResult = \shm_remove($shm);
    if ($safeResult === false) {
        throw SemException::createFromPhpError();
    }
}
