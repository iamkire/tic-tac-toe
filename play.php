<?php
require_once "templates/header.php";
Register::verifyPlayersSess();
$playerTurn = new PlayerTurn;
$game= new Game;
if ($_POST['cell']) {
    $win = $game->run($_POST['cell']);
    if ($win) {
        header("location: result.php?player=" . $playerTurn->getTurn());
    }
}
$plays=new Plays;
if ($plays->playsCount() >= 9) {
    header("location: result.php");
}
$playerDetail = new PlayerDetail;
?>

<h2><?php echo $playerDetail->current() ?>'s turn</h2>

<form method="post" action="play.php">

    <table class="tic-tac-toe" cellpadding="0" cellspacing="0">
        <tbody>

        <?php
        $lastRow = 0;
        for ($i = 1; $i <= 9; $i++) {
            $row = ceil($i / 3);

            if ($row !== $lastRow) {
                $lastRow = $row;

                if ($i > 1) {
                    echo "</tr>";
                }

                echo "<tr class='row-{$row}'>";
            }

            $additionalClass = '';

            if ($i == 2 || $i == 8) {
                $additionalClass = 'vertical-border';
            }
            else if ($i == 4 || $i == 6) {
                $additionalClass = 'horizontal-border';
            }
            else if ($i == 5) {
                $additionalClass = 'center-border';
            }
            ?>

            <td class="cell-<?= $i ?> <?= $additionalClass ?>">
                <?php if (Cell::get($i) === 'x'): ?>
                    X
                <?php elseif (Cell::get($i) === 'o'): ?>
                    O
                <?php else: ?>
                    <input type="radio" name="cell" value="<?= $i ?>" onclick="enableButton()"/>
                <?php endif; ?>
            </td>

        <?php } ?>

        </tr>
        </tbody>
    </table>

    <button type="submit" disabled id="play-btn">Play</button>

</form>

<script type="text/javascript">
    function enableButton() {
        document.getElementById('play-btn').disabled = false;
    }
</script>

<?php
require_once "templates/footer.php";
