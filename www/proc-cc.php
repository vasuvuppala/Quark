
<?php require "qheader.php" ?>	

  <p class="PageTitle">Procedure: Perform Change Control</p>
  <div class="DocVersion">
   <?php PrintVersion('$Revision: 1.5 $ $Date: 2010-03-19 14:02:34 $') ?>
  </div>  
  <h2>Purpose</h2>
  <p>The purpose of this procedure is to review all change requests, analyze their
	 impact, and approve/disapprove them. 
  </p>			
  <h1>Entry Criteria </h1>
  <p>
  One or more Change Requests (CR) have been received.
  </p>
  <h1>Inputs</h1>
  <ul>
	 <li>Change Request</li>
  </ul>			  
  <h1>Process Flow</h1>
  <div class="FlowDiag">
	<a href="images/proc-cc.png"  target="_blank" title="Change Control">
	   <img title="Procedure Perform Change Control" src="images/proc-cc.png" border="0" width="100%">
	</a>
  </div>			
  <h1>Details</h1>
  <table  align="center" width="95%" border="1" cellpadding="4" cellspacing="0">
	<tr>
	 <th width="5%">Step</th> <th width="10%">Role</th> <th>Action</th>
	</tr>
	<tr class="OddRow">
	  <td>1</td> <td>PC</td>
	  <td>Analyze the impact of the change to the project, in terms of cost and schedule.
	  </td>
	</tr>
	<tr class="EvenRow">
	  <td>2</td> <td>PC</td>
	  <td>Submit the CR with the Impact Analysis to the Change Control Board (CCB) for approval.</p>				  
	  </td>
	</tr> 			
	<tr class="OddRow">
	  <td>3</td> <td>CCB</td>
	  <td>Based on cost and benefits, either approve or disapprove the change.             			  
	  </td>
	</tr>
	<tr class="EvenRow">
	  <td>4</td> <td>PC</td>
	  <td>If approved, re-evaluate scope, schedule, budget, and strategy; update the 
		  Project Plan. 			                    				  
	  </td>
	</tr>
	<tr class="OddRow">
	  <td>5</td> <td>PC</td>
	  <td>Inform the requester (of the CR) of the decision.				  
	  </td>
	</tr>			
  </table>			
  <h1>Outputs</h1>	  
  <ul>
	 <li>Impact Analysis</li>
	 <li>CCB decision</li>
	 <li>Updated project documents (Project Plan etc)</li>			 
  </ul>
  <h1>Exit Criteria</h1>
  <p>		  
	The CR has been approved or disapproved.
  </p>
<h1>Metrics</h1>
<h1>Tailoring</h1>
<?php require "qfooter.php" ?>
	
