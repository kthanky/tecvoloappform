<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 */
class storedata
{
    function storeDatainArray()
    {

        $GLOBALS['csv']=array();
        $GLOBALS['csv'][] = $_POST['title'];
        $GLOBALS['csv'][] = $_POST['firstname'];
        $GLOBALS['csv'][]= $_POST['lastname'];
        $GLOBALS['csv'][] = $_POST['email'];
        $GLOBALS['csv'][] = $_POST['contact'];
        $GLOBALS['csv'][] = $_POST['address1'];
        $GLOBALS['csv'][] = $_POST['address2'];
        $GLOBALS['csv'][] = $_POST['nation'];
        $GLOBALS['csv'][] = $_POST['edufield'];
        $GLOBALS['csv'][] = $_POST['edulevel'];
        $GLOBALS['csv'][] = $_POST['gender'];
        $GLOBALS['csv'][] = $_POST['precon'];
        $GLOBALS['csv'][] = $_POST['dob'];
        $GLOBALS['fp']= fopen("formdata.csv","a");
    }
    function storeInFile()
    {
        if ($GLOBALS['fp'])
        {
            fputcsv($GLOBALS['fp'],$GLOBALS['csv'] );
            fclose($GLOBALS['fp']);
            unset($GLOBALS['csv']);
            unset($GLOBALS['fp']);
            echo "<script type='text/javascript'>alert('Your Data Has Been Submitted Successfully');</script>";
            $URL = "index.html";
            echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
            echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        }
    }
}
$sc=new storedata();
$sc->storeDatainArray();
$sc->storeInFile();
