<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="php.css"/>
    <title>clients Search </title>
    <link rel="shortcut icon" type="img/png" href="images/ico.ico ">
</head>
<body>

    


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="card-header1"> </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

             
     
                          <form>
                              
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Insert Clients Number, Name">
                                        <button type="submit" class="btn5">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table-bordered">
                            <thead>
                                <tr class="heads">
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>number</th>
                                    <th>Email</th>
                                    <th> Location</th>
                                    <th> lash type</th>
                                    <th> brow type</th>
                                    <th> brow/lash lenght</th>
                                    <th> Add</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","silvvy_signature_database");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM combine WHERE CONCAT(date,name,number,email,location,lenght) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <form action="display.php" method="GET">
                                                
                                                <tr class="listcon">
                                                  <td> <textarea  name="date" class="listcon1" <?= $items['date']; ?>> <?= $items['date']; ?> </textarea></td> 
                                                  <td> <textarea  name="name" class="listcon2" <?= $items['name']; ?>> <?= $items['name']; ?> </textarea></td>
                                                  <td> <textarea  name="number" class="listcon3" <?= $items['number']; ?>> <?= $items['number']; ?> </textarea></td>
                                                  <td> <textarea  name="email" class="listcon4" <?= $items['email']; ?>> <?= $items['email']; ?> </textarea></td>
                                                  <td> <textarea  name="location" class="listcon3" <?= $items['location']; ?>> <?= $items['location']; ?> </textarea></td>
                                                  <td> <textarea  name="lashguide" class="listcon5" <?= $items['lash']; ?>> <?= $items['lash']; ?> </textarea></td>
                                                  <td> <textarea  name="browguide" class="listcon5" <?= $items['brow']; ?>> <?= $items['brow']; ?> </textarea></td>
                                                  <td> <textarea  name="lenght" class="listcon3" <?= $items['lenght']; ?>> <?= $items['lenght']; ?> </textarea></td>

                                                   
                                                    <td > <button type="submit"  class="btn9"> add </buton></td>
                                                
  


                                                </tr>
                                            </form>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4" class="no_r">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style>
.button-30 {
  align-items: center;
  appearance: none;
  background-color: #FCFCFD;
  border-radius: 4px;
  border-width: 0;
  box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
  box-sizing: border-box;
  color: rgb(254, 169, 190);
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
  text-transform: capitalize;
  
}

.link{
    text decoration:none ;
}

.button-30:focus {
  box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
}

.button-30:hover {
  box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
  transform: translateY(-2px);
}

.button-30:active {
  box-shadow: #D6D6E7 0 3px 7px inset;
  transform: translateY(2px);
}
.icon{width:20px;

margin-left: 5px;}
</style>
   
</body>
</html>