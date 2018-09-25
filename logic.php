<?php
$categoriesValue = $_GET['categoriesInfo'] ?? false;

if($categoriesValue == 'Action') {
    $moviesJson = file_get_contents('../../action.json');
    $movies = json_decode($moviesJson, true);
}
else if($categoriesValue == 'Comedy') {
    $moviesJson = file_get_contents('../../comedy.json');
    $movies = json_decode($moviesJson, true);    
}
else if($categoriesValue == 'Drama') {
    $moviesJson = file_get_contents('../../drama.json');
    $movies = json_decode($moviesJson, true);
}

foreach($movies as $tags => movies) {
    
}