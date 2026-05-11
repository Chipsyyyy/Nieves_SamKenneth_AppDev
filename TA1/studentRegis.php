<!DOCTYPE html>
<html>
<head>
    <title>College Student Registration Form</title>

    <style>
        body {
            font-family: Arial;
            font-size: 13px;
        }

        .container {
            width: 800px;
            margin: auto;
            border: 1px solid black;
            padding: 20px;
        }

        h2 {
            text-align: right;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 8px;
        }

        td {
            border: 1px solid black;
            padding: 6px;
        }

        .title {
            background-color: black;
            color: white;
            font-weight: bold;
            padding: 5px;
        }

        .line {
            border-bottom: 1px solid black;
            display: inline-block;
            width: 150px;
            text-align: center;
        }

        .long-line {
            border-bottom: 1px solid black;
            display: inline-block;
            width: 350px;
            text-align: center;
        }

        .box {
            display: inline-block;
            width: 10px;
            height: 10px;
            border: 1px solid black;
        }

        .checked {
            background-color: black;
        }

        .small-text {
            font-size: 10px;
            text-align: center;
        }
    </style>
</head>

<body>

<?php
$studentNumber = "202410116";
$date = "May 11, 2026";
$entryDate = "August 12, 2026";
$entryType = "New Student";
$yearLevel = "3RD Year";
$section = "BSIT TW22";

$collegeDepartment = "College of Computer Studies";
$program = "BS Information Technology";
$major = "Web and Mobile Application Development";
$semester = "1st Semester";
$schoolYear = "2026-2027";

$lastName = "Nieves";
$firstName = "Sam Kenneth";
$middleName = "Peralta";
$nickname = "Riki";
$gender = "Male";
$birthYear = "2006";
$birthMonth = "January";
$birthDay = "12";
$placeOfBirth = "Manila";
$civilStatus = "Single";

// Previous school variables
$previousSchool = "Balungao National High School";
$lastDateAttended = "March 30, 2026";
$strandCourse = "ICT Strand";
$schoolAddress = "Poblacion, Balungao, Pangasinan";
$reasonTransfer = "To continue college studies";

// Health variables
$medicalConditions = "N/A";
$emergencyContactName = "Francine Kate N. Riel";
$emergencyContactNumber = "09123456789";

// Citizenship variables
$birthCountry = "Philippines";
$provinceOfBirth = "Tayug, Pangasinan";
$countryCitizenship = "Philippines";
$religion = "Roman Catholic";

// String formatting
$lastName = strtoupper($lastName);
$firstName = ucfirst($firstName);
$middleName = ucfirst($middleName);
$nickname = ucfirst($nickname);
$previousSchool = strtoupper($previousSchool);
$program = strtoupper($program);
?>
