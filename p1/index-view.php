<!doctype html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <h1>High Low Guessing Game</h1>
    <div class='container'>
        <div class='mechanics'>
            <h2>Mechanics</h2>
            <ul>
                <li> Two Players will guess a number between 1 and 10.</li>
                <li> Players will be told if they guessed too high or too low.</li>
                <li> The Player who guesses the Mystery Number wins the round.</li>
                <li> If there is a tie, neither player wins.</li>
            </ul>
        </div>
        <div class='gameBoard'>
            <h2 class='guess'>Mystery Number: <?php echo $mysteryNumber;?>
            </h2>
            <p> <strong>Rounds:<strong> <?php echo count($results)?>
            </p>
            <p> <strong>Winner: </strong><?php echo $winner?>
            </p>
            <ol>
                <?php foreach ($results as $key => $value) { ?>
                <li>
                    <p><strong>Player One Guessed:</strong> <?php echo $value['playerOne'];?>
                    </p>
                    <p><strong> Player Two Guessed:</strong> <?php echo $value['playerTwo']; ?>
                    </p>
                    <p><strong>Result:</strong> <?php echo $value['message']; ?>
                    </p>
                    </i>
                    <?php } ?>
            </ol>

        </div>
    </div>
</body>

</html>