
<?php require "qheader.php" ?>	

<div class="PageTitle">Procedure: Monitor and Control</div>
<div class="DocVersion">
   <?php PrintVersion('$Revision: 1.14 $ $Date: 2010-03-19 14:02:34 $') ?>
</div>         
<h2>Purpose</h2>
<p>The purpose of this procedure is to monitor the progress of the project, report it to the
 stakeholders, and take corrective actions if required. 
</p>			
<h1>Entry Criteria </h1>
<p>
The project has been initiated. The starting point is flexible; the procedure can start anytime 
after the project
has started but it has to start by the time <a href="proc-exe-gen.php">Execute 
Project procedure</a> commences.
</p>
<h1>Input</h1>
<ul>
 <li>The Project Plan</li>
</ul>			  
<h1>Process Flow</h1>	
<div class="FlowDiag">	
 <a href="images/proc-mnc.png"  target="_blank" title="Monitor and Control">		  
   <img alt="Procedure Monitor" src="images/proc-mnc.png" border="0" width="100%">
 </a>
</div> 
<h1>Details</h1>
<p>Note: The Monitor and Control procedure is executed periodically throughout the 
	  life of the project. The period of review depends on the project, and is
	  determined by the project team. The period may change during the execution of the project.
	  In most cases, a weekly review is recommended.</p>
<table  align="center" width="95%" border="1" cellpadding="4" cellspacing="0">
<tr>
 <th width="5%">Step</th> <th width="10%">Role</th> <th>Action</th>
</tr>           
<tr class="EvenRow">			  
  <td>1</td> <td>PC</td>
  <td>
	   Periodically execute the following steps.	  
  </td>
</tr>
<tr class="OddRow">
  <td>2</td> <td>PC</td>
  <td>
	   Review project's progress. 
  </td>
</tr>			
<tr class="OddRow">
  <td>2</td> <td>PC</td>
  <td>
	   If the project is complete then stop. If the project is terminated, without completion, initiate the
       <a href="proc-cls.php">Close Project</a> procedure.	   
  </td>
</tr>
<tr class="EvenRow">
  <td>3.1</td> <td>PC</td> 
  <td>
	Collect performance data, and measure the project's performance. Use the <a href="gl-evm.php">Earned
    Value Management</a> (EVM) methodology for performance measurement.	
  </td>
 </tr>
<tr class="OddRow">
  <td>3.2</td> <td>PC</td> 
  <td> If any part of the work was performed by a supplier, review the status of the work. The 
  periodicity of the supplier review  may be different from that 
  of the current (Monitor and Control) procedure.
  </td>
 </tr>			 
<tr class="EvenRow">
  <td>3.3</td> <td>PC</td> 
  <td>  Reevaluate the risks identified (in Project Plan). check the risk factors have changed.
  </td>
</tr>
<tr class="OddRow">
  <td>3.4</td> <td>QM</td> 
  <td> Perform quality control. Measure and analyze the deliverables against the quality metrics. 
    Check if the results are within the control limits. 
  </td>
</tr>			
<tr class="EvenRow">
  <td>4.1</td> <td>PC</td> 
  <td>  Develop the Performance Report based on the output from previous steps. 
		Distribute PR to the stakeholders, and discuss it with the Customer.
  </td>			  
</tr>
<tr class="OddRow">
  <td>4.2</td> <td>PL,PC</td> 
  <td>  Depending on the results from previous steps, take corrective actions.
  </td>
</tr>
<tr class="OddRow">
  <td>4.3</td> <td>PL,PC</td> 
  <td>  Document the lessons learned. The lessons will eventually become part of the Project Clsoure
        Report.
  </td>
</tr>
<tr class="OddRow">
  <td>4.2</td> <td>PL,PC</td> 
  <td>  Refine the Product Development Life Cycle (PDLC) parameters.
  </td>
</tr>
<tr class="EvenRow">
  <td>4.3</td> <td>PL,PC</td> 
  <td> Does the project require a change, in its scope, schedule, budget, or any other aspect? 
	   If so, create a Change
	   Request, and follow the <a href="proc-cc.php">Change Control procedure</a>.
  </td>
</tr>
</table>                                                                                                      
<h1>Output</h1>	  
<ul>
 <li>Project Performance Report</li>
 <li>Change Requests</li>
</ul>
<h1>Exit Criteria</h1>
<p>		  
Project has been closed; either it is complete or terminated. 
The end point is flexible; the procedure may stop before the project 
has closed but it cannot end
before the <a href="proc-exec-gen.php">Execute Project procedure</a> has finished. 			
</p>
<h1>Metrics</h1>
<h1>Tailoring</h1>
<h1>References</h1>


<?php require "qfooter.php" ?>