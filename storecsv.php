<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 6/3/2016
 * Time: 2:45 PM
 */
if(isset($_POST['fn']))
{
    $csv=array();// take an array
    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $ln = $_POST['lastname'];
    $ln = $_POST['lastname'];
    $ln = $_POST['lastname'];
    $ln = $_POST['lastname'];
    $ln = $_POST['lastname'];

    $csv[]=$fn;
    $csv[]=$ln;  //push the values in an array.

    if(empty($fn) || empty($ln))
    {//show the form
        $message = 'Fill in areas in red!';
        $aClass = 'errorClass';
    }

    $fp = fopen("formTest.csv","a");
    if($fp)
    {
        foreach ($csv as $val)
        {
            fputcsv($fp, $val); //write data in csv file.
        }
        fclose($fp); // Close the file
    }
}
?>