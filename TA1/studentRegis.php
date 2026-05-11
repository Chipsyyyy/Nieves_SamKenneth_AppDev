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

<div class="container">

    <h2>College Student Registration Form</h2>

    <table>
        <tr>
            <td colspan="4"><b>Registration Details</b></td>
        </tr>

        <tr>
            <td>Student Number: <span class="line"><?php echo $studentNumber; ?></span></td>
            <td>Date: <span class="line"><?php echo $date; ?></span></td>
            <td colspan="2">
                <span class="box checked"></span> New Student
                <span class="box"></span> Transferee
                <span class="box"></span> Returnee
            </td>
        </tr>

        <tr>
            <td>Entry Date: <span class="line"><?php echo $entryDate; ?></span></td>
            <td>Entry Type: <span class="line"><?php echo $entryType; ?></span></td>
            <td>Year Level: <span class="line"><?php echo $yearLevel; ?></span></td>
            <td>Section: <span class="line"><?php echo $section; ?></span></td>
        </tr>
    </table>

    <table>
        <tr>
            <td colspan="2" class="title">College Information</td>
        </tr>

        <tr>
            <td>
                College Department:
                <span class="long-line"><?php echo $collegeDepartment; ?></span>
            </td>

            <td>
                Semester:
                <span class="line"><?php echo $semester; ?></span>
            </td>
        </tr>

        <tr>
            <td>
                Program:
                <span class="long-line"><?php echo $program; ?></span>
            </td>

            <td>
                School Year:
                <span class="line"><?php echo $schoolYear; ?></span>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                Major / Specialization:
                <span class="long-line"><?php echo $major; ?></span>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td colspan="3" class="title">Student Information</td>
        </tr>

        <tr>
            <td colspan="3"><b>Full Legal Name:</b></td>
        </tr>

        <tr>
            <td>
                <center><?php echo $lastName; ?></center>
                <div class="small-text">Last Name</div>
            </td>

            <td>
                <center><?php echo $firstName; ?></center>
                <div class="small-text">First Name</div>
            </td>

            <td>
                <center><?php echo $middleName; ?></center>
                <div class="small-text">Middle Name</div>
            </td>
        </tr>

        <tr>
            <td>Nickname: <span class="line"><?php echo $nickname; ?></span></td>

            <td>
                Gender:
                <?php
                if ($gender == "Male") {
                    echo "<span class='box checked'></span> Male ";
                    echo "<span class='box'></span> Female";
                } else {
                    echo "<span class='box'></span> Male ";
                    echo "<span class='box checked'></span> Female";
                }
                ?>
            </td>

            <td>Civil Status: <span class="line"><?php echo $civilStatus; ?></span></td>
        </tr>

        <tr>
            <td colspan="2">
                Date of Birth:
                <span class="line"><?php echo $birthYear; ?></span>
                <span class="line"><?php echo $birthMonth; ?></span>
                <span class="line"><?php echo $birthDay; ?></span>
                <br>
                <span class="small-text">Year</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="small-text">Month</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="small-text">Day</span>
            </td>

            <td>Place of Birth: <span class="line"><?php echo $placeOfBirth; ?></span></td>
        </tr>
    </table>

    <table>
        <tr>
            <td colspan="2" class="title">Previous School Information</td>
        </tr>

        <tr>
            <td>
                Name of Previous School:
                <span class="long-line"><?php echo $previousSchool; ?></span>
            </td>

            <td>
                Last Date Attended:
                <span class="line"><?php echo $lastDateAttended; ?></span>
            </td>
        </tr>

        <tr>
            <td>
                Strand / Previous Course:
                <span class="line"><?php echo $strandCourse; ?></span>
            </td>

            <td>
                School Address:
                <span class="line"><?php echo $schoolAddress; ?></span>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                Reason for Enrolling / Transferring:
                <span class="long-line"><?php echo $reasonTransfer; ?></span>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td class="title">Health Information</td>
            <td class="title">Emergency Contact</td>
        </tr>

        <tr>
            <td>
                Medical Conditions:
                <span class="long-line"><?php echo $medicalConditions; ?></span>
            </td>

            <td>
                Contact Person:
                <span class="line"><?php echo $emergencyContactName; ?></span>
                <br><br>

                Contact Number:
                <span class="line"><?php echo $emergencyContactNumber; ?></span>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td colspan="2" class="title">Citizenship Information</td>
        </tr>

        <tr>
            <td>
                Birth Country:
                <span class="line"><?php echo $birthCountry; ?></span>
            </td>

            <td>
                Province of Birth:
                <span class="line"><?php echo $provinceOfBirth; ?></span>
            </td>
        </tr>

        <tr>
            <td>
                Country of Citizenship:
                <span class="line"><?php echo $countryCitizenship; ?></span>
            </td>

            <td>
                Religion:
                <span class="line"><?php echo $religion; ?></span>
            </td>
        </tr>
    </table>

</div>

</body>
</html>