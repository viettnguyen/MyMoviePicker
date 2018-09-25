<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Movie Picker Page - Viet Nguyen</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>

    <h1>Movie Generator</h1>
    <h2>Use this website to help you choose a movie</h2>
    <div id="maincontent">
        <div id="primary">
            <form method="GET" enctype="multipart/form-data" id="finalForm" name="finalform" action='search.php'>>
                <br />
                <fieldset name="totalsInfo">
                    <legend>Total Movie Results</legend>
                    <span class="titleSpan" id="totalSpan">Total number of movies:</span>
                    <br />
                    <input class="TextField" id="totalMovies" type="Text" name="totalMovies" size="2" value="">
                </fieldset>

                <fieldset name="categoriesInfo">
                    <legend>Categories</legend>
                    <span class="titleSpan" id="categoriesSpan">Drinks:</span>
                    <br />
                    <select name="categoriesSelect">
                        <option>Action</option>
                        <option>Comedy</option>
                        <option>Drama</option>
                    </select>
                </fieldset>

                <fieldset name="ageRestrictInfo">
                    <legend>Age Restrictions?</legend>
                    <input class="checkboxField" id="ageRestrict" type="checkbox" name="ageRestrict" size="30" value="Age restricted?"><label
                        for="ageRestrict">Age restricted?</label>
                </fieldset>
                <input type='submit' value='Search'>
            </form>

        </div>
    </div>


</body>

</html>