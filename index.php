<?php
    session_start();  
    $name="Chinmaya ";
    if(isset($_GET['Uname'])){
        $name=$_GET['Uname'];
    }
    else{
        $name="Chinmaya ";
    }

?>
<!DOCTYPE html>
<html>
    <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<title>Happy New Year || Wishes from <?=$name?></title>
<link rel="stylesheet" href="./style.css">
    </head>
<body>
    <div class="cont">
<div class="card">
  <img src="assets/happy.jpg" alt="Avatar">
  <div class="container">
    <h1><b><?=$name?></b></h1> 
    <h2>Wishing you all</h2>
    <h1 class="ml15">
        <center><a href="#" title="Image from freepnglogos.com"><img src="assets/flower.png" width="200" alt="gift present prize icon"/></a></center>
        <span class="word">Happy</span>
        <span class="word">New</span>
        <span class="word">Year</span>
      </h1>
      <h1>2023 <br><!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
          Enter name
        </button>
      
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Enter your name</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
                <form action="" method="get">
                  <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter your name" name="Uname">
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>
              </div>
              
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div></h1>
              
              <input type="text" value="created link" id="myInput">
              <button onclick="myFunction()">Copy link</button>
              
              <script>
              function myFunction() {
                // Get the text field
                var copyText = document.getElementById("myInput");
              
                // Select the text field
                copyText.select();
                copyText.setSelectionRange(0, 99999); // For mobile devices
              
                // Copy the text inside the text field
                navigator.clipboard.writeText(copyText.value);
                
                // Alert the copied text
                alert("Copied the text: " + copyText.value);
              }
              </script>
      <h1 class="credit">Made with <span style="color:tomato;font-size:20px;">???</span> by <a  href="https://www.learningrobo.com/">Kiran Kumar Malik</a></h1>
    </div>
    
    <footer id="footer">
        <div class="container">
    
            <a href="https://www.instagram.com/spyder__.kiran/"><img src="assets/instagram.jpg" width="40"></a>
            <a href="https://api.whatsapp.com/send/?phone=917848051078&text&app_absent=Hi"><img src="assets/whatsapp.jpg" width="45"></a>
            <a href="https://www.facebook.com/profile.php?id=100013623729164&mibextid=ZbWKwL"><img src="assets/facebook.png" width="40"></a>
            <a href="https://www.linkedin.com/in/kiran-kumar-malik-01006a202"><img src="assets/linkedin.png" width="45"></a>
            <a href="https://github.com/KiranKumarMalik"><img src="assets/github.png" width="45"></a>
          </div>
          </footer>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="script.js"> </script>
</body>
</html>
