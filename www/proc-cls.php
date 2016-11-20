
<?php require "qheader.php" ?>	

<p class="PageTitle">Procedure: Close Project</p> 
<div class="DocVersion">
   <?php PrintVersion('$Revision: 1.14 $ $Date: 2010-03-19 14:02:34 $') ?>
</div>
<div class="DocVersion">
   <?php PrintVersion('$Revision: 1.14 $ $Date: 2010-03-19 14:02:34 $') ?>
</div>        
<h2>Purpose</h2>
<p>To formally complete the project by finalizing all its activities and reviewing that the
 objectives are met.   		  
</p>			
<h1>Entry Criteria </h1>
<p>
The project deliverables have been approved, or the project has been terminated.
</p>
<h1>Inputs</h1>
<ul>
 <li>The Project Plan</li>
 <li>The accepted Project Deliverables</li>
</ul>			  
<h1>Process Flow</h1>
<div class="FlowDiag">
<a href="images/proc-cls.png"  target="_blank" title="Close Project">
 <img alt="Close" src="images/proc-cls.png" border="0" width="100%">
</a>	
</div>
<h1>Details</h1>  
<table  align="center" width="95%" border="1" cellpadding="3" cellspacing="0">
	<tr>
	 <th width="5%">Step</th> <th width="10%">Role</th> <th>Action</th>
	</tr>
	<tr class="EvenRow">
	  <td>1</td> <td>PL,PC</td>
	  <td>Close all open procurements, if any. Make sure the products or services meet their
	  objectives, and all contractual agreements have been met.
	  </td>
	</tr>
	<tr class="OddRow">
	  <td>2</td> <td>PL,PC</td>
	  <td>Was the project terminated, without completion? If so, analyze the cause for the
	  termination, and document it in the PCR (Project Closure Report).
	  </td>
	</tr>
	<tr class="EvenRow">
	  <td>3</td> <td>PL,PC</td>
	  <td>Perform the following activities, and document their results into PCR:
			<ul>
			  <li>Document the lessons and knowledge gained from the project, so that future
				  projects may benefit from it. This could be technical
				  or non-technical in nature.</li>
			  <li>Collect feedback from customer. Check the feedback template.</li>
			  <li>Summarize project's performance. This should include estimates and
				  variances for cost, effort, and schedule.</li>
			</ul>							  
	  </td>
	</tr>
	<tr class="OddRow">
	  <td>4</td> <td>PC</td>
	  <td>Inform stakeholders about project closure. Send PCR to the relevant stakeholders 
	  </td>
	</tr>  
	<tr class="EvenRow">
	  <td>5</td> <td>PC</td>
	  <td>Collect all artifacts that were generated or used by the project throughout its life cycle,
		  and archive them in the Document Management System (for EE Department only).  If required, 
		  make a hard-copy of the archive (or Bundle). This step may not be needed for projects that
		  were terminated before completion.					  
	  </td>
	</tr>
	<tr class="OddRow">
	  <td>6</td> <td>PC</td>
	  <td>Release all the resources working for the project. 
	  </td>
	</tr>
	<tr class="EvenRow">
	  <td>7</td> <td>PC</td>
	  <td>Request the Sponsor for closure of the project. 
	  </td>
	</tr>			
	<tr class="OddRow">
	  <td>8</td> <td>Sponsor</td>
	  <td>After reviewing PCR and Document Management System, approve the closure, and 
		  close the Work Order.
	  </td>
	</tr>		  
  </table>
<h1>Outputs</h1>	  
<ul>
 <li>Project Closure Report</li>
</ul>
<h1>Exit Criteria</h1>
<p>		  
The Work Order is closed.
</p>
<h1>Metrics</h1>
<h1>Tailoring</h1>
<h1>References</h1>
<ul>
 <li><img src="images/icon-gl.png" title="Guideline">
	 <a href="gl-proj-archival.php">Project Archival</a></li>
 <li><img src="images/icon-tl.png" title="Template">
	 <a href="templates/Customer-Feedback.docx">Customer Feedback Template</a></li>		  				 
</ul>
</td>
</tr>
</table> 

<?php require "qfooter.php" ?>
