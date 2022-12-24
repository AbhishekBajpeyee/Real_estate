<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <style>*{
    margin: 0;
    padding: 0;
}
body{
    background-color: rgb(0, 0, 17);
    color: rgb(8, 14, 19);
    margin: 90px 50px auto 50px;
    background-image: url('land.jpg');
    background-repeat: no-repeat;
    background-size: 100% 160%;
}
#services{
    padding: 30px 0;
}
.services-list{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
    grid-gap: 40px;
    margin-top: 50px;
}
.services-list div{
    background: #6a6868;
    padding: 40px;
    font-size: 13px;
    font-weight: 300;
    border-radius: 10px;
    transition: background 0.5s,transform 0.5s;
}
.services-list div i{
    font-size: 50px;
    font-weight: 500;
    margin-bottom: 15px;
}
.services-list div h2{
    font-size: 30px;
    font-weight: 500;
    margin-bottom: 15px;
}

.services-list div a{
text-decoration: none;
display: inline-block;
color: #fff;
font-size: 12px;
margin-top: 20px;
}
.services-list div:hover{
background: #b30b40;
transform: translateY(-10px);
}</style>
</head>
<body>
   <!-- services -->
<div id="services">
    <div class="container">
        <h1 class="subtitle">MyServices</h1>
        <div class="services-list">
            <div>
                <!-- <i class="fa-solid fa-browser"></i> -->
                <i class="fa-solid fa-code"></i>
                <h2>About Webiste</h2>
                <p>
                    1. Here we contact you to direct the Owner of land.
                    <br>2. Owner of land is authenticated and it is verified by us manually<br>
                    3.You can trust on Admin but you have to meet him first before buying the land 
                </p>
             <a href="#" target="_blank">Learn more</a>
            </div>
            <div>
              

                <i class="fa-solid fa-envelope"></i>

                <h2>Mail</h2>
                <p>You can get connected with us through mail.
                    Here is our mail id .
                    <br> xyz@gmail.com
                 </p>
             <a href="complain.php" target="_blank">Learn more</a>
            </div>
            <div>
                <i class="fa-solid fa-phone-flip"></i>
                <h2>Complaint</h2>
                <p>If you are facing problem while dealing with your owner or customer
                    you can get direct to us...<br>
                    conditions for contacting - you must be an authenticate user or admin of the website
                    </p>
             <a href="#" target="_blank">Learn more</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>