<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Search Results for movie title</title>
    <link rel="stylesheet" href="./styles/mockup-general.css">
</head>

<body class="light">
    <div class="site light">
        <header class="site-header">
            <h1 class="light">MovieTunes</h1>
        </header>
        <aside class="sidebar">
            <a class="light" href="./about">about</a>
            <a class="light" href="https://github.com/VSSSE/VSS-DOC">GitHub</a>
        </aside>

	<?php
	  $title = $_GET['movieTitle'];
	  
	?>
        <p class="query-result light">
            Soundtrack for <?php echo $title;?>:
        </p>
	<?php
	  if($title == "A movie that does not exist"){
	     echo <<<EOL
	  <div class="results-list">
	    <p id="errorMessage">No soundtracks where found for this movie</p>
	    </div>
EOL;
	  }
	  else if($title == "aTestMovie"){
	  echo <<<EOL
	  <div class="results-list">
                <div class="result" id="result1" onclick="location.href = 'similarsongs.php?soundtrack=We+Are+Sex+Bob-Onb';">
                    <span class="nr light" id="nr1">1</span>
                    <span class="name light">We Are Sex Bob-Onb</span>
                    <span class="artist light">Sex Bob-Onb</span>
                 </div>
          </div>
EOL;
	  }
	  else
	  {
echo <<<EOL
	  <div class="results-list">
                <div class="result" id="result1" onclick="location.href = 'similarsongs.php?soundtrack=We+Are+Sex+Bob-Omb';">
                    <span class="nr light" id="nr1">1</span>
                    <span class="name light">We Are Sex Bob-Omb</span>
                    <span class="artist light">Sex Bob-Omb</span>
                 </div>
                <div class="result" id="result2">
                    <span class="nr light" id="nr2">2</span>
                    <span class="name light">Scott Pilgrim</span>
                    <span class="artist light">Plumtree</span>
                 </div>
                <div class="result" id="result3">
                    <span class="nr light" id="nr3">3</span>
                    <span class="name light">I Heard Ramona Sing</span>
                    <span class="artist light">Frank Black</span>
                 </div>
                <div class="result" id="result4">
                    <span class="nr light" id="nr4">4</span>
                    <span class="name light">By Your Side</span>
                    <span class="artist light">Beachwood Sparks</span>
                 </div>
                <div class="result" id="result5">
                    <span class="nr light" id="nr5">5</span>
                    <span class="name light">O Katrina!</span>
                    <span class="artist light">Black Lips</span>
                 </div>
                <div class="result" id="result6">
                    <span class="nr light" id="nr6">6</span>
                    <span class="name light">I'm So Sad, So Very, Very Sad</span>
                    <span class="artist light">Crash and the Boys</span>
                 </div>
                <div class="result" id="result7">
                    <span class="nr light" id="nr7">7</span>
                    <span class="name light">We Hate You Please Die</span>
                    <span class="artist light">Crash and the Boys</span>
                 </div>
                <div class="result" id="result8">
                    <span class="nr light" id="nr8">8</span>
                    <span class="name light">Garbage Truck</span>
                    <span class="artist light">Sex Bob-Omb</span>
                 </div>
                <div class="result" id="result9">
                    <span class="nr light" id="nr9">9</span>
                    <span class="name light">Teenage Dream</span>
                    <span class="artist light">T. Rex</span>
                 </div>
                <div class="result" id="result10">
                    <span class="nr light" id="nr10">10</span>
                    <span class="name light">Sleazy Bed Track</span>
                    <span class="artist light">The Bluetones</span>
                 </div>
                <div class="result light" id="result11">
                    <span class="nr light" id="nr11">11</span>
                    <span class="name light">It's Getting Boring by the Sea</span>
                    <span class="artist light">Blood Red Shoes</span>
                 </div>
                <div class="result" id="result12">
                    <span class="nr light" id="nr12">12</span>
                    <span class="name light">Black Sheep</span>
                    <span class="artist light">Metric</span>
                 </div>
                <div class="result" id="result13">
                    <span class="nr light" id="nr13">13</span>
                    <span class="name light">Threshold</span>
                    <span class="artist light">Sex Bob-Omb</span>
                 </div>
                <div class="result" id="result14">
                    <span class="nr light" id="nr14">14</span>
                    <span class="name light">Anthems for a Seventeen Year-Old Girl</span>
                    <span class="artist light">Broken Social Scene</span>
                 </div>
                <div class="result" id="result15">
                    <span class="nr light" id="nr15">15</span>
                    <span class="name light">Under My Thumb</span>
                    <span class="artist light">The Rolling Stones</span>
                 </div>
                <div class="result" id="result16">
                    <span class="nr light" id="nr16">16</span>
                    <span class="name light">Ramona (acoustic version)</span>
                    <span class="artist light">Beck Hansen</span>
                 </div>
                <div class="result" id="result17">
                    <span class="nr light" id="nr17">17</span>
                    <span class="name light">Ramona</span>
                    <span class="artist light">Beck Hansen</span>
                 </div>
                <div class="result" id="result18">
                    <span class="nr light" id="nr18">18</span>
                    <span class="name light">Summertime</span>
                    <span class="artist light">Sex Bob-Omb</span>
                 </div>
                <div class="result" id="result19">
                    <span class="nr light" id="nr19">19</span>
                    <span class="name light">Threshold (8 Bit)</span>
                    <span class="artist light">Brian LeBarton</span>
                 </div>
          </div>
EOL;
	  }
	  
	?>
            
        <footer class="site-footer">
            <button type="button" class="modeButton" data-mode="changeButton" id="tdm" onclick="toDarkMode()">Change to dark mode</button>
            <button type="button" class="modeButton" data-mode="changeButton" id="tlm" onclick="toLightMode()">Change to light mode</button>
        </footer>
    </div>
    <script src="scripts/main.js" charset="utf-8"></script>
</body>

</html>
