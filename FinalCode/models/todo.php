<?php

final class todo extends database\model
{
    public $id;
    public $owneremail;
    public $ownerid;
    public $createddate;
    public $duedate;
    public $message;
    public $isdone;
    protected static $modelName = 'todo';

    public static function getTablename()
    {

        $tableName = 'todos';
        return $tableName;
    }
    //to find a users tasks you need to create a method here.  Use $this->id to get the usersID For the query
    public static function findTasks()
    {

        //I am temporarily putting a findall here but you should add a method to todos that takes the USER ID and returns their tasks.
        $records = todos::findAll();
        print_r($records);
        return $records;
    }
    //add a method to compare the passwords this is where bcrypt should be done and it should return TRUE / FALSE for login




    /*public function validate()
    {
        $valid = TRUE;
        echo 'myemail: ' . $this->email;
        if($this->email == '') {
            $valid = FALSE;
            echo 'nothing in email';
        }


        return $valid;

    }*/

}

?>
