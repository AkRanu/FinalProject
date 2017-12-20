<?php


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }
    public static function alltasks()
{
    $record = todos::findTasksbyID($_REQUEST['id']);
    self::getTemplate('show_all_task', $record);
}

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        $records = todos::findAll();
        session_start();
           if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];
           } else {

               echo 'you must be logged in to view tasks';
           }
        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);

        self::getTemplate('all_tasks', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {

        echo 'abc';
        session_start();
        $user = new todo();
        $user->owneremail = $_SESSION["userEmail"];
        $user->ownerid = $_SESSION['userID'];
        $user->createddate = $_POST['cdate'];
        $user->duedate = $_POST['ddate'];
        $user->message = $_POST['message'];
        $user->isdone = $_POST['isdone'];
        $user->save();

        //self::getTemplate('all_tasks', $user);

        $userID = $_SESSION['userID'];
        echo $userID;
        header("Location: index.php?page=tasks&action=alltasks&id=".$userID);
        //self::getTemplate('addTask');
           }
    public static function insertButton()
    {
        self::getTemplate('create_tasks');
    }

 public static function addTask()
    {
        self::getTemplate('addTask');
    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {

        session_start();
         $userID = $_SESSION['userID'];
         //$record = todos::findOne($_REQUEST['id']);
         //$record->body = $_REQUEST['body'];
         $record = new todo();
         $record->owneremail = $_POST['owneremail'];
         $record->ownerid = $_SESSION['userID'];
         $record->createddate = $_POST['createddate'];
         $record->duedate = $_POST['duedate'];
         $record->message = $_POST['message'];
         $record->isdone = $_POST['isdone'];
         $record->save();
        //print_r($_POST);

        header("Location: index.php?page=tasks&action=all&id=".$userID);


    }

    public static function updateTask()
    {

        echo "inside update";
        session_start();
        $userID = $_SESSION['userID'];
        $records = todos::findOne($_REQUEST['id']);
        //$record->body = $_REQUEST['body'];
        $record = new todo();
        $record->id = $records->id ;
        $record->owneremail = $_POST['owneremail'];
        $record->ownerid = $_SESSION['userID'];
        $record->createddate = $_POST['createddate'];
        $record->duedate = $_POST['duedate'];
        $record->message = $_POST['message'];
        $record->isdone = $_POST['isdone'];
        $record->save();

        print_r($_POST);
        header("Location: index.php?page=tasks&action=alltasks&id=".$userID);


    }

    public static function save() {
        session_start();
        $task = new todo();

        //$task->body = $_POST['body'];
        $task->ownerid = $_SESSION['userID'];
        $task->save();

    }
 /*   public static function logout() {
        session_destroy();
        $task = new todo();

        //$task->body = $_POST['body'];
        $task->ownerid = $_SESSION['userID'];
        $task->save();

    }
*/
    public static function editTask()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);
    }

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        //print_r($_POST);
        session_start();
        $userID = $_SESSION['userID'];
        echo $userID;
        header("Location: index.php?page=tasks&action=alltasks&id=".$userID);

    }

}