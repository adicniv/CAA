<?php
/**
 * ��Щ����������ͨ����ͬ�ķ�ʽ��ʹ�úͲ������顣�����Ǵ洢������Ͳ���������ıز����ٵĹ��ߡ�PHP ֧�ּ�����Ͷ�ά���飬��������û��Լ�����Ҳ���������������������кܶ���������ݿ⴦�������Դ����ݿ��ѯ�з��������Լ�һЩ��������ĺ�������ο��ֲ����й�������½�����ϸ�˽� PHP �����������ʵ�ּ�ʹ�õġ�Ҳ���Բο� ������������˽���������һЩ������ʽ��
 * These functions allow you to interact with and manipulate arrays in various ways. Arrays are essential for storing, managing, and operating on sets of variables.Simple and multi-dimensional arrays are supported, and may be either user created or created by another function. There are specific database handling functions for populating arrays from database queries, and several functions return arrays.Please see the Arrays section of the manual for a detailed explanation of how arrays are implemented and used in PHP. See also Array operators for other ways how to manipulate the arrays.
 * @author IAA
 *
 */
class Array_Function {
    /**
     * �������е����м����޸�Ϊȫ��д��Сд
     * Changes the case of all keys in an array
     * @param unknown $param
     * @return string
     */
    function Name_To_Case($param){  
        //array_change_key_case($array);
        $input_array = array("FirSt" => 1, "SecOnd" => 4);
        print_r(array_change_key_case($input_array, CASE_UPPER));
        return "";
    }    
    /**
     * ��һ������ָ�ɶ��
     * Split an array into chunks
     * @param unknown $param
     * @return string
     */
    function FenGe($param){       
        //array_chunk($array, $size);
        $input_array = array('a', 'b', 'c', 'd', 'e');
        print_r(array_chunk($input_array, 2));
        print_r(array_chunk($input_array, 2, true));
        return "";
    }    
    /**
     * ����������ָ����һ��
     * Return the values from a single column in the input array
     * @param unknown $param
     * @return string
     */
    function Return_Column($param){        
        //array_column($input, $column_key);
        $records = array(
            array(
                'id' => 2135,
                'first_name' => 'John',
                'last_name' => 'Doe',
            ),
            array(
                'id' => 3245,
                'first_name' => 'Sally',
                'last_name' => 'Smith',
            ),
            array(
                'id' => 5342,
                'first_name' => 'Jane',
                'last_name' => 'Jones',
            ),
            array(
                'id' => 5623,
                'first_name' => 'Peter',
                'last_name' => 'Doe',
            )
        );
        
        $first_names = array_column($records, 'first_name');
        print_r($first_names);
        return "";
    }   
    /**
     * ����һ�����飬��һ�������ֵ��Ϊ���������һ�������ֵ��Ϊ��ֵ
     * Creates an array by using one array for keys and another for its values
     * @param unknown $param
     * @return string
     */
    function Create_Array($param){        
        //array_combine($keys, $values);
        $a = array('green', 'red', 'yellow');
        $b = array('avocado', 'apple', 'banana');
        $c = array_combine($a, $b);
        
        print_r($c);
        return "";
    }    
    /**
     * ͳ�����������е�ֵ
     * Counts all the values of an array
     * @param unknown $param
     * @return string
     */
    function Statistics($param){        
        //array_count_values($array);
        $array = array(1, "hello", 1, "world", "hello");
        print_r(array_count_values($array));
        return "";
    }    
    /**
     * ����������������Ĳ
     * Computes the difference of arrays with additional index check
     * @param unknown $param
     * @return string
     */
    function  Sets_Difference($param){        
        //array_diff_assoc($array1, $array2);
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "green", "yellow", "red");
        $result = array_diff_assoc($array1, $array2);
        print_r($result);
        return "";
    }
    /**
     * ʹ�ü����Ƚϼ�������Ĳ
     * Computes the difference of arrays using keys for comparison
     * @param unknown $param
     * @return string
     */
    function Key_Difference($param) {        
        //array_diff_key($array1, $array2);
        $array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
        $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
        
        var_dump(array_diff_key($array1, $array2));
        return "";
    }
    /**
     * ���û��ṩ�Ļص������������������������Ĳ
     * Computes the difference of arrays with additional index check which is performed by a user supplied callback function
     * @param unknown $param
     * @return number|string
     */
    function Uassoc_Difference($param) {
        //array_diff_uassoc($array1, $array2, $key_compare_func);
        function key_compare_func($a, $b)
        {
            if ($a === $b) {
                return 0;
            }
            return ($a > $b)? 1:-1;
        }
        
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "green", "yellow", "red");
        $result = array_diff_uassoc($array1, $array2, "key_compare_func");
        print_r($result);
        return "";
    }
    /**
     * �ûص������Լ����Ƚϼ�������Ĳ
     * Computes the difference of arrays using a callback function on the keys for comparison
     * @return number|string
     */
    function Ukey_Difference(){
        //array_diff_ukey($array1, $array2, $key_compare_func);
        function key_compare_func($key1, $key2)
        {
            if ($key1 == $key2)
                return 0;
                else if ($key1 > $key2)
                    return 1;
                    else
                        return -1;
        }
        
        $array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
        $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
        
        var_dump(array_diff_ukey($array1, $array2, 'key_compare_func'));
        return "";
    }
    /**
     * ��������Ĳ
     * Computes the difference of arrays
     * @param unknown $param
     * @return string
     */
    function General_Difference($param) {
        //array_diff($array1, $array2);
        $array1 = array("a" => "green", "red", "blue", "red");
        $array2 = array("b" => "green", "yellow", "red");
        $result = array_diff($array1, $array2);
        
        print_r($result);
        return "";
        
    }    
    /**
     * ʹ��ָ���ļ���ֵ�������
     * Fill an array with values, specifying keys
     * @param unknown $param
     * @return string
     */
    function Fill_Keys($param) {        
        //array_fill_keys($keys, $value); 
        $keys = array('foo', 5, 10, 'bar');
        $a = array_fill_keys($keys, 'banana');
        print_r($a);
        return "";
    }    
    /**
     * �ø�����ֵ�������
     * Fill an array with values
     * @param unknown $param
     * @return string
     */
    function Fill_General($param) {        
        //array_fill($start_index, $num, $value);
        $a = array_fill(5, 6, 'banana');
        $b = array_fill(-2, 4, 'pear');
        print_r($a);
        print_r($b);
        return "";
    }    
    /**
     * �ûص��������������еĵ�Ԫ
     * Filters elements of an array using a callback function
     * @param unknown $param
     * @return boolean|string
     */
    function Filter($param) {        
        //array_filter($array);
        function odd($var)
        {
            // returns whether the input integer is odd
            return($var & 1);
        }
        
        function even($var)
        {
            // returns whether the input integer is even
            return(!($var & 1));
        }
        
        $array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
        $array2 = array(6, 7, 8, 9, 10, 11, 12);
        
        echo "Odd :\n";
        print_r(array_filter($array1, "odd"));
        echo "Even:\n";
        print_r(array_filter($array2, "even"));
        return "";
    }    
    /**
     * ���������еļ���ֵ
     * Exchanges all keys with their associated values in an array
     * @param unknown $param
     * @return string
     */
    function Flip($param) {        
        //array_flip($array); 
        $input = array("oranges", "apples", "pears");
        $flipped = array_flip($input);
        
        print_r($flipped);
        return "";
    }        
    /**
     * ����������������Ľ���
     * Computes the intersection of arrays with additional index check
     * @param unknown $param
     * @return string
     */
    function Intersect_assoc($param) {        
        //array_intersect_assoc($array1, $array2);
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "green", "b" => "yellow", "blue", "red");
        $result_array = array_intersect_assoc($array1, $array2);
        print_r($result_array);
        return "";
    }    
    /**
     * ʹ�ü����Ƚϼ�������Ľ���
     * Computes the intersection of arrays using keys for comparison
     * @param unknown $param
     * @return string
     */
    function Intersect_Key($param) {        
        //array_intersect_key($array1, $array2);
        $array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
        $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
        
        var_dump(array_intersect_key($array1, $array2));
        return "";
    }     
    /**
     * ����������������Ľ������ûص������Ƚ�����
     * Computes the intersection of arrays with additional index check, compares indexes by a callback function
     * @param unknown $param
     * @return string
     */
    function Intersect_Uassoc($param) {        
        //array_diff_uassoc($array1, $array2, $key_compare_func);
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
        
        print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));
        return "";
    }    
    /**
     * �ûص������Ƚϼ�������������Ľ���
     * Computes the intersection of arrays using a callback function on the keys for comparison
     * @param unknown $param
     * @return number|string
     */
    function Intersect_ukey($param) {        
        //array_intersect_ukey($array1, $array2, $key_compare_func); 
        function key_compare_func($key1, $key2)
        {
            if ($key1 == $key2)
                return 0;
                else if ($key1 > $key2)
                    return 1;
                    else
                        return -1;
        }
        
        $array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
        $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
        
        var_dump(array_intersect_ukey($array1, $array2, 'key_compare_func'));
        return "";
    }    
    /**
     * ��������Ľ���
     * Computes the intersection of arrays
     * @param unknown $param
     * @return string
     */
    function Intersect($param) {     
        //array_intersect($array1, $array2);  
        $array1 = array("a" => "green", "red", "blue");
        $array2 = array("b" => "green", "yellow", "red");
        $result = array_intersect($array1, $array2);
        print_r($result);
        return "";
    }    
    /**
     * ����������Ƿ���ָ���ļ���������
     * Checks if the given key or index exists in the array
     * @param unknown $param
     * @return string
     */
    function Key_Exists($param) {        
        //array_key_exists($key, $array);
        return "";
        
    }    
    /**
     * Gets the first key of an array
     * Gets the first key of an array
     * @param unknown $param
     * @return string
     */
    function First_Key($param) {        
        //array_key_first();
        $array = ['a' => 1, 'b' => 2, 'c' => 3];
        
        $firstKey = array_key_first($array);
        
        var_dump($firstKey);
        return "";
    }   
    /**
     * Gets the last key of an array
     * Gets the last key of an array
     * @param unknown $param
     * @return string
     */
    function Key_Last($param) {        
        //array_key_last();        
        return "";
    }    
    /**
     * ���������в��ֵĻ����еļ���
     * Return all the keys or a subset of the keys of an array
     * @param unknown $param
     * @return string
     */
    function Key_Name($param) {        
        //array_keys($array);
        $array = array(0 => 100, "color" => "red");
        print_r(array_keys($array));
        
        $array = array("blue", "red", "green", "blue", "blue");
        print_r(array_keys($array, "blue"));
        
        $array = array("color" => array("blue", "red", "green"),
            "size"  => array("small", "medium", "large"));
        print_r(array_keys($array));
        return "";
    }   
    /**
     * Ϊ�����ÿ��Ԫ��Ӧ�ûص�����
     * Applies the callback to the elements of the given arrays
     * @param unknown $param
     * @return number|string
     */
    function Map($param) {        
        //array_map($callback, $array1);
        function cube($n)
        {
            return($n * $n * $n);
        }
        
        $a = array(1, 2, 3, 4, 5);
        $b = array_map("cube", $a);
        print_r($b);
        return "";
    }
    /**
     * �ݹ�غϲ�һ����������
     * Merge one or more arrays recursively
     * @param unknown $param
     * @return string
     */
    function Merge_Recursive($param) {        
        //array_merge_recursive($array1);
        $ar1 = array("color" => array("favorite" => "red"), 5);
        $ar2 = array(10, "color" => array("favorite" => "green", "blue"));
        $result = array_merge_recursive($ar1, $ar2);
        print_r($result);
        return "";
    }   
    /**
     * �ϲ�һ����������
     * Merge one or more arrays
     * @param unknown $param
     * @return string
     */
    function Merge($param) {        
        //array_merge($array1);
        $array1 = array("color" => "red", 2, 4);
        $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
        $result = array_merge($array1, $array2);
        print_r($result);
        return "";
    }  
    /**
     * �Զ��������ά�����������
     * Sort multiple or multi-dimensional arrays
     * @param unknown $param
     * @return string
     */
    function Multi_Sort($param) {        
        //array_multisort($array1);
        $ar1 = array(10, 100, 100, 0);
        $ar2 = array(1, 3, 2, 4);
        array_multisort($ar1, $ar2);
        
        var_dump($ar1);
        var_dump($ar2);
        return "";
    }    
    /**
     * ��ָ�����Ƚ�һ��ֵ��������
     * Pad array to the specified length with a value
     * @param unknown $param
     * @return string
     */
    function Pad($param) {        
        //array_pop($array);
        $input = array(12, 10, 9);
        
        $result = array_pad($input, 5, 0);
        // result is array(12, 10, 9, 0, 0)
        
        $result = array_pad($input, -7, -1);
        // result is array(-1, -1, -1, -1, 12, 10, 9)
        
        $result = array_pad($input, 2, "noop");
        // not padded
        return "";
    }        
    /**
     * �����������һ����Ԫ����ջ��
     * Pop the element off the end of array
     * @param unknown $param
     * @return string
     */
    function Pop($param) {        
        //array_pop($array);
        $stack = array("orange", "banana", "apple", "raspberry");
        $fruit = array_pop($stack);
        print_r($stack);
        return "";
    }
    /**
     *  ��������������ֵ�ĳ˻�
     *  Calculate the product of values in an array
     * @param unknown $param
     * @return string
     */
    function Product($param) {        
        //array_product($array);
        $a = array(2, 4, 6, 8);
        echo "product(a) = " . array_product($a) . "\n";
        echo "product(array()) = " . array_product(array()) . "\n";
        return "";
    }    
    /**
     * ��һ��������Ԫѹ�������ĩβ����ջ��
     * Push one or more elements onto the end of array
     * @param unknown $param
     * @return string
     */
    function Push($param) {        
        //array_product($array);
        $stack = array("orange", "banana");
        array_push($stack, "apple", "raspberry");
        print_r($stack);
        return "";
    }
    /**
     * �����������ȡ��һ��������Ԫ
     * Pick one or more random keys out of an array
     * @param unknown $param
     * @return string
     */
    function Rand($param) {        
        //array_rand($array);
        $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
        $rand_keys = array_rand($input, 2);
        echo $input[$rand_keys[0]] . "\n";
        echo $input[$rand_keys[1]] . "\n";
        return "";
    } 
    /**
     * �ûص����������ؽ������Ϊ��һ��ֵ
     *  Iteratively reduce the array to a single value using a callback function
     * @param unknown $param
     * @return unknown|string
     */
    function reduce($param) {        
        //array_reduce($array, $callback);
        function sum($carry, $item)
        {
            $carry += $item;
            return $carry;
        }
        
        function product($carry, $item)
        {
            $carry *= $item;
            return $carry;
        }
        
        $a = array(1, 2, 3, 4, 5);
        $x = array();
        
        var_dump(array_reduce($a, "sum")); // int(15)
        var_dump(array_reduce($a, "product", 10)); // int(1200), because: 10*1*2*3*4*5
        var_dump(array_reduce($x, "sum", "No data to reduce")); // string(17) "No data to reduce"
        return "";
    }  
    /**
     * ʹ�ô��ݵ�����ݹ��滻��һ�������Ԫ��
     * Replaces elements from passed arrays into the first array recursively
     * @param unknown $param
     * @return string
     */
    function Replace_Recursive($param) {        
        //array_replace_recursive($array1, $array2);
        $base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
        $replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));
        
        $basket = array_replace_recursive($base, $replacements);
        print_r($basket);
        
        $basket = array_replace($base, $replacements);
        print_r($basket);
        return "";
    }    
    /**
     * ʹ�ô��ݵ������滻��һ�������Ԫ��
     * Replaces elements from passed arrays into the first array
     * @param unknown $param
     * @return string
     */
    function Replace($param) {        
        //array_replace($array1, $array2);
        $base = array("orange", "banana", "apple", "raspberry");
        $replacements = array(0 => "pineapple", 4 => "cherry");
        $replacements2 = array(0 => "grape");
        
        $basket = array_replace($base, $replacements, $replacements2);
        print_r($basket);
        return "";
    }    
    /**
     * ���ص�Ԫ˳���෴������
     * Return an array with elements in reverse order
     * @param unknown $param
     * @return string
     */
    function Reverse($param) {        
        //array_reverse($array);
        $input  = array("php", 4.0, array("green", "red"));
        $reversed = array_reverse($input);
        $preserved = array_reverse($input, true);
        
        print_r($input);
        print_r($reversed);
        print_r($preserved);
        return "";
    }
    /**
     * ������������������ֵ������ɹ��򷵻��׸���Ӧ�ļ�
     * Searches the array for a given value and returns the first corresponding key if successful
     * @param unknown $param
     * @return string
     */
    function Search($param) {        
        //array_search($needle, $haystack);
        $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
        
        $key = array_search('green', $array); // $key = 2;
        $key = array_search('red', $array);   // $key = 1;
        return "";
    }    
    /**
     * �����鿪ͷ�ĵ�Ԫ�Ƴ�����
     * Shift an element off the beginning of array
     * @param unknown $param
     * @return string
     */
    function Shift($param) {        
        //array_shif();
        $stack = array("orange", "banana", "apple", "raspberry");
        $fruit = array_shift($stack);
        print_r($stack);
        return "";
    }
    /**
     * ��������ȡ��һ��
     * Extract a slice of the array
     * @param unknown $param
     * @return string
     */
    function Slice($param) {        
        //array_slice($array, $offset);
        $input = array("a", "b", "c", "d", "e");
        
        $output = array_slice($input, 2);      // returns "c", "d", and "e"
        $output = array_slice($input, -2, 1);  // returns "d"
        $output = array_slice($input, 0, 3);   // returns "a", "b", and "c"
        
        // note the differences in the array keys
        print_r(array_slice($input, 2, -1));
        print_r(array_slice($input, 2, -1, true));
        return "";
    }
    /**
     * ȥ�������е�ĳһ���ֲ�������ֵȡ��
     * Remove a portion of the array and replace it with something else
     * @param unknown $param
     * @return string
     */
    function Splice($param) {       
        //array_splice($input, $offset);
        $input = array("red", "green", "blue", "yellow");
        array_splice($input, 2);
        // $input is now array("red", "green")
        
        $input = array("red", "green", "blue", "yellow");
        array_splice($input, 1, -1);
        // $input is now array("red", "yellow")
        
        $input = array("red", "green", "blue", "yellow");
        array_splice($input, 1, count($input), "orange");
        // $input is now array("red", "orange")
        
        $input = array("red", "green", "blue", "yellow");
        array_splice($input, -1, 1, array("black", "maroon"));
        // $input is now array("red", "green",
        //          "blue", "black", "maroon")
        
        $input = array("red", "green", "blue", "yellow");
        array_splice($input, 3, 0, "purple");
        // $input is now array("red", "green",
        //          "blue", "purple", "yellow");
        return "";
    }    
    /**
     * ������������ֵ���
     * Calculate the sum of values in an array
     * @param unknown $param
     * @return string
     */
    function Sum($param) {       
        //array_sum();
        $a = array(2, 4, 6, 8);
        echo "sum(a) = " . array_sum($a) . "\n";
        
        $b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
        echo "sum(b) = " . array_sum($b) . "\n";
        return "";
    }    
    /**
     * ����������������Ĳ���ûص������Ƚ�����
     * Computes the difference of arrays with additional index check, compares data by a callback function
     * @param unknown $param
     * @return number|string
     */
    function Udiff_Assoc($param) {        
        //array_udiff_assoc($array1, $array2, $value_compare_func);
        class cr {
            private $priv_member;
            function cr($val)
            {
                $this->priv_member = $val;
            }
            
            static function comp_func_cr($a, $b)
            {
                if ($a->priv_member === $b->priv_member) return 0;
                return ($a->priv_member > $b->priv_member)? 1:-1;
            }
        }
        
        $a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1=> new cr(4), 2 => new cr(-15),);
        $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1=> new cr(4), 2 => new cr(-15),);
        
        $result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
        print_r($result);
        return "";
    }    
    /**
     * ����������������Ĳ���ûص������Ƚ����ݺ�����
     * Computes the difference of arrays with additional index check, compares data and indexes by a callback function
     * @param unknown $param
     * @return number|string
     */
    function Udiff_Uassoc($param) {        
        //array_diff_uassoc($array1, $array2, $key_compare_func);
        class cr {
            private $priv_member;
            function cr($val)
            {
                $this->priv_member = $val;
            }
            
            static function comp_func_cr($a, $b)
            {
                if ($a->priv_member === $b->priv_member) return 0;
                return ($a->priv_member > $b->priv_member)? 1:-1;
            }
            
            static function comp_func_key($a, $b)
            {
                if ($a === $b) return 0;
                return ($a > $b)? 1:-1;
            }
        }
        $a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1=> new cr(4), 2 => new cr(-15),);
        $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1=> new cr(4), 2 => new cr(-15),);
        
        $result = array_udiff_uassoc($a, $b, array("cr", "comp_func_cr"), array("cr", "comp_func_key"));
        print_r($result);
        return "";
    }
    /**
     * �ûص������Ƚ���������������Ĳ
     * Computes the difference of arrays by using a callback function for data comparison
     * @param unknown $param
     * @return number|string
     */
    function udiff($param) {        
        //array_udiff($array1, $array2, $value_compare_func);
        // Arrays to compare
        $array1 = array(new stdclass, new stdclass,
            new stdclass, new stdclass,
        );
        
        $array2 = array(
            new stdclass, new stdclass,
        );
        
        // Set some properties for each object
        $array1[0]->width = 11; $array1[0]->height = 3;
        $array1[1]->width = 7;  $array1[1]->height = 1;
        $array1[2]->width = 2;  $array1[2]->height = 9;
        $array1[3]->width = 5;  $array1[3]->height = 7;
        
        $array2[0]->width = 7;  $array2[0]->height = 5;
        $array2[1]->width = 9;  $array2[1]->height = 2;
        
        function compare_by_area($a, $b) {
            $areaA = $a->width * $a->height;
            $areaB = $b->width * $b->height;
            
            if ($areaA < $areaB) {
                return -1;
            } elseif ($areaA > $areaB) {
                return 1;
            } else {
                return 0;
            }
        }
        
        print_r(array_udiff($array1, $array2, 'compare_by_area'));
        return "";
    }
    /**
     * ����������������Ľ������ûص������Ƚ�����
     * Computes the intersection of arrays with additional index check, compares data by a callback function
     * @param unknown $param
     * @return string
     */
    function Uintersect_Assoc($param) {        
        //array_uintersect_assoc($array1, $array2, $value_compare_func);
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
        
        print_r(array_uintersect_assoc($array1, $array2, "strcasecmp"));
        return "";
    }
    /**
     * ����������������Ľ������õ����Ļص������Ƚ����ݺ�����
     * Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions
     * @param unknown $param
     * @return string
     */
    function Uintersect_Uassoc($param) {        
        //array_uintersect_uassoc($array1, $array2, $value_compare_func, $key_compare_func);
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
        
        print_r(array_uintersect_uassoc($array1, $array2, "strcasecmp", "strcasecmp"));
        return "";
    }
    /**
     * ��������Ľ������ûص������Ƚ�����
     * Computes the intersection of arrays, compares data by a callback function
     * @param unknown $param
     * @return string
     */
    function Uintersect($param) {        
        //array_uintersect($array1, $array2, $value_compare_func);
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
        
        print_r(array_uintersect($array1, $array2, "strcasecmp"));
        return "";
    }
    /**
     * �Ƴ��������ظ���ֵ
     * Removes duplicate values from an array
     * @param unknown $param
     * @return string
     */
    function Unique($param) {       
        //array_unique($array);
        $input = array("a" => "green", "red", "b" => "green", "blue", "red");
        $result = array_unique($input);
        print_r($result);
        return "";
    }
    /**
     * �����鿪ͷ����һ��������Ԫ
     * Prepend one or more elements to the beginning of an array
     * @param unknown $param
     * @return string
     */
    function Unshif($param) {        
        //array_unshift($array, $value1);
        $queue = array("orange", "banana");
        array_unshift($queue, "apple", "raspberry");
        print_r($queue);
        return "";
    }    
    /**
     * �������������е�ֵ
     * Return all the values of an array
     * @param unknown $param
     * @return string
     */
    function Values($param) {        
        //array_values($array);
        $array = array("size" => "XL", "color" => "gold");
        print_r(array_values($array));
        return "";
    }
    /**
     * �������е�ÿ����Ա�ݹ��Ӧ���û�����
     * Apply a user function recursively to every member of an array
     * @param unknown $param
     * @return string
     */
    function Walk_Recursive($param) {
        //array_walk_recursive($array, $callback);
        $sweet = array('a' => 'apple', 'b' => 'banana');
        $fruits = array('sweet' => $sweet, 'sour' => 'lemon');
        
        function test_print($item, $key)
        {
            echo "$key holds $item\n";
        }
        
        array_walk_recursive($fruits, 'test_print');
        return "";
    }
    /**
     * ʹ���û��Զ��庯���������е�ÿ��Ԫ�����ص�����
     * Apply a user supplied function to every member of an array
     * @param unknown $param
     * @return string
     */
    function Walk($param) {
        //array_walk($array, $callback);
        $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
        
        function test_alter(&$item1, $key, $prefix)
        {
            $item1 = "$prefix: $item1";
        }
        
        function test_print($item2, $key)
        {
            echo "$key. $item2<br />\n";
        }
        
        echo "Before ...:\n";
        array_walk($fruits, 'test_print');
        
        array_walk($fruits, 'test_alter', 'fruit');
        echo "... and after:\n";
        
        array_walk($fruits, 'test_print');
        return "";
    }
    /**
     * �½�һ������
     * Create an array
     * @param unknown $param
     * @return string
     */
    function Array($param) {
        //array();
        $fruits = array (
            "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
            "numbers" => array(1, 2, 3, 4, 5, 6),
            "holes"   => array("first", 5 => "second", "third")
        );
        return "";
    }
    /**
     * ����������������򲢱���������ϵ
     * Sort an array in reverse order and maintain index association
     * @param unknown $param
     * @return string
     */
    function Arsort($param) {
        //arsort($array);
        $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
        arsort($fruits);
        foreach ($fruits as $key => $val) {
            echo "$key = $val\n";
        }
        return "";
    }
    /**
     * ������������򲢱���������ϵ
     * Sort an array and maintain index association
     * @return string
     */
    function Asort(){
        //asort();
        $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
        asort($fruits);
        foreach ($fruits as $key => $val) {
            echo "$key = $val\n";
        }
        return "";
    }
    /**
     *  ����һ�����飬���������������ǵ�ֵ
     *  Create array containing variables and their values
     * @param unknown $param
     * @return string
     */
    function Compact($param) {
        //compact($array);
        $city  = "San Francisco";
        $state = "CA";
        $event = "SIGGRAPH";
        
        $location_vars = array("city", "state");
        
        $result = compact("event", "nothing_here", $location_vars);
        print_r($result);
        return "";
    }
    /**
     * ���������еĵ�Ԫ��Ŀ��������е����Ը���
     * Count all elements in an array, or something in an object
     * @param unknown $param
     * @return string
     */
    function Count($param) {
        //count($array_or_countable);
        $a[0] = 1;
        $a[1] = 3;
        $a[2] = 5;
        var_dump(count($a));
        
        $b[0]  = 7;
        $b[5]  = 9;
        $b[10] = 11;
        var_dump(count($b));
        
        var_dump(count(null));
        
        var_dump(count(false));
        return "";
    }
    /**
     * ���������еĵ�ǰ��Ԫ
     * Return the current element in an array
     * @param unknown $param
     * @return string
     */
    function Current($param) {
        //current($array);
        $transport = array('foot', 'bike', 'car', 'plane');
        $mode = current($transport); // $mode = 'foot';
        $mode = next($transport);    // $mode = 'bike';
        $mode = current($transport); // $mode = 'bike';
        $mode = prev($transport);    // $mode = 'foot';
        $mode = end($transport);     // $mode = 'plane';
        $mode = current($transport); // $mode = 'plane';
        
        $arr = array();
        var_dump(current($arr)); // bool(false)
        
        $arr = array(array());
        var_dump(current($arr)); // array(0) { }
        return "";
    }
    /**
     * ���������е�ǰ�ļ���ֵ�Բ�������ָ����ǰ�ƶ�һ��
     * Return the current key and value pair from an array and advance the array cursor
     * @return string
     */
    function Each(){
        //each($array);
        $foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
        $bar = each($foo);
        print_r($bar);
        return "";
    }
    /**
     * ��������ڲ�ָ��ָ�����һ����Ԫ
     * Set the internal pointer of an array to its last element
     * @param unknown $param
     * @return string
     */
    function End($param) {
        //end($array);
        $fruits = array('apple', 'banana', 'cranberry');
        echo end($fruits); // cranberry
        return "";
    }
    /**
     * �������н��������뵽��ǰ�ķ��ű�
     * Import variables into the current symbol table from an array
     * @param unknown $param
     * @return string
     */
    function extract($param) {
        //extract($array);
        /* �ٶ� $var_array �� wddx_deserialize ���ص�����*/
        
        $size = "large";
        $var_array = array("color" => "blue",
            "size"  => "medium",
            "shape" => "sphere");
        extract($var_array, EXTR_PREFIX_SAME, "wddx");
        
        echo "$color, $size, $shape, $wddx_size\n";
        return "";
    }
    /**
     * ����������Ƿ����ĳ��ֵ
     * Checks if a value exists in an array
     * @param unknown $param
     * @return string
     */
    function In_Array($param) {
        //in_array($needle, $haystack);
        $os = array("Mac", "NT", "Irix", "Linux");
        if (in_array("Irix", $os)) {
            echo "Got Irix";
        }
        if (in_array("mac", $os)) {
            echo "Got mac";
        }
        return "";
    }
    /**
     * ���� array_key_exists
     * Alias of array_key_exists
     * @param unknown $param
     * @return string
     */
    function Alias_Key_Exists($param) {
        //key_exists($key, $search);
        return "";
    }
    /**
     * �ӹ���������ȡ�ü���
     * Fetch a key from an array
     * @param unknown $param
     * @return string
     */
    function Key($param) {
        //key($array);
        $array = array(
            'fruit1' => 'apple',
            'fruit2' => 'orange',
            'fruit3' => 'grape',
            'fruit4' => 'apple',
            'fruit5' => 'apple');
        
        // this cycle echoes all associative array
        // key where value equals "apple"
        while ($fruit_name = current($array)) {
            if ($fruit_name == 'apple') {
                echo key($array).'<br />';
            }
            next($array);
        }
        return "";
    }
    /**
     * �����鰴�ռ�����������
     * Sort an array by key in reverse order
     * @param unknown $param
     * @return string
     */
    function Krsort($param) {
        //krsort($array);
        $fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
        krsort($fruits);
        foreach ($fruits as $key => $val) {
            echo "$key = $val\n";
        }
        return "";
    }
    /**
     * �����鰴�ռ�������
     * Sort an array by key
     * @param unknown $param
     * @return string
     */
    function Ksort($param) {
        //ksort($array);
        $fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
        ksort($fruits);
        foreach ($fruits as $key => $val) {
            echo "$key = $val\n";
        }
        return "";
    }
    /**
     * �������е�ֵ����һ�����
     * Assign variables as if they were an array
     * @param unknown $param
     * @return string
     */
    function List($param) {
        //list()="";
        $info = array('coffee', 'brown', 'caffeine');
        
        // �г����б���
        list($drink, $color, $power) = $info;
        echo "$drink is $color and $power makes it special.\n";
        
        // �г����ǵ�����һ��
        list($drink, , $power) = $info;
        echo "$drink has $power.\n";
        
        // ����������������������
        list( , , $power) = $info;
        echo "I need $power!\n";
        
        // list() ���ܶ��ַ���������
        list($bar) = "abcde";
        var_dump($bar); // NULL
        return "";
    }
    /**
     * �á���Ȼ�����㷨��������в����ִ�Сд��ĸ������
     * Sort an array using a case insensitive "natural order" algorithm
     * @param unknown $param
     * @return string
     */
    function Natcasesort($param) {
        //natcasesort($array);
        $array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');
        
        sort($array1);
        echo "Standard sorting\n";
        print_r($array1);
        
        natcasesort($array2);
        echo "\nNatural order sorting (case-insensitive)\n";
        print_r($array2);
        return "";
    }
    /**
     * �á���Ȼ�����㷨����������
     * Sort an array using a "natural order" algorithm
     * @param unknown $param
     * @return string
     */
    function NatSort($param) {
        //natsort($array);
        $array1 = $array2 = array("img12.png", "img10.png", "img2.png", "img1.png");
        
        asort($array1);
        echo "Standard sorting\n";
        print_r($array1);
        
        natsort($array2);
        echo "\nNatural order sorting\n";
        print_r($array2);
        return "";
    }
    /**
     * �������е��ڲ�ָ����ǰ�ƶ�һλ
     * Advance the internal pointer of an array
     * @param unknown $param
     * @return string
     */
    function Next($param) {
        //Next($array);
        $transport = array('foot', 'bike', 'car', 'plane');
        $mode = current($transport); // $mode = 'foot';
        $mode = next($transport);    // $mode = 'bike';
        $mode = next($transport);    // $mode = 'car';
        $mode = prev($transport);    // $mode = 'bike';
        $mode = end($transport);     // $mode = 'plane';
        return "";
    }
    /**
     * current �ı���
     * Alias of current
     * @param unknown $param
     * @return string
     */
    function Alias_Pos($param) {
        //pos($arg);
        return "";
    }
    /**
     * ��������ڲ�ָ�뵹��һλ
     * Rewind the internal array pointer
     * @param unknown $param
     * @return string
     */
    function Prev($param) {
        //prev();
        $transport = array('foot', 'bike', 'car', 'plane');
        $mode = current($transport); // $mode = 'foot';
        $mode = next($transport);    // $mode = 'bike';
        $mode = next($transport);    // $mode = 'car';
        $mode = prev($transport);    // $mode = 'bike';
        $mode = end($transport);     // $mode = 'plane';
        return "";
    }
    /**
     * ���ݷ�Χ�������飬����ָ����Ԫ��
     * Create an array containing a range of elements
     * @param unknown $param
     * @return string
     */
    function Range($param) {
        //range($start, $end);
        // array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12)
        foreach (range(0, 12) as $number) {
            echo $number;
        }
        
        //  step ����
        // array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100)
        foreach (range(0, 100, 10) as $number) {
            echo $number;
        }
        
        // �ַ����е�ʹ��
        // array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');
        foreach (range('a', 'i') as $letter) {
            echo $letter;
        }
        // array('c', 'b', 'a');
        foreach (range('c', 'a') as $letter) {
            echo $letter;
        }
        return "";
    }
    /**
     * ��������ڲ�ָ��ָ���һ����Ԫ
     * Set the internal pointer of an array to its first element
     * @param unknown $param
     * @return string
     */
    function Reset($param) {
        //reset($array);
        $array = array('step one', 'step two', 'step three', 'step four');
        
        // by default, the pointer is on the first element
        echo current($array) . "<br />\n"; // "step one"
        
        // skip two steps
        next($array);
        next($array);
        echo current($array) . "<br />\n"; // "step three"
        
        // reset pointer, start again on step one
        reset($array);
        echo current($array) . "<br />\n"; // "step one"
        return "";
    }
    /**
     * ��������������
     * Sort an array in reverse order
     * @param unknown $param
     * @return string
     */
    function Rsort($param) {
        //rsort($array);
        $fruits = array("lemon", "orange", "banana", "apple");
        rsort($fruits);
        foreach ($fruits as $key => $val) {
            echo "$key = $val\n";
        }
        return "";
    }
    /**
     * ��������
     * Shuffle an array
     * @param unknown $param
     * @return string
     */
    function Shuffle($param) {
        //shuffle($array);
        $numbers = range(1, 20);
        shuffle($numbers);
        foreach ($numbers as $number) {
            echo "$number ";
        }
        return "";
    }
    /**
     * count �ı���
     * Alias of count
     * @param unknown $param
     * @return string
     */
    function Alias_SizeOf($param) {
        //sizeof($var);
        $fruits = array("lemon", "orange", "banana", "apple");
        sort($fruits);
        foreach ($fruits as $key => $val) {
            echo "fruits[" . $key . "] = " . $val . "\n";
        }
        return "";
    }
    /**
     *  ����������
     *  Sort an array
     * @param unknown $param
     * @return string
     */
    function Sort($param) {
        //sort();
        $fruits = array("lemon", "orange", "banana", "apple");
        sort($fruits);
        foreach ($fruits as $key => $val) {
            echo "fruits[" . $key . "] = " . $val . "\n";
        }
        return "";
    }
    /**
     * ʹ���û��Զ���ıȽϺ����������е�ֵ�������򲢱�����������
     * Sort an array with a user-defined comparison function and maintain index association
     * @param unknown $param
     * @return number|string
     */
    function Uasort($param) {
        //uasort($array, $value_compare_func);
        // Comparison function
        function cmp($a, $b) {
            if ($a == $b) {
                return 0;
            }
            return ($a < $b) ? -1 : 1;
        }
        
        // Array to be sorted
        $array = array('a' => 4, 'b' => 8, 'c' => -1, 'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4);
        print_r($array);
        
        // Sort and print the resulting array
        uasort($array, 'cmp');
        print_r($array);
        return "";
    }
    /**
     * ʹ���û��Զ���ıȽϺ����������еļ�����������
     *  Sort an array by keys using a user-defined comparison function
     * @param unknown $param
     * @return number|string
     */
    function Uksort($param) {
        //uksort($array, $key_compare_func);
        function cmp($a, $b)
        {
            $a = preg_replace('@^(a|an|the) @', '', $a);
            $b = preg_replace('@^(a|an|the) @', '', $b);
            return strcasecmp($a, $b);
        }
        
        $a = array("John" => 1, "the Earth" => 2, "an apple" => 3, "a banana" => 4);
        
        uksort($a, "cmp");
        
        foreach ($a as $key => $value) {
            echo "$key: $value\n";
        }
        return "";
        
    }
    /**
     * ʹ���û��Զ���ıȽϺ����������е�ֵ��������
     * Sort an array by values using a user-defined comparison function
     * @param unknown $param
     * @return number|string
     */
    function Usort($param) {
        //usort($array, $value_compare_func);
        function cmp($a, $b)
        {
            if ($a == $b) {
                return 0;
            }
            return ($a < $b) ? -1 : 1;
        }
        
        $a = array(3, 2, 5, 6, 1);
        
        usort($a, "cmp");
        
        foreach ($a as $key => $value) {
            echo "$key: $value\n";
        }
        return "";
    }         
}