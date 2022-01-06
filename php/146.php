<?php

//https://leetcode-cn.com/problems/lru-cache/

class LRUCache {

    private $cache;
    private $capacity = 0;
    private $use;
    //private $last = 0;
    /**
     * @param Integer $capacity
     */
    function __construct($capacity) {
        $this->capacity = $capacity;
        $this->cache = [];
        $this->use   = [];
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        if (isset($this->cache[$key])) {
            $index = array_search($key,$this->use);
            unset($this->use[$index]);
            $this->use[] = $key;
            return $this->cache[$key];
        }else {
            return -1;
        }
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        if (isset($this->cache[$key])) {
            $index = array_search($key,$this->use);
            unset($this->use[$index]);
            $this->use[] = $key;
            $this->cache[$key] = $value;
        }else{
            if ($this->capacity == count($this->cache)){
                $flush = current($this->use);
                array_shift($this->use);
                unset($this->cache[$flush]);
            }
            $this->cache[$key] = $value;
            $this->use[] = $key;
        }
    }
}