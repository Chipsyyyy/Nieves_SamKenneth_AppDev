<!DOCTYPE html>
<html>
<head>
    <title>Grade Ranking</title>
    <style>
        body {
            font-family: Arial;
            background: #0f172a;
            color: white;
            text-align: center;
            padding: 50px;
        }

        .box {
            background: #1e293b;
            padding: 30px;
            width: 350px;
            margin: auto;
            border-radius: 10px;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
        }

        button {
            padding: 10px 20px;
            background: #22c55e;
            color: white;
            border: none;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            background: #020617;
            padding: 15px;
        }

        img {
            width: 120px;
            margin-top: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Grade Ranking</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Enter Name" required>
        <input type="number" name="grade" placeholder="Enter Grade" required>
        <button type="submit" name="submit">Submit</button>
    </form>

    <div class="result">
    <?php
    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $grade = $_POST['grade'];
        $rank = "";

        if($grade >= 93 && $grade <= 100) $rank = "A";
        elseif($grade >= 90) $rank = "A-";
        elseif($grade >= 87) $rank = "B+";
        elseif($grade >= 83) $rank = "B";
        elseif($grade >= 80) $rank = "B-";
        elseif($grade >= 77) $rank = "C+";
        elseif($grade >= 73) $rank = "C";
        elseif($grade >= 70) $rank = "C-";
        elseif($grade >= 67) $rank = "D+";
        elseif($grade >= 63) $rank = "D";
        elseif($grade >= 60) $rank = "D-";
        else $rank = "F";

        echo "<h3>Name: $name</h3>";
        echo "<h3>Rank: $rank</h3>";
        echo "<h3>Grade: $grade</h3>";

        echo "<img src='https://www.google.com/imgres?q=hanni%20pham%20student&imgurl=https%3A%2F%2Flookaside.fbsbx.com%2Flookaside%2Fcrawler%2Fmedia%2F%3Fmedia_id%3D821848484127725&imgrefurl=https%3A%2F%2Fwww.facebook.com%2Fnewjeans4lifers%2Fposts%2Fcongrats-kay-hanni-pham-graduated-with-a-bachelor-of-science-in-being-my-bias-ma%2F821851557460751%2F&docid=0ey1kxU21YClyM&tbnid=qQ3RIOc1w4VdnM&vet=12ahUKEwisoebo2J6UAxWjklYBHTB4FBoQnPAOegQIFhAB..i&w=1080&h=1350&hcb=2&ved=2ahUKEwisoebo2J6UAxWjklYBHTB4FBoQnPAOegQIFhAB' alt='Student'>";
    }
    ?>
    </div>
</div>

</body>
</html>