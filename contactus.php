<?php include('header.php');?>
<section>
    <div class="container-fluid" style="background-image:url('https://t3.ftcdn.net/jpg/05/54/94/30/360_F_554943083_pQVRkTrv8CfvkU9fO55S1HcH6CCF0hXL.jpg');background-repeat:no-repeat;background-size:cover">
        <div class="text-center">
            <h2 class="mt-5 mb-5" style="margin-top:200px!important;font-size:30px!important">ContactUS</h2>
        </div>
    </div>
</section>
<style>
@keyframes movetop
{
    0% {transform:transalteY(0px);}
    50%{transform:translateY(-10px);}
    100%{transform:translateY(0px)}
}
.moveLocation{
    animation-name:movetop;
    animation-iteration-count:infinite;
    animation-duration:5s;
}
input[type='text']
{
    border:0px;
    font-size:20px;
    border-bottom:1 px solid black;
}

input[type='submit']
{
   width:200px;
   height:60px;
   color:White;
   background-color:orange;
   border:0px;

}

input[type='text']:focus 
{
    border-bottom:2px solid blue;
}
textarea
{
    border:0px;
    font-size:20px;
    width:500px!important;
}

</style>
<section>
    <div class="container">
        <div class="text-center">
        <h2 class="mt-5 mb-5" style="font-family:Lucida Console", "Courier New", monospace">Lets Start a conversation</h2>
       
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <h1 style="font-family:Lucida Console,Courier New, monospace">Get In Touch</h1>
                <h2 class="mt-3 mb-3" style="font-family:Lucida Console">Address</h2>
                    <div class="row">
                        <div class="col-lg-2 col-2">
                      
                        <i style="font-size:30px;color:blue" class="fa fa-map-marker" aria-hidden="true"></i>     
                                      
                        </div>
                        <div class="col-lg-10 col-10">
                        
                            <p style="font-family:Lucida Console,Courier New, monospace;font-size:18px">India HO-121, Orbit Mall AB Road</p>
                           
                           
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-2 col-2">
                               
                        <i style="font-size:30px;color:blue" class="fa fa-volume-control-phone" aria-hidden="true"></i>  
                        </div>
                        <div class="col-lg-10 col-10">
                        <p style="font-family:Lucida Console,Courier New, monospace;font-size:18px">Indore-452010 Contact No:-INDIA- +91-9770799998, <br>+91-9575514473</p>
                          
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-2">
                        <i style="font-size:30px;color:blue" class="fa fa-globe" aria-hidden="true"></i>  
                        </div>
                        <div class="col-lg-10 col-10">
                        <p style="font-family:Lucida Console,Courier New, monospace;font-size:18px">USA Head Office-2950 NW 29th Ave STE A632133Portland, Oregon, 97210,</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <h1>Fill Form</h1>
                        <div class="col-lg-12">
                            
                           <form action="">
                            <div class="row">
                                
                                <div class="col-lg-6">
                                     <input  type="text" name="n1" placeholder="First Name">
                                </div>
                                <div class="col-lg-6">
                                     <input type="text" name="n1" placeholder="Email">
                                </div>
                            </div>
                          
                            <div class="row mt-5">
                                
                                <div class="col-lg-12">
                                     <textarea name="" id="" cols="30" rows="5" placeholder="Enter Message Here......"></textarea>
                                </div>
                            </div>
                            <div class="row mt-5">
                                
                                <div class="col-lg-12">
                                     <input type="submit" value="Submit"/>
                                </div>
                            </div>
                           </form>
                            </div>
                        </div>
                   
            </div>
            <div class="col-lg-6 col-12">
                <div class="text-center">
                    <h1>How we can help?</h1>
                        <img class="left" src="https://www.appslure.com/wp-content/uploads/2022/07/app-development-1.gif" style="width:100%" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php');?>