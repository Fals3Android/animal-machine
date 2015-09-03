<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chosen.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <title>Animal Machine</title>
</head>
<body>
    <div class="container six columns offset-by-three columns" style="background-color:#A52A2A">
<?php 
    $year = $_POST["Year"];
    echo "<h1>$year</h1>";
        
    switch ($year){
        case 'RAT';
            echo "<img src=\"assets/rat.png\"class=\"image\"><h3>You're a Rat!</h3><br/><p>So your pretty Ambitious and sociable, some might even say God Like (NICE!), but it looks like your pretty selfish so go ahead and get that in check... </p>";
        break;
        case 'OX';
            echo "<img src=\"assets/ox.png\"class=\"image\"><h3>You're an OX!</h3><br/><p>You have some lucky colors! Yellow, White and Green are cool but whatever you do don't wear Blue. You'r lucky numbers are 1 and 9. Avoid 3 and 4 like the plague!</p>";
        break;
         case 'TIGER';
            echo "<img src=\"assets/tiger.png\"class=\"image\"><h3>You're a Tiger!</h3><br/><p>They say you're a Born Leader...that's all they say. Stand up a lot and make a bunch of money so you can take all of your friends out. </p>";
        break;
        case 'HARE';
            echo "<img src=\"assets/hare.png\"class=\"image\"><h3>You're a Hare!</h3><br/><p>Hey you're the cutest animal on this calender! Also, you have some lucky directions (who would have thought!). Make sure to exclusively Jay-Walk in a South Eastern direction for good luck. </p>";
        break;
        case 'DRAGON';
            echo "<img src=\"assets/dragon.png\"class=\"image\"><h3>You're a Dragon!</h3><br/><p>Being a pretty confident and intelligent person you probably take a lot of risks. CHILL OUT! and don't stress so much. Do yoga or something... </p>";
        break;
         case 'SNAKE';
            echo "<img src=\"assets/snake.png\"class=\"image\"><h3>You're a Snake!</h3><br/><p>You're pretty sneaky. You probably already knew that though. Besides reptillian shapeshifting, you spend much of you're time avoiding idle gossip and making people fall in love with you.</p>";
        break;
          case 'HORSE';
            echo "<img src=\"assets/horse.png\"class=\"image\"><h3>You're a Horse!</h3><br/><p>The Chinese believe that because horses are born to race or travel, all Horse people invariably leave home young. There you go. You don't have to live in your crappy hometown for the rest of your life...</p>";
        break;
           case 'SHEEP';
            echo "<img src=\"assets/sheep.png\"class=\"image\"><h3>You're a Sheep!</h3><br/><p>Your calm and gentle. You'd be a really good musicain or florist. You will have many Sheep people friends and will live a peacefull and fulfilling life. You're lucky direction is north.</p>";
        break;
         case 'MONKEY';
            echo "<img src=\"assets/monkey.png\"class=\"image\"><h3>You're a Monkey!</h3><br/><p>Your smart clever and intelligent. Stay away from Tigers and Pigs and don't be a jealous, cunning, selfish, arrogant person.</p>";
        break;
         case 'ROOSTER';
            echo "<img src=\"assets/rooster.png\"class=\"image\"><h3>You're a Rooster!</h3><br/><p>You are very observant and you are accurate with your observations. Some say you have a keen sixth-sense. You don't hide anything and chances are your good looking.You rarely see a relaxed rooster that sits quietly in the livingroom, doing nothing.</p>";
        break;
        case 'DOG';
            echo "<img src=\"assets/dog.png\"class=\"image\"><h3>You're a Dog!</h3><br/><p>You are very trustworthy but you have a lot of issues with trusting others. Some say you can be nosy sometimes but it's probably becuase you care. Keep it up!</p>";
        break;
        case 'PIG';
            echo "<img src=\"assets/pig.png\"class=\"image\"><h3>You're a Pig!</h3><br/><p>The pig came last. Fight the urge to lounge all day and don't get taken advantage of. Your pig nature deems you easy to fool but you can't let that get the best of you. Don't be possesive, jealous and exclusive. </p>";
        break;
    }
?>
    </div>
</body>

