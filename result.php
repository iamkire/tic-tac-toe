<?php
require_once "templates/header.php";
$playerDetail = new PlayerDetail();
Register::verifyPlayersSess();
Reset::board();
?>

<table class="wrapper" cellpadding="0" cellspacing="0">
    <tr>
        <td>

            <div class="welcome">

                <h1>
                    <?php
                    if ($_GET['player']) {
                        echo $playerDetail->current() . " won!";
                    }
                    else {
                        echo "It's a tie!";
                    }
                    ?>
                </h1>

                <div class="player-name">
                    <?php echo $playerDetail->name('x')?>'s score: <b><?php echo Victory::score('x')?></b>
                </div>

                <div class="player-name">
                    <?php echo $playerDetail->name('o')?>' score: <b><?php echo Victory::score('o')?></b>
                </div>

                <a href="play.php">Play again</a><br />

                <a href="index.php" class="reset-btn">Reset</a>
            </div>
        </td>
    </tr>
</table>

</body>
</html>

