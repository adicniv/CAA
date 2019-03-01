<?php
class data_filter{
    const INPUT_POST //(integer)
    //POST 变量。
    const INPUT_GET //(integer)
    //GET 变量。
    const INPUT_COOKIE //(integer)
    //COOKIE 变量。
    const INPUT_ENV //(integer)
    //ENV 变量。
    const INPUT_SERVER //(integer)
    //SERVER 变量。
    const INPUT_SESSION //(integer)
    //SESSION 变量。 (暂未实现)
    const INPUT_REQUEST //(integer)
    //REQUEST 变量。 (暂未实现)
    const FILTER_FLAG_NONE //(integer)
    //没有标记。
    FILTER_REQUIRE_SCALAR //(integer)
    //此标记要求输入的是标量。
    FILTER_REQUIRE_ARRAY //(integer)
   // 需要输入的是数组。
    FILTER_FORCE_ARRAY //(integer)
    //一律返回数组。
    FILTER_NULL_ON_FAILURE //(integer)
   // 失败时返回 NULL，而非 FALSE。
    FILTER_VALIDATE_INT //(integer)
   // 标记 "int" 过滤器。
    FILTER_VALIDATE_BOOLEAN //(integer)
   // 标记 "boolean" 过滤器。
    FILTER_VALIDATE_FLOAT //(integer)
    //标记 "float" 过滤器。
    FILTER_VALIDATE_REGEXP //(integer)
  //  标记 "validate_regexp" 过滤器。
    FILTER_VALIDATE_URL //(integer)
   // 标记 "validate_url" 过滤器。
    FILTER_VALIDATE_EMAIL //(integer)
    //标记 "validate_email" 过滤器。
    FILTER_VALIDATE_IP //(integer)
    //标记 "validate_ip" 过滤器。
    FILTER_VALIDATE_MAC //(integer)
   // 标记 "validate_mac_address" 过滤器。（PHP 5.5.0 起有效）
    FILTER_DEFAULT //(integer)
    //标记默认的 "unsafe_raw" 过滤器。 等同于 FILTER_UNSAFE_RAW。
    FILTER_UNSAFE_RAW //(integer)
    //标记 "unsafe_raw" 过滤器。
    FILTER_SANITIZE_STRING //(integer)
   // 标记 "string" 过滤器。
    FILTER_SANITIZE_STRIPPED //(integer)
    //标记 "stripped" 过滤器。
    FILTER_SANITIZE_ENCODED //(integer)
    //标记 "encoded" 过滤器。
    FILTER_SANITIZE_SPECIAL_CHARS //(integer)
    //标记 "special_chars" 过滤器。
    FILTER_SANITIZE_EMAIL //(integer)
  //  标记 "email" 过滤器。
    FILTER_SANITIZE_URL //(integer)
   // 标记 "url" 过滤器。
    FILTER_SANITIZE_NUMBER_INT //(integer)
    //标记 "number_int" 过滤器。
    FILTER_SANITIZE_NUMBER_FLOAT //(integer)
    //标记 "number_float" 过滤器。
    FILTER_SANITIZE_MAGIC_QUOTES //(integer)
    //标记 "magic_quotes" 过滤器。
    FILTER_CALLBACK //(integer)
    //标记 "callback" 过滤器。
    FILTER_FLAG_ALLOW_OCTAL //(integer)
    //"int" 过滤器允许八进制（octal）标记的字符（0[0-7]+）。
    FILTER_FLAG_ALLOW_HEX //(integer)
    //"int" 过滤器允许十六进制（Hex）标记的字符（0x[0-9a-fA-F]+）
    FILTER_FLAG_STRIP_LOW //(integer)
    //过滤 ASCII 编码值大于 32 的字符 。
    FILTER_FLAG_STRIP_HIGH //(integer)
    //过滤 ASCII 编码值大于 127 的字符 。
    FILTER_FLAG_ENCODE_LOW //(integer)
    //字符的 ASCII 编码值大于 32。
    FILTER_FLAG_ENCODE_HIGH //(integer)
   // 字符的 ASCII 编码值大于 127。
    FILTER_FLAG_ENCODE_AMP //(integer)
    //为 & 编码。
    FILTER_FLAG_NO_ENCODE_QUOTES //(integer)
    //不要为 ' 和 " 编码。
    FILTER_FLAG_EMPTY_STRING_NULL //(integer)
    //(目前不能使用。)
    FILTER_FLAG_ALLOW_FRACTION //(integer)
    //"number_float" 过滤器允许小数部分。
    FILTER_FLAG_ALLOW_THOUSAND //(integer)
    //"number_float" 过滤器允许使用千分位分隔符（,）。
    FILTER_FLAG_ALLOW_SCIENTIFIC //(integer)
    //"number_float" 过滤器允许使用科学计数法（e、E）。
    FILTER_FLAG_PATH_REQUIRED //(integer)
    //"validate_url" 过滤器，要求带路径部分。
    FILTER_FLAG_QUERY_REQUIRED //(integer)
    //"validate_url" 过滤器，要求带 Query 部分。
    FILTER_FLAG_IPV4 //(integer)
    //"validate_ip" 过滤器，仅仅允许 IPv4 地址。
    FILTER_FLAG_IPV6 //(integer)
    //"validate_ip" 过滤器，仅仅允许 IPv6 地址。
    FILTER_FLAG_NO_RES_RANGE //(integer)
    //"validate_ip" 过滤器，禁止保留 IP 地址。
    FILTER_FLAG_NO_PRIV_RANGE //(integer)
    //"validate_ip" 过滤器，禁止私有 IP 地址。
    FILTER_FLAG_EMAIL_UNICODE //(integer)
    //"validate_email" 过滤器，在邮件地址用户名部分允许 Unicode 字符。 （PHP 7.1.0 起有效）
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