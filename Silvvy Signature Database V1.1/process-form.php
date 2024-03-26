<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        <script src="script.js"> </script>
        <title>Print Reciept</title>
        <link rel="shortcut icon" type="img/png" href="images/ico.ico ">
</head>
<body>
        
<?php





// form variables 











$Time = $_POST["time"];
$Name = $_POST["Name"];
$Number = $_POST["Phone_Number"];
$Email = $_POST["E-mail"];
$Location = $_POST["Estate_Name"]; 
$Fees = $_POST["Appointment_Fees"];   
$LashType = $_POST["Lash_Guide"];
$Browtype = $_POST["Blow_Guide"];
$lenght = $_POST["brow/lash"];
$platform = $_POST["platform"];
$referer = $_POST["referersname"];
$payment_type = $_POST["payment-type"];
$balance_payment = $_POST["Balance_Payment"];
$balance_payment_type= $_POST["Balance_Payment_Type"];
$total = $_POST["total"];


$LashTypes = implode("\n", $LashType);
$Browtypes = implode("\n",$Browtype);
$platforms  = implode("\n",$platform);





 // var_dump($Time,$Name,$Number,$Location,$LashTypes,$Browtypes,$Email,$platform,$Fees,$payment_type,$balance_payment,$balance_payment_type,$total);


 // $LashType,$Browtype,



//   variables for connection for database 

$host = "localhost";
$dbname = "silvvy_signature_database";
$username = "root";
$password = "";


//    connection setup 

$conn = mysqli_connect( hostname:$host, 
                        username:$username, 
                        password:$password, 
                        database:$dbname);


// connection check 

if(mysqli_connect_errno()) {

    die("connection error:" . mysqli_connect_error());


}


// inserting records 


$sql = "INSERT INTO combine (date, name, number, email, location, fees, lash, brow, lenght,  platform, referer, paymenttype, balance, balancetype, total )
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";


// connection

$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare ($stmt, $sql)){
        die(mysqli_error($conn));

}


// binding to place holders

mysqli_stmt_bind_param($stmt, "sssssssssssssss",
                        $Time,
                        $Name,
                        $Number,
                        $Email,
                        $Location,
                        $Fees,
                        $LashTypes,
                        $Browtypes,
                        $lenght,
                        $platforms,
                        $referer,
                        $payment_type,
                        $balance_payment,
                        $balance_payment_type,
                        $total);


//////////      second table database


                        $sql = "INSERT INTO singles (date, name, number, email, location, fees, lash, brow, lenght,  platform, referer, paymenttype, balance, balancetype, total )
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";
                
                
                // connection
                
                $stmtm = mysqli_stmt_init($conn);
                
                if (! mysqli_stmt_prepare ($stmtm, $sql)){
                        die(mysqli_error($conn));
                
                }
                
                
                // binding to place holders
                
 mysqli_stmt_bind_param($stmtm, "sssssssssssssss",
                $Time,
                $Name, 
                $Number,
                $Email,
                $Location,
                $Fees,
                $LashTypes,
                $Browtypes,
                $lenght,
                $platforms,
                $referer,
                $payment_type,
                $balance_payment,
                $balance_payment_type,
                $total);
                







                        














mysqli_stmt_execute($stmt);
mysqli_stmt_execute($stmtm);




//echo"record saved";











// echo"connection sucessfull"; 




    // 


















?>


<div class="echo"   id="confirm" style="visibility: visible;"   >
<?php echo "record saved...";  ?> 
        </div>

<div class="print_page">
        <section   id="my-section">

<!---  customer copy    -->
<div class="customer_copy">


<div class="logo">
    <img src="images/black logo.png" alt="landing page " width="" height="" class="logo" >
                    </div>

<div class="address"> 
<p> 9, henry ojogho street </p>
<p> behide freedow way, ikate, lekki lagos. </p>
<p> +234 816 080 8259 </p>
<p> hello@silvvysignature.com </p>
</div>
<!----------->


<!----------->
<br>
<div class="heading"> 
        customer's copy
</div>
<div><label> </label><textarea class="time">
<?php echo $Time ?>
</textarea> 
</div>
<!----------->
<div class="move1">
<div><label> </label><textarea class="name">
<?php echo $Name ?>
</textarea> 
</div>
<!----------->
<div><label> </label><textarea class="location">
<?php echo $Location ?>
</textarea> 
</div>
<!----------->
<div><label> </label><textarea class="lenght">
<?php echo $lenght?>
</textarea> 
</div>
        </div>
        <div class="move2">
<div class="hr-line"></div>
        </div>
<!----------->
<div><label></label><textarea class="fees">
<?php echo $Fees?>
</textarea> 
</div>
<!----------->
<div class="hr-line"></div>
<div><label  class=type> lash type:</label>
<br>
<textarea class=typelist>
<?php echo $LashTypes ?>
</textarea> 
</div>

<!----------->
<div><label class=type> Brow type:</label>
<br>
<textarea class=typelist2>
<?php echo $Browtypes ?>
</textarea> 
</div>
<!----------->
<div class="hr-line"></div>
<div><label class="total"> total:</label>

<div class="totalin"> ₦
<?php echo $total ?>
        </div> 
</div>
<!----------->
<div><label class="ptype"> payment type:</label>

<div class="ptypein">
<?php echo $payment_type ?>
        </div> 
</div>
<div class="comment"> all payment made are none refundable </div>

        </div>

<div class="vertical-line">

        </div>

<!---  personal copy   -->

<div class="personal_copy">

<div class="logo">
    <img src="images/black logo.png" alt="landing page " width="" height="" class="logo" >
                    </div>

<div class="address"> 
<p> 9, henry ojogho street </p>
<p> behide freedow way, ikate, lekki lagos. </p>
<p> +234 816 080 8259 </p>
<p style="text-transform: lowercase;"> hello@silvvysignature.com </p>
</div>
<!----------->


<!----------->
<br>
<div class="heading"> 
        company's copy
</div>
<div><label> </label><textarea class="time">
<?php echo $Time ?>
</textarea> 
</div>
<!----------->
<div class="move1">
<div><label> </label><textarea class="name">
<?php echo $Name ?>
</textarea> 
</div>
<!----------->
<div><label> </label><textarea class="location">
<?php echo $Location ?>
</textarea> 
</div>
<!----------->
<div><label> </label><textarea class="lenght">
<?php echo $lenght?>
</textarea> 
</div>
        </div>
        <div class="move2">
<div class="hr-line"></div>
        </div>
<!----------->
<div><label></label><textarea class="fees">
<?php echo $Fees?>
</textarea> 
</div>
<!----------->
<div class="hr-line"></div>
<div><label  class=type> lash type:</label>
<br>
<textarea class=typelist>
<?php echo $LashTypes ?>
</textarea> 
</div>

<!----------->
<div><label class=type> Brow type:</label>
<br>
<textarea class=typelist2>
<?php echo $Browtypes ?>
</textarea> 
</div>
<!----------->
<div class="hr-line"></div>
<div><label class="total"> total:</label>

<div class="totalin"> ₦
<?php echo $total ?>
        </div> 
</div>
<!----------->
<div class="ty12">
<div><label class="ptype"> payment type:</label>

<div class="ptypein">
<?php echo $payment_type ?>
        </div> 
</div>
<div class="comment"> all payment made are none refundable </div>
                    
</div>
                
        </div>

        </section>

        </div>










        <div class="btn-div2">
    
    <button  class="btn2"   onclick="window.print()"> Print</button>
    
    </div>
        

      <form action="http://localhost/demo/Silvvy%20Signature%20Database%20V1.1/form.html?">  
    <div class="btn-div3">
    
    <button  class="btn3" > back</button>
    
    </div>

        </form>
















<footer>
    <div class="write-up2">
      silvvy Signatures <p>customer database</p><p>v 1.1</p> 
    </div>
    <div class="tickerwrapper">
      <div class="listjava" id="scroll-container">
    <div  class="write-up" id="scroll-text">
    this software  is created  and maintained by hoptec computers . for more enquires and assistance contact +234 816 041 9237   
   
  </div>
  </div>
  </div>
  
  </footer>


<style>
body{
        background-color:rgb(254, 169, 190);
}
/*  print setup    */
.print_page{
        width:620px;height: 450px;
     margin: ; background: rgb(250, 250, 250); 
     padding: ;border-radius: 0px; 
     box-shadow: 0 15px 35px rgba(39, 36, 36, 0.034), 0 5px 35px rgba(24, 23, 23, 0.048); 
     padding: 2em; background-color: rgb(255, 255, 255); 
     margin-top: 0px;
     top:5%;left:25%;
    position:absolute ; 
}
.vertical-line{
        height:450px;
        border-left:2px solid black;
        position:absolute ; 
        margin-left:310px;
        border:1px dashed;
}

.customer_copy{
position: absolute;
left:10px;
width:fit-content;
}


.personal_copy{
        position:absolute;
        right:0%;
        width:fit-content;
}

.logo{
        width:100px;
}
.address{
        font-size:10px;
        text-transform: capitalize;
        line-height:1px;
        margin-left:150px;
        margin-top:-70px;
        font-weight:300;

}

p{
        line-height:1px;
}

.receiptNo{
        font-size:13px;
        text-transform:uppercase;
        font-weight:bolder;
} 

.heading{
        font-size:14px;
        text-transform:uppercase;
        font-weight:bolder;
        align-self:center;
        margin-left:100px;
        margin-top:-10px

}

.time{
        margin-left:110px;
        pointer-events: none;
        outline: none;
        width: 210px;
        height:fit-content ;
        overflow:none ;
        border: none;
        resize:none ;
        font-size: 12px;
}
.name{
      pointer-events:none; 
      text-transform:capitalize;
      width:300px;
      margin-left:10px;
      height:fit-content;
      font-size:12px;
      margin-top:-10px;
      outline:none;
      overflow:none;
      border:none;
      resize:none;


}
.location{
        pointer-events:none; 
      text-transform:capitalize;
      width:300px;
      margin-left:10px;
      margin-top:-20px;
      height:fit-content;
      font-size:12px;
      margin-top:-20px;
      outline:none;
      overflow:none;
      border:none;
      resize:none;
}

.lenght{
        pointer-events:none; 
      text-transform:capitalize;
      width:300px;
      margin-left:10px;
      margin-top:-20px;
      height:fit-content;
      font-size:12px;
      margin-top:-20px;
      outline:none;
      overflow:none;
      border:none;
      resize:none;


}


.hr-line{
border-bottom:1px dashed;
width:300px;
margin-top:;
margin-left:10px;

}

.fees{
pointer-events:none; 
      text-transform:capitalize;
      width:300px;
      margin-left:10px;
      
      height:fit-content;
      font-size:12px;
      margin-top:8px;
      outline:none;
      overflow:none;
      border:none;
      resize:none;
      background-color:none;

}

.type{
        font-size:10px;
        text-transform:uppercase;
        font-weight:bolder;
        align-self:;
        margin-left:10px;
        margin-top:10px
}


.typelist{
        pointer-events:none; 
      text-transform:capitalize;
      width:300px;
      margin-left:10px;
      height:120px;
      font-size:10px;
      margin-top:;
      outline:none;
      overflow:none;
      border:none;
      resize:none;
      background-color:none;
      
    
}
.typelist2{
        pointer-events:none; 
      text-transform:capitalize;
      width:300px;
      margin-left:10px;
      height:60px;
      font-size:10px;
      margin-top:;
      outline:none;
      overflow:none;
      border:none;
      resize:none;
      background-color:none;
}
.total{
        font-size:12px;
        text-transform:uppercase;
        font-weight:bolder;
        align-self:;
        margin-left:12px;
        margin-top:-30px  

}

.totalin{
        margin-top:-15px;
        margin-left:180px;
        font-size:12px;
        font-weight:bolder;
        width:120px;
        height:fit-content;
        pointer-events:none; 
        outline:none;
      overflow:none;
      border:none;
      resize:none;
      background-color:none;


}

.ptype{
        font-size:12px;
        text-transform:uppercase;
        font-weight:bolder;
        align-self:;
        margin-left:10px;
        margin-top:-20px  
}

.ptypein{
        margin-top:-17px;
        margin-left:185px;
        font-size:12px;
        font-weight:bolder;
        width:120px;
        height:fit-content;
        pointer-events:none; 
        outline:none;
      overflow:none;
      border:none;
      resize:none;
      background-color:none; 
      text-transform:capitalize;
}
.comment{
margin-top:5px;
font-size:9px;
text-transform:capitalize;
margin-left:10px;
font-weight:bold;
}
.echo{
        font-size:18px;
        letter-spacing:1px;
        font-family:'Times New Roman', Times, serif;
text-transform:capitalize;
letter-spacing: 2px;
margin:20px;
position: absolute;
font-weight:bolder;
color:white;
}



.move1{
        margin-top:-10px;
}

.move2{
        margin-top:-4px;
}

.btn-div2{
    margin-top:;
    position:absolute;
    left:70%;
    top:85%;
 }


 .btn2 {
        
    align-items: center;
    appearance: none;
    background-color: #FCFCFD;
    border-radius: 5px;
    border-width: 0;
    box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
    box-sizing: border-box;
    color: #36395A;
    cursor: pointer;
    display: inline-flex;
    font-family: "JetBrains Mono",monospace;
    height: 48px;
    justify-content: center;
    line-height: 1;
    list-style: none;
    overflow: hidden;
    padding-left: 16px;
    padding-right: 16px;
    position: relative;
    text-align: left;
    text-decoration: none;
    transition: box-shadow .15s,transform .15s;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    white-space: nowrap;
    will-change: box-shadow,transform;
    font-size: 14px;
  }
  
  .btn2:focus {
    box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
  }
  
  .btn2:hover {
    box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
    transform: translateY(-2px);
  }
  
  .btn2:active {
    box-shadow: #D6D6E7 0 3px 7px inset;
    transform: translateY(2px);
  }

  .btn-div3{
    margin-top:;
    position:absolute;
    left:10%;
    top:85%;
 }


 .btn3 {
        
    align-items: center;
    appearance: none;
    background-color: #FCFCFD;
    border-radius: 5px;
    border-width: 0;
    box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
    box-sizing: border-box;
    color: #36395A;
    cursor: pointer;
    display: inline-flex;
    font-family: "JetBrains Mono",monospace;
    height: 48px;
    justify-content: center;
    line-height: 1;
    list-style: none;
    overflow: hidden;
    padding-left: 16px;
    padding-right: 16px;
    position: relative;
    text-align: left;
    text-decoration: none;
    transition: box-shadow .15s,transform .15s;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    white-space: nowrap;
    will-change: box-shadow,transform;
    font-size: 14px;
  }
  
  .btn3:focus {
    box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
  }
  
  .btn3:hover {
    box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
    transform: translateY(-2px);
  }
  
  .btn3:active {
    box-shadow: #D6D6E7 0 3px 7px inset;
    transform: translateY(2px);
  }


/*  footer      */
footer{
    position:fixed;
    bottom: 0;
    width: 100%;
    
    
    }
    
    .write-up{
    
        font-size: 20px;
    letter-spacing: 1px;
    font-weight: bolder;
    text-transform: capitalize;
    color: rgb(0, 0, 0);
    text-shadow: ;
    margin-left: 20px;
    
    }
    .write-up2{
        align-items: center;
    position:absolute;
        font-size: 20px;
    letter-spacing: 1px;
    text-transform: capitalize;
    color: white;
    text-shadow: 2px 2px 2px  black;
    left: 85%;
    
    line-height: 2px;
    bottom:55%;
    
    }
    
    
    
    
    #scroll-container {
        border: none;
        border-radius: 5px;
        overflow: hidden;
        background-color: white;
      }
      
      #scroll-text {
        /* animation properties */
        -moz-transform: translateX(100%);
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
        
        -moz-animation: my-animation 150s linear infinite;
        -webkit-animation: my-animation 150s linear infinite;
        animation: my-animation 150s linear infinite;
      }
      
      /* for Firefox */
      @-moz-keyframes my-animation {
        from { -moz-transform: translateX(100%); }
        to { -moz-transform: translateX(-100%); }
      }
      
      /* for Chrome */
      @-webkit-keyframes my-animation {
        from { -webkit-transform: translateX(100%); }
        to { -webkit-transform: translateX(-100%); }
      }
      
      @keyframes my-animation {
        from {
          -moz-transform: translateX(100%);
          -webkit-transform: translateX(100%);
          transform: translateX(100%);
        }
        to {
          -moz-transform: translateX(-100%);
          -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
        }
    }
    
@media print{ @page{size:landscape; margin:0.3cm}
 body *:not(#my-section):not(#my-section *){
visibility:hidden;
 }

#my-section{
        position:;
        left:0;
        top:0;
        visibility:visible;
        align-self:center;
        width:;
        
        margin:0;
        padding:0;
}
.print_page{
        position:absolute;
        left:40px;
        right:0;
        margin:0;
        top:0;
        bottom:;
        margin-top:;
        
       
        

}
.ty2{
        page-break-before:always;
}
}



</style>

<script>
function hidediv()
          {
            document.getElementById("confirm").style.visibility="hidden";
        
          }
        
              setTimeout("hidediv()", 10000);
              


              event.preventDefault();
</script>
</body>
</html>










