
<?php require "qheader.php" ?>	

<div class="PageTitle">Procedure: Execute Project</div>
<div class="DocVersion">
   <?php PrintVersion('$Revision: 1.10 $ $Date: 2010-03-19 14:02:34 $') ?>
</div>         
<h2>Purpose</h2>
<p>The purpose of this procedure is to develop the solution by executing the project. 
</p>			
<h1>Entry Criteria </h1>
<p>
The Project Plan has been approved.
</p>
<h1>Inputs</h1>
<ul>		     
 <li>The Project Plan</li>			 
</ul>			  
<h1>Process Flow</h1>
<div class="FlowDiag">
<a href="images/proc-exec.png"  target="_blank" title="Generic Execution">
  <img alt="Procedure Execute Generic" src="images/proc-exec.png" border="0" width="100%">
</a>
</div>		  
<h1>Details</h1>
<table  align="center" width="95%" border="1" cellpadding="4" cellspacing="0">
<tr>
 <th width="5%">Step</th> <th width="10%">Role</th> <th>Action</th>
</tr>
<tr class="OddRow">
  <td>1</td> <td>PL,PC</td>
  <td>Execute the following steps, 1.1 thru 1.4.  
	  Based on the project, you may execute them in a sequence or in parallel.
	  You may need to execute some of them multiple times during the project life cycle, 
	  whereas some of them can be optional.  			  
  </td>
</tr>           
<tr class="EvenRow">
  <td>1.1</td> <td>PL,PC</td>
  <td><b>Acquire and manage resources.</b></a> 
	  The loading and releasing of resources is outlined
	  in the Project Plan. Acquire and release the resources as per the plan. 
  </td>
</tr>

<tr class="OddRow">
  <td>1.2</td> <td>PL,PC</td>
  <td><a href="proc-pln.php"><b>Conduct procurements.</b></a> 
  Evaluate the bids, and select the vendors, according to the Procurement Plan
  which is part of the Project Plan. 			  
  </td>
</tr>
<tr class="EvenRow">
  <td>1.3</td> <td>QM,PL,PC</td>
  <td><b>Perform Quality Audits.</b></a> 
	  Conduct quality audits periodically, and check if the processes are being adhered too.
	  This step enforces compliance with the prescribed processes (Quality Assurance). Inspection
	  and testing of the deliverables (Quality Control) is done as part of the next step.				  
  </td>
</tr>
<tr class="OddRow">
  <td>1.4</td> <td>Project Team</td>
  <td><a href="proc-exec-gen.php"><b>Develop (software) product.</b></a> 
  Construct the (software) product. Analyze, design, build, release, deploy, and test the product.
  Verify the project deliverables with the Customer. Perform configuration management. 			  
  </td>
</tr>
</table>			
<h1>Outputs</h1>	  
<ul>
 <li>The Product Package</li>
</ul>
<h1>Exit Criteria</h1>
<p>		  
The Project Deliverables has been approved by the Customer.
</p>
<h1>Metrics</h1>
<h1>Tailoring</h1>
<?php require "qfooter.php" ?>