<?php

/**
 * Description of data
 *
 * @author lokesh
 */
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '\PhpProject2\Model\Classmodel.php');

class MODEL_DATA extends Classmodel {

    public function get_task_details() {
        $con = Classmodel::get_connection();
        $data=[];
        $res = mysqli_query($con, "select * from time_information");
        while ($row=mysqli_fetch_array($res)) {
          $data[]=array($row['working_on'],$row['category'],$row['time'],$row['date']); //converting database rows into array
        }

        return $data;
    }

    public function saverecords($working_on, $category, $time, $date) {
// Inserting in Table(time Information) of Database
        $connection = Classmodel::get_connection();
        $query = "insert into time_information(working_on,category,time,date) values('$working_on','$category','$time','$date')";
        if (mysqli_query($connection, $query)) {
            echo "values are inserted successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
        }
    }

}
