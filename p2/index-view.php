<!doctype html>
<html lang='en'>

<head>

    <title>Project 2</title>
    <meta charset='utf-8'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1707487087.js" crossorigin="anonymous"></script>
    <link href="styles.css" rel="stylesheet">

</head>

<body>
    <div>
        <h1>Intsructions</h1>
        <p>A murder mystery game, where you try to figure out who is the culprit. There's only one right answer so
            you
            better choose wisely!</p>
    </div>

    <div class='story'>
        <h1>Who Killed Mickey Mouse?</h1>
        <p>Days before Halloween, Mickey Mouse, a wealthy actor, and businessman got into an awful argument with
            each of
            his
            friends.
            Mickey had grown tired of fame and fortune and longed for the old days when things were simple.
            His friends, however, enjoyed their lavish life and were no longer the kind and fun-loving friends he
            used
            to
            love.
            Mickey decided to alter his Will so that his friends could truly enjoy life again and not rely so
            heavily on
            the
            riches they would have received from his passing.
            His friends disagreed with the new Will, but there was no changing his mind.</p>
        <p>At Mickey and Minnie's annual Halloween party, Mickey was found dead in the garden.
            All of his friends had been with him one point or another to help run the party.
            After much investigation, you believe the murderer is amongst one of his closest friends. It's up to you
            solve the murder.</p>


        <h2>The Will</h2>
        <ul>
            <li>Minnie Mouse (Wife): Would be left a third of the fortune and the rest will go to charity.</i>
            <li>Donald Duck (Best Friend): Will continue his current position and will not be Disney's co-owner
                along
                with
                Minnie.</i>
            <li>Goofy Goof (Best Friend): Will become Disney's co-owner along with Minnie.</i>
            <li>Daisy Duck (Friend): Will not be promoted to be in charge of Disney's Marketing Department and
                instead
                be an
                intern until the
                team recognizes that she is fit for the position.</i>
        </ul>
    </div>


    <div>
        <h2>Who Did It?</h2>
        <form action="process.php" method="GET">
            <input type="radio" value="minnie" id="minnie" name="suspect" checked>
            <label for="minnie">Minnie</label>
            <input type="radio" value="donald" id="donald" name="suspect">
            <label for="donald">Donald</label>
            <input type="radio" value="goofy" id="goofy" name="suspect">
            <label for="goofy">Goofy</label>
            <input type="radio" value="daisy" id="daisy" name="suspect">
            <label for="daisy">Daisy</label>
            <br>
            <button>Solve</button>
        </form>

        <?php if ($haveResults) { ?>
        <h2>Results</h2>
        <ul>
            <li>
                <?php if ($culprit) { ?>
                Okay, it was me! I'm no goof. I wanted Mickey gone so that I
                could finally take over, then later on get rid of Minnie.
                I thought no one would suspect the nice guy.
                <?php } else { ?>
                <?php echo $alibi ?>
                <?php } ?>
            </li>
        </ul>
        <?php } ?>
    </div>
    </div>

</body>

</html>