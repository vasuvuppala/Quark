
<?php require "qheader.php" ?>

  <div class="PageTitle">
	<img src="images/icon-std.png" title="Standard"> Project Infrastructure Architecture</div>
  <h1>Infrastructure</h1>
  <p>The software development processes interact with certain tools and infrastructure 
  components. These components are illustrated in the following diagram: </p>
  <div align="center" ><img src="images/infra.png" width="80%"></div>
  <p>&nbsp;</p>
  <table align="center" width="55%" border="1" align="left" cellpadding="2" cellspacing="0">
  <tr>
	 <th width="10%">Item</th>
	 <th width="40%">Description</th>
  </tr>
  <tr>
	 <td width="10%">PA</td>
	 <td width="40%">Project Area. A central location for keeping all project related files.</td>
  </tr>
  <tr>
	 <td width="10%">VCS</td>
	 <td width="40%">Version Control System. 
	 For source code and document version control.</td>
  </tr>		
  <tr>
	 <td width="10%">DMS</td>
	 <td width="40%">Defect Management System. 
	 </td>
  </tr>
  <tr>
	 <td width="10%">PMIS</td>
	 <td width="40%">Project Management Information System. 
	 </td>
  </tr>		  
  <tr>
	 <td width="10%">EIS</td>
	 <td width="40%">Enterprise Information Systems.</td>
  </tr>
  <tr>
	 <td width="10%">PDB</td>
	 <td width="40%">Process Database, for keeping process performance metrics.</td>
  </tr>        
  </table>
  <h1>Access Control</h1>
   <p>Access to the project files is limited through groups. The following are the recommended
   groups to be created at the initiation of each project. The <em>PJID</em> in the group
   name is a placeholder for the actual Project=ID of the project.</p>
   <ul>
	  <li><em>PJID</em>: Group with all stakeholders. This group must be created for
						 each project.</li>
	  <li><em>PJID</em>-pm: Project Management Group</li>  
	  <li><em>PJID</em>-doc: Documentation Group</li>
	  <li><em>PJID</em>-des: Design Group</li>
	  <li><em>PJID</em>-rel: Release Group</li>
	  <li><em>PJID</em>-qa: Quality Assurance Group</li>
   </ul>
   <p>For smaller projects (team size of 1-3 people), all the groups may not be required.</p>		  
  <h1>Project Directory Structure</h1>
  <p>All project related files are kept at a central location, \\intranet\projects. 
	 In this location, each project has a directory, called the Project Area, in which
	 all relevant artifacts for that project are kept.
	 The Project Area for a project is named as the Project-ID of the project. 
	 The  structure for the project directory is: </p>		  
  <div align="center"><img src="images/pds.png"></div>
  <p>&nbsp;</p>
  <table align="center" width="95%" border="1" align="left" cellpadding="2" cellspacing="0">
  <tr>
	 <th width="10%">Folder</th>
	 <th width="40%">Description</th>
	 <th width="50%">Access</th>
  </tr>
  <tr>
	 <td width="10%"><em>PJID</em></td>
	 <td width="40%">The root folder of the project area.</td>
	 <td width="50%">The <em>PJID</em> group has read-only access to the entire tree rooted at
		  this folder. The <em>PJID</em>-pm group has full-access to the folder. Everyone else
		  has no access.
		  </td>
  </tr>
  <tr>
	 <td width="10%">scm</td>
	 <td width="40%">Software Configuration Management. To keep SCM related files including
		Configuration Items, Audits, amd Releases.</td>
	 <td width="50%">The <em>PJID</em>-pm group has full access.</td>
  </tr>
  <tr>
	 <td width="10%">design</td>
	 <td width="40%">Version Control System. 
	 For source code and document version control.</td>
	 <td width="50%">The <em>PJID</em>-des group has full access.</td>
  </tr>		
  <tr>
	 <td width="10%">docs</td>
	 <td width="40%">To work of documentation. 
	 </td>
	 <td width="50%">The <em>PJID</em>-docs group has full access.</td>
  </tr>
  <tr>
	 <td width="10%">pm</td>
	 <td width="40%">Project Management related files. 
	 </td>
	 <td width="50%">The <em>PJID</em>-pm group has full access.</td>
  </tr>		  
  <tr>
	 <td width="10%">qa</td>
	 <td width="40%">Quality Assurance</td>
	 <td width="50%">The <em>PJID</em>-qa group has full access.</td>
  </tr>        
  </table>
  <h1>Project Environments</h1>
  Development, Test, and Production environments.

 <?php require "qfooter.php" ?> 
