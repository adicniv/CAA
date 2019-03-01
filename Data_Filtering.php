<?php
class data_filter{
    const INPUT_POST //(integer)
    //POST ������
    const INPUT_GET //(integer)
    //GET ������
    const INPUT_COOKIE //(integer)
    //COOKIE ������
    const INPUT_ENV //(integer)
    //ENV ������
    const INPUT_SERVER //(integer)
    //SERVER ������
    const INPUT_SESSION //(integer)
    //SESSION ������ (��δʵ��)
    const INPUT_REQUEST //(integer)
    //REQUEST ������ (��δʵ��)
    const FILTER_FLAG_NONE //(integer)
    //û�б�ǡ�
    FILTER_REQUIRE_SCALAR //(integer)
    //�˱��Ҫ��������Ǳ�����
    FILTER_REQUIRE_ARRAY //(integer)
   // ��Ҫ����������顣
    FILTER_FORCE_ARRAY //(integer)
    //һ�ɷ������顣
    FILTER_NULL_ON_FAILURE //(integer)
   // ʧ��ʱ���� NULL������ FALSE��
    FILTER_VALIDATE_INT //(integer)
   // ��� "int" ��������
    FILTER_VALIDATE_BOOLEAN //(integer)
   // ��� "boolean" ��������
    FILTER_VALIDATE_FLOAT //(integer)
    //��� "float" ��������
    FILTER_VALIDATE_REGEXP //(integer)
  //  ��� "validate_regexp" ��������
    FILTER_VALIDATE_URL //(integer)
   // ��� "validate_url" ��������
    FILTER_VALIDATE_EMAIL //(integer)
    //��� "validate_email" ��������
    FILTER_VALIDATE_IP //(integer)
    //��� "validate_ip" ��������
    FILTER_VALIDATE_MAC //(integer)
   // ��� "validate_mac_address" ����������PHP 5.5.0 ����Ч��
    FILTER_DEFAULT //(integer)
    //���Ĭ�ϵ� "unsafe_raw" �������� ��ͬ�� FILTER_UNSAFE_RAW��
    FILTER_UNSAFE_RAW //(integer)
    //��� "unsafe_raw" ��������
    FILTER_SANITIZE_STRING //(integer)
   // ��� "string" ��������
    FILTER_SANITIZE_STRIPPED //(integer)
    //��� "stripped" ��������
    FILTER_SANITIZE_ENCODED //(integer)
    //��� "encoded" ��������
    FILTER_SANITIZE_SPECIAL_CHARS //(integer)
    //��� "special_chars" ��������
    FILTER_SANITIZE_EMAIL //(integer)
  //  ��� "email" ��������
    FILTER_SANITIZE_URL //(integer)
   // ��� "url" ��������
    FILTER_SANITIZE_NUMBER_INT //(integer)
    //��� "number_int" ��������
    FILTER_SANITIZE_NUMBER_FLOAT //(integer)
    //��� "number_float" ��������
    FILTER_SANITIZE_MAGIC_QUOTES //(integer)
    //��� "magic_quotes" ��������
    FILTER_CALLBACK //(integer)
    //��� "callback" ��������
    FILTER_FLAG_ALLOW_OCTAL //(integer)
    //"int" ����������˽��ƣ�octal����ǵ��ַ���0[0-7]+����
    FILTER_FLAG_ALLOW_HEX //(integer)
    //"int" ����������ʮ�����ƣ�Hex����ǵ��ַ���0x[0-9a-fA-F]+��
    FILTER_FLAG_STRIP_LOW //(integer)
    //���� ASCII ����ֵ���� 32 ���ַ� ��
    FILTER_FLAG_STRIP_HIGH //(integer)
    //���� ASCII ����ֵ���� 127 ���ַ� ��
    FILTER_FLAG_ENCODE_LOW //(integer)
    //�ַ��� ASCII ����ֵ���� 32��
    FILTER_FLAG_ENCODE_HIGH //(integer)
   // �ַ��� ASCII ����ֵ���� 127��
    FILTER_FLAG_ENCODE_AMP //(integer)
    //Ϊ & ���롣
    FILTER_FLAG_NO_ENCODE_QUOTES //(integer)
    //��ҪΪ ' �� " ���롣
    FILTER_FLAG_EMPTY_STRING_NULL //(integer)
    //(Ŀǰ����ʹ�á�)
    FILTER_FLAG_ALLOW_FRACTION //(integer)
    //"number_float" ����������С�����֡�
    FILTER_FLAG_ALLOW_THOUSAND //(integer)
    //"number_float" ����������ʹ��ǧ��λ�ָ�����,����
    FILTER_FLAG_ALLOW_SCIENTIFIC //(integer)
    //"number_float" ����������ʹ�ÿ�ѧ��������e��E����
    FILTER_FLAG_PATH_REQUIRED //(integer)
    //"validate_url" ��������Ҫ���·�����֡�
    FILTER_FLAG_QUERY_REQUIRED //(integer)
    //"validate_url" ��������Ҫ��� Query ���֡�
    FILTER_FLAG_IPV4 //(integer)
    //"validate_ip" ���������������� IPv4 ��ַ��
    FILTER_FLAG_IPV6 //(integer)
    //"validate_ip" ���������������� IPv6 ��ַ��
    FILTER_FLAG_NO_RES_RANGE //(integer)
    //"validate_ip" ����������ֹ���� IP ��ַ��
    FILTER_FLAG_NO_PRIV_RANGE //(integer)
    //"validate_ip" ����������ֹ˽�� IP ��ַ��
    FILTER_FLAG_EMAIL_UNICODE //(integer)
    //"validate_email" �����������ʼ���ַ�û����������� Unicode �ַ��� ��PHP 7.1.0 ����Ч��
    function filter_has_var ($param) {
        ;
    }
    function filter_id ($param) {
        ;
    }
    function filter_input_array ($param) {
        ;
    }
    function filter_input ($param) {
        ;
    }
    function filter_list ($param) {
        ;
    }
    function filter_var_array ($param) {
        ;
    }
    function filter_var($param) {
        ;
    }
}