<?php
require "header.php";
include "menu.php";
?>

<h1>Five Short Stories</h1>
<p class="subtitle">Choose one story below to read.</p>

<table class="story-table">
    <tr>
        <td>
            <a href="story1.php">
                <div class="story-card">
                    <img src="images/story1.jpg" class="story-card-img">
                    <h3>Story 1</h3>
                    <p>The Man Who Kept Trying</p>
                </div>
            </a>
        </td>

        <td>
            <a href="story2.php">
                <div class="story-card">
                    <img src="images/story2.jpg" class="story-card-img">
                    <h3>Story 2</h3>
                    <p>From Province to City</p>
                </div>
            </a>
        </td>

        <td>
            <a href="story3.php">
                <div class="story-card">
                    <img src="images/story3.jpg" class="story-card-img">
                    <h3>Story 3</h3>
                    <p>Letting Go of a Dream</p>
                </div>
            </a>
        </td>

        <td>
            <a href="story4.php">
                <div class="story-card">
                    <img src="images/story4.jpg" class="story-card-img">
                    <h3>Story 4</h3>
                    <p>Chipsy, My Forever Friend</p>
                </div>
            </a>
        </td>

        <td>
            <a href="story5.php">
                <div class="story-card">
                    <img src="images/story5.jpg" class="story-card-img">
                    <h3>Story 5</h3>
                    <p>The Quiet Pressure</p>
                </div>
            </a>
        </td>
    </tr>
</table>

<?php
include "footer.php";
?>