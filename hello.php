<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Time</title>
    <style>
      * {
        margin: 0;
        padding: 0;
      }
      #bgimg {
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        display: flex;
        justify-content: end;
        flex-direction: column;
        padding: 15px;
      }
      #msg {
        font-size: 500%;
        font-family: "Courier New", Courier, monospace;
        -webkit-text-stroke: 2px black;
        color: white;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
     <?php
        date_default_timezone_set("Asia/Kathmandu");
        $hour = date("H");
        $time = date("H:i");
        if($hour>=0 and $hour<12) #12am-12pm
        {
        echo"<div id=\"bgimg\" style=\"background-image:url('images/morning.png')\"><div id=\"msg\"><p>".$time."</p>Good <br />Morning</div></div>";
        }
        elseif($hour>=12 and $hour<16){ #12pm-4pm
        echo"<div id=\"bgimg\" style=\"background-image:url('images/day.png')\"><div id=\"msg\"><p>".$time."</p>Good <br />Afternoon</div></div>";
        }
        elseif($hour>=16 and $hour<19){ #4pm-7pm
        echo"<div id=\"bgimg\" style=\"background-image:url('images/evening.png')\"><div id=\"msg\"><p>".$time."</p>Good <br />Evening</div></div>";
        }
        elseif($hour>=19 and $hour<=23){ #7pm-11pm
        echo"<div id=\"bgimg\" style=\"background-image:url('images/night.png')\"><div id=\"msg\"><p>".$time."</p>Good <br />Night</div></div>";
        }
        else{
          echo "Do u use alien time?";
        }
        ?>

  </body>
</html>
