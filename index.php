<!DOCTYPE html>
<html>
    <head>
        <title>Voting system</title>
        <link rel="stylesheet" href="style.css">
        <script src='script.js'></script>
    </head>
    
    <body>
        <div class='container'>
            <div class='container1'>
                <h1>Voting system</h1>
                <form method="POST" action="haaletamine.php" onsubmit="submitForm(event,this)">
                  <label for="fname">First name:</label><br>
                  <input type="text" id="fname" name="fname"><br>
                  <label for="lname">Last name:</label><br>
                  <input type="text" id="lname" name="lname"><br>
                    <input type="radio" id="poolt" name="otsus" value="In Favour" checked>
                    <label for="poolt">In Favour</label><br>
                    <input type="radio" id="vastu" name="otsus" value="Against">
                    <label for="vastu">Against</label><br>
                  <button type="submit" class="button-64"><span class="text">Submit</span></button>
                </form>
                <div id='confirm'></div>
            </div>
            
            <div class='container2'>
                <button type='submit' class='button-64' onClick="log('logi.php')"><span class="text">Log</span></button>
                <div id='log_results'></div>
            </div>
            
            <div class='container3'>
                <button type='submit' class='button-64' onClick="results('tulemused.php')"><span class="text">Results</span></button>
                <div id='tul'></div>
            </div>
        </div>
    </body>
</html>
