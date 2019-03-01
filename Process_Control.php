<?php
class Process{
    /**
     * Ϊ��������һ��alarm�����ź�
     * �� Set an alarm clock for delivery of a signal
     * @param unknown $param
     * @return string
     */
    function pcntl_alarm($param) {
        ;
        return "";
    }
    /**
     * Enable/disable asynchronous signal handling or return the old setting
     * �� Enable/disable asynchronous signal handling or return the old setting
     * @param unknown $param
     * @return string
     */
    function pcntl_async_signals($param) {
        ;
        return "";
    }
    /**
     * ���� pcntl_get_last_error
     * �� Alias of pcntl_get_last_error
     * @param unknown $param
     * @return string
     */
    function pcntl_errno($param) {
        ;
        return "";
    }
    /**
     * �ڵ�ǰ���̿ռ�ִ��ָ������
     * �� Executes specified program in current process space
     * @param unknown $param
     * @return string
     */
    function pcntl_exec($param) {
        ;
        return "";
    }
    /**
     * �ڵ�ǰ���̵�ǰλ�ò�����֧���ӽ��̣�����ע��fork�Ǵ�����һ���ӽ��̣������̺��ӽ��� ����fork��λ�ÿ�ʼ���¼���ִ�У���ͬ���Ǹ�����ִ�й����У��õ���fork����ֵΪ�ӽ��� �ţ����ӽ��̵õ�����0��
     * �� Forks the currently running process
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
     *  ��ȡ������̵����ȼ�
     * �� Get the priority of any process
     * @param unknown $param
     * @return string
     */
    function pcntl_getpriority($param) {
        ;
        return "";
    }
    /**
     * �޸�������̵����ȼ�
     * @param unknown $param
     * @return string
     */
    function pcntl_setpriority($param) {
        ;
        return "";
    }
    /**
     * ���õȴ��źŵĴ�����
     * �� Calls signal handlers for pending signals
     * @param unknown $param
     * @return string
     */
    function pcntl_signal_dispatch($param) {
        ;
        return "";
    }
    /**
     * Get the current handler for specified signal
     * �� Get the current handler for specified signal
     * @param unknown $param
     * @return string
     */
    function pcntl_signal_get_handler($param) {
        ;
        return "";
    }
    /**
     *  ��װһ���źŴ�����
     * �� Installs a signal handler
     * @param unknown $param
     * @return string
     */
    function pcntl_signal($param) {
        ;
        return "";
    }
    /**
     * ���û���������ź�
     * �� Sets and retrieves blocked signals
     * @param unknown $param
     * @return string
     */
    function pcntl_sigprocmask($param) {
        ;
        return "";
    }
    /**
     *  ����ʱ���Ƶ��źŵȴ�
     * �� Waits for signals, with a timeout
     * @param unknown $param
     * @return string
     */
    function pcntl_sigtimedwait($param) {
        ;
        return "";
    }
    /**
     * �ȴ��ź�
     * �� Waits for signals
     * @param unknown $param
     * @return string
     */
    function pcntl_sigwaitinfo($param) {
        ;
        return "";
    }
    /**
     * Retrieve the system error message associated with the given errno
     * �� Retrieve the system error message associated with the given errno
     * @param unknown $param
     * @return string
     */
    function pcntl_strerror($param) {
        ;
        return "";
    }
    /**
     * �ȴ��򷵻�fork���ӽ���״̬
     * �� Waits on or returns the status of a forked child
     * @param unknown $param
     * @return string
     */
    function pcntl_wait($param) {
        ;
        return "";
    }
    /**
     * �ȴ��򷵻�fork���ӽ���״̬
     * �� Waits on or returns the status of a forked child
     * @param unknown $param
     * @return string
     */
    function pcntl_waitpid($param) {
        ;
        return "";
    }
    /**
     * ����һ���жϵ��ӽ��̵ķ��ش���
     * �� Returns the return code of a terminated child
     * @param unknown $param
     * @return string
     */
    function pcntl_wexitstatus($param) {
        ;
        return "";
    }
    /**
     * ���״̬�����Ƿ����һ���������˳���
     * �� Checks if status code represents a normal exit
     * @param unknown $param
     * @return string
     */
    function pcntl_wifexited($param) {
        ;
        return "";
    }
    /**
     * ����ӽ���״̬���Ƿ��������ĳ���źŶ��ж�
     * �� Checks whether the status code represents a termination due to a signal
     * @param unknown $param
     * @return string
     */
    function pcntl_wifsignaled($param) {
        ;
        return "";
    }
    /**
     * ����ӽ��̵�ǰ�Ƿ��Ѿ�ֹͣ
     * �� Checks whether the child process is currently stopped
     * @param unknown $param
     * @return string
     */
    function pcntl_wifstopped($param) {
        ;
        return "";
    }
    /**
     *  ���ص����ӽ���ֹͣ���ź�
     * �� Returns the signal which caused the child to stop
     * @param unknown $param
     * @return string
     */
    function pcntl_wstopsig($param) {
        ;
        return "";
    }
    /**
     * ���ص����ӽ����жϵ��ź�
     * �� Returns the signal which caused the child to terminate
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
     * �� Escape a string to be used as a shell argument
     * @param unknown $param
     * @return string
     */
    function escapeshellarg($param) {
        ;
        return "";
    }
    /**
     * �� Escape shell metacharacters
     * @param unknown $param
     * @return string
     */
    function escapeshellcmd($param) {
        ;
        return "";
    }
    /**
     * �� Execute an external program
     * @param unknown $param
     * @return string
     */
    function exec($param) {
        ;
        return "";
    }
    /**
     * �� Execute an external program and display raw output
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
     * �� Get information about a process opened by proc_open
     * @param unknown $param
     * @return string
     */
    function proc_get_status($param) {
        ;
        return "";
    }
    /**
     * �� Change the priority of the current process
     * @param unknown $param
     * @return string
     */
    function proc_nice($param) {
        ;
        return "";
    }
    /**
     * �� Execute a command and open file pointers for input/output
     * @param unknown $param
     * @return string
     */
    function proc_open($param) {
        ;
        return "";
    }
    /**
     * �� Kills a process opened by proc_open
     * @param unknown $param
     * @return string
     */
    function proc_terminate($param) {
        ;
        return "";
    }
    /**
     * �� Execute command via shell and return the complete output as a string
     * @param unknown $param
     * @return string
     */
    function shell_exec($param) {
        ;
        return "";
    }
    /**
     * �� Execute an external program and display the output
     * @param unknown $param
     * @return string
     */
    function system($param) {
        ;
        return "";
    }
}