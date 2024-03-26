<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <script src="script.js"> </script>
    <title> Client Registration</title>
    <link rel="shortcut icon" type="img/png" href="images/ico.ico ">

</head>



<body onload="renderTime();">
    
<?php





$Name = $_GET["name"];
$Number = $_GET["number"];
$Email = $_GET["email"];
$Location = $_GET["location"];


?>

<!--    top logo -->
    
<header> 
    <div class="logo-div">
    <img src="images/ss logo.png" alt="landing page " width="" height="" class="logo" >
                    </div>
                    <div  class="">
                        <form action="http://localhost/demo/Silvvy%20Signature%20Database%20V1.1/search.php?" class="btn1a" id="" >
                          <button class="btn1" type="submit" id="">  search Database
                              <img src="images/loupe.png" alt="search icon " width="" height="" class="icon" >
                          </button>
                          </form>
                        </div>    
                        <h1 class="head">  customer registration/ sales </h1>
</header>


<!-- form -->
<div class="form-div">
    

    <form class="form" action="addedinfo.php" method="post" name="listForm" id="sumCheckboxes">

<!--  time an date  -->
<textarea  id="clockDisplay" class="clock" style="font-size: 18px; font-family: 'Times New Roman', Times, serif; margin-left: 200px;" name="time">

</textarea>
<!--   
<div id="clockDisplay" class="clock" style="font-size: 20px; font-family: 'Times New Roman', Times, serif; margin-left: 200px;"></div>
 -->


 

<div class="section-one">
    <div  class="child">
<label for="name">Name:</label> <textarea   type="text" id="name" class="input-11" name="Name" placeholder="Name"    >
    <?php echo $Name?>
</textarea>

</div>

<div  class="child1">
<label for="number">Phone Number:</label><textarea   type="tel" id="number" class="input-11" name="Phone_Number" placeholder="Phone Number"    >
    <?php echo $Number?>
</textarea>

</div>
</div>

<br>

<div class="section-two">

<div class="child">
<label for="location">Estate Name:</label> <textarea  type="text" id="location" class="input-11" name="Estate_Name" placeholder="Estate Name"    >
    <?php echo $Location?>
</textarea>

</div>
<div  class="child1">
    <label for="mail">E-mail:</label><textarea  type="email" id="mail" class="input-11" name="E-mail" placeholder="E-mail"   style="text-transform:lowercase;"  >
    <?php echo $Email?>
    </textarea>
</div>
</div>

<br>




<br>





<div class="section-three">
<div class="child">


<div class="selectedlist"> 
<div id="0" style="display: none;" class="list-1"> none</div>
    <div id="1" style="display: none;" class="list-1"> Removal</div>
    <div id="2" style="display: none;" class="list-1"> Tweezy</div>
    <div id="3" style="display: none;"class="list-1"> Classic</div>
    <div id="4" style="display: none;" class="list-2"> Light Hybrid</div>
    <div id="5" style="display: none;" class="list-1"> Hybrid</div>
    <div id="6" style="display: none;" class="list-3"> Whispy Hybrid</div>
    <div id="7" style="display: none;" class="list-2"> volume set</div>
    <div id="8" style="display: none;" class="list-3"> Whispy Volume</div>
    <div id="9" style="display: none;" class="list-2"> mega volume</div>
    <div id="10" style="display: none;" class="list-4">Whispy mega Volume</div>

</div>

<label for="type"> Lash guide:</label>

<div class="multi-selector">
        
    <div class="select-field">
<input type="text" name="" placeholder="Select Option" id="" class="input-selector">
     <span class="down-arrow">&blacktriangledown;</span>
     </div>
<!---------List of checkboxes and options     Lash_Guide[]    Blow_Guide[]----------->
     <div class="list">
    
     <label for="list0" class="task">
            <input type="checkbox" name="Lash_Guide[]" id="list0" value="none" onclick="myFunction0()" data-amount="0" class="dropdowninput">
            none
     </label>


       <label for="list1" class="task">
            <input type="checkbox" name="Lash_Guide[]" id="list1" value="Removal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦5,000" onclick="myFunction1()" data-amount="5000" class="dropdowninput">
            Removal
     </label>

     <label for="list2" class="task">
        <input type="checkbox" name="Lash_Guide[]" id="list2" value="Tweezy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦3,000" onclick="myFunction2()"  data-amount="3000">
        Tweezy
 </label>

 <label for="list3" class="task">
    <input type="checkbox" name="Lash_Guide[]" id="list3" value="Classic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦20,000" onclick="myFunction3()" data-amount="20000">
    Classic
</label>


<label for="list4" class="task">
    <input type="checkbox" name="Lash_Guide[]" id="list4" value="Light Hybrid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦23,000"  onclick="myFunction4()" data-amount="23000">
    Light Hybrid
</label>


<label for="list5" class="task">
    <input type="checkbox" name="Lash_Guide[]" id="list5" value="Hybrid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦25,000" onclick="myFunction5()" data-amount="25000">
    Hybrid
</label>

<label for="list6" class="task">
    <input type="checkbox" name="Lash_Guide[]" id="list6" value="Whispy Hybrid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦28,000" onclick="myFunction6()"  data-amount="28000">
    Whispy Hybrid
</label>

<label for="list7" class="task">
    <input type="checkbox" name="Lash_Guide[]" id="list7" value="Volume Set&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦30,000" onclick="myFunction7()"  data-amount="30000">
    volume set
</label>

<label for="list8" class="task">
    <input type="checkbox" name="Lash_Guide[]" id="list8" value="Whispy Volume&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦33,000" onclick="myFunction8()" data-amount="33000">
    Whispy Volume
</label>

<label for="list9" class="task">
    <input type="checkbox" name="Lash_Guide[]" id="list9" value="Mega Volume&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦35,000" onclick="myFunction9()" data-amount="35000">
    mega volume
</label>

<label for="list10" class="task">
    <input type="checkbox" name="Lash_Guide[]" id="list10" value="Whispy Mega Volume&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦36,000" onclick="myFunction10()" data-amount="36000">
    Whispy mega Volume
</label>

     </div>

    </div>


</div>




    <div class="child1">
    <div class="selectedlist"> 
    <div id="0.0" style="display: none;" class="list-2"> none</div>
        <div id="1.1" style="display: none;" class="list-2"> correction</div>
        <div id="2.2" style="display: none;" class="list-3"> micro blading</div>
        <div id="3.3" style="display: none;" class="list-3"> micro shadding</div>
        <div id="4.4" style="display: none;" class="list-1"> combo</div>
        <div id="5.5" style="display: none;"class="list-2" > lamination</div>
        
    </div>
    
    
    <label for="type"> brow guide:</label>


    <div class="multi-selector">
        
        <div class="select-field2">
    <input type="text" name="" placeholder="Select Option" id="" class="input-selector">
         <span class="down-arrow2">&blacktriangledown;</span>
         </div>
    <!---------List of checkboxes and options----------->
         <div class="list2">
         <label for="list0.0" class="task">
                <input type="checkbox" name="Blow_Guide[]" id="list0.0" value="none" onclick="myFunctions0()" data-amount="0">
                none
         </label>

           <label for="list1.1" class="task">
                <input type="checkbox" name="Blow_Guide[]" id="list1.1" value="Correction&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦20,000" onclick="myFunctions1()" data-amount="20000">
                correction
         </label>
    
         <label for="list2.2" class="task">
            <input type="checkbox" name="Blow_Guide[]" id="list2.2" value="Micro Blading&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦55,000" onclick="myFunctions2()" data-amount="55000">
            micro blading
     </label>
    
     <label for="list3.3" class="task">
        <input type="checkbox" name="Blow_Guide[]" id="list3.3" value="Micro Shadding&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦60,000" onclick="myFunctions3()"  data-amount="60000">
        micro shadding
    </label>
    
    
    <label for="list4.4" class="task">
        <input type="checkbox" name="Blow_Guide[]" id="list4.4" value="Combo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦70,000" onclick="myFunctions4()"  data-amount="70000">
        combo
    </label>
    
    
    <label for="list5.5" class="task">
        <input type="checkbox" name="Blow_Guide[]" id="list5.5" value="Lamination&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦17,000" onclick="myFunctions5()"   data-amount="17000">
        lamination
    </label>
    
         </div>
    
        </div>
    
    </div>

</div>

<br>


<br>


<div class="section-3">


<div class="child">
<label for="fee">Appointment fee</label>
        <input type="checkbox" id="fee"    value="Appointment Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₦10,000"   class="apointment" name="Appointment_Fees" data-amount="10000" checked>
    </div>
 
<div class="child1"> 
    <label>

        total: ₦
    </label>
    <div>
    
<textarea  id="runningTotal" style="font-size: 40px;" name="total" placeholder="₦" class="total">


</textarea>
</div>
</div>
</div>

       <!---------List of checkboxes and options
        
        <output name="all" >

    <div id="runningTotal" style="font-size: 10px;" >
</div>
   
</output>
        ----------->
<br>

<div  class="child1">
    <label for="brow/lash ">brow / lash lenght:</label>
<input type="text" id="brow/lash" class="input-1" name="brow/lash" placeholder="" >
</div>



<br>

<div class="section-4">
    
<div class="child">
        <label for="payment"> payment type</label>
        <select id="payment"   class="input1" name="payment-type">
        <option value="cash"> cash</option>
        <option value="p.o.s"> pos </option>
        <option value="transfer"> transfer </option>
        </select>
        
    </div>


<br>


<div class="child1">

    <label for="balance-fee">balance payment</label>
    <input type="number" id="balance-fee" pattern="^\₦\d{1,3}(,\d{3})*(\.\d+)?₦"   value="" data-type="currency" placeholder="₦1,000,000.00" class="input1" name="Balance_Payment" >
    </div>


</div>







<div class="section-5"> 

    



<div class="dis">

<div class="child">
    
    
    <div class="selectedlist"> 
    <div id="m0" style="display: none;" class="list-2">none</div>
        <div id="m1" style="display: none;" class="list-2">facebook </div>
        <div id="m2" style="display: none;" class="list-2"> instagram</div>
        <div id="m3" style="display: none;" class="list-2"> Google Ads</div>
        <div id="m" style="display: none;" class="list-2">referer </div>
        <div id="m5" style="display: none;"class="list-2" > </div>
        
        
    </div>
    <div id="m4" style="display: none;" class="">


        <label for="name"> referers Name:</label>
        <br>
        <input type="text" id="name" class="input-1" name="referersname" placeholder="Name"  >
    
    </div>
    <label for="medium">how did you hear about us? </label>
    <div class="multi-selector">
        
        <div class="select-field3">
    <input type="text" name="" placeholder="Select Option" id="" class="input-selector">
         <span class="down-arrow3">&blacktriangledown;</span>
         </div>
  <!--List of checkboxes and options-->
         <div class="list3">
        

         <label for="medium0" class="task">
                <input type="checkbox" name="platform[]" id="medium0" value="none" onclick="drop0()" data-amount="">
                None
         </label>

           <label for="medium1" class="task">
                <input type="checkbox" name="platform[]" id="medium1" value="facebook" onclick="drop1()" data-amount="">
                facebook
         </label>
    
         <label for="medium2" class="task">
            <input type="checkbox" name="platform[]" id="medium2" value="instagram" onclick="drop2()" data-amount="">
            instagram
     </label>
     <label for="medium3" class="task">
        <input type="checkbox" name="platform[]" id="medium3" value="Google Ads" onclick="drop3()" data-amount="">
        Google Ads
 </label>
 <label for="medium4" class="task">
    <input type="checkbox" name="platform[]" id="medium4" value="Google Ads" onclick="drop4()" data-amount="">
    referer
</label>



</div>



</div>
    

   
    
    </div>

                        </div> 
                        
                        

                        <style>
                            .dis{
                                display:none;
                            }
                            </style>

    <div class="child1">
        <label for="payment1"> balance payment type:</label>
        <select id="payment1"   class="input1" name=" Balance_Payment_Type">
        <option value="cash"> cash</option>
        <option value="p.o.s"> p.o.s </option>
        <option value="transfer"> transfer </option>
        <option value="none"> none </option>
        </select>
        
        </div>






         


</div>
<br>




<div class="btn-div2">
    
<button  class="btn2"> Save</button>

</div>

    </form>

</div>



<form action="http://localhost/demo/Silvvy%20Signature%20Database%20V1.1/form.html?">  
    <div class="btn-div3">
    
    <button  class="btn3" > back</button>
    
    </div>

        </form>






<style>







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





    .input-11{
        
    box-shadow: inset rgba(254, 169, 190, 0.521) 0 0 0 2px;
    border: 0;
    background: rgb(255, 255, 255);
    appearance: none;
    width: 55%;
    position: relative;
    border-radius: 50px;
    padding: 9px 12px;
    line-height: 1.0;
    color: rgb(0, 0, 0);
    font-size: 16px;
    font-weight: 500;
    height: 10px;
    transition: all .2s ease;
    font-family: 'Times New Roman', Times, serif;
    text-transform: capitalize;
    background-color: #ffffff;
top:10px;
pointer-events: none;
overflow: hidden;
resize: none;
}

.input-11:hover{
    box-shadow: 0 0 0 0 #ffffff inset, rgb(254, 169, 190) 0 0 0 2px;
    
}
.input-11:focus{
    background: #ffffff;
    outline: 0;
    box-shadow: 0 0 0 0 #ffffff inset, rgb(254, 169, 190) 0 0 0 2px;
    
}
    
    </style>




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
    

  <script>


    function checkTotal() {
        document.listForm.total.value = '';
        var sum = 0;
        for (i=0;i<document.listForm.Lash_Guide.length;i++) {
          if (document.listForm.Lash_Guide[i].checked) {
            sum = sum + parseInt(document.listForm.Lash_Guide[i].value);
          }
        }
        document.listForm.total.value = sum;
      }


          
 /* for multiselect- option1 */

 
 document.querySelector('.select-field').addEventListener('click',()=>{
  document.querySelector('.list').classList.toggle('show');
  document.querySelector('.down-arrow').classList.toggle('rotate180');

});


document.querySelector('.select-field2').addEventListener('click',()=>{
  document.querySelector('.list2').classList.toggle('show2');
  document.querySelector('.down-arrow2').classList.toggle('rotate180');

});


document.querySelector('.select-field3').addEventListener('click',()=>{
  document.querySelector('.list3').classList.toggle('show3');
  document.querySelector('.down-arrow3').classList.toggle('rotate180');

});



 /* for multiselect- option2 */




 /* for selectedlist */


 function myFunction0() {
var checkbox = 
document.getElementById("list0" );
var text  = 
document.getElementById("0")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}


function myFunction1() {
var checkbox = 
document.getElementById("list1" );
var text  = 
document.getElementById("1")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}


function myFunction2() {
var checkbox = 
document.getElementById("list2" );
var text  = 
document.getElementById("2")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}

function myFunction3() {
var checkbox = 
document.getElementById("list3" );
var text  = 
document.getElementById("3")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}


function myFunction4() {
var checkbox = 
document.getElementById("list4" );
var text  = 
document.getElementById("4")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}



function myFunction5() {
var checkbox = 
document.getElementById("list5" );
var text  = 
document.getElementById("5")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}




function myFunction6() {
var checkbox = 
document.getElementById("list6" );
var text  = 
document.getElementById("6")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}







function myFunction7() {
var checkbox = 
document.getElementById("list7" );
var text  = 
document.getElementById("7")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}



function myFunction8() {
var checkbox = 
document.getElementById("list8" );
var text  = 
document.getElementById("8")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}




function myFunction9() {
var checkbox = 
document.getElementById("list9" );
var text  = 
document.getElementById("9")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}

function myFunction10() {
var checkbox = 
document.getElementById("list10" );
var text  = 
document.getElementById("10")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}


function myFunctions0() {
var checkbox = 
document.getElementById("list0.0" );
var text  = 
document.getElementById("0.0")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}


function myFunctions1() {
var checkbox = 
document.getElementById("list1.1" );
var text  = 
document.getElementById("1.1")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}



function myFunctions2() {
var checkbox = 
document.getElementById("list2.2" );
var text  = 
document.getElementById("2.2")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}



function myFunctions3() {
var checkbox = 
document.getElementById("list3.3" );
var text  = 
document.getElementById("3.3")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}




function myFunctions4() {
var checkbox = 
document.getElementById("list4.4" );
var text  = 
document.getElementById("4.4")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}


function myFunctions5() {
var checkbox = 
document.getElementById("list5.5" );
var text  = 
document.getElementById("5.5")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}

 /* for checkbox addition */





const checkboxes = document.querySelectorAll("input[type=checkbox]");      
sumCheckboxes.addEventListener('click', () => {
    var total = 0;
    for (const {checked, dataset} of checkboxes) {
        total += checked ? Number(dataset.amount) : 0;
    }
    runningTotal.textContent = total;
});




 /* for referer name */

 function drop0() {
var checkbox = 
document.getElementById("medium0");
var text  = 
document.getElementById("m0")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}



function drop1() {
var checkbox = 
document.getElementById("medium1");
var text  = 
document.getElementById("m1")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}

function drop2() {
var checkbox = 
document.getElementById("medium2");
var text  = 
document.getElementById("m2")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}
function drop3() {
var checkbox = 
document.getElementById("medium3");
var text  = 
document.getElementById("m3")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}

function drop4() {
var checkbox = 
document.getElementById("medium4");
var text  = 
document.getElementById("m4")

if (checkbox.checked == true){
    text.style.display ="block";
}
else {
    text.style.display ="none";
}

}



/* number formater */





// Get the element by ID





</script>










    <script src="script.js"> </script>














</body>
</html>









 
 
