
<?php require "qheader.php" ?>	

<div class="PageTitle"><img src="images/icon-proc.png" title="Procedure"> Procedures</div>

<h1>Introduction</h1>
<p>The procedures are divided into two categories: Project Management, and Engineering.
   The Project Management procedures are generic, and can be used for any project. 
   The Engineering procedures are specific to a development area: hardware or software. 
   Currently, only the software engineering procedures are defined. 
   The description of each procedure is composed of several sections:
</p>
<ul>
    <li>Purpose: describes what the procedure accomplishes</li>
	<li>Entry Criteria: conditions that trigger the procedure </li>
	<li>Inputs: inputs to the procedure</li>
	<li>procedure Flow: flow-diagram of the procedure</li>
	<li>Details: a step-by-step description of the procedure</li>
	<li>Outputs: outputs from the procedure</li>
	<li>Exit Criteria: conditions that end the procedure</li>
	<li>Metrics: data to be collected during the execution of the procedure</li>
	<li>Tailoring: adjustments to the procedure based on <a href="gl-pcl.php">project classes</a></li>
	<li>References: artifacts related to the procedure</li>
</ul>
  
The tailoring guidelines are specified through a table having the following fields: 
<ul>
  <li>Class: the <a href="gl-pcl.php">project classes</a> to which the tailoring 
      guidelines apply</li>
  <li>Exemptions: activities or work products that the specified project classes
      need not perform or produce</li>
  <li>Modifications: allowed deviations to the activities or work products, by the specified 
      project classes.</li>	  
</ul>  
<h1>Procedure List</h1>   
<table align="center" width="90%" border="0" cellpadding="2" cellspacing="2">
<tr>
 <th width="12%" align="left">ID</th>
 <th align="left">Procedure</th>
 <th align="left">Category</th>
</tr>

<tr>
 <td>PRC-MP</td>
 <td><a href="proc-mp.php"> Manage Project</a></td><td>Project Management</td>
</tr>
<tr>
 <td>PRC-INI</td>
 <td><a href="proc-ini.php">Initiate Project</a></td><td>Project Management</td>
</tr>
  
<tr>
 <td>PRC-PLN</td>
 <td><a href="proc-pln.php">Plan for Project</a></td><td>Project Management</td>
</tr>
<tr>
 <td>PRC-EXE</td>
 <td><a href="proc-exec.php">Execute Project</a></td><td>Project Management</td>
</tr>	  

<tr>
 <td>PRC-CLS</td>
 <td><a href="proc-cls.php">Close Project</a></td><td>Project Management</td>
</tr>
<tr>
 <td>PRC-MNC</td>
 <td><a href="proc-mnc.php">Monitor and Control Project</a></td><td>Project Management</td>
</tr>

<tr>
 <td>PRC-PCC</td>
 <td><a href="proc-cc.php">Perform Change Control</a></td><td>Project Management</td>
</tr>	
<tr>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
</tr>	
<tr>
 <td>PRC-SDP</td>
 <td><a href="proc-exec-gen.php">Develop Software Product</a></td><td>Software Engineering</td>
</tr>
<tr>
 <td>PRC-REL</td>
 <td><a href="proc-release.php">Release Software Product</a></td><td>Software Engineering</td>
</tr>	  
<tr>
 <td>PRC-MNT</td>
 <td><a href="proc-sm.php">Software Maintenance</a></td><td>Software Engineering</td>
</tr>
</table>

<?php require "qfooter.php" ?>