<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,intial-scale=1.0"/>
        <title>sign in </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <style>
         @media (max-width:1000px) {

            #FormSignIn{
                width: 100%;
            }
         }
   @media (min-width:1001px) {
       #FormSignIn{
           width: 70%;
       }
       
   }
        </style>
    </head>
    <body style="  background-image: url( AM.jpeg); background-color:#F5EBEF; background-size:cover; background-position:center; background-attachment: fixed;   " >
    <?php
              include "../NAV.php";
?>
        <div class="container-fluid"  > 
            <div class="container" style="text-align: -webkit-center;margin-top: 60px;" >
        
      
               
                <div class="row "  style="text-align: -webkit-center;  " >
                    <div class="col-12  " >
                        <h1 style="color:#603a44 ; font-size:30px; font-weight: bold;font-family: Tahoma; " > Sign in </h1>
                    </div>
                </div>
                <div style="padding: 24px; background-color: #CC5C7D; border-radius: 58px;  ;" id="FormSignIn"> <br/>
                    <div class="row " style="text-align: -webkit-center;"  >
                        <div class="col-12" >
                            <img src="bb.png" style="width: 150px;"/>
                        </div>   
                    </div><br/>
                <div class="row " style="text-align: -webkit-center; " >
                    <div class="col-12">
                        <form>
                        <input type="text" placeholder="Email"id="email" size="50" style="border-radius: 20px; background:#ffffff ;  padding: 10px; width: 100% ;margin-top: 20px;    border: none;box-shadow: 0 0 10px -6px; " required> 
                        </form>
                    </div>
        
                </div><br/>
                <div class="row " style="text-align: -webkit-center;"  >
                    <div class="col-12">
                        <input type="password" id="password" placeholder="Password" style="border-radius: 20px; background:#ffffff ;  padding: 10px; width: 100% ; margin-top: 20px;    border: none;box-shadow: 0 0 10px -6px;" required>
                    </div>
                </div>

                <div class="row" style="text-align: right; "  >
                    <div class="col-12" > 
                        <a  href="#" style="color:#F5EBEF; text-decoration: none; font-size:13px;margin-top: 5px;" >Forget password? </a>
                       
                    </div>
                    
                        
                </div>

                <div class="row" style="text-align: center; "  >
                    <div class="col-12" > 
                        <button type="submit" style="background-color:#603A44; color: white; border-radius:20px; padding: 5px; width: 150px; border: none; ">
                                sign in
                               
                               <img src="arow.png" style="width: 9px;" alt="">
                        </button>
                    </div>
                </div>
                <div class="row" style="text-align: -webkit-center; "  >
                    <div class="col-12" > 
                        <p type="text" id="text" style="color: #ffffff ; font-size:15px; font-weight: bold;font-family: Tahoma;margin-top: 10px; " >
                            Don't have an account?   
                            <a href="#" style="color:#603A44; text-decoration: none;"> Sign up Now</a>
                        </p>
                       
                    </div>
                </div>
                <div class="row" style="text-align: -webkit-center;"  >
                    
                    <div class="col-4"  >
                        <div style="content: none ; display:block; width:72%;height: 2px;background: #ffffff; position: absolute;left: 0; margin-left:50% ;top: 30%;"></div>
                    
                    </div>
                    <div class="col-4" > 
                        <p type="text" id="text" style="color:#ffffff;  font-size:15px; font-weight: bold;font-family: Tahoma; position:relative ;" >
                            OR 
                        </p>
                       
                    </div>
                    <div class="col-4"  >
                        <div style="content: none ; display:block; width: 72%;height: 2px;background:#ffffff;position: absolute ;right: 0;  top: 30%; margin-right: 50%;"></div>
                    
                    </div>
                    
                        
                </div>
                <div class="row" style="text-align: -webkit-center; "  >
                    <div class="col-12" > 
                        <p type="text" id="text" style="color: #ffffff;  font-size:15px; font-weight: bold;font-family: Tahoma; " >
                            Connect with
                        </p>
                       
                    </div>
                    
                        
                </div>
                <div class="row" style="text-align: -webkit-center; "  >
                    <div class="col-12" > 
                        <a href="#"> <img src="cc.png" style="width: 35px; " /> </a>
                       
                    </div>
                    
                        
                </div>
            </div>
        
            </form>
            </div>
         
        </div>
        <?php
              include "../footer.php";
?>     
    </body>
</html>