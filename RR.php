<?php
    $count=1;
    $qt=1;
    $count2=0;
    $count3=0;
    $flag=0;
    $ATT=0;
    $AWT=0;
    $hold=0;
    $hold2=0;
    $timer=0;
    $ctr=0;
 
 
        if(isset($_POST["submit"]))
        {
            $count=$_POST['count'];
            $qt=$_POST['qt'];
        }
        if(isset($_POST["solve"]))
        {
            $qt=$_POST['qt'];
            $count=$_POST['count'];  
            for($x=1;$x<=$count;$x++)
            {
             $Process[$x][0]=$x;
             $Process[$x][1]=$_POST['bt'.$x];
             $Process[$x][2]=$_POST['at'.$x];
             
             $Process[$x][4]=0;
             $holder[$x][2]=0;
           
           
             $Process[$x][1]=$Process[$x][1];
             $ctr=
             $btc[$x]=$Process[$x][1];
             $sort[$x]=$Process[$x][1];
             $flag=1;
            }
        }
?>
<?php

    session_start();

    
	$con=mysqli_connect('localhost','root','','os project');

	$query="select * from select_algorithm where id>=1 and id<=4";
	
	$res=mysqli_query($con,$query);	

?>
<html>
    <head>
    <style>
        body{
            margin: 0;
		background-color:#222;
        }
        #main{
            height: 60px;
            width: 100%;
            background-color: #222222;
            position: fixed;
            z-index: 9999;
        }
        #menu{
           padding-top: 5px; 
            float: left;
        }
        ul{
            list-style: none;
        }
        li{
            display: inline;
            margin-left: 50px;
            color:white;
            font-family: arial;
            font-size:15px;
        }
        li:first-child{
            color:#94c82f;
            text-shadow:0px 0px 10px #94c82f;
        }
        #search{
            float: right;
            padding-top: 15px;
            margin-right: 50px;
        }
        #search input{
            height: 30px;
            width: 180px;
            text-align: center;
            background-color: transparent;
            padding: 5px;
            color: #94c82f;
            border: 1px solid #94c82f;
            outline: none;
            box-shadow: 0px 0px 10px #94c82f;
            font-family: arial;
            border-radius: 5px;
            margin-right: 20px;
        }
        #logo{
            height: 80px;
            width: 100px;
            float: left;
            margin-left:17%;
            margin-top: 10px;
            transform: rotate(-10deg);
        }
	#flogo{
            height: 80px;
            width: 100px;
            transform: rotate(-10deg);
        }
        a{
            color:white;
            text-shadow:0px 0px 10px #94c82f;
            text-decoration: none;
        }
        #a1{
            color:#94c82f;
            text-shadow:0px 0px 10px #94c82f;
            text-decoration: none;
        }
        #a4{
            color: chocolate;
            text-shadow:0px 0px 10px #94c82f;
            text-decoration: none;
        }
        #a5{
            animation: 10%;
            width: 100%;
            line-height: 100%;
            color:floralwhite;
        }
    

        .fmposter{
            height: 200px;
            width: 300px;
            
        }
        .moviename{
            height: 25px;
            width: 300px;
            font-family: arial;
            font-size: 15px;
            color: white;
            padding-left: 10px;
            padding-top: 5px;
        }
        .rdate{
            height: 25px;
            width: 300px;
            font-family: arial;
            font-size: 15px;
            color: white;
            padding-left: 10px;
        }

	//Circle Hover Effect
		
	#topm table{
		background-color:black;
	}
	#topmovietitle{
		font-family:arial;
		color:white;
		font-size:15px;
	}
	
	//NOW SHOW

		#lpanel{
			height:100vh;
			width:300px;
			float:left;
		}
		#box{
			height:275px;
			width:300px;
			background-color:white;
		}
		#main table{
			float:right;
		}
		#topmovies{
			color:white;
			text-align:center;
			padding:20px;
		}
		
		
		.per{
			color:white;
		}
		.mname{
			color:#94c82f;
		}
		#line{
			width:250px;
			border:1px dashed white;
		}
		#lpaneltd{
			font-family:arial;
		}
		.poster{
			height:125px;
			width:300px;
		}
		.lan{
			font-size:10px;
			color:gray;
			text-transform:uppercase;
		}
		.action{
			font-size:10px;
			border:1px solid gray;
			width:60px;
			text-align:center;
			border-radius:10px;
			color:gray;
			display:inline-block;
			text-transform:uppercase;
		}
		.drama{
			font-size:10px;
			border:1px solid gray;
			width:60px;
			text-align:center;
			border-radius:10px;
			color:gray;
			margin-left:10px;
			display:inline-block;
			text-transform:uppercase;
		}
		.buttons{
			height:50px;
			width:300px;
			background-color:#94c82f;
			color:white;
			font-size:14px;
			text-align:center;
			line-height:50px;
		}
		.postername{
			height:100px;
			width:300px;
			text-transform:uppercase;
		}
		
		#fmenu{
			text-align:center;
		}
		#follow{
			font-family:arial;
			font-size:18px;
			color:white;
		}
		#fottor{
			
			height:100px;
			width:100%;
			padding-top:30px;
			box-shadow:0px -2px 2px #94c82f;
            
		}
        #h3{
            color: white;
        }
        
    </style>
    </head>
    <body>
        <div id="main">
            <div id="menu">
                <ul>
                    <li><a href="Home.php" id="a1">HOME</a></li>
                    <li><a href="Videos.php" id="a3">VIDEOS</a></li>
                </ul>
            </div>
            <div id="logo">
                <img src="logo.png" height="100%" width="100%"/>
            </div>
            <div id="search">
                <table border="0">
                    <tr>  
                        <td>
                            <?php
                                if(isset($_SESSION['uname']))
                                {
                                    ?>
                                        <a href="User%20Logout.php" id="una"><?php echo $_SESSION['uname'];?></a>
                                    <?php
                                }
                                else
                                {
                                  ?>
                                <a href="User Login.html" id=""><img src="Login.png" height="30px" width="30px"/></a>
                                <?php
                                }
                            ?>
                            
                            
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
		<table border="0" id="postertable" align="center" cellspacing="50">
		
		<br>
            <br>
			
        </table>
	</div>
	
	
        
	<div id="topm">
		<table border="0" cellspacing="50px" align="center">
            <form method="post">
			<tr>
				<td colspan="3" align="center" id="topmovietitle">
					<h3>Round Robin</h3>
					 <hr size="3" width="135" color="#94c82f" align="center"/>
				</td>
			</tr>
                <tr>
                    <th id="a1"><h3>Number of Process:</h3></th>
                    <th>
                        <h3><input type="text" name="count" id="count" placeholder="count" value="<?php echo $count; ?>"></h3></th>
                    
                </tr>
                <tr>
                        <th id="a1"><h3>Quantum Time:</h3></th>
                        <th><h3>
                        <input type="text" name="qt" id="qt" placeholder="qt" value="<?php echo $qt; ?>"></h3>
                        </th>
                </tr>
                <tr>
                    <th></th>
                        <th><h3>
                        <input type="submit" id="submit" placeholder="submit" name="submit" value="Submit"><br></h3></th>
                </tr>

<br>
<br>
                <tr>
                    <th></th>
                    <td>
<?php
if($flag==1)
    {
    $sort[$count+1]=$sort[$count] ;
    for($x=1;$x<=$count;$x++)
     {
         for($y=1;$y<=$count;$y++)
         {
            if($sort[$y+1]<$sort[$y] && $y<$count)
            {                                        
             $temp2=$sort[$y];
             $sort[$y]=$sort[$y+1];
             $sort[$y+1]=$temp2;
            }
            $temp1=0;
            $temp2=0;
         }
     }
     $sort[$count]=ceil($sort[$count]/$qt);
     for($z=1;$z<=$sort[$count];$z++)
     {
            for($x=1;$x<=$count;$x++)
            {
                $qtc=$qt;
                if($btc[$x]<=0)
                {
                 
                }
                else
                {
                    if($qt>$btc[$x])
                     {
                       $qtc=$btc[$x];
                     }
                               
                    $holder[$x][1]=$timer;
                    $recat[$x][$z]=$timer;
                    $recat[$x][$z+1]=0;
                    $timer=$timer+$qtc;  
                    $btc[$x]=$btc[$x]-$qtc;
                    $Process[$x][4]=$Process[$x][4]+($holder[$x][1]-$holder[$x][2]);
                    $holder[$x][2]=$timer;
                    $recft[$x][$z]=$timer;
                    $recft[$x][$z+1]=0;
                }                                
            }
     }  
     for($x=1;$x<=$count;$x++)
      {
         $Process[$x][3]=$count2;
         $Process[$x][4]=$Process[$x][3]-$Process[$x][2];
         $Process[$x][5]=$Process[$x][4]-$Process[$x][1];
         $ATT=$ATT+$Process[$x][4];
         $AWT=$AWT+$Process[$x][5];
      }    
    $ATT=$ATT/$count;
    $AWT=$AWT/$count;
    for($x=1;$x<=$count;$x++)
    {
        $z=1;
?>

<h3 id="h3">Process:<?php echo $Process[$x][0]; ?> :
<?php
        for($y=0;$y<=$timer;$y++)
        {
            if($recat[$x][$z]<$y AND $recft[$x][$z]>=$y){  
?>
<font style="background-color:#62<?php echo $x;?>4<?php echo $x;?>5" color="#62<?php echo $x;?>4<?php echo $x;?>5" > <?php echo $x;?> </font>
<?php
            } elseif($recft[$x][$z]<$y AND $recft[$x][$z]!=0) {
                $z++;
             
?>
<font style="background-color:#222222" color="#222222"><?php echo $x;?></font>
<?php
            } else {
?>
<font style="background-color:#222222" color="#222222"><?php echo $x;?></font>
<?php
           
            }
        }  
        echo "<br>";
    }
?></h3>
                        
<br>
<br>
                                    
 <h3 id="h3">Average Turnaround Time:<?php echo $ATT; ?> </h3><br>
 <h3 id="h3">Average Waiting Time: <?php echo $AWT; ?></h3> <br>
                    </td>  
                </tr>
 
        <tr>
            <th id="a1"><h3>ProcessID</h3></th>
            <th id="a1"><h3>Burst Time</h3></th>
            <th id="a1"><h3>Arrival Time</h3></th>
            <th id="a1"><h3>Turnaround Time</h3></th>
            <th id="a1"><h3>Waiting Time</h3></th>
        </tr>
        <?php
        for($x=1;$x<=$count;$x++)
        {
        ?>
        <tr>
        <th id="a4"><h3><?php echo $Process[$x][0]; ?></h3></th>
            <th id="a4"><h3><?php echo $Process[$x][1]; ?></h3></th>
            <th id="a4"><h3><?php echo $Process[$x][2]; ?></h3></th>
            <th id="a4"><h3><?php echo $Process[$x][4]; ?></h3></th>
            <th id="a4"><h3><?php echo $Process[$x][5]; ?></h3></th>
        </tr>
 <?php }} else { ?>
 
        <tr>
            <th id="a1"><h3>ProcessID</h3></th>
            <th id="a1"><h3>Arrival Time</h3></th>
            <th id="a1"><h3>Burst Time</h3></th>
        </tr>
        <?php
        for($x=1;$x<=$count;$x++)
        {
        ?>
        <tr>
            <th id="a4"><h3><?php echo $x ?></h3></th>
        <th><input type="text" id="at<?php echo $x; ?>" name="at<?php echo $x; ?>" placeholder="at<?php echo $x; ?>"></th>
        <th><input type="text" id="bt<?php echo $x; ?>" name="bt<?php echo $x; ?>" placeholder="bt<?php echo $x; ?>"></th>
        </tr>
 <?php }} ?>
 <tr>
     <th> </th>
     <th>
 <h3><input type="submit" name="solve" id="solve" placeholder="solve" value="Solve"></h3>
                </th>
                </tr>
</form>
        </table>
        </div>
        
        			
	<div id="fottor">
		<table border="0" width="100%">
			<tr align="center">
				<td>
					<div id="flogo">
             				   <img src="logo.png" height="100%" width="100%"/>
         				</div>
				</td>
				<td>
					<ul id="fmenu">
						<li>HOME</li><br>
						<li>VIDEOS</li>	<br>
						<li>2020</li><br>
				
					</ul>
				</td>
				<td>
					<table border="0">
						<tr align="center">
							<td colspan="3" id="follow">
								FOLLOW US
							</td>
						</tr>
						<tr>
							<td>	
								<img src="user icon.png" height="50px" width="50px"/>
							</td>
							<td>	
								<img src="user icon.png" height="50px" width="50px"/>
							</td>
							<td>	
								<img src="user icon.png" height="50px" width="50px"/>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	
    </body>
</html>