<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
   
     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webs Village</title>
    <link rel="stylesheet" href="page.css">
    <link rel="icon" href="ab.png" type="image/png">

</head>
<body>
    <div class="home">
    <span style="color:white; float: right;margin-right:10%;"><script type="text/javascript">
var d = new Date()
var time = d.getHours()
if(time<23 && time>19)
{
    document.write("<b>GoodNight, </b>");
}
if(time<20 && time>16)
{
    document.write("<b>Evening, </b>");
}if(time<16 && time>12)
{
    document.write("<b>How's your Afternoon, </b>");
}if(time<12 && time>5)
{
    document.write("<b>Morning, </b>");
}

</script> <?php echo $user_data['user_name']; ?></span> <br><br><br>

        <div class="nav-bar">
            <div class="nav-logo">
                <img src="q.png" >
                
            </div>
            <div id="nav-links" class="nav-links">
                <span class="close" onclick="closeNav()">&times</span> 
               <ul> <br>
                   <a href="index.php" target="_self" ><li>Home</li></a> 
                   <a href="gallery.html" target="_self"><li>Gallery</li></a>
                   <a href="about.html" target="_self"><li>About</li></a>
                 
                   
               </ul>
               
            </div>
             <span class="open" onclick="openNav()">&#9776</span>
            </div>
            <div class="loginstyle" style="margin-left: 10%; ">
            
             <a href="logout.php"style="margin-left:10%;border-radius:10%; border:0px  solid black; padding:2px 1px;text-decoration:none; color:azure;  font-weight:bold; padding:20px; margin-left:-3px;">Logout</button></a>
               
                

              </div> 
        <div class="welcome">
              <h1>Welcome <span> tO <br> wEbs  villAge.</span> The outstanding Cyber</h1>
              <div class="contact">
                <button  ><a href="mailto:jongachatha@gmail.com">Contact Us</a></button>
            </div>
        </div>

        
    </div>
    <div class="about">
       
    </div>
    <div class="overview" style=" margin:10px;background: burlywood;">
        <div class="whoarewe">
            
          <h2><img src="ab.png" alt=""> <span style="font-size: 30px;"> Who are We?</span></h2>
            <p style="font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;  padding: 20px;">Webs Village is a Cyber and a Computer College situated at Nyahururu along Koinange Street, Betttan Building Second Floor.<br>We offer high Quality services at a reliable cost that Suits everyone.
             </p>
       </div>
        <div class="services">
            <h1 style="margin: 10px;"> What we Offer</h1>
            <div class="serviceportal" style="text-align:center;background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(services.jpg);">
               <h3 style="cursor:pointer;padding-left: 40px;border-radius:10px;border:1px solid #fff; font-size:40px;color: bisque;">We deal In</h3>
               <p style="color:rgb(133, 209, 209);padding-bottom: 60px; font-size:20px; padding-left: 20px; 
               font-family: Impact, Haettenschweiler, 
               'Arial Narrow Bold', sans-serif;cursor:pointer;">CCTV Instalation <br>
               Printing <br> Computer Accesories <br> Cyber Services <br> Installation of all OS <br>Game Instalation <br> Web Design <br>  System Maintanance </p>
            </div>
        </div>
    </div>

    <footer class="footer" >
        
            <div class="logo">
                <img src="q.png" >
            </div>
            <div class="f-b">
                <p> <center>
                    <ul class="f-a"> <br>
                        <a href="index.php"><li>Home</li></a> 
                        <a href="about.html"><li>About</li></a>
                     
                        <a href="gallery.html" ><li>Gallery</li></a>
                        <div class="footlogin"style="margin:5% 0% 2% 8%;border-radius:10%; border:0px  solid black;"">
                        <a href="logout.php"style="margin:10% 0% 2% 10%;border-radius:10%; border:0px  solid black; padding:2px 1px;text-decoration:none;
                         color:azure;  font-weight:bold; padding:20px; margin-left:-3px;">Logout</button></a>
                         
                    </div>
                                                    
                    </ul>
                    </center>
                    <div class="contact">
                        <h2>Working Hours</h2>
                        <ul>
                            <li>Weekdays : 7Am - 8Pm</li>
                            <li>Saturday : 8Am - 6Pm</li>
                            <li>Sunday : Closed</li>
                        </ul>
                    </div>
                </p>
            </div>
            
            <hr>
        <div class="copy"> © Webs village 2021 <small><br><a href="tel:+254726354504">Made by Jon</a></small>
            
    </footer>
<script>
        function openNav(){
          document.getElementById("nav-links").style.width = "250px";
      }
      function closeNav(){
        document.getElementById("nav-links").style.width = "0px";
      }
</script>
    
</body>
</html>
</body>
</html>