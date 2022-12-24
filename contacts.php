<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <script src="https://kit.fontawesome.com/249815fdd6.js" crossorigin="anonymous"></script>
        <title>TOURIST WEBSITE | CONTACT PAGE </title>
    </head>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing:border-box;
}




  /* ################# Html element styling ####################### */



 html{
    font-size: 62.5%;
 }

body{
    font-family: 'Montserrat', sans-serif;
    line-height: 1.7;
}


ul li{
    list-style: none;
}
   
a{
     font-size: 1.6rem;
     text-decoration: none;
     }

    p, li{
        font-size: 1.6rem;
        margin-bottom: 0.5em;
        letter-spacing: 0.15em;
    }

    h1,h2,h3{

   margin-bottom: 0.5em;
   letter-spacing: 0.15em;
   font-weight: 500;
    }
  



    /* ############ Utility class ############## */
     
      .contenar{
        max-width: 1200px;
        width: 90%;
        margin: 0 auto;
      }
    
    
    .lg-heading{
        font-size: 3.5em;

     }

      .md-heading{
        font-size: 2.2em;
      }

      .text-red{
        color: #e63946;
      }

      .text-light{
        color: #f4f4f4;
      }

      .text-black{
        color: #333333;
      }
     
      .text-gray{
        color: #555555;
        font-size: 10px;
        margin-top: -3px;
      }

      .bg-black{
        background-color: #263238;
      }

      .btn{
        display: inline-block;
        padding: 0.5em 1.5em;
        font-weight: 500;
        text-transform: uppercase;
        margin: 1.5em 0;
      }

       .btn-primery{
        background-color: #fff;
        border-radius: 10em;

       }
       .btn-primery:hover{
          background-color: #ddd;
       }

        .btn-secondry{
          border: 2px solid #e63946;
          border-radius:  1.5em ;
          color: #e63946;
          background-color: #fff;
        }
        .btn-secondry:hover{
          background-color:#fcf3f2 ;
        }


/* ######################## header style #################### */
.header{
  position: relative;
    height: 95vh;
    /* background-image: linear-gradient(rgba(0, 0 ,0 ,0.4), rgba(0, 0 ,0 ,0.4)), url(../img/travel-image1.jpg); */
    background-image: linear-gradient(rgba(0, 0 ,0 ,0.4), rgba(0, 0 ,0 ,0.4)), url(../img/header-image.jpg);
background-position: center;
background-size: cover;
background-repeat: no-repeat;
}

 .navbar{
   
    padding: 1rem;
 }


 .navbar .logo{
    float: left;
    font-size: 3.5rem;
}

 .navbar .nav-items{
    float: right;
    margin-top: 1rem;
}
 .navbar .nav-item{
    display: inline-block;
    padding: 1rem;
    text-transform: uppercase;
}
.navbar a:link,
.navbar a:visited{
    color: #f4f4f4;
}

.navbar a{
    padding: 0.rem;
}

 .navbar a:hover{
border-bottom: 1px solid #ffffff;
 }

.navbar::after{
    content: "";
    display: block;
   
    clear: both;
}

  /* ##################### header content style ##################### */

     .header-content{
      position: absolute;
      text-align: center;
      top: 50%;
      left: 50%;
      transform: translate(-50% , -50%);
      background:linear-gradient(rgb(0 0 0 0.5) , rgb(0 0 0 0.5)) 
    }
.header-content h1{
  text-transform: uppercase;
  font-weight: 700;
}
.header-content p{
  text-transform: uppercase;
  font-size: small;
}

/* ####################### showcase section styling ########################*/

   .showcase{
    background-color: #ddd;
    padding: 10rem  0;
 
   }

    .row{
      height: 350px;
      background-color: #fff;
      box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.315);
    }
    .row1{
       margin-bottom: 10rem;
    }
     
     .row1 .img-box , .row2 .text-box{
      float: left;
      width: 50%;
     }

    .row2 .img-box , .row1 .text-box{
      float: right;
      width: 50%;
    }
    .row .img-box{
      
      height: 100%;
    }
    .row .text-box{
      
      padding: 3rem;
      
    
    }

     .row .img-box img{
      display: inline-block;
      width: 100%;
      height: 100%;
      object-fit: cover;
     }
  
       .row::after{
        content: "";
        display: block;
        clear: both; 
      }

     /* ####################### Features section styling  ############## */

      .features{
        padding: 10rem 0;

      }

       .box-wraper{
             box-shadow: 5px 5px 10px rgba(102, 102, 102, 0.512);
       }

       .box{
        width: 33.3333333%;
        float: left;
        
        padding: 2rem;
        text-align: center;
       }

       

        .box-1 , .box-3{
          background-color: #263238;
          color: #fff;

        }
        .box-wraper::after{
          content: "";
          display: block;
          clear: both;
         }

        .box-2{
          
          background: linear-gradient( 68.3deg,  rgba(245,177,97,1) 0.4%, rgba(236,54,110,1) 100.2% );
          color: #fff;
        }

        /* #################### footer section ################# */

             .footer{
               text-align: center;
               background-color: #263238;
               padding: 2rem;
              color: white;
             }
             .social i{
              
              color: rgba(255, 255, 255, 0.716);
              margin: 2rem;
          
             }

              /* ############### About page styling ################## */
                      .about{
                        padding: 5rem 0;
                      }

                                    /* .about-heading{
                                      border-bottom: 6px solid #e63946 ;
                     
                                      } */

                 .about-heading::after{
                  content: "";
                  display: block;
                  border-bottom: 5px solid #e63946;
                  width: 100%;

                 }

                 /* ########################## about Wrapper ############################ */

                  .about-wrapper{
                    
                     text-align:center;
                     margin-top: 2rem;

                }
                .about-wrapper .left{
                  float:left;
                  width: 50%;
                }
                .about-wrapper .right{
                  float:right;
                  width: 50%;
                }
                .about-wrapper::after{
                  content: "";
                  display: block;
                  clear: both;
                }

                 .about-wrapper li::before{
                  content: '\2713';
                  color: #e63946;
                  font-weight: bold;
                  padding: right 1rem; ;
                 }
                    /* ############### count styling ############### */
            
                    .counts{
                      
                       margin-top:3rem 0;
                    }
      
                    .count-item{
                     
                      float: left;
                      width: 25%;
                      text-align: center;
                      
                    }

                     .counts::after{
                      content: "";
                      display: block;
                      clear: both;
                     }
                   
                       .count-item span{
                        font-size: 3rem;
                        font-weight: 700;
                        color:#e63946
                       }

                        .count-item p{
                          font-weight:700 ;
                          color: grey;
                          font: size 1.8rem;
                        }
                         
                         /* ########################## Banner styling ########################## */
                         .cta-banner{
                          background: linear-gradient( 68.3deg,  rgba(245,177,97,1) 0.4%, rgba(236,54,110,1) 100.2% );
                          text-align: center;
                          padding: 1rem;
                          box-shadow: 5px 5px 10px #00000057;
                          margin-top: 3rem;
                        }

                         .cta-banner-left{
                          float:left;
                          width: 60%;
                          
                        }
                        
                        .cta-banner-right{
                         
                          width: 40%;
                          float:right;
                          text-align: right;
                        }
                          
                           .cta-line{
                             font-weight: 700;
                             font-size: 2rem;
                             margin-top: 1.5rem;
                            } 

                            .btn-cta{
                              text-align: center;
                              display: inline-block;
                              font-weight: 700;
                              font-size: 3rem;
                              text-transform: uppercase;
                              border: 4px solid white;
                              padding: 0.3em 2.5em;
                              letter-spacing: 0.5rem;
                              color: #f4f4f4f4;
                            } 

                            .btn-cta:hover{
                              color: #cec3c3;
                            }
                              
                           

                        .cta-banner:after{
                          content: "";
                          display: block;
                          clear: both;
                          
                        }
  
                  /* ####################### style for contact ################ */

                     .contact-form{
                      padding: 0.5rem 0;
                      background-color: #f7f7ff;
                      margin:3rem 0;
                     
                     }  
                  
                  .form-wrapper .company-adress{
                    height: 760px;    
                    float: left;

                        background-color: #fff;
                      
                      width: 49%;
                      padding: 1rem;
                      }

                      .form-wrapper .company-adress img{
                        max-width: 90%;
                        min-height: 40rem;
                        object-fit:cover ;
                        object-position:right;
                      }

                      .form-wrapper .form{
                        float: right;
                        background-color: #fff;
                       
                        width: 49%;
                      }

                      .form-wrapper .company-adress i{
                        display: inline-block;
                        margin: 1rem;
                        color: #e63946;
                      }

                      .form-wrapper .company-adress h2{
                         display: inline-block;
                         text-transform: uppercase;
                      }

                       .form-wraper .adress-group{
                        margin-bottom: 3rem;
                       }

                         .form-wrapper::after{
                          content: '';
                          display: block;
                          clear: both;
                         }

                         /* #################### form styling ############## */
                               
                         .form-wrapper .form{
                          font-size: 1.6rem;
                          background-color: #fff;
                         
                          width: 49%;
                          float: right;
                          padding: 1rem;
                          height: 760px;
                         }

                          .form h1::after{
                            content: '';
                            display: block;
                            border-bottom: 6px solid #e63946;
                            width: 100%;

                          }

                          .form-wrapper .form label{
                         display: block;
                          }

                          .form-wrapper .form input{
                            padding: 0.5rem;
                            width: 100%;
                          }

                          .form-wrapper .form .form-group{
                            margin-bottom: 1.2rem;
                          }

                          .form-wrapper .form label::after{
                                    content: '*';
                                    color: #e63946;
                          }
                           
                          .form-wrapper .form textarea{
                            width: 100%;
                            height: 250px;
                            padding: 1rem;
                          }

                           .form-btn{
                            display: block;
                            margin: 0 auto;
                            padding: 0.5em 3em;
                            font-size: 1.8rem;
                            text-transform: uppercase;
                            background-color: #e63946;
                            color: #fff;
                            outline: none;
                            border: none;
                            cursor: pointer;

                           }



       @media (max-width: 500px){
          
           html{
            /* font-size: 8px; */
            font-size: 50%;
           }

           .navbar .nav-items, .navbar .logo{
            float: none;
            display: block;
            width: 100%;
            text-align: center;
           }

            .header-content .main-heading{
              display: none;
            }

             .row{
              height: auto;
              width: 100%;
             }

             .row .img-box,
             .row .text-box{
              float: none;
              width: 100%;
              text-align: center;
             }

             .features .box{
              float: none;
              width: 100%;
              text-align: center;
              /* height: auto; */
            
                box-shadow: 5px 5px 10px rgba(102, 102, 102, 0.512);
          

             }
          
              .features .box-2, .features .box-3{
                 margin-top: 5rem;
              }

              .box-wraper{
                box-shadow: none;
          }

          .cta-banner-left,
          .cta-banner-right{
            float: none;
            width: 100%;
            height: auto;
            text-align: center;
          }

          .form-wrapper .company-adress{
            float: none;
            width: 100%;
            height: auto;
            margin-bottom: 5rem;
            
          }

           .form-wrapper .form{
            float: none;
            width: 100%;
            height: auto;
           
           }

       }     
       
      @media (min-width:501px) and (max-width:768px){
        html{
          font-size: 8px;

        }
        p{
          font-size: 1.8rem;
        }
        
        .navbar .nav-items, .navbar .logo{
          float: none;
          display: block;
          width: 100%;
          text-align: center;
         }

         
          p{
            font-size: 1.8rem;
          }

           .row{
            height: auto;
            width: 100%;
           }

           .row .img-box,
           .row .text-box{
            float: none;
            width: 100%;
            text-align: center;
           }

           .features .box{
            float: none;
            width: 100%;
            text-align: center;
            /* height: auto; */
          
              box-shadow: 5px 5px 10px rgba(102, 102, 102, 0.512);
        

           }
        
            .features .box-2, .features .box-3{
               margin-top: 5rem;
            }

            .box-wraper{
              box-shadow: none;
        }

        .cta-banner-left,
        .cta-banner-right{
          float: none;
          width: 100%;
          height: auto;
          text-align: center;
        }

        .form-wrapper .company-adress{
          float: none;
          width: 100%;
          height: auto;
          margin-bottom: 5rem;
          
        }

         .form-wrapper .form{
          float: none;
          width: 100%;
          height: auto;
         
         }

        }      
   
         @media (min-width:769px) and (max-width:1200px){
   
          html{
            font-size: 56.25%;
          }

          .row .text-box h2{
            font-size: 2.2rem;
            font-weight: 500px;
          }

         }

         @media (orientation: landscape) ,(max-height:500px){
          .header{
            height: 90vmax;
          }
         }
    </style>
<body>

          <section class="contact-form">
<div class="form-wrapper contenar">
    <div class="company-adress">
           <div class="adress-group">
            <i class="fas fa-map-marker-alt fa-3x"></i>
            <h2 class="text-gray md-heading">LOCATION</h2>
            <p>#2568,Mahavir nagar, Durgakund ,Varansi</p>

           </div>
           <div class="adress-group">
            <i class="far fa-envelope fa-3x"></i>
            <h2 class="text-gray md-heading">EMAIL</h2>
            <p>Nishantpandey@gmail.com</p>
           </div>
           <div class="adress-group">
            <i class="fas fa-phone-square-alt fa-3x"></i>
            <h2 class="text-gray md-heading">CALL</h2>
            <p>8840714124</p>
           </div>
           <img src="contactimage.jpeg" alt="building-image">
        </div>
      <div >
      <form class="form" action="">
         <h1 class="lg-heading text-black">contact us</h1>
         <p class="text-gray">Let us know your question, suggestions and concerns by fitting out the contact form below. </p>
           
             <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="" id="username" required>
             </div>
             <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="" id="email" required>
             </div>
             <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="" id="phone" required>
             </div>
             <div class="form-group">
                <label for="message">Mesage</label>
                <textarea name="" id="message"></textarea>
             </div>
             <button type="submit" class="form-btn">Submit</button>
        </form>
      </div>
</div>

          </section>

           <section>
            
        <footer class="footer">
            <div class="social">
            
                <i class="fa-brands fa-facebook fa-4x"></i>
                <i class="fa-brands fa-twitter fa-4x"></i>
                <i class="fa-brands fa-instagram-square fa-4x"></i>
              <p>Real Estate &copy; Website</p>
            </div>
  
         
          </section> 
     
            
        </body>
        </html>