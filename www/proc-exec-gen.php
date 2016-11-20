
<?php require "qheader.php" ?>	

<div class="PageTitle">Procedure: Develop Software Product</div>
<div class="DocVersion">
   <?php PrintVersion('$Revision: 1.13 $ $Date: 2010-03-19 14:02:34 $') ?>
</div>         
<h2>Purpose</h2>
<p>The purpose of this procedure is to construct the software solution. It is based on both
  predictive and adaptive Software Development Life Cycle (SDLC) models. It uses a dynamic
  SDLC model, where the process can be adaptive at the beginning and morph into a predictive 
  one by the later stages of the development.			  
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
<p>Note: It is an iterative process. The word <em>"Refine"</em> is meant to be interpreted as 
	   <em>"Define"</em> during the first iteration.</p>
<div class="FlowDiag">
<a href="images/proc-exec-gen.png"  target="_blank" title="Generic Execution">
  <img alt="Procedure Execute Generic" src="images/proc-exec-gen.png" border="0" width="100%">
</a>
</div>
<h1>Detailed Process Flow</h1>
<div class="FlowDiag">
<a href="images/proc-exec-gen-det.png"  target="_blank" title="Execute">
  <img title="Execute Process" src="images/proc-exec-gen-det.png" border="0" width="100%">
</a>
</div>		  
<h1>Details</h1>
<table  align="center" width="95%" border="1" cellpadding="4" cellspacing="0">
<tr>
 <th width="5%">Step</th> <th width="10%">Role</th> <th>Action</th>
</tr>
<tr class="OddRow">
  <td>1</td> <td>PL,PC</td>
  <td>Starting with the project scope (from the Project Plan), develop and refine the project
	   requirements in detail. This results in the Software Requirement Specifications (SRS).   			  
  </td>
</tr>
<tr class="EvenRow">
  <td>2</td> <td>PL,DES</td>
  <td>Using the project strategy described in the Project plan and SRS, 
   develop and refine the high-level design for the software. The output from this activity
   is the Architecture Design (AD).			      
  </td>
</tr> 			
<tr class="OddRow">
  <td>3</td> <td>PL,PC,DES,DEV</td>
  <td>Review the architecture design with peers from this and other projects. 
	  This step need not be done in every iteration.  
  </td>
</tr>
<tr class="EvenRow">
  <td>4</td> <td>PL,DES,PC</td>
  <td>Plan for the next iteration. The output of this activity is the Release Plan (RP) which
	  includes the following:
	 <ul>
		<li>Release ID</li>
		<li>The software requirements that will be fulfilled in this iteration</li>
		<li>The release schedule</li>
		<li>The team</li>
		<li>The team meeting schedule</li>
		<li>Will User Acceptance Test (UAT) be performed?</li>
	 </ul>					
  </td>
</tr> 			

<tr class="OddRow">
  <td>5</td> <td>PL</td>
  <td>Execute the following steps (Steps 5.x), in parallel: 			  
  </td>
</tr>
<tr class="OddRow">
  <td>5.1</td> <td>DES,DEV</td>
  <td>Develop or refine the detailed design, resulting in the Low Level Design (optional).				  
  </td>
</tr>
<tr class="OddRow">
  <td>5.2</td> <td>DES,RE</td>
  <td>Refine the integration steps. Output of this activity is the Integration Plan (optional).                  			  
  </td>
</tr>
<tr class="OddRow">
  <td>5.3</td> <td>DOC</td>
  <td>Develop or refine the documentation. The Installation and User Manuals are mandatory.	
	  Any other documentation is optional, and is based on the project scope.			  
  </td>
</tr>
<tr class="OddRow">
  <td>5.4</td> <td>DES,QM,TE,RE</td>
  <td>
   Develop or refine the system-level testing strategy. The output of this activity is 
   the system-level Test Plan (optional).
  </td>
</tr>
<tr class="EvenRow">
  <td>6</td> <td>DEV</td>
  <td>Based on LLD, code, refactor, and test programs.			  
  </td>
</tr>
<tr class="OddRow">
  <td>7</td> <td>PL,PC,QM,DEV,DES</td>
  <td>Review the programs with peers. Check for standards, quality, and design compliance.			  
  </td>
</tr>
<tr class="EvenRow">
  <td>8</td> <td>RE</td>
  <td>Wait for the Integration Plan and Documentation. 
	  Integrate, build, and release the package. This is further detailed in the
	  <a href="proc-release.php">Release Product</a> process. The output from this activity are
	  the deliverables for the current iteration.				  
  </td>
</tr>
<tr class="OddRow">
  <td>9</td> <td>TE</td>
  <td>Wait for the system-level Test Plan, if needed. 
	  Use the Installation Manual to deploy the software solution in the test environment. 
  </td>
</tr>
<tr class="EvenRow">
  <td>10</td> <td>TE</td>
  <td>Test the software according to the system-level Test Plan, SRS, and User Manual. 
  </td>
</tr>
<tr class="OddRow">
  <td>11</td> <td>PL,PC</td>
  <td>Review the results from the system test. The output from this activity is the Defect List (DL). 
  </td>
</tr>
<tr class="EvenRow">
  <td>12</td> <td>PL,PC,Customer</td>
  <td>
  Is the project done? This could be based on any of the following conditions:
	<ul>
	   <li>All the requirements have been met and verified with the Customer</li>
	   <li>The project's goal was to meet as many requirements as possible in a given period,
			and the time has run out</li>
	   <li>The project was to deliver as many requirements as possible for the given budget, and
			the finances have run out</li>
		<li>The project is terminated</li>	
	</ul>							
  </td>
</tr>
<tr class="OddRow">
  <td>13</td> <td>PL</td>
  <td>Does this release require UAT? If so, then send the PD to the Customer. UAT can proceed in parallel
	  with the rest of the process.			  
  </td>
</tr>
<tr class="OddRow">
  <td>13.1</td> <td>AE</td>
  <td>Deploy the software solution in Customer's environment, either test or production. 			  
  </td>
</tr>
<tr class="OddRow">
  <td>13.2</td> <td>AE</td>
  <td>Test the software for correctness and completeness. Defects are gathered and reported to the
	  PL/PC; they will get fixed in the next iteration.			  
  </td>
</tr>
<tr class="EvenRow">
  <td>14</td> <td>PC</td>
  <td>Are there any changes in the scope? 
	  <ul>
		 <li>If none, then plan for the next iteration (Step 4)</li>
		 <li>If the changes are minor, then refine the requirements (Step 1)</li>
		 <li>If the changes are major, Generate a Change Request (CR), and perform 
			 Change Control process</li> 
	   </ul>
	  
	  <p>The differentiation between
	  major and minor changes must be agreed upon by PL, PC, and the Customer. What constitutes
	  a major or a minor change is described in the Project Plan (Change Control).	</p>			  
  </td>
</tr>				
</table>					  
<h1>Outputs</h1>	  
<ul>
 <li>The Project Deliverables that include the executables, installation manual, user manual,
	  configuration files etc. The deliverables are specified in the Project Plan.</li>
</ul>
<h1>Exit Criteria</h1>
<p>		  
The Project Deliverables have been approved by the Customer.
</p>
<h1>Metrics</h1>
<h1>Tailoring</h1>
<?php require "qfooter.php" ?>