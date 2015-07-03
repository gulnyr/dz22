<?php

class DB {
public function __construct() {
    mysql_connect('localhost', 'root', '');
    mysql_select_db('lesson4');
}
    public function queryAll($sql, $class = 'StdClass')
    {
        $res = mysql_query($sql);
        if (false === $res) {
            return false;
        }

        $ret = [];

        while ($row = mysql_fetch_object($res, $class)) {
            $ret[] = $row;
        }

        return $ret;
    }

    public function queryOne($sql, $class = 'StdClass') {
        return $this->queryAll($sql, $class)[0];
    }

}