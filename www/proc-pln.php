
<?php require "qheader.php" ?>	

<div class="PageTitle">Procedure: Plan for Project</div> 
<div class="DocVersion">
   <?php PrintVersion('$Revision: 1.13 $ $Date: 2010-03-22 19:39:22 $') ?>
</div>        
<h2>Purpose</h2>
<p>The purpose of this procedure is to plan for the project by refining the scope, WBS, schedule, budget, and
 management plans. 
</p>			
<h1>Entry Criteria </h1>
<p>
The project Work Order has been generated.
</p>
<h1>Input</h1>
<ul>		     
 <li>The Preliminary Project Plan (PPP)</li>
 <li> (optional) The Project Charter</li>
</ul>			  
<h1>Process Flow</h1>
<div class="FlowDiag">
  <a href="images/proc-pln.png" target="_blank" title="Plan for Project">
  <img title="Plan for Project" src="images/proc-pln.png" border="0" width="100%">
  </a>
</div> 
<h1>Details</h1>

<table  align="center" width="95%" border="1" cellpadding="3" cellspacing="0">
<tr>
 <th width="5%">Step</th> <th width="10%">Role</th> <th>Action</th>
</tr>
<tr class="EvenRow">
  <td>1</td> <td>PL,PC</td>
  <td>Perform Steps 1.1 through 1.7
	  iteratively. While performing these steps, write the relevant (sub) documents that 
	  form the project plan (you may start with PPP, and refine it to result in PP).
	  </td>
</tr>
<tr class="OddRow">
  <td>1.1</td> <td>PL,PC</td>
  <td>Refine Scope 
  </td>
</tr>
<tr class="EvenRow">
  <td>1.2</td> <td>PL,PC</td>
  <td>Refine WBS 
  </td>
</tr>
<tr class="OddRow">
  <td>1.3</td> <td>PL,PC</td>
  <td>Refine Project Strategy 
  </td>
</tr>  
<tr class="EvenRow">
  <td>1.4</td> <td>PL,PC</td>
  <td>Refine Schedule 
  </td>
</tr>
<tr class="OddRow">
  <td>1.5</td> <td>PL,PC</td>
  <td>Refine Budget 
  </td>
</tr>
<tr class="EvenRow">
  <td>1.6</td> <td>PL,PC</td>
  <td>Refine Preliminary human resource, quality, risk, communication, and
			  procurement plans. 
  </td>
</tr>			
<tr class="OddRow">
  <td>1.7</td> <td>PL,PC</td>
  <td>Define the Product Development Life Cycle (PDLC). Describe how the deliverables of this
	  project will be developed. The development life cycle depends on
	  various parameters: criticality, requirements clarity, effort, customer participation etc.
	  This activity may not be essential for some projects but is crucial for software-related 
	  projects.
  </td>
</tr>		  
<tr class="EvenRow">
  <td>2</td> <td>PL,PC</td> 
  <td>Submit the PP for Sponsor's approval (Sponsor is the person financing the project).</td>
</tr>
<tr class="OddRow">
  <td>3</td> <td>Sponsor</td> 
  <td>Based on PP, lab's goals, available resources, and various other factors and analyses, 
	  approve, or reject the project.			  
</tr>
<tr class="EvenRow">
  <td>3.1</td> <td>PL,PC</td> 
  <td>If the PP is approved, proceed to Execute Project procedure. Otherwise, perform the
	  relevant activities from Close Project procedure.			  
</tr>
</table>   		     			    			      

<h1>Output</h1>	  
<ul>
 <li>The Project Plan</li>
</ul>
<h1>Exit Criteria</h1>
<p>		  
The Project Plan has been approved.
</p>
<h1>Metrics</h1>
<ol>
   <li>Duration taken for PP approval, in calendar days</li>
   <li>Effort spent on maintaining RTM, in Person Hours</li>
</ol>
<h1>Tailoring</h1>
<table  align="center" width="95%" border="1" cellpadding="4" cellspacing="0">
  <tr>
     <th>#</th> <th><a href="gl-pcl.php">Class</a></th> <th>Exemptions</th><th>Modifications</th><th>Comments</th>
  </tr>
  <tr>
     <td>1</td><td>C1</td>
	 <td>Metrics, RTM</td>
	 <td>PP need not be detailed</td>
	 <td>Just the schedule (in MS Project) is sufficient. WBS, Risks, Quality etc can be omitted.</td>
  </tr> 
</table>
<h1>References</h1>
<ul>
 <li><img src="images/icon-gl.png" title="Guideline"><a href="gl-ssc.php"> Scope, Schedule, and Cost</a></li>
 <li><img src="images/icon-gl.png" title="Guideline"><a href="gl-pp.php">How to develop Project Plan</a></li>
 <li><img src="images/icon-tl.png" title="Template"><a href="tpl/project-plan.docx">Project Plan Template</a</li>
</ul>

<?php require "qfooter.php" ?>
