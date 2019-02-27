<?php 
//Inheritance is a mechanism of extending an existing class by inheriting a class we create a new class with all functionality of that existing class, and we can add new members to the new class.


class Teacher{
	var $contact;
	function details()
	{
		$contact=$this->contact;
		echo"Teacher contact is: ".$contact;
	}
	
}

class Student extends Teacher{
	var $stdName;
	var $stdContact;
	function stdDetails()
	{
		parent::details();
		echo"<br />";
		$name=$this->stdName;
		$contact=$this->stdContact;
		echo"Student Name is: ".$name." and contactn is: ".$contact;
	}
}
$std=new Student;
$std->contact="09999999";
$std->stdName="Md. Akmal Hossain";
$std->stdContact="01738279545";

$std->stdDetails();


?>