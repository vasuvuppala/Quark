
<?php require "qheader.php" ?>	

<div class="PageTitle">Procedure: Manage Project</div>
<div class="DocVersion">
   <?php PrintVersion('$Revision: 1.2 $ $Date: 2010-03-23 15:03:38 $') ?>
</div>         
<h2>Purpose</h2>
<p>To manage projects such that they meet the quality, cost, and time objectives,  
 and increase the likelihood of success of future projects.</p>		

<h1>Entry Criteria</h1>
<p>
  A Request of Work (RFW) has been received, by the responsible person(s) at the EE Department.   			   
</p>
<h1>Input</h1>
<ul>
 <li>The RFW. The RFW may not be very formal but must be
   a written artifact preferably in electronic format. 
   It could be a document, a Work Order, a form, or an email; a verbal request does not qualify
   as a RFW. </li>
</ul>
<h1>Projects, Phases, and Programs</h1>  
<p>Certain projects are so large that they require a project life cycle
for each major activity of development. For example, developing the
Requirement Specifications (or Architectural Design) could be a project in itself. Such
large endeavors are broken down into phases, and each phase is managed as a project. A collection of
such related projects is referred to as a <em>Program</em>. </p>

<p>The procedure described here is applicable only to those projects
   that do not have sub-projects (phases).</p>


<h1>Process Flow</h1>
<div class="FlowDiag">
<a href="images/proc-proj-sd.png"  target="_blank" title="Product Development">
  <img  src="images/proc-proj-sd.png" border="0" width="100%">
</a>
</div>

<h1>Process Architecture</h1>
<p>The above diagram shows the macro-level or high-level processes, their interactions, and the related artifacts. 
 Each macro-level process recursively consists of lower-level or micro-level processes. 
 In practice, these processes rarely follow a sequence; there is generally some overlap
 or iteration among them. The iterations and overlaps enable adaptability but must be controlled 
 to avoid schedule slippages
 and budget overruns. In Quark, these conflicting objectives are balanced by varying the degrees of control. 
 The degree of control depends on the process level; the higher the level, the more rigid the control.
 
 <p>Buffers, checkpoints, and change-control are used to provide the required flexibility 
 and control.			 
 The buffers, at the process boundaries, allow for overlap between adjacent processes; the 
 checkpoints draw the lines in the sand; and the change control cycle (depicted by
 red-colored arrows in the above diagram) controls the iterations. 
 </p>
 <p>Controls at the lower-level processes are progressively less rigid, and hence provide the 
	required agility, and promote creativity.</p>

<h1>Details</h1>
<p>Note: The <em>Role</em> column below lists the roles responsible for a majority of activities for 
  each step.</p>
<table  align="center" width="95%" border="1" cellpadding="4" cellspacing="0">
<tr>
 <th width="5%">Step</th> <th width="10%">Role</th> <th>Action</th>
</tr>

<tr class="EvenRow">
  <td><a href="proc-ini.php">1</a></td> <td>DH,PL,PC</td>
  <td><a href="proc-ini.php"><b>Initiate Project.</b></a> 
	  Define the preliminary scope, strategy, WBS, schedule, and budget for the project.
	  If required, develop preliminary management plans for human resources, quality, risks, 
	  procurements, and communications. The goal is to come up with the estimates so that
	  decisions can be made about the feasibility of the project. The resulting documents from this 
	  step are the <a href="gl-pp.php">Preliminary Project Plan</a> and the Project Charter (optional).
  </td>
</tr>

<tr class="OddRow">
  <td><a href="proc-pln.php">2</a></td> <td>PL,PC</td>
  <td><a href="proc-pln.php"><b>Plan for Project.</b></a> 
  Refine the scope, strategy, WBS, schedule, budget, and management plans developed
  in the previous step.	These refinements result in the <a href="gl-pp.php">Project Plan</a>. The requirements are optionally
  tracked using the Requirements Traceability Matrix (RTM). RTM may not be used for smaller projects.
  RTM tracks the owner, design, test, and implementation of a requirement.			  
  </td>
</tr>
<tr class="EvenRow">
  <td><a href="proc-exec-gen.php">3</a></td> <td>Project Team</td> 
  <td><a href="proc-exec-gen.php"><b>Execute Project.</b></a> 
  (For software projects) Elicit detailed requirements; architect design, code, integrate,
  test, and release the software solution. For each release, create the configuration that includes:
	<ul>
	  <li>requirement specifications</li>
	  <li>design documentation</li>
	  <li>test plans</li> 
	  <li>information on development environment (compilers, platform, IDE, build scripts etc)</li>
	  <li>information on operating environment (platform, configuration files etc) </li>
	  <li>the released package (executables, installation manual, user manual etc)</li>
	</ul>
  Any major changes to scope result in Change Requests, and have to be processed through the 
  Change Control Procedure.</td>
 </tr>
<tr class="OddRow">
  <td><a href="proc-cls.php">4</a></td> <td>PL,PC</td> 
  <td><a href="proc-cls.php"><b>Close Project.</b></a> Formally complete the project by finalizing 
  all its activities. Review that the project objectives are met. Develop the Project Closure Report
  by documenting lessons learned, customer feedback, and project performance. </td>
 </tr>			 
<tr class="EvenRow">
  <td><a href="proc-mnc.php">5</a></td> <td>PL,PC</td> 
  <td><a href="proc-mnc.php"><b>Monitor and Control Project.</b></a>  Periodically check the progress of
	  the project, ascertain its performance, evaluate risks, inform stakeholders, and take
	  corrective actions. This step  starts anytime after the start of the 
	  project and goes on till almost the end.
	  <br>&nbsp;<br>
	  Any changes to scope, cost, or schedule result in Change Requests, and are processed by
	  the Change Control Procedure. 
 </td>
 </tr>			 

 </table>   

<h1>Output</h1>
 <ul>
	<li>Project Deliverables. For a software project this includes everything that is needed to
		make the software solution work. It includes but is not limited to:
		<ul>
		  <li>The Executables</li>
		  <li>Installation Manual</li>
		  <li>User Manual</li>
		</ul>     
	<li>Project Artifacts:
		<ul>
		   <li><a href="gl-pp.php">Preliminary Project Plan</a></li>
		   <li>Project Charter (optional)</li>
		   <li><a href="gl-pp.php">Project Plan</a></li>
		   <li>Requirements Traceability Matrix (optional)</li>
		   <li>Performance Reports</li>
		   <li>Product Configurations</li>
		   <li>Change Requests</li>					   
		   <li>Project Closure Report</li>
		</ul>
</ul>	
<h1>Exit Criteria</h1>
<p>The Work Order is closed.</p>
<h1>Metrics</h1>
<ol>
   <li>For each baseline:</li>
        <ol>
		   <li>Estimated Duration (in weeks)</li>
		   <li>Actual Duration (in weeks)</li>
		   <li>Estimated Cost (in USD)</li>
           <li>Actual Cost (in USD)</li>
	    </ol>
	<li>Customer Satisfaction Index: Average of all customer feedbacks. Between 0 and 9, 0 being least 
         satisfied and 9 being most satisfied.</li>
</ol> 
<h1>Tailoring</h1>
<table  align="center" width="95%" border="1" cellpadding="4" cellspacing="0">
  <tr>
     <th>#</th> <th><a href="gl-pcl.php">Class</a></th> <th>Exemptions</th><th>Modifications</th><th>Comments</th>
  </tr>
  <tr>
     <td>1</td><td>C1</td>
	 <td>Metrics</td>
	 <td>&nbsp;</td>
	 <td>&nbsp;</td>
  </tr> 
</table>

<?php require "qfooter.php" ?>