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
       
       @-webkit-keyframes daft{
            0%{
                left:0;
            }
            13%{
                left:-100%;
            }
            26%{
                left:-200%;
            }
            39%{
                left:-300%;
            }
            52%{
                left:-400%;
            }
            65%{
                left:-300%;
            }
            78%{
                left:-200%;
            }
            91%{
                left:-100%;
            }          
            100%{
                left:0;
            }
            
        }   
        #slider{
            padding-top:10px;
            overflow: hidden;
            height:575px;
            width: auto;
            border: 25px solid #222;
            z-index: -1;
        }
        #slider div img{
            width: 20%;
            float: left;
        }
        #slider div{
            position: relative;
            width: 500%;
            margin: 0;
            left: 0;
            -webkit-animation:daft 50s infinite;
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
	#movie1{
		height:220px;
		width:220px;
		
		position:relative;
	}
	.circle1{
		height:220px;
		width:220px;
		background:url('poster/poster4.PNG');
		background-size:220px 220px;
		background-repeat:no-repeat;
		border-radius:50%;
		box-shadow:inset 0px 0px 0px 0px rgba(255,255,255,.5),
			inset 0px 0px 0px 16px rgba(255,255,255,.5);
	}
	.circle2{
		height:0px;
		width:0px;
		background-color:#aed85a;
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		border-radius:50%;
		transition:all .5s;
		text-transform:uppercase;
		text-align:center;
	}
	.circle2 h3{
		color:white;
		position:absolute;
		top:40%;
		left:10%;
		font-family:arial;
		transform:translate(-50%,-50%);
		opacity:0;
		transform:scale(0);		
	}
	#movie1:hover .circle2{
		height:190px;
		width:190px;
	}
	#movie1:hover .circle2 h3{
		transition:all 0.5s;
		transition-delay:.2s;
		top:38%;
		left:10%;
		transform:translate(-50%,-50%);
		opacity:1;
		transform:scale(1);
	}
	
	#movie2{
		height:220px;
		width:220px;
		position:relative;
		
	}

	.circle3{
		height:220px;
		width:220px;
		background:url('poster/poster6.png');
		background-size:220px 220px;
		background-repeat:no-repeat;
		border-radius:50%;
		box-shadow:inset 0px 0px 0px 0px rgba(255,255,255,.5),
			inset 0px 0px 0px 16px rgba(255,255,255,.5);
	}
        
	.circle4{
		height:0px;
		width:0px;
		background-color:#aed85a;
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		border-radius:50%;
		transition:all .5s;
	}
	.circle4 h3{
		color:white;
		position:absolute;
		top:40%;
		left:0%;
		font-family:arial;
		transform:translate(-50%,-50%);
		opacity:0;
		transform:scale(0);		
	}
	#movie2:hover .circle4{
		height:190px;
		width:190px;
	}
	#movie2:hover .circle4 h3{
		transition:all 0.5s;
		transition-delay:.2s;
		top:40%;
		left:30%;
		transform:translate(-50%,-50%);
		opacity:1;
		transform:scale(1);
	}
	#movie3{
		height:220px;
		width:220px;
		position:relative;
	}

	.circle5{
		height:220px;
		width:220px;
		background:url('poster/poster7.PNG');
		background-size:220px 220px;
		background-repeat:no-repeat;
		border-radius:50%;
		box-shadow:inset 0px 0px 0px 0px rgba(255,255,255,.5),
			inset 0px 0px 0px 16px rgba(255,255,255,.5);
	}
	.circle6{
		height:0px;
		width:0px;
		background-color:#aed85a;
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		border-radius:50%;
		transition:all .5s;
	}
	.circle6 h3{
		color:white;
		position:absolute;
		top:40%;
		left:0%;
		font-family:arial;
        text-align: center;
		transform:translate(-50%,-50%);
		opacity:0;
		transform:scale(0);		
        text-transform: uppercase;
	}
	#movie3:hover .circle6{
		height:190px;
		width:190px;
	}
	#movie3:hover .circle6 h3{
		transition:all 0.5s;
		transition-delay:.2s;
		top:40%;
		left:15%;
		transform:translate(-50%,-50%);
		opacity:1;
		transform:scale(1);
	}
        
    #movie4{
		height:220px;
		width:220px;
		
		position:relative;
	}
	.circle7{
		height:220px;
		width:220px;
		background:url('poster/npp.PNG');
		background-size:220px 220px;
		background-repeat:no-repeat;
		border-radius:50%;
		box-shadow:inset 0px 0px 0px 0px rgba(255,255,255,.5),
			inset 0px 0px 0px 16px rgba(255,255,255,.5);
	}
	.circle8{
		height:0px;
		width:0px;
		background-color:#aed85a;
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		border-radius:50%;
		transition:all .5s;
		text-transform:uppercase;
		text-align:center;
	}
	.circle8 h3{
		color:white;
		position:absolute;
		top:40%;
		left:10%;
		font-family:arial;
		transform:translate(-50%,-50%);
		opacity:0;
		transform:scale(0);		
	}
	#movie4:hover .circle8{
		height:190px;
		width:190px;
	}
	#movie4:hover .circle8 h3{
		transition:all 0.5s;
		transition-delay:.2s;
		top:38%;
		left:10%;
		transform:translate(-50%,-50%);
		opacity:1;
		transform:scale(1);
	}
	
	#movie5{
		height:220px;
		width:220px;
		position:relative;
	}

	.circle9{
		height:220px;
		width:220px;
		background:url('poster/PRIORITY.PNG');
		background-size:220px 220px;
		background-repeat:no-repeat;
		border-radius:50%;
		box-shadow:inset 0px 0px 0px 0px rgba(255,255,255,.5),
			inset 0px 0px 0px 16px rgba(255,255,255,.5);
	}
        
	.circle10{
		height:0px;
		width:0px;
		background-color:#aed85a;
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		border-radius:50%;
		transition:all .5s;
	}
	.circle10 h3{
		color:white;
		position:absolute;
		top:40%;
		left:0%;
		font-family:arial;
		transform:translate(-50%,-50%);
		opacity:0;
		transform:scale(0);		
	}
	#movie5:hover .circle10{
		height:190px;
		width:190px;
	}
	#movie5:hover .circle10 h3{
		transition:all 0.5s;
		transition-delay:.2s;
		top:40%;
		left:30%;
		transform:translate(-50%,-50%);
		opacity:1;
		transform:scale(1);
	}
	#movie6{
		height:220px;
		width:220px;
		position:relative;
	}

	.circle11{
		height:220px;
		width:220px;
		background:url('poster/srtf.PNG');
		background-size:220px 220px;
		background-repeat:no-repeat;
		border-radius:50%;
		box-shadow:inset 0px 0px 0px 0px rgba(255,255,255,.5),
			inset 0px 0px 0px 16px rgba(255,255,255,.5);
	}
	.circle12{
		height:0px;
		width:0px;
		background-color:#aed85a;
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		border-radius:50%;
		transition:all .5s;
	}
	.circle12 h3{
		color:white;
		position:absolute;
		top:40%;
		left:0%;
		font-family:arial;
        text-align: center;
		transform:translate(-50%,-50%);
		opacity:0;
		transform:scale(0);		
        text-transform: uppercase;
	}
	#movie6:hover .circle12{
		height:190px;
		width:190px;
	}
	#movie6:hover .circle12 h3{
		transition:all 0.5s;
		transition-delay:.2s;
		top:40%;
		left:15%;
		transform:translate(-50%,-50%);
		opacity:1;
		transform:scale(1);
	}
	     
    #movie7{
		height:220px;
		width:220px;
		
		position:relative;
	}
	.circle13{
		height:220px;
		width:220px;
		background:url('poster/lrtf.PNG');
		background-size:220px 220px;
		background-repeat:no-repeat;
		border-radius:50%;
		box-shadow:inset 0px 0px 0px 0px rgba(255,255,255,.5),
			inset 0px 0px 0px 16px rgba(255,255,255,.5);
	}
	.circle14{
		height:0px;
		width:0px;
		background-color:#aed85a;
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		border-radius:50%;
		transition:all .5s;
		text-transform:uppercase;
		text-align:center;
	}
	.circle14 h3{
		color:white;
		position:absolute;
		top:40%;
		left:10%;
		font-family:arial;
		transform:translate(-50%,-50%);
		opacity:0;
		transform:scale(0);		
	}
	#movie7:hover .circle14{
		height:190px;
		width:190px;
	}
	#movie7:hover .circle14 h3{
		transition:all 0.5s;
		transition-delay:.2s;
		top:38%;
		left:10%;
		transform:translate(-50%,-50%);
		opacity:1;
		transform:scale(1);
	}
	
	#movie8{
		height:220px;
		width:220px;
		position:relative;
		
	}

	.circle15{
		height:220px;
		width:220px;
		background:url('poster/ljf.PNG');
		background-size:220px 220px;
		background-repeat:no-repeat;
		border-radius:50%;
		box-shadow:inset 0px 0px 0px 0px rgba(255,255,255,.5),
			inset 0px 0px 0px 16px rgba(255,255,255,.5);
	}
        
	.circle16{
		height:0px;
		width:0px;
		background-color:#aed85a;
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		border-radius:50%;
		transition:all .5s;
	}
	.circle16 h3{
		color:white;
		position:absolute;
		top:40%;
		left:0%;
		font-family:arial;
		transform:translate(-50%,-50%);
		opacity:0;
		transform:scale(0);		
	}
	#movie8:hover .circle16{
		height:190px;
		width:190px;
	}
	#movie8:hover .circle16 h3{
		transition:all 0.5s;
		transition-delay:.2s;
		top:40%;
		left:30%;
		transform:translate(-50%,-50%);
		opacity:1;
		transform:scale(1);
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
		
		.heart{
			font-size:30px;
			color:red;
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
        
        <div id="slider">
            <div>
                <img src="poster/poster1.jfif" height="100%" width="100%"/>
                <img src="poster/poster3.jpeg" height="100%" width="100%"/>
                <img src="poster/poster4.png" height="100%" width="100%"/>
                <img src="poster/poster5.jpg" height="100%" width="100%"/>
                <img src="poster/poster6.png" height="100%" width="100%"/>
            </div>
        </div>
        
	<div id="topm">
		<table border="0" cellspacing="50px" align="center">
			<tr>
				<td colspan="3" align="center" id="topmovietitle">
					Scheduling Algorithms
					 <hr size="2" width="135" color="#94c82f" align="center"/>
				</td>
			</tr>
			<tr>
                <?php
                    $query2="select * from select_algorithm where id=1";
                
                    $res2=mysqli_query($con,$query2);
                
                    while($data2=mysqli_fetch_array($res2))
                    {
                ?>
				<td>
					<div id="movie1">
						<div class="circle1">

						</div>
						<div class="circle2">
                            <a href="FCFS.PHP"><h3><?php echo $data2['name'];?></h3></a>
						</div>
					</div>
				</td>
                <?php
                    }
                ?>
                <?php
                    $query2="select * from select_algorithm where id=2";
                
                    $res2=mysqli_query($con,$query2);
                
                    while($data2=mysqli_fetch_array($res2))
                    {
                ?>
				<td>
					<div id="movie2">
						<div class="circle3">

						</div>
						<div class="circle4">
							<a href="SJF.php">       <h3><?php echo $data2['name'];?></h3></a>
						</div>
					</div>
				</td>
                <?php
                    }
                ?>
                <?php
                    $query2="select * from select_algorithm where id=3";
                
                    $res2=mysqli_query($con,$query2);
                
                    while($data2=mysqli_fetch_array($res2))
                    {
                ?>
				<td>
					<div id="movie3">
						<div class="circle5">

						</div>
						<div class="circle6">
							<a href="RR.php"><h3><?php echo $data2['name'];?></h3></a>
						</div>
					</div>
				</td>
                <?php
                    }
                ?>
			</tr>
            <tr>
                <?php
                    $query2="select * from select_algorithm where id=4";
                
                    $res2=mysqli_query($con,$query2);
                
                    while($data2=mysqli_fetch_array($res2))
                    {
                ?>
				<td>
					<div id="movie4">
						<div class="circle7">

						</div>
						<div class="circle8">
                            <a href="npp.php"><h3><?php echo $data2['name'];?></h3></a>
						</div>
					</div>
				</td>
                <?php
                    }
                ?>
                <?php
                    $query2="select * from select_algorithm where id=5";
                
                    $res2=mysqli_query($con,$query2);
                
                    while($data2=mysqli_fetch_array($res2))
                    {
                ?>
				<td>
					<div id="movie5">
						<div class="circle9">

						</div>
						<div class="circle10">
							<a href="priority.php">       <h3><?php echo $data2['name'];?></h3></a>
						</div>
					</div>
				</td>
                <?php
                    }
                ?>
                <?php
                    $query2="select * from select_algorithm where id=6";
                
                    $res2=mysqli_query($con,$query2);
                
                    while($data2=mysqli_fetch_array($res2))
                    {
                ?>
				<td>
					<div id="movie6">
						<div class="circle11">

						</div>
						<div class="circle12">
							<a href="srtf.php"><h3><?php echo $data2['name'];?></h3></a>
						</div>
					</div>
				</td>
                <?php
                    }
                ?>
			</tr>
            <tr>
                <?php
                    $query2="select * from select_algorithm where id=7";
                
                    $res2=mysqli_query($con,$query2);
                
                    while($data2=mysqli_fetch_array($res2))
                    {
                ?>
				<td>
					<div id="movie7">
						<div class="circle13">

						</div>
						<div class="circle14">
                            <a href="lrtf.php"><h3><?php echo $data2['name'];?></h3></a>
						</div>
					</div>
				</td>
                <?php
                    }
                ?>
                <?php
                    $query2="select * from select_algorithm where id=8";
                
                    $res2=mysqli_query($con,$query2);
                
                    while($data2=mysqli_fetch_array($res2))
                    {
                ?>
				<td>
					<div id="movie8">
						<div class="circle15">

						</div>
						<div class="circle16">
							<a href="LJF.php">       <h3><?php echo $data2['name'];?></h3></a>
						</div>
					</div>
				</td>
                <?php
                    }
                ?>
			</tr>
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