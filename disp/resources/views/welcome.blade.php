<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

    <h2>Online Registration</h2>


</head>
    <body>
        



    <div class="content">
        <form class=""  action="index.html" method="post">

            <lebale for ="course">Select Your Course</lebale>
            <br>
            <input type ="text" name="course" placeholder="Select Your Course" value="">
            <br>  <br>

            <lebale for ="name">Name In Full</lebale>
            <br>
            <input type ="text" name="name" placeholder="Enter Your Full Name" value="">
            <br>  <br>
            
            <lebale for ="nameIn">Name with Initails</lebale>
            <br>
            <input type ="text" name="nameIn" placeholder="Enter Your Name with Initials" value="">
            <br>  <br>

            <lebale for ="NameApper">Name which should apper on the certificate</lebale>
            <br>
            <input type ="text" name="NameApper" placeholder="Enter Your Name which should apper on the certificate" value="">
            <br>  <br>




            <lebale for ="bdaytime">Date of Birth</lebale>
            <br>

            <input type="datepicker" name="bdaytime">
            <br> <br>

            <lebale for ="Nc">NC/Passport No</lebale>
            <br>
            <input type ="text" name="Nc" placeholder="Enter NIC/Passport Number" value="">
            <br>  <br>



            <lebale for ="gen">Gender</lebale>
            <br>
            <form>
            <input type="radio" name="gender" value="male" checked> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            </form>
            <br> <br>
            
            <lebale for ="lan">First Language</lebale>
            <br>
            
            <select>
            <option>Tamil</option>
            <option>English</option>
            </select>
            <br>  <br>





            <lebale for ="add">Residential Address</lebale>
            <br>
            <textarea rows="4" cols="50" name="add"  placeholder="Enter Residential Address"></textarea>
            <br>  <br>

            <lebale for ="Tele">Telephone No</lebale>
            <br>
            <input type ="tel" name="Tele" placeholder="Fixed Line" value="">
            <input type ="tel" name="Tele" placeholder="Mobile" value="">
            <input type ="tel" name="Tele" placeholder="Office" value="">
            <br>  <br>

            <lebale for ="email">E-Mail</lebale>
            <br>
            <input type="email" name="emailaddress" placeholder="Enter Your E-Mail" value="">
            <br>  <br>

            <lebale for ="school">Schools Attended</lebale>
            <br>
            <input type="text" name="emailaddress" placeholder="Enter Your School " value="">
            <br>  <br>

            <lebale for ="edu">Highest Educational Qualifications</lebale>
            <br>
            <textarea rows="4" cols="50" name="edu"  placeholder="Enter Highest Educational Qualifications"></textarea>
            <br>  <br>

            <lebale for ="ser">You are</lebale>
            <br>
            <select for="ser" >
            <option>Select Your Servant</option>
            <option>English</option>
            </select>
            <br>  <br>

            <lebale for ="des">Your Designation</lebale>
            <br>
            <textarea rows="4" cols="50" name="des"  placeholder="Enter Your Official Address"></textarea>
            <br>  <br>

            <input type="checkbox" name="certificate" value="Bike"> I Certifiy the above given information is correct to the best of my knowledge.<br>

            <button class="button2" size="40">
            </button>
        </form>

        <style>
        
                    
                .button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 20px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 50px;
                margin: 4px 2px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
                }
                .button2 {
                    background-color: white; 
                    color: black; 
                    border: 2px solid #008CBA;
                }
                .button2:hover {
                    background-color: #008CBA;
                    color: white;
                }

        
        </style>
        





    </body>
</html>