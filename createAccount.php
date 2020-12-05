<html>
    <head>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styling2.css" type="text/css">
    </head>
    <body>
    <div class="title col-sm-offset-1 col-sm-10">
        <h1>Create</h1>

        <form action="createAccount.php" method="post">
        
        
        <div class="form-group">
        <label for="firstname">First Name:</label>
        <input class="form-control" type="text" placeholder="Firstname" name="firstname" id="firstname" maxlength="20">
        </div>
            
         <div class="form-group">
        <label for="lastname">Middle Name:</label>
        <input class="form-control" type="text" placeholder="Middlename" name="middlename" id="lastname" maxlength="20">
        </div>
        
        <div class="form-group">
        <label for="lastname">Last Name:</label>
        <input class="form-control" type="text" placeholder="Lastname" name="lastname" id="lastname" maxlength="20">
        </div>
        
        <div class="form-group">
        <label for="email">Email:</label>
        <input class="form-control" type="text" placeholder="Email" name="email" id="email" maxlength="30">
        </div>
        
        <div class="form-group">
        <label for="gender">Gender:</label>
        <input class="form-control" type="text" placeholder="Gender" name="gender" id="gender" maxlength="40">
        </div>
        
        <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input class="form-control" type="text" placeholder="DOB" name="dob" id="dob" maxlength="40">
        </div>
<!--
        
        <div class="form-group">
        <label for="credit">Current Credit Hours:</label>
        <input class="form-control" type="text" placeholder="Credit hours" name="credit" id="credit" maxlength="40">
        </div>
        
        <div class="form-group">
        <label for="cumGPA">Cumulitive GPA:</label>
        <input class="form-control" type="text" placeholder="Cum GPA" name="cumGPA" id="cumGPA" maxlength="40">
        </div>
-->
        
        <div class="form-group">
        <label for="semGPA">Admin Password:</label>
        <input class="form-control" type="number" placeholder="Admin Pass" name="admin" id="admin" maxlength="4">
        </div>
        
        <div class="form-group">
        <input type="submit" class="btn btn-success btn-lg" value="Send Data" name="submit">
        </div>
        
        <div class="form-group">
            <a href="optionPage.html" class="btn btn-lg btn-success">Main Page</a>
        </div>
        
    </form>
        
    <?php  
        //mysqli_connect(host, username, password, dbname);
        $link = @mysqli_connect("localhost","root","","421_project") or  die("Error in connection: ".mysqli_connect_error());
        echo "<p>Connected to Database Successfully!</p>";
      
    ?>
 
    </div>

    </body>
</html>