
<?php require "qheader.php" ?>	

<div class="PageTitle">Procedure: Initiate Project</div>
<div class="DocVersion">
   <?php PrintVersion('$Revision: 1.20 $ $Date: 2010-03-23 17:36:49 $') ?>
</div> 
        
<h2>Purpose</h2>
<p>To define the preliminary scope, strategy, WBS, schedule, and budget for the project, and
 if required, to develop preliminary management plans for human resources, quality, risks, 
 procurements, and communications. The goal is to come up with the estimates so that
 decisions can be made about the feasibility of the project. 			 
</p>		

<h1>Entry Criteria </h1>
<p> A Request for Work (RFW) has been received. </p>

<h1>Input</h1>
<ul>
 <li>The RFW. The RFW may not be very formal but must be
   a written artifact preferably in electronic format. 
   It could be a document, a form, or an email; a verbal request does not qualify
   as a RFW. Sometimes a Work Order is the initiation point for a project; in such cases the Work Order
   itself is the RFW.</li>
</ul>			  
<h1>Process Flow</h1>
<div class="FlowDiag"> 
  <a href="images/proc-ini.png" target="_blank">
  <img title="Initiate Project" src="images/proc-ini.png" border="0" width="100%">
  </a>
</div>

<h1><a href="proc-ini-detail.php">Details</a></h1>

<table  align="center" width="95%" border="1" cellpadding="3" cellspacing="0">
<tr>
 <th width="5%">Step</th> <th width="10%">Role</th> <th>Action</th>
</tr>
<tr class="EvenRow">
  <td>1</td> <td>Customer</td>
  <td>Generate a Work Order, unless the RFW itself was a Work Order. The effort for estimation activities
      must be posted against this Work Order.</td>
</tr>
<tr class="OddRow">
  <td>2</td> <td>DH</td>
  <td>Identify the team that will perform the roles of PL, PC in estimating the cost and 
	  schedule for the project.
	  This team may be different from the team that will actually execute the project.
	  </td>
</tr>
<tr class="EvenRow">
  <td>3</td> <td>PC</td>
  <td>Generate a Project ID (PJID). The PJID will be used to refer to the project throughout its
	  life cycle. Follow <a href="std-name.php">the Naming Standard 
	  </a> for the new PJID. 
  </td>
</tr>
<tr class="OddRow">
  <td>4</td> <td>PC</td>
   <td>Create the initial infrastructure required for the project. This includes
   the file-system area, version control system module, project management system entry etc.
   Create only those portions that are needed for estimation, the rest can be created in subsequent
   procedures.
   
   </td>
</tr>
<tr class="EvenRow">
  <td>5</td> <td>PL,PC</td>
  <td>Perform the steps 5.1 through 5.6 iteratively. For the first iteration, steps 5.1 
	  through 5.5 are 
	  performed in a sequence, and after that they are performed in parallel. 
	  While executing these activities, fill-in the relevant portions of
	  the <a href="gl-pp.php">Preliminary Project Plan (PPP)</a> document. There are two goals to this exercise: 
	  to come up with the estimates, and to develop the PPP.
	  The activities at this stage are preliminary in nature;  detailed planning is 
	  performed in the <a href="proc-pln.php">Plan Project</a> procedure.
  </td>
</tr>
<tr class="OddRow">
  <td>5.1</td> <td>PL,PC</td>
  <td>Define Scope 
  </td>
</tr>
<tr class="EvenRow">
  <td>5.2</td> <td>PL,PC</td>
  <td>Develop Preliminary WBS 
  </td>
</tr>
<tr class="OddRow">
  <td>5.3</td> <td>PL,PC</td>
  <td>Develop Preliminary Project Strategy 
  </td>
</tr>  
<tr class="EvenRow">
  <td>5.4</td> <td>PL,PC</td>
  <td>Develop Preliminary Schedule 
  </td>
</tr>
<tr class="OddRow">
  <td>5.5</td> <td>PL,PC</td>
  <td>Determine Preliminary Budget 
  </td>
</tr>
<tr class="EvenRow">
  <td>5.6</td> <td>PL,PC</td>
  <td>Develop Preliminary human resource, quality, risk, communication, and
			  procurement plans. Plan for risks and include contingencies in the plan. 
			  Refer to <a href="gl-contingency.php">Risk-based Contingency Methodology</a> document.
  </td>
</tr>			
		  
<tr class="OddRow">
  <td>6</td> <td>PL,PC</td> 
  <td>Inform the Sponsor that PPP is complete (recall that Sponsor is generally the Department Head).
  </td>
</tr>
<tr class="EvenRow">
  <td>7</td> <td>Sponsor</td> 
  <td>Based on PPP, lab's goals, available resources, and various other factors, 
	  approve, reject, or defer the project. </td>
</tr>
<tr class="OddRow">
  <td>8.1</td> <td>Customer, Sponsor, PL, PC</td> 
  <td></a>If the project is approved, generate the Work Order for the project.
      This process is described in the <a href="gl-approval.php">'Preliminary Project 
	  Plan Approval'</a> document.
  </td>
</tr>
<tr class="EvenRow">
  <td>8.2</td> <td>PL,PC</td> 
  <td>If the project is rejected, follow the relevant activities from the Close Project
	  procedure. </td>
</tr>		
<tr class="OddRow">
  <td>8.3</td> <td>PL,PC</td> 
  <td>If the project is deferred, add the project to the Deferred Project List, and then
	  follow the relevant activities from the Close Project
	  procedure. </td>
</tr>
<tr class="EvenRow">
  <td>9</td> <td>Sponsor</td> 
  <td>Identify the team that will perform the roles of PL and PC in 
	  executing the project. If it is different from the current team, release the current team. </td>
</tr>

<tr class="OddRow">
  <td>10</td> <td>PL,PC</td> 
  <td></a>(optional) Develop Project Charter and get it approved by the Sponsor.</td>
</tr>
</table>   		     			    			      
<h1>Outputs</h1>
<ul>
 <li>The Work Order for estimation (WOE)</li>
 <li>The Work Order for the project (WOP)</li>
 <li><a href="gl-pp.php">The Preliminary Project Plan (PPP)</a></li>
 <li> (optional) The Project Charter (PC)</li>
</ul>
<h1>Exit Criteria</h1>
<p>		  
Work Order for the project has been generated, or the project has been terminated.
</p>
<h1>Metrics</h1>
<ol>
   <li>Estimated and actual costs incurred for initiation phase, in USD</li>
   <li>Duration taken for PPP approval, in calendar days</li>
   <li>Duration taken to process Work Orders, in calendar days</li>
</ol>
<h1>Tailoring</h1>
<table  align="center" width="95%" border="1" cellpadding="4" cellspacing="0">
  <tr>
     <th>#</th> <th><a href="gl-pcl.php">Class</a></th> <th>Exemptions</th><th>Deviations</th><th>Comments</th>
  </tr>
  <tr>
     <td>1</td><td>C1</td>
	 <td>Metrics, Project Charter</td>
	 <td>PPP need not be detailed</td>
	 <td>Just the schedule (in MS Project) is sufficient. WBS, Risks, Quality may be omitted.</td>
  </tr> 
</table>
<h1>References</h1>
<ul>
<li><img src="images/icon-gl.png" title="Guideline">
     <a href="gl-contingency.php">Risk-based Contingency Methodology</a></li>
 <li><img src="images/icon-gl.png" title="Guideline">
     <a href="gl-approval.php">(Preliminary) Project Plan Approval</a></li>
 <li><img src="images/icon-gl.png" title="Guideline">
	 <a href="gl-ssc.php">Scope, Schedule, and Cost</a></li>
 <li><img src="images/icon-gl.png" title="Guideline">
	 How to Generate Work Orders</li>
 <li><img src="images/icon-tl.png" title="Template">
	 <a href="tpl/prelim-project-plan.docx">Preliminary Project Plan Template</a></li>
</ul>

<?php require "qfooter.php" ?>