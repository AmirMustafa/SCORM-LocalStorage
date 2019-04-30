<?php
require_once('../../config.php');
global $DB;

$scorm_data = $_POST['value'];
echo "<pre>";
print_r($scorm_data);die;
$scorm_data = json_decode($scorm_data);
$courseid   = $_POST['courseid'];
$userid     = $_POST['userid'];
$scormid    = $_POST['scormid'];
// $local_storage = $scorm_data['0']->entries;
$local_storage = $scorm_data->entries;

echo "<pre>";
print_r($scorm_data);die;

/* // search all the SCORM packages related with the current user
$currentUser = $DB->get_record_sql("
    SELECT * FROM {scorm_scoes_track} WHERE userid = $userid AND element = 'x.start.time'
"); */


foreach($local_storage as $ls) {
    $ls->userid   = $userid;
    $ls->courseid = $courseid;
    $ls->scormid  = $scormid;
    
    $record               = new stdClass();
    $record->section      = $ls->section;
    $record->prompt       = $ls->prompt;
    $record->response     = $ls->response;
    $record->isTakeAction = $ls->isTakeAction;
    $record->userid       = $ls->userid;
    $record->courseid     = $ls->courseid;
    $record->scormid      = $ls->scormid;
    $record->timemodified = time();
   
   // getting prev records from the db
    $prev_data_sql = "SELECT * FROM {scorm_tracker} 
   WHERE userid = $userid AND courseid = $courseid AND scormid = $scormid
   AND prompt = '$ls->prompt'";
echo $prev_data_sql;die;

/* $prev_data_sql = "SELECT * FROM {scorm_tracker} 
WHERE userid = $userid AND courseid = $courseid AND scormid = $scormid"; */


$check_prev_record = $DB->get_records_sql($prev_data_sql);


   echo "<pre>";
   print_r($check_prev_record);die;
    // $insertquery = $DB->insert_record('scorm_tracker', $record);      //course_categories is name of
    /* if(empty($searchprev)) {
    } */


}

echo '<pre>';
print_r($scorm_data['0']->entries);