
<?php require "qheader.php" ?>	

<div class="PageTitle">Procedure: Release Software Product</div> 
<div class="DocVersion">
   <?php PrintVersion('$Revision: 1.9 $ $Date: 2010-03-19 14:02:34 $') ?>
</div>        
<h2>Purpose</h2>
<p>The purpose of this procedure is to integrate, build, package, and then
 release the software product. 
</p>			
<h1>Entry Criteria </h1>
<p>
The release components (source code, documents etc) have been completed.
</p>
<h1>Inputs</h1>
<ul>
 <li>Source Code</li>
 <li>Documents: Installation Manual, User Manual etc</li>
 <li>Release Identifier</li>
</ul>			  
<h1>Process Flow</h1>
<div class="FlowDiag">
<a href="images/proc-release.png"  target="_blank" title="Release">
   <img title="Procedure Release" src="images/proc-release.png" border="0" width="100%">
</a>
</div>			
<h1>Details</h1>
<table  align="center" width="95%" border="1" cellpadding="4" cellspacing="0">
<tr>
 <th width="5%">Step</th> <th width="10%">Role</th> <th>Action</th>
</tr>
<tr class="OddRow">
  <td>1</td> <td>RE</td>
  <td>Write the Release Notes. It should include the following:
	 <ul>
	   <li>Release ID (RID)</li>
	   <li>System Requirements</li>
	   <li>Supported platforms/environments</li>
	   <li>Changes from last release</li>
	   <li>Known defects</li>
	 </ul>				 
  </td>
</tr>
<tr class="EvenRow">
  <td>2</td> <td>RE</td>
  <td>Baseline all the objects needed to make the software solution. This includes the source code, 
	  documents including the Release Notes, configuration files etc. Identify the baseline with
	  the Release ID (RID).
	  
	  <p>If using a version
	  control system, like CVS, this simply involves tagging the entire module with a
	  tag that is based on the RID.</p>				  
  </td>
</tr> 			
<tr class="OddRow">
  <td>3</td> <td>RE</td>
  <td>Extract all the baselined source components which are identified by the RID.
	  <p>If using a version
	  control system, like CVS, this simply involves exporting the entire module using the
	  RID-based tag.</p>             			  
  </td>
</tr>
<tr class="EvenRow">
  <td>4</td> <td>RE</td>
  <td>
	<ul>
	  <li>Integrate the source components in the desired structure</li>
	  <li>Build the executables and deliverables from the source components</li>
	  <li>Package the deliverables. This is generally done using Zip, tar, MSI, 
		InstallShield etc.</li>
	</ul>
					  
  </td>
</tr>
<tr class="OddRow">
  <td>5</td> <td>RE</td>
  <td>If there were any errors in the previous step, fix the errors, and repeat the process from 
	  Step 1. If using a version control system, like CVS, it may be necessary to remove the tag
	  used in Step 2.				  
  </td>
</tr>
<tr class="EvenRow">
  <td>6</td> <td>RE</td>
  <td>A release can be a production release that gets sent to the Customer, or an internal
	  release that gets used by the Test Team for system-level testing. If it is 
	  a production release follow Steps 7.x, otherwise inform the Test Team of the new release.				  
  </td>
</tr>
<tr class="OddRow">
  <td>7.1</td> <td>PC</td>
  <td>Create the Configuration Register for this release. It includes the following:
	  <ul>
		 <li>Release ID</li>
		 <li>The platform details: hardware, Operating System version, DBMS version etc</li>
		 <li>Development environment details: compiler versions, libraries and their 
			 versions etc</li>
	  </ul>
  </td>
</tr>
<tr class="OddRow">
  <td>7.2</td> <td>PC</td>
  <td>Collect the configuration items for this release. The configuration items are described in
	  the  project plan, and generally include:
	  <ul>
		 <li>The RFW</li>
		 <li>The Project Charter</li>
		 <li>The Project Plan</li>
		 <li>The Project Deliverables</li>
		 <li>The internal documents: SRS, Architecture Design, Low Level Design, Test Plans etc</li>
		 <li>All approved Change Requests</li>
	  </ul>				  
  </td>
</tr>
<tr class="OddRow">
  <td>7.3</td> <td>PC</td>
  <td>Save and archive the configuration collected in the previous step.				  
  </td>
</tr>
<tr class="OddRow">
  <td>7.4</td> <td>PC</td>
  <td>Initiate a development branch on the baseline for this release. If using a version control 
   system, like CVS, it is accomplished by creating a branch in the source tree for this release. 				  
  </td>
</tr>
<tr class="OddRow">
  <td>7.5</td> <td>PC</td>
  <td>Inform the stakeholders of the new production release.				  
  </td>
</tr>
<tr class="OddRow">
  <td>7.6</td> <td>PC</td>
  <td>Distribute the package for this release (created in Step 4).				  
  </td>
</tr>			
<tr class="EvenRow">
  <td>8</td> <td>QM,PC</td>
  <td>Review the release and configuration processes. This includes:
	  <ul>
		 <li>Making sure that the configuration includes all configuration items</li>
		 <li>Package contains Installation Manual, Release Notes etc</li>
		 <li>Branching is done properly</li>
	  </ul>					 
  </td>
</tr>			
</table>			
<h1>Outputs</h1>	  
<ul>
 <li>The Product Package</li>
 <li>The Configuration (for Production Releases only)</li>
</ul>
<h1>Exit Criteria</h1>
<p>		  
The Product Package has been released.
</p>
<h1>Metrics</h1>
<h1>Tailoring</h1>

<?php require "qfooter.php" ?>