<?php
class Process{
    /**
     * 为进程设置一个alarm闹钟信号
     * — Set an alarm clock for delivery of a signal
     * @param unknown $param
     * @return string
     */
    function pcntl_alarm($param) {
        ;
        return "";
    }
    /**
     * Enable/disable asynchronous signal handling or return the old setting
     * — Enable/disable asynchronous signal handling or return the old setting
     * @param unknown $param
     * @return string
     */
    function pcntl_async_signals($param) {
        ;
        return "";
    }
    /**
     * 别名 pcntl_get_last_error
     * — Alias of pcntl_get_last_error
     * @param unknown $param
     * @return string
     */
    function pcntl_errno($param) {
        ;
        return "";
    }
    /**
     * 在当前进程空间执行指定程序
     * — Executes specified program in current process space
     * @param unknown $param
     * @return string
     */
    function pcntl_exec($param) {
        ;
        return "";
    }
    /**
     * 在当前进程当前位置产生分支（子进程）。译注：fork是创建了一个子进程，父进程和子进程 都从fork的位置开始向下继续执行，不同的是父进程执行过程中，得到的fork返回值为子进程 号，而子进程得到的是0。
     * — Forks the currently running process
     * @param unknown $param
     * @return string
     */
    function pcntl_fork($param) {
        ;
        return "";
    }
    /**
     * Retrieve the error number set by the last pcntl function which failed
     *Retrieve the error number set by the last pcntl function which failed
     *
     * @param unknown $param
     * @return string
     */
    function pcntl_get_last_error ($param) {
        ;
        return "";
    }
    /**
     *  获取任意进程的优先级
     * — Get the priority of any process
     * @param unknown $param
     * @return string
     */
    function pcntl_getpriority($param) {
        ;
        return "";
    }
    /**
     * 修改任意进程的优先级
     * @param unknown $param
     * @return string
     */
    function pcntl_setpriority($param) {
        ;
        return "";
    }
    /**
     * 调用等待信号的处理器
     * — Calls signal handlers for pending signals
     * @param unknown $param
     * @return string
     */
    function pcntl_signal_dispatch($param) {
        ;
        return "";
    }
    /**
     * Get the current handler for specified signal
     * — Get the current handler for specified signal
     * @param unknown $param
     * @return string
     */
    function pcntl_signal_get_handler($param) {
        ;
        return "";
    }
    /**
     *  安装一个信号处理器
     * — Installs a signal handler
     * @param unknown $param
     * @return string
     */
    function pcntl_signal($param) {
        ;
        return "";
    }
    /**
     * 设置或检索阻塞信号
     * — Sets and retrieves blocked signals
     * @param unknown $param
     * @return string
     */
    function pcntl_sigprocmask($param) {
        ;
        return "";
    }
    /**
     *  带超时机制的信号等待
     * — Waits for signals, with a timeout
     * @param unknown $param
     * @return string
     */
    function pcntl_sigtimedwait($param) {
        ;
        return "";
    }
    /**
     * 等待信号
     * — Waits for signals
     * @param unknown $param
     * @return string
     */
    function pcntl_sigwaitinfo($param) {
        ;
        return "";
    }
    /**
     * Retrieve the system error message associated with the given errno
     * — Retrieve the system error message associated with the given errno
     * @param unknown $param
     * @return string
     */
    function pcntl_strerror($param) {
        ;
        return "";
    }
    /**
     * 等待或返回fork的子进程状态
     * — Waits on or returns the status of a forked child
     * @param unknown $param
     * @return string
     */
    function pcntl_wait($param) {
        ;
        return "";
    }
    /**
     * 等待或返回fork的子进程状态
     * — Waits on or returns the status of a forked child
     * @param unknown $param
     * @return string
     */
    function pcntl_waitpid($param) {
        ;
        return "";
    }
    /**
     * 返回一个中断的子进程的返回代码
     * — Returns the return code of a terminated child
     * @param unknown $param
     * @return string
     */
    function pcntl_wexitstatus($param) {
        ;
        return "";
    }
    /**
     * 检查状态代码是否代表一个正常的退出。
     * — Checks if status code represents a normal exit
     * @param unknown $param
     * @return string
     */
    function pcntl_wifexited($param) {
        ;
        return "";
    }
    /**
     * 检查子进程状态码是否代表由于某个信号而中断
     * — Checks whether the status code represents a termination due to a signal
     * @param unknown $param
     * @return string
     */
    function pcntl_wifsignaled($param) {
        ;
        return "";
    }
    /**
     * 检查子进程当前是否已经停止
     * — Checks whether the child process is currently stopped
     * @param unknown $param
     * @return string
     */
    function pcntl_wifstopped($param) {
        ;
        return "";
    }
    /**
     *  返回导致子进程停止的信号
     * — Returns the signal which caused the child to stop
     * @param unknown $param
     * @return string
     */
    function pcntl_wstopsig($param) {
        ;
        return "";
    }
    /**
     * 返回导致子进程中断的信号
     * — Returns the signal which caused the child to terminate
     * @param unknown $param
     * @return string
     */
    function pcntl_wtermsig($param) {
        ;
        return "";
    }
}

Class System_program_execution{
    
    /**
     * — Escape a string to be used as a shell argument
     * @param unknown $param
     * @return string
     */
    function escapeshellarg($param) {
        ;
        return "";
    }
    /**
     * — Escape shell metacharacters
     * @param unknown $param
     * @return string
     */
    function escapeshellcmd($param) {
        ;
        return "";
    }
    /**
     * — Execute an external program
     * @param unknown $param
     * @return string
     */
    function exec($param) {
        ;
        return "";
    }
    /**
     * — Execute an external program and display raw output
     * @param unknown $param
     * @return string
     */
    function passthru($param) {
        ;
        return "";
    }
    /**
     * C a process opened by proc_open and return the exit code of that process
     * @param unknown $param
     * @return string
     */
    function lose($param) {
        ;
        return "";
    }
    /**
     * — Get information about a process opened by proc_open
     * @param unknown $param
     * @return string
     */
    function proc_get_status($param) {
        ;
        return "";
    }
    /**
     * — Change the priority of the current process
     * @param unknown $param
     * @return string
     */
    function proc_nice($param) {
        ;
        return "";
    }
    /**
     * — Execute a command and open file pointers for input/output
     * @param unknown $param
     * @return string
     */
    function proc_open($param) {
        ;
        return "";
    }
    /**
     * — Kills a process opened by proc_open
     * @param unknown $param
     * @return string
     */
    function proc_terminate($param) {
        ;
        return "";
    }
    /**
     * — Execute command via shell and return the complete output as a string
     * @param unknown $param
     * @return string
     */
    function shell_exec($param) {
        ;
        return "";
    }
    /**
     * — Execute an external program and display the output
     * @param unknown $param
     * @return string
     */
    function system($param) {
        ;
        return "";
    }
}