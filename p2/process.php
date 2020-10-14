<?php
session_start();
$suspect = $_GET['suspect'];
switch (true) {
    case $_GET['suspect'] == 'minnie':
        $culprit = false;
        $alibi = "It wasn't me! I did see Donald get into an argument with Mickey and then leave early.";
    break;
    case $_GET['suspect'] == 'donald':
        $culprit = false;
        $alibi = "What?! I didn't do it, I left early because Huey, Dewey and Louie were being too much trouble. I couldn't tell Daisy because I couldn't find her.";
    break;
    case $_GET['suspect'] == 'daisy':
        $culprit = false;
        $alibi = "No way it was me. I had to help the catering becuase Minnie couldn't be found and Goofy just left without saying anything!";
    break;
    default:
    $culprit = true;
    $alibi = null;
}

$_SESSION['results'] = [
    'suspect' => $suspect,
    'culprit' => $culprit,
    'alibi' => $alibi
];
header('Location: index.php');