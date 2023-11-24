<?php
    preg_match(
        '/[\\?\\&]v=([^\\?\\&]+)/',
        'https://www.youtube.com/watch?v=48rz8udZBmQ',
        $matches
    );
    // $matches[1] should contain the youtube id
?>
