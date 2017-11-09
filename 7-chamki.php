<?php
    session_start();
    if(!$_SESSION['user'])
    {
        header('location:iohunt_reg/index.php');
    }
    include('conn.php');
    $success="";
    //$page = $_SERVER[PHP_SELF]; 
    $tmnam=$_SESSION['user'];
    date_default_timezone_set("Asia/Kolkata");
    
        $time=date("h:i:sa");
        $level=8;
        $stmt = $conn->prepare('select * FROM tracker WHERE team_nm = ?');
        $stmt->bind_param('s', $tmnam);

        $stmt->execute();
        $res=$stmt->get_result();
        $fe=$res->fetch_object();
        if($fe->level!=$level)
        {
            $stmt = $conn->prepare("INSERT INTO tracker (team_nm,level,time) VALUES (?,'$level', '$time')");
            $stmt->bind_param('s',$tmnam);


            $stmt->execute();

            if($stmt)
            {
                
            }
            else
            {
                $success="Not success";
            }
    
        }
        //$sq="insert into table tracker(level,time) values('$level','$time')";
        //$sq="INSERT INTO tracker (team_nm,level,time) VALUES ('$tmnam','$level', '$time')";
        //$res=$conn->query($sq);
        //$stmt = $conn->prepare("INSERT INTO tracker (team_nm,level,time) VALUES (?,'$level', '$time')");
        
    
    
?>
<!DOCTYPE html>
<!-- CLUE NUMBER-1-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>
            i.Ohunt - The ONLINE TREASURE HUNT
        </title>
        <style>
            body{
                background-color: black;
            }
            #high{
                background-color: lightgrey;
            }
            #logo{
                background-color: white;
            }
            #ifest{
                float: right;
                margin-right: 150px;
            }
            #ieee{
                float: right;
            }
            #da{
                float: left;
            }
            #footer{
                position: fixed;
                bottom: 0px;
                left: 130px;
                right: 300px;
                width: 80%;
                background-color: white;
            }
        </style>
        <script>

// Set the date we're counting down to
var countDownDate = new Date("Oct 25, 2017 22:30:00").getTime();
//date_default_timezone_set("Asia/Kolkata");
// Update the count down every 1 second
var x = setInterval(function() {

   // Get todays date and time
   var now = new Date().getTime();
 
   // Find the distance between now an the count down date
   var distance = countDownDate - now;
   
   // Time calculations for days, hours, minutes and seconds
   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
   var seconds = Math.floor((distance % (1000 * 60)) / 1000);
   
   // Output the result in an element with id="demo"
   document.getElementById("demo").innerHTML = hours + "h "
   + minutes + "m " + seconds + "s ";

   // If the count down is over, write some text
   if (distance < 0) {
       clearInterval(x);
       document.getElementById("demo").innerHTML = "EXPIRED";
   }
}, 1000);
</script>
    </head>
    <body>
        <div class="container" id="logo">
                <div class="row">
                    <div class="col-md-4">
                        <img src="DAIICT-Logo.gif" alt="DA-IICT" style="width:360px;height=180px" id="da">
                    </div>
                    <div class="col-md-4">
                        <img src="logo.png" alt="i.Fest 17" style="width:60px;height=20px" id="ifest">
                    </div>
                    <div class="col-md-4">
                        <img src="IEEESB.png" alt="IEEE SB DA-IICT" style="width:180px;height=100px" id="ieee">
                    </div>
                </div>
        </div>
        <br><br>
        <div class="container">
            <font color="black" size="6.5" face="Courier new"/>
            <div class="jumbotron text-center" id="high">
            <div id="demo" align="right" style="font-size: 25px;">
                        
                    </div>
                <div class="row">
                    i.Ohunt<br>
                    <div>
                        <font size="5"/>
                        Question 8
                    </div>
                </div>
            </div>
            <font color="white" size="3"/>
             Small Road Kangaroo....weird right?<br>
            capitals will also guide you to your way. but that’s not enough, is it? you’ll have to watch the television and find the first one to reach your goal.

        </div>
        <br>
        <div class="container" id="footer">
            <font size="4" face="Arial" color="black"/>
            Powered by:
            <br><br>
            <div class="row">
                <div class="col-md-4">
                    <img src="logo@2x.png" alt="Endeavor" style="width: 255px; padding-left: 20%; padding-right: 10%" id="endeavor">
                </div>
                <div class="col-md-4">
                    <img src="sharkid.png" alt="Sharkid" style="width: 205px; padding-left: 20%" id="sharkid">
                </div>
                <div class="col-md-4">
                    <img src="msi.png" alt="MSI" style="width: 175px; padding-left: 20%" id="msi">
                </div>
            </div>
        </div>
    </body>
</html> 



<!-- Hint: Why don't ya find out if you know about that guy?-->