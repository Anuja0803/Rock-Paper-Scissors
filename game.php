<?php
$names = array('Rock', 'Paper', 'Scissors');
$human = isset($_POST["human"]) ? $_POST['human']+0 : -1;

$computer = 0; // Hard code the computer to rock

$computer = rand(0,2);

function check($computer, $human)
{
    if ( $human == $computer)
    {
        return "Tie";
    }
     else if ( $human == 0)
     {
        if($computer == 1)
            return "You Lose";
        else
            return "You Win";
    }
    else if ( $human == 1)
    {
        if($computer == 2)
            return "You Lose";
        else
            return "You Win";
    }
    else if ( $human == 2)
    {
        if($computer == 0)
            return "You Lose";
        else
            return "You Win";
    }
    return false;
}

// Check to see how the play happenned
$result = check($computer, $human);
?>

<!DOCTYPE html>
<html>
<head>
<title>Anuja Nikam Rock, Paper, Scissors Game</title>
<?php require_once "bootstrap.php"; ?>
<style>
h1
{
  color: orangered;
  font-weight: bold;
}
.btn
{
  color: Black;
  text-align: center;
  display: inline-block;

}
</style>
</head>
<body>
<div class="container">
<div class="card-panel teal lighten-2, center-align"><h4>Rock Paper Scissors</h4></div>
<?php
if ( isset($_REQUEST['name']) ) {
    echo "<p><h5>Welcome: ";
    echo htmlentities($_REQUEST['name']);
    echo "</p></h5><br>\n";
}
?>

<form method="post" class="form-horizontal">
<select name="human" class="col-sm-6 form-control">
<option value="-1">Select</option>
<option value="0">Rock</option>
<option value="1">Paper</option>
<option value="2">Scissors</option>
<option value="3">Test</option>
</select>
<br><br>
<div>
<input class="btn btn-default, waves-effect waves-light btn" type="submit" value="Play">
<a class="btn btn-default, waves-effect waves-light btn" href="index.php">Logout</a>
</div>
</form>
<br><br>
<pre>
<?php
if ( $human == -1 )
{
    print "Please select a strategy and press Play.\n";
}
else if ( $human == 3 )
{
    for($c=0;$c<3;$c++)
    {
        for($h=0;$h<3;$h++)
        {
            $r = check($c, $h);
            print "Human= $names[$h] \nComputer= $names[$c]  \nResult= $r\n<br>";
        }
    }
}
else
{
    print "Your \n Play= $names[$human] \n Computer Play= $names[$computer] \n Result= $result\n<br>";
}
?>
</pre>
</div>
</div>
</body>
</html>
