<?php
    session_start();

	$con=mysqli_connect('localhost','root','','os project');
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
        a{
            color:white;
            text-shadow:0px 0px 10px #94c82f;
            text-decoration: none;
        }
        #a3{
            color:#94c82f;
            text-shadow:0px 0px 10px #94c82f;
            text-decoration: none;
        }
	.poster{
		height:250px;
		width:250px;
		//padding:50px;
		margin-top:50px;
	}
	#postertable{
		padding-top:100px;
	}
	#videotitle{
		font-family:arial;
		color:#94c82f;
		font-size:18px;
		text-align:center;
	}
	.playbtn{
		height:250px;
		width:250px;
		background-color:rgba(34,34,34,.4);
		position:relative;
		margin-top:-250px;
		left:0%; 
		opacity:0;	
		transition:all .6s;
	}
	.playbtn img{
		position:relative;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
	}
	.poster:hover .playbtn{
		opacity:1;
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
    #flogo{
            height: 80px;
            width: 100px;
            transform: rotate(-10deg);
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
                                        <a href="" id="una"><?php echo $_SESSION['uname'];?></a>
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
	<div id="video">
		<table border="0" id="postertable" align="center" cellspacing="50">
		<tr>
			<td align="center" id="videotitle" colspan="4">Scheduling Algorithms</td>
		</tr>
		<tr>
		<?php
			$query="select * from video where id>=1 AND id<=6";
			$res=mysqli_query($con,$query);
			while($data=mysqli_fetch_array($res))
			{
		?>
			<td class="poster">
				<a href="video.php?vid=<?php echo $data['id'];?>">
				<img src="poster\<?php echo $data['poster'];?>" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
				</a>
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