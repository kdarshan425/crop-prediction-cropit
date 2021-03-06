<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/urllogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/header.style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200;1,600;1,900&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Archivo:wght@300&family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <title>Cropit | Predict Crop</title>
    <link rel="stylesheet" type="text/css" href="styles/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    html{
        width:100%;
        height:100%;
    }
    @media (max-width: 570px){
        form {
            padding: 0 0rem !important;
        }}
        .user-image{
              height:200px;
              width:200px;
        }

        .profile-info{
            padding-top:50px;
            padding-bottom:20px;
            color:#8888A0;
            size:2.5rcm;
            font-family: 'Orbitron', sans-serif;
        }
        .exp-btn{
            position: relative;
            border: 2px solid;
            border-radius: 0px;
            padding: 1rem 1rem;
            font-size: 1rem;
            font-weight: 500;
            letter-spacing: 0.25px;
            line-height: 1.5rem;
            cursor: pointer;
            overflow: hidden;
            transition: all .3s, outline 0s;
            transition: all .3s, outline 0s;
            width: 150px;
            font-family: 'Orbitron', sans-serif;
        }
        
        .exp-btn.btn--voi{
            background-color:#6c63ff;
            color:white;
        }
        
        .exp-btn.btn--voi:hover {
            background-color: white;
            
            text-decoration: none;
        }
        label{
            font-family: 'Raleway', sans-serif;
        }
         /* Top Nav*/
.topnav {
    padding-top: 1px;
    background: #ffffffbd;
  transition: ease-in-out all 0.4s;
  box-shadow: 0px 0px 20px 0px rgb(73 93 207 / 20%);
  width: 100%;
  position: fixed;
  
  color: white;
  overflow: hidden;
  height: 60px;
  top: 0;
  z-index: 100;  
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 90;
  background: #ffffff;
  transition: ease-in-out all 0.4s;
  box-shadow: 0px 0px 20px 0px rgb(73 93 207 / 20%);
  
}

a:hover{
    background: #f2f2f2;
    transition: all ease-in-out 0.5s;
}

.bs{
    height: 40px; 
    width: 40px ;
    padding-left: 5px;
    padding-top: 5px;
    padding-bottom: 5px;   
    border-radius: 50%;
}


.topnav a {
    
    color: white;
    float: right;
  display: block;
  
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
  font-family: 'Raleway', sans-serif;
}

.topnav a:link{
    text-decoration: none;
    color:black;
}
.topnav a:visited{
    text-decoration: none;
    color: black;
}
.topnav a:hover{
   text-decoration: none;
   color: black;
   
}
.topnav a:active {
  text-decoration: none;
  color: black;
}

.topnav .icon {
  display: none;
}

a button{
    background: #000;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 10px;
}

a button:hover{
    background: white;
    color: black;
    transition: all ease-in-out 0.5s;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: fixed;overflow: hidden}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
    
  }
}
.bs{
    background: white;
}
      </style>
</head>
<body>
<nav>         
        <div class="topnav" id="myTopnav">
            <a style="height: 60px;"></a>                
            <a style="display:block" href="/"> PREDICT</a>
            <a style="display:block" href="https://crop-it.herokuapp.com/">EXIT</a>        
        
        </div>
    </nav>
     <div style="width:100%;height:auto;background: url(img/bg.jpg);padding-top:70px;">
        <div style="padding:40px;" class="container">
        <center><h1 style="color:black;font-family: 'Raleway', sans-serif;">Enter details </h1></center>
        </div>    
    </div>
    <div class="container">
    <div class="container">
            <div style="padding-top:20px;" class="container-1">
            
            
            
            <form action="{{ url_for('crop_predict') }}" method="post"> 
                
                <div class="mb-3">
                    <div class="profile-info" style="font-family: 'Raleway', sans-serif;" ><b>Professional Bio:</b></div>
                    <label style="font-size:1.3rcm;font-weight:bold;" for="validationTextarea" class="form-label lebel1">Nitrogen</label>
                    <div class="input-group flex-nowrap">                
                        <input name="Nitrogen" type="text" class="form-control" placeholder="Enter value of Nitrogen" aria-describedby="inputGroup-sizing-lg" aria-label="Challengename" aria-describedby="addon-wrapping" required>
                    </div>                
                </div>
                <div class="mb-3">
                    <label style="font-size:1.3rcm;font-weight:bold;" for="validationTextarea" class="form-label lebel1">Phosphorous</label>
                    <div class="input-group flex-nowrap">                
                        <input name="Phosphorous" type="text" class="form-control" placeholder="Enter value of Phosphorous" aria-label="live-url" aria-describedby="addon-wrapping" required>
                    </div>                
                </div>
                <div class="mb-3">                    
                    <label style="font-size:1.3rcm;font-weight:bold;" for="validationTextarea" class="form-label lebel1">Pottasium</label>
                    <div class="input-group flex-nowrap">                
                        <input name="Pottasium" type="text" class="form-control" placeholder="Enter value of Pottasium" aria-describedby="inputGroup-sizing-lg" aria-label="Challengename" aria-describedby="addon-wrapping" required>
                    </div>                
                </div>   
                <div class="mb-3">                    
                    <label style="font-size:1.3rcm;font-weight:bold;" for="validationTextarea" class="form-label lebel1">temperature</label>
                    <div class="input-group flex-nowrap">                
                        <input name="temperature" type="text" class="form-control" placeholder="Enter value of temperature" aria-describedby="inputGroup-sizing-lg" aria-label="Challengename" aria-describedby="addon-wrapping" required>
                    </div>                
                </div>   
                <div class="mb-3">                    
                    <label style="font-size:1.3rcm;font-weight:bold;" for="validationTextarea" class="form-label lebel1">humidity</label>
                    <div class="input-group flex-nowrap">                
                        <input name="humidity" type="text" class="form-control" placeholder="Enter value of humidity" aria-describedby="inputGroup-sizing-lg" aria-label="Challengename" aria-describedby="addon-wrapping" required>
                    </div>                
                </div>   
                <div class="mb-3">
                    <label style="font-size:1.3rcm;font-weight:bold;" for="validationTextarea" class="form-label lebel1">ph level</label>
                    <div class="input-group flex-nowrap">                
                        <input name="ph_level" type="text" class="form-control" placeholder="Enter value of ph level" aria-label="live-url" aria-describedby="addon-wrapping" required>
                    </div>                
                </div>      
                <div class="mb-3">
                    <label style="font-size:1.3rcm;font-weight:bold;" for="validationTextarea" class="form-label lebel1">rainfall</label>
                    <div class="input-group flex-nowrap">                
                        <input name="rainfall" type="text" class="form-control" placeholder="Enter value of ph level" aria-label="live-url" aria-describedby="addon-wrapping" required>
                    </div>                
                </div>     
                <div class="container">
                    <div style="padding:50px;" class="cont-but">
                        <center>
                            <button value="submit" style="background:#2e6e56db;font-family: 'Raleway', sans-serif;" class="exp-btn btn--voi" type="submit" name="submit" >Submit</button>
                        </center>
                    </div>
                </div>        
            </form>
                      
            </div>
        </div>
    </div>
    <div style="padding-top:20px;">
        <footer style="background: black;padding-top: 24px;padding-bottom: 24px; width: 100%">
            <center>
                <p style="color: white;font-weight: 300;font-family: 'Raleway', sans-serif;">All rights reserved <br> ?? Team Cropit</p>
            </center>            
        </footer>
    </div>
    <script>
     setTimeout(function () {
  
    // Closing the alert
    $('.alert').alert('close');
    }, 5000);
    </script>

    <script src="script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>