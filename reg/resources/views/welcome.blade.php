<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <div class="container">
    <h2>Online Registration</h2>
    <br><br>
</div>

</head>
    <body>
        

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script> 

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">   

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

      

            <form method="POST" action="/posts" >
            {{csrf_field()}}

                <div class="form-group raw">

                    <div class="col-5">
      

                            <lebale for ="course">Select Your Course</lebale>
                            <br>
                            <input type ="text" class="form-control" name="course" id="cid" placeholder="Select Your Course" value="" >
                            <br>  <br>

                            <lebale for ="name">Name In Full</lebale>
                            <br>
                            <input type ="text" class="form-control" name="name" id="nm"placeholder="Enter Your Full Name" value="">
                            <br>  <br>
                            
                            <lebale for ="nameIn">Name with Initails</lebale>
                            <br>
                            <input type ="text" class="form-control" id="nmi" name="nameIn" placeholder="Enter Your Name with Initials" value="">
                            <br>  <br>

                            <lebale for ="NameApper">Name which should apper on the certificate</lebale>
                            <br>
                            <input type ="text" class="form-control" id="na" name="NameApper" placeholder="Enter Your Name which should apper on the certificate" value="">
                            <br>  <br>

                    </div>
    
                         <div class="col-5">

                            <lebale for ="bdaytime">Date of Birth</lebale>
                            <br>

                            <input type="text" id="datepicker" name="datepicker" class="form-control" placeholder="Choose">
                            <br> <br>

                    

                            <lebale for ="Nc">NC/Passport No</lebale>
                            <br>
                            <input type ="text" class="form-control" id="nc" name="nic" placeholder="Enter NIC/Passport Number" value="">
                            <br>  <br>

                    


                  

                            <lebale for ="gen">Gender</lebale>
                            <br>
                         
                            <input type="radio" name="gender" value="male" checked> Male<br>
                            <input type="radio" name="gender" value="female"> Female<br>
                         
                            <br> <br>
                    
                        </div>

                       
                     
                       <div class="col-5">
                   
                            <lebale for ="lan">First Language</lebale>
                            <br>
                            
                            
                                
                            <select class="form-control" name="lan" id="select" size="1">
                            <option>Tamil</option>
                            <option>English</option>
                            
                            </select>
                            <br><br>
                            
                        

                            <lebale for ="add">Residential Address</lebale>
                            <br>
                            <textarea class="form-control" id="radd"name="add"  placeholder="Enter Residential Address"></textarea>
                            <br>  <br>

                        </div>

                </div>
                
                    
                        <div class="form-group col-7">
                            <lebale for ="Tele">Telephone No</lebale> 
                            <br>
                            <input type ="tel" class="form-control" id="tele" name="Tele" placeholder="Fixed Line" value="">
                            <input type ="tel" class="form-control" id="mobile" name="Tele" placeholder="Mobile" value="">
                            <input type ="tel" class="form-control" id="office" name="Tele" placeholder="Office" value="">
                            

                        </div>  
                         
                    
                            <br> <br> 
                    <div class="form-group col-5">
                            <lebale for ="email">E-Mail</lebale>
                            <br>
                            <input type="email" class="form-control" id="email" name="emailaddress" placeholder="Enter Your E-Mail" value="">
                            <br>  <br>

                            <lebale for ="school">Schools Attended</lebale>
                            <br>
                            <input type="text" class="form-control" id="school" name="scname" placeholder="Enter Your School " value="">
                            <br>  <br>

                            <lebale for ="edu">Highest Educational Qualifications</lebale>
                            <br>
                            <textarea class="form-control" id="edu" name="edu" placeholder="Enter Highest Educational Qualifications"></textarea>
                            <br>  <br>

                            <lebale for ="ser">You are</lebale>
                            <br>
                            <select class="form-control" id="servant" size="1" >
                            <option>Select Your Servant</option>
                            <option>English</option>
                            </select>
                            <br>  <br>

                            <lebale for ="des">Your Designation</lebale>
                            <br>
                            <textarea class="form-control" id="offadd"name="add" placeholder="Enter Your Official Address"></textarea>
                            <br>  <br>

                            <input type="checkbox" id="check" name="certificate" value="Bike"> I Certifiy the above given information is correct to the best of my knowledge.<br><br>

                        
                            <input class="btn btn-primary" type="submit" id="submit"  value="Submit">
                         
                    </div>  
            </form>

                <style>
        
                    
          
        
                </style>
        
  
<script>
  $(function() {
        $( "#datepicker" ).datepicker({
            dateFormat : 'mm/dd/yy',
            changeMonth : true,
            changeYear : true,
            yearRange: '-100y:c+nn',
            maxDate: '-1d'
        });
    });
    </script>

 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    </body>

</html>