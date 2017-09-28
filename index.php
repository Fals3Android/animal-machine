<?php include 'src/variables.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/chosen.css">
        <link rel="stylesheet" href="css/skeleton.css">
        <title>Animal Machine</title>
    </head>
<body style="background-color:#7A4728">
    <div class="container six columns offset-by-three columns" style="background-color:#A52A2A">
    <h1 >The Animal Machine</h1>
    <div class="twelve columns">
        <h3>What year were you born?</h3>
    </div>   
    <div class="twelve columns" style="text-align:center">
    <form method="post" action="animal.php">  
        <div class="chosen-container chosen-container-single">
            <select  class="chzn-select" name="Year" tabindex="-1" style="width:250px" data-placeholder="Choose a Year...">
                <?php for($i = $yrsMin; $i <= $yrsMax; $i++ ) { ?>
                    <option  value=<?php echo $animals[$countAnimals]; ?> > <?php echo $i; ?> </option>
                    <?php $countAnimals++; if($countAnimals >= sizeof($animals) ) $countAnimals = 0; ?>
                <?php } ?>  
            </select>
        </div>
        <input class="button input" style="width:250px" type="submit" value="Ok, I'm Ready!"/>
    </form>
    </div> 
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.2/chosen.jquery.min.js"></script>
<script>
    $(function(){ $(".chzn-select").chosen(); });
</script>
</body>
</html>
