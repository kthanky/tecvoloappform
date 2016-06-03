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
        $GLOBALS['csv'][] = formValidation($_POST['title']);
        $GLOBALS['csv'][] = formValidation($_POST['firstname']);
        $GLOBALS['csv'][]= formValidation($_POST['lastname']);
        $GLOBALS['csv'][] = formValidation($_POST['gender']);
        $GLOBALS['csv'][] = formValidation($_POST['dob']);
        $GLOBALS['csv'][] = formValidation($_POST['email']);
        $GLOBALS['csv'][] = formValidation($_POST['contact']);
        $GLOBALS['csv'][] = formValidation($_POST['address1']);
        $GLOBALS['csv'][] = formValidation($_POST['address2']);
        $GLOBALS['csv'][] = formValidation($_POST['nation']);
        $GLOBALS['csv'][] = formValidation($_POST['edulevel']);
        $GLOBALS['csv'][] = formValidation($_POST['edufield']);
        $GLOBALS['csv'][] = formValidation($_POST['precon']);
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
function formValidation($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$sc=new storedata();
$sc->storeDatainArray();
$sc->storeInFile();
