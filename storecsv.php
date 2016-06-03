<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 6/3/2016
 * Time: 2:45 PM
 */
if(isset($_POST['submit']))
{
    $csv=array();// take an array
    $title=$_POST['title'];
    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $nation = $_POST['nation'];
    $edufield=$_POST['edufield'];
    $edulevel=$_POST['edulevel'];
    $gender=$_POST['gender'];
    $precon=$_POST['precon'];
    $dob=$_POST['dob'];

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