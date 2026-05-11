<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>

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
            width: 400px;
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
// Registration variables
$studentNumber = "2026-00123";
$date = "May 11, 2026";
$entryDate = "June 1, 2026";
$entryType = "New Student";
$grade = "Grade 11";
$classHomeform = "ICT-11A";

// Student information variables
$lastName = "dela cruz";
$firstName = "juan";
$middleName = "santos";
$preferredName = "juan";
$gender = "Male";
$birthYear = "2008";
$birthMonth = "January";
$birthDay = "15";

// Previous school variables
$previousSchoolBoard = "ABC School Board";
$previousSchool = "ABC High School";
$lastDateAttended = "March 30, 2026";
$gradeAtPreviousSchool = "Grade 10";
$reasonTransfer = "Family moved to another city";

// Health variables
$medicalConditions = "N/A";
$epiPen = "No";
$immunizationRecord = "Yes";

// Citizenship variables
$birthCountry = "Philippines";
$provinceOfBirth = "Metro Manila";
$countryCitizenship = "Philippines";

// String formatting
$lastName = strtoupper($lastName);
$firstName = ucfirst($firstName);
$middleName = ucfirst($middleName);
$preferredName = ucfirst($preferredName);
$previousSchool = strtoupper($previousSchool);
?>

<div class="container">

    <h2>Student Registration Form</h2>

    <table>
        <tr>
            <td colspan="4"><b>For School Use - Permission to Register:</b></td>
        </tr>

        <tr>
            <td>Student Number: <span class="line"><?php echo $studentNumber; ?></span></td>
            <td>Date: <span class="line"><?php echo $date; ?></span></td>
            <td colspan="2">
                <span class="box"></span> ESL
                <span class="box"></span> SPED
                <span class="box"></span> IPRC
                <span class="box"></span> ISA
            </td>
        </tr>

        <tr>
            <td>Entry Date: <span class="line"><?php echo $entryDate; ?></span></td>
            <td>Entry Type: <span class="line"><?php echo $entryType; ?></span></td>
            <td>Grade: <span class="line"><?php echo $grade; ?></span></td>
            <td>Class/Homeform: <span class="line"><?php echo $classHomeform; ?></span></td>
        </tr>
    </table>

    <table>
        <tr>
            <td>
                Is the student currently expelled from any school?
                <span class="box"></span> Yes
                <span class="box checked"></span> No
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
            <td colspan="3"><b>Preferred Name:</b></td>
        </tr>

        <tr>
            <td>
                <center><?php echo $lastName; ?></center>
                <div class="small-text">Last Name</div>
            </td>

            <td>
                <center><?php echo $preferredName; ?></center>
                <div class="small-text">First Name</div>
            </td>

            <td>
                <center><?php echo $middleName; ?></center>
                <div class="small-text">Middle Name</div>
            </td>
        </tr>

        <tr>
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
        </tr>
    </table>

    <table>
        <tr>
            <td>
                <b>For School Use - Proof of Birth:</b>
                <span class="box"></span> Copy in OSR
                <span class="box"></span> Baptismal Record
                <span class="box checked"></span> Birth Certificate
                <span class="box"></span> Passport
                <span class="box"></span> Other
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td colspan="2" class="title">Previous School Information</td>
        </tr>

        <tr>
            <td>
                Name of Previous School Board:
                <span class="long-line"><?php echo $previousSchoolBoard; ?></span>
            </td>

            <td>
                Last date attended:
                <span class="line"><?php echo $lastDateAttended; ?></span>
            </td>
        </tr>

        <tr>
            <td>
                Name of Previous School:
                <span class="long-line"><?php echo $previousSchool; ?></span>
            </td>

            <td>
                Grade at previous school:
                <span class="line"><?php echo $gradeAtPreviousSchool; ?></span>
            </td>
        </tr>

        <tr>
            <td>
                Language of Instruction:
                <span class="box checked"></span> English
                <span class="box"></span> French
                <span class="box"></span> Other
            </td>

            <td>
                Reason for Transfer:
                <span class="line"><?php echo $reasonTransfer; ?></span>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td class="title">Health Information</td>
            <td><b>For School Use</b></td>
        </tr>

        <tr>
            <td>
                Medical Conditions:
                <span class="long-line"><?php echo $medicalConditions; ?></span>
                <br><br>

                Does the student require an epi-pen?
                <?php
                if ($epiPen == "Yes") {
                    echo "<span class='box checked'></span> Yes ";
                    echo "<span class='box'></span> No";
                } else {
                    echo "<span class='box'></span> Yes ";
                    echo "<span class='box checked'></span> No";
                }
                ?>
            </td>

            <td>
                Immunization Record provided:
                <?php
                if ($immunizationRecord == "Yes") {
                    echo "<span class='box checked'></span> Yes ";
                    echo "<span class='box'></span> No";
                } else {
                    echo "<span class='box'></span> Yes ";
                    echo "<span class='box checked'></span> No";
                }
                ?>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td class="title">Citizenship Information</td>
            <td><b>For School Use - Status in Canada:</b></td>
        </tr>

        <tr>
            <td>
                Birth Country:
                <span class="line"><?php echo $birthCountry; ?></span>
                <br><br>

                Province of Birth:
                <span class="line"><?php echo $provinceOfBirth; ?></span>
                <br><br>

                Country of Citizenship:
                <span class="long-line"><?php echo $countryCitizenship; ?></span>
            </td>

            <td>
                <span class="box"></span> Canadian Citizen <br>
                <span class="box"></span> Permanent Resident <br>
                <span class="box"></span> Study Permit <br>
                <span class="box"></span> Refugee Claimant <br>
                <span class="box checked"></span> Other
            </td>
        </tr>
    </table>

</div>

</body>
</html>