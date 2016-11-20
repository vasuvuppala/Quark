<!-- Quark Header -->
<!-- Look at the footer too. -->
<!-- The structure of a page in Quark is:   -->
<!--       header                           -->
<!--        HTML fragment                   -->
<!--       footer                           -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Quark</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quark.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="MasterLayout">
  <tr>
    <td>	
		<?php require "lib/quarklib.php"; // Load Quark Library fucntions. They can be used anywhere in the page ?>

		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="HeaderArea">
		<tr>
		  <td width="25%"><a href="quark.php"><div class="Logo">Quark &beta;</div></a></td>         
		  <td width="60%">&nbsp;</td>        
		  <td width="7%"><a href="signin.php">Sign-in</a></td>
		  <td width="5%"><a href="search.php">Search</a></td>
		  <td width="3%"><a href="help.php"><img src="images/icon-help.png" title="Help"></a></td>
		</tr>
		</table>
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="Tmenu">
		<tr>
		  <td width="3%" class="TmenuCell"><a href="quark.php"><img src="images/icon-home.png" title="Home"></a></td>
		  <td width="3%" class="TmenuCell"><a href="roles.php">Roles</a></td>
		  <td width="3%" class="TmenuCell"><a href="terms.php">Terminology</a></td>
		  <td width="3%" class="TmenuCell"><a href="tutorials.php">Tutorials</a></td>
		  <td width="3%" class="TmenuCell"><a href="tools.php">Tools</a></td>
		  <td width="3%" class="TmenuCell"><a href="quips.php">Quips</a></td>
		  
		  <td width="0%" class="TmenuCell">&nbsp;</td>
		  <td width="3%" class="TmenuCell"><a href="ref.php" title="References">References</a></td>
		  <td width="3%" class="TmenuCell"><a href="ap.php" title="Application Portfolio">Apps</a></td>

		  <td width="0%" class="TmenuCell">&nbsp;</td>
		  <td width="3%" class="TmenuCell"><a href="https://intra.nscl.msu.edu/departments/electronics/home.html" title="Electronics Department">EE</a></td>
		  <td width="3%" class="TmenuCell"><a href="http://intra.nscl.msu.edu" title="NSCL Intra">NSCL</a></td>
		  <td width="0%">&nbsp;</td>
		  <td width="3%" class="TmenuCell"><a href="status.php" title="Project Status">Status</a></td>
		  <td width="42%">&nbsp;</td>
		</tr>
		</table>
    </td>
  </tr>
  <tr>
    <td class="ContentArea">
    <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td class="CmenuArea">
		    <a href="quark.php"><img src="images/quark.png"  border="0" width="100%" ></a>    
			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="Cmenu">
			  <tr><td><a href="policies.php">Policies</a></td></tr>
			  <tr><td><a href="procedures.php">Procedures</a></td></tr>
			  <tr><td><a href="guidelines.php">Guidelines</a></td></tr>
			  <tr><td><a href="checklists.php">Checklists</a></td></tr>
			  <tr><td><a href="standards.php">Standards</a></td></tr>
			  <tr><td><a href="templates.php">Templates</a></td></tr>
			</table>
			<p>
			   <a href="relnotes.php"><div class="Version"><?php require "version.php" ?></div></a>
			</p>
			<img  src="<?php print GetArt(); ?>" width="100%" border="0">
		</td>
        <td class="CtextArea"> 
		 <!-- The Content Text here -->
		 <!-- The footer will complete the CtextArea and the document. -->   
