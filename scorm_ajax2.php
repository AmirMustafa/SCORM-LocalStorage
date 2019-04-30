<?php
require_once('../../config.php');
global $DB, $USER, $COURSE, $SESSION;


$scorm_data = $scorm_data_final = $_POST['value'];

/* echo "<pre>";
print_r($scorm_data); */
$scorm_data = json_decode($scorm_data);
$courseid   = $SESSION->ccid;
$userid     = $USER->id;
$scormid    = $SESSION->scormid;
/* $courseid   = $_POST['courseid'];
$userid     = $_POST['userid'];
$scormid    = $_POST['scormid']; */
$local_storage = $scorm_data['0']->entries;
// $local_storage = $scorm_data->entries;

foreach($local_storage as $ls) {
    $ls->userid   = $userid;
    $ls->courseid = $courseid;
    $ls->scormid  = $scormid;
    
    $record               = new stdClass();
    $record->section      = $ls->section;
    $record->prompt       = $ls->prompt;
    $record->isTakeAction = $ls->isTakeAction;
    $record->userid       = $ls->userid;
    $record->courseid     = $ls->courseid;
    $record->scormid      = $ls->scormid;
    $record->timemodified = time();
    $prompt               = rtrim($record->prompt, '?');
    $response             = $record->response     = $ls->response;
   
   // getting prev records from the db
    $prev_data_sql = "SELECT * FROM {scorm_tracker} 
   WHERE userid = $userid AND courseid = $courseid
   AND prompt = '$prompt'";

  $check_prev_record = $DB->get_records_sql($prev_data_sql);
  // print_r($check_prev_record);

  $insertquery = "UPDATE {scorm_tracker} SET response = '$response' WHERE prompt = '$prompt'";
  $DB->execute($insertquery);
}

echo json_encode($local_storage);die;

/*echo '<pre>';
print_r($scorm_data['0']->entries);*/