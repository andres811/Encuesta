<?php

include "Constants.php";

/**
 * Description of DataAccess
 *
 * @author Andres On Fire
 */
class DataAccess {

    private static $instance = null;
    

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new DataAccess();
        }
        return self::$instance;
    }
    
    //Boolean
    public function newVote($op){
        mysql_connect(MYSQLconst::host,  MYSQLconst::user,  MYSQLconst::pass);
        mysql_select_db(MYSQLconst::database);
        
        $query = "UPDATE votes SET votes = votes + 1 WHERE team = " . $op;
        return mysql_query($query);
    }
    
    //Boolean
    public function alreadyVoted($ip){
        mysql_connect(MYSQLconst::host,  MYSQLconst::user,  MYSQLconst::pass);
        mysql_select_db(MYSQLconst::database);
        
        $query = "select * from ipVoters where ip=" . $ip;
        return mysql_query($query);
    }
    
    
    
    

}
