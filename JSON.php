<?php
class JSON{
    /**
     * — 对 JSON 格式的字符串进行解码
     * @param unknown $param
     * @return string
     */
    function json_decode($param) {
        ;
        return "";
    }
    /**
     * — 对变量进行 JSON 编码
     * @param unknown $param
     * @return string
     */
    function json_encode($param) {
        ;
        return "";
    }
    /**
     * — Returns the error string of the last json_encode() or json_decode() call
     * @param unknown $param
     * @return string
     */
    function json_last_error_msg($param) {
        ;
        return "";
    }
    /**
     * — 返回最后发生的错误
     * @param unknown $param
     * @return string
     */
    function json_last_error($param) {
        ;
        return "";
    }
}
interface JsonSerializable{
    /**
     * Objects implementing JsonSerializable can customize their JSON representation when encoded with json_encode().
     *实现 JsonSerializable 的类可以 在 json_encode() 时定制他们的 JSON 表示法。
     */
    //JsonSerializable::jsonSerialize — 指定需要被序列化成 JSON 的数据
    //JsonSerializable::jsonSerialize — Specify data which should be serialized to JSON
}