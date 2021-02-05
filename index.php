<?php
    include 'header.php';
?>

<div id="container">
    <form action="" method="GET">

        <div class="color">

            <label for="select">Choisissez une couleur, parmi celles proposées .
                <select name="select" id="select" required>
                    <option value="orange">orange</option>
                    <option value="blue">Bleu</option>
                    <option value="pink">rose</option>
                    <option value="green">Vert</option>
                    <option value="purple">violet</option>
                    <option value="red">Rouge</option>
                    <option value="yellow">Jaune</option>
                    <option value="turquoise">Turquoise</option>
                    <option value="white">Blanc</option>
                    <option value="chartreuse">Chartreuse</option>
                </select>
            </label>

        </div>

        <div>
            <input type="submit">
        </div>

    </form>

    <div><a href="page2.php">GO à la page 2</a></div>
    <div><a href="page3.php">GO à la page 3</a></div>
    <div><a href="page4.php">GO à la page 4</a></div>
    <div><a href="page5.php">GO à la page 5</a></div>
    <div><a href="page6.php">GO à la page 6</a></div>
    <div><a href="page7.php">GO  à la page 7</a></div>
    <div><a href="page8.php">GO à la page 8</a></div>
    <div><a href="page9.php">GO à la page 9</a></div>
    <div><a href="page10.php">GO à la page 10</a></div>

</div>

<?php
    include 'footer.php';
?>