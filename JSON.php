<?php
class JSON{
    /**
     * �� �� JSON ��ʽ���ַ������н���
     * @param unknown $param
     * @return string
     */
    function json_decode($param) {
        ;
        return "";
    }
    /**
     * �� �Ա������� JSON ����
     * @param unknown $param
     * @return string
     */
    function json_encode($param) {
        ;
        return "";
    }
    /**
     * �� Returns the error string of the last json_encode() or json_decode() call
     * @param unknown $param
     * @return string
     */
    function json_last_error_msg($param) {
        ;
        return "";
    }
    /**
     * �� ����������Ĵ���
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
     *ʵ�� JsonSerializable ������� �� json_encode() ʱ�������ǵ� JSON ��ʾ����
     */
    //JsonSerializable::jsonSerialize �� ָ����Ҫ�����л��� JSON ������
    //JsonSerializable::jsonSerialize �� Specify data which should be serialized to JSON
}