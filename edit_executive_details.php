<?php 
session_start();
$Id = $_REQUEST['Id'];
if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
include_once('includes/header.php');
include_once('includes/config.php');
$sql = "SELECT * FROM profile_details WHERE employee_phone = '".$_SESSION['login_user']."'";
$result = mysqli_query($conn,$sql);
while($final_data= mysqli_fetch_array($result)){
    $employee_type = $final_data['employee_type'];
    $employee_id = $final_data['Id'];
}
?> 
<script>
  
  function searchResult(str) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("pay_type").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","pay_type.php?q="+str,true);
  xmlhttp.send();
}

  function searchResult1(str) {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("employee_name1").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","exec_type.php?q="+str,true);
  xmlhttp.send();
}
</script>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="#"> <h2>Easy Calls</h2> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p4.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li class="odd"><a href="#">
												<div class="user_img"><img src="images/p2.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											</a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p3.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new notification</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="images/p5.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/p6.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images/p7.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all notifications</a>
												</div> 
											</li>
										</ul>
									</li>	
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 8 pending task</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>	
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div> 
											</li>
										</ul>
									</li>	
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
												<div class="user-name">
													
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

<div class="row mb40">
					<div class="col-md-6">
						
							<div class="signup-block">

				<?php
                        $sqlnumb = "SELECT * FROM executive_details WHERE Id='".$Id."'";
            	        $aqs = mysqli_query($conn,$sqlnumb);
            	        while($row= mysqli_fetch_array($aqs)){
            	            
                ?>
				
				
				<form method="post" action="includes/submit.php">
				    <?php
				    if($employee_type==1){
				    ?>
				    <select name="team_leader"  required="" onchange="searchResult1(this.value)">
					    <option value="">--Team Leader--</option>
					    <?php
                            $sqlnumb1 = "SELECT * FROM profile_details WHERE employee_type IN(3)";
                	        $aqs1 = mysqli_query($conn,$sqlnumb1);
                	        while($row1= mysqli_fetch_array($aqs1)){
                        ?>
                        <option <?php if($row['team_leader_id']==$row1['Id']){ ?> selected="selected" <?php }?> value='<?php echo $row1['Id']; ?>' > <?php echo $row1['employee_name']; ?> </option>
                        <?php
                	        }
                	    ?>
					</select>
					<?php
            	        }
            	        if($employee_type==3){
            	            $sqlnumb1 = "SELECT * FROM profile_details WHERE Id='".$employee_id."'";
                	        $aqs1 = mysqli_query($conn,$sqlnumb1);
                	        while($row1= mysqli_fetch_array($aqs1)){
            	    ?>
            	    <input type="text" name="team_leader1" value="<?php echo $row1['employee_name']; ?>">
            	    <input type="hidden" name="team_leader" value="<?php echo $employee_id; ?>">
            	    <?php } 
            	       } 
            	       if($employee_type==1){
            	        ?>
				    <span id="employee_name1">
				    <select name="employee_name"  required="">
					    <option value="">--Employee--</option>
					    <?php
                            $sqlnumb2 = "SELECT * FROM profile_details WHERE employee_type IN(2,3)";
                	        $aqs2 = mysqli_query($conn,$sqlnumb2);
                	        while($row2= mysqli_fetch_array($aqs2)){
                        ?>
                        <option <?php if($row['employee_id']==$row2['Id']){ ?> selected="selected" <?php }?> value='<?php echo $row2['Id']; ?>' > <?php echo $row2['employee_name']; ?> </option>
                        <?php
                	        }
                	    ?>
					</select>
					</span>
					<?php
            	        }
            	        if($employee_type==3){
            	            ?>
            	            <span id="employee_name1">
            	            <select name="employee_name"  required="">
					    <option value="">--Employee--</option>
					    <?php
                            $sqlnumb2 = "SELECT * FROM profile_details WHERE employee_type='2' and teaml_id='".$employee_id."'";
                	        $aqs2 = mysqli_query($conn,$sqlnumb2);
                	        while($row2= mysqli_fetch_array($aqs2)){
                        ?>
                        <option <?php if($row['employee_id']==$row2['Id']){ ?> selected="selected" <?php }?> value='<?php echo $row2['Id']; ?>' > <?php echo $row2['employee_name']; ?> </option>
                        <?php
                	        }
                	    ?>
					</select>
					</span>
            	            <?php
            	        }
            	        ?>
					<select name="dispocode"  required="">
					    <option value="">--Dispo Code--</option>
					    <?php
                            $sqlnumb1 = "SELECT * FROM dispo_code";
                	        $aqs1 = mysqli_query($conn,$sqlnumb1);
                	        while($row1= mysqli_fetch_array($aqs1)){
                        ?>
                        <option <?php if($row['dispo_code']==$row1['dis_code']){ ?> selected="selected" <?php }?> value='<?php echo $row1['dis_code']; ?>' > <?php echo $row1['dis_code']; ?> </option>
                        <?php
                	        }
                	    ?>
					</select>
					<textarea rows="4" cols="50" name="executive_summary" placeholder="Executive Summary"><?php echo $row['executive_summary']; ?></textarea>
					<textarea rows="4" cols="50" name="executive_other" placeholder="Other Details"><?php echo $row['executive_other']; ?></textarea>
					<input type="text" name="address" placeholder="Address" value="<?php echo $row['executive_address']; ?>" required="">
					<select name="paymenttype"  required="" onchange="searchResult(this.value)">
					    <option value="">--Payment Type--</option>
					    <?php
					    if($row['executive_transtype']=='Cash'){
					    ?>
					    <option value="Cash" selected>Cash</option>
					    <option value="Cheque">Cheque</option>
					    <option value="Online Transaction">Online Transaction</option>
					    <?php
					    }
					    if($row['executive_transtype']=='Cheque'){
					     ?>
					    <option value="Cash">Cash</option>
					    <option value="Cheque" selected>Cheque</option>
					    <option value="Online Transaction">Online Transaction</option>
					    <?php
					    }
					    if($row['executive_transtype']=='Online Transaction'){
					        ?>
					    <option value="Cash">Cash</option>
					    <option value="Cheque">Cheque</option>
					    <option value="Online Transaction" selected>Online Transaction</option>
					    <?php } ?>
					</select>
					<span id="pay_type">
					    <?php
                            $sqlnumb5 = "SELECT * FROM cash_details where exect_det_id='".$row['Id']."'";
                	        $aqs5 = mysqli_query($conn,$sqlnumb5);
                	        while($row5= mysqli_fetch_array($aqs5)){
                	        if($row['executive_transtype']=='Cheque'){
                	            ?>
                	            <input type="text" name="summary" value="<?php echo $row5['summary']; ?>" required="">
                	            <input type="text" name="bank" value="<?php echo $row5['bank']; ?>" required="">
                	            <input type="text" name="amount" value="<?php echo $row5['amount']; ?>" required="">
                	            <input type="text" name="cheque_num" value="<?php echo $row5['cheque_number']; ?>" required="">
                	            <input type="text" name="date" value="<?php echo $row5['date']; ?>" required="">
                	            <?php
                	        }
                	        else{
                        ?>
                        <input type="text" name="summary" value="<?php echo $row5['summary']; ?>" required="">
                	            <input type="text" name="amount" value="<?php echo $row5['amount']; ?>" required="">
                	            <input type="text" name="trans_id" value="<?php echo $row5['trans_id']; ?>" required="">
                        <?php } 
                        }?>
					</span>
					<input type="hidden" name="exec_id" placeholder="Address" value="<?php echo $Id; ?>" required="">
					<input type="submit" name="EditExecutiveDetails" value="Update">														
				</form>
				<?php 
            	   }
            	?>
				
</div>
						
					</div>
					
</div>








</div>
<!--inner block end here-->
<?php include_once('includes/footer.php');?>