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
        <h1>Activities</h1>

        <form action="loan.php" method="post">
        <div class="form-group">
        <label for="ID">Customer ID:</label>
        <input class="form-control" type="number" placeholder="ID" name="ID" id="ID" maxlength="4">
        </div>
        
        <div class="form-group">
        <label for="accNo">Account No:</label>
        <input class="form-control" type="number" placeholder="Account no#" name="accNo" id="accNo" maxlength="20">
        </div>
        
        <div class="form-group">
        <label for="loamAm">Amount:</label>
        <input class="form-control" type="text" placeholder="Loan Amount" name="loamAm" id="email" maxlength="30">
        </div>
        
       
        <div class="form-group">
        <input type="submit" class="btn btn-success btn-lg" value="Withdraw" name="withdraw">
        </div>
            
         <div class="form-group">
        <input type="submit" class="btn btn-success btn-lg" value="Deposit" name="Deposit">
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