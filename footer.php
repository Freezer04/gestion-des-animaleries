<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/css.css">
</head>
<body>
    <style>
        .footer{
    background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
    width: 25%;
    padding: 0 15px;
}
.footer-col h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
}
.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}
.footer-col ul li :not(:last-child){
    margin-bottom: 10px;
}
.footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease;
}
.footer-col ul li a:hover{
    color: #ffffff;
    padding-left: 8px;
}
.footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255,255,255,0.2);
    margin: 0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
    color: #24262b;
    background-color: #ffffff;
} 
    </style>

  <footer class="footer">
      <div class="section">
          <div class="row">
              <div class="footer-col">
                  <h4>compaby</h4>
                  <ul class="ul">
                      <li><a href="">about us</a></li>
                      <li><a href="">our services</a></li>
                      <li><a href="">privacy policy</a></li>
                      <li><a href="">affiliate program</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>get help</h4>
                  <ul>
                      <li><a href="">FAQ</a></li>
                      <!-- <li><a href="">shippping</a></li> -->
                      <li><a href="">returns</a></li>
                      <li><a href="">order status</a></li>
                      <li><a href="">payment options</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>WeDev</h4>
                  <ul>
                      <li><a href="">What we do</a></li>
                      <li><a href="">Apprenticeship</a></li>
                      <li><a href="">Our blog</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>follow us</h4>
                  <div class="social-links">
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-instagram"></i></a>
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                 </div>
              </div>
              
          </div>
      </div>
  </footer>
    
</body>
</html>