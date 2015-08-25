<?php

$version = 0;

if(isset($_GET['version']))
{
    $version = $_GET['version'];
}

$announcements = array();

$announcement = new Announcement();
$announcement->version = "0.0.3.1";
$announcement->message = "version 1";
array_push($announcements, $announcement);

$theannouncement = new Announcement();
$theannouncement->version = $version;
$theannouncement->message = getAnnouncement($version, $announcements);

echo json_encode($theannouncement);

function getAnnouncement($version, $announcements)
{
	$returnedAnnouncment = "version 0 Default";

	foreach ($announcements as $object) 
	{
		if($object->version == $version)
		{
			$returnedAnnouncment = $object->message;
			break;
		}
	}

	return $returnedAnnouncment;
}

class Announcement
{
  public $message;
  public $version = 0;
}

?>