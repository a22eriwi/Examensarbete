<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Couchbase</title>
        <link href="style.css" rel="stylesheet">
    </head>
<body>
    <div class="sok">
        <div class="centrera">
            <h1 class="dbNamn">Search Couchbase</h1>
            <form action="/search" method="get">
                <input id="searchBar" type="text" name="search" placeholder="Search...">
                <button id="searchButton" type="submit">Search</button>
            </form>
        </div>
    </div>
</body>
</html>