<?php
    require('youtube-dl.class.php');
    try {
        // Instantly download a YouTube video (using the default settings).
        new yt_downloader('http://www.youtube.com/watch?v=aahOEZKTCzU', TRUE);

        // Instantly download a YouTube video as MP3 (using the default settings).
        new yt_downloader('http://www.youtube.com/watch?v=aahOEZKTCzU', TRUE, 'audio');
    }
    catch (Exception $e) {
        die($e->getMessage());
    }
