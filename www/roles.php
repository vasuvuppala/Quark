
<?php require "qheader.php" ?>

  <div class="PageTitle">Roles and Responsibilities</div>
  <div class="DocVersion">
   <?php PrintVersion('$Revision: 1.17 $ $Date: 2010-02-12 15:20:00 $') ?>
  </div>
  
  <h1>Team Organization</h1>
  <p> The following diagram shows the organizational structure of a team involved in 
  developing software systems; it shows the roles of the various team members or groups. 
  The mapping between roles and people is not one-to-one. Depending on the size of the 
	 project, a person can be responsible for more than one role,
	 or a role may be assigned to more than one person.</p>
  <div class="FlowDiag">
	 <img src="images/roles.png" width="100%" title="Roles">
  </div>
		  
  <h1>Description</h1>
  <table align="center" width="95%" border="1" align="left" cellpadding="2" cellspacing="0">
  <tr class="OddRow">
	 <th width="20%">Role</th>
	 <th width="10%">Acronym</th>
	 <th>Description</th>
  </tr>	 
  <tr class="OddRow">
	 <td width="20%">Acceptance Engineer</td>
	 <td width="10%">AE</td>
	 <td>AE is responsible for performing system-level tests 
		 in customer's environment/premises (User Acceptance Testing).</td>
  </tr>
  <tr class="EvenRow">
	 <td width="20%">Configuration (or Change) Control Board</td>
	 <td width="10%">CCB</td>
	 <td>CCB responsible for reviewing and approving changes to the project. It is 
		 generally a group consisting of one or more stakeholders.</td>
  </tr>			  
  <tr class="OddRow">
	 <td width="20%">Customer</td>
	 <td width="10%">CU</td>
	 <td>The entity that desires the software, commissions its development, and will use
		 the it.  It can be
		 a person, a group, an unit, or an organization; it may be internal or external 
		 to the EE department.</td>
  </tr>
  <tr class="EvenRow">
	 <td width="20%">Department Head</td>
	 <td width="10%">DH</td>
	 <td>DH leads a functional unit within NSCL. In PMBOK terminology, it is the Functional
		 Manager.</td>
  </tr>
  <tr class="OddRow">
	 <td width="20%">Deployment Engineer</td>
	 <td width="10%">DEP</td>
	 <td>DEP is responsible for installing and configuring the software in customer's
		 environment (production or test).</td>
  </tr>
  <tr  class="EvenRow">
	 <td width="20%">Design Engineer</td>
	 <td width="10%">DES</td>
	 <td>DES is responsible for both architectural and low-level design activities.</td>
  </tr>
  <tr class="OddRow">
	 <td width="20%">Development Engineer</td>
	 <td width="10%">DEV</td>
	 <td>DEV is responsible for coding and unit-testing.</td>
  </tr>
  <tr class="EvenRow">
	 <td width="20%">Quality Manager</td>
	 <td width="10%">QM</td>
	 <td>QM is responsible for overseeing the quality assurance and quality control functions
		for the project.</td>
  </tr>
  <tr class="OddRow">
	 <td width="20%">Project Coordinator</td>
	 <td width="10%">PC</td>
	 <td>PC role is responsible for the management activities of the project. PC
	   assists the Project Leader with all the project management related activities. PC role generally
		does not include technical or engineering activities.</td>
  </tr>
  <tr class="OddRow">
	 <td width="20%">Project Leader</td>
	 <td width="10%">PL</td>
	 <td> PL is responsible for the engineering and technical activities of the
		 project. PL has the ultimate responsibility and authority for the project.
		 PL, with help from PC,  develops the project's plan, execute the project, monitor and control
	     its progress, and delegate responsibilities to other people in the project team. 
		 For small and medium-sized projects, one person may perform both PL and
		 PC roles.</td>
  </tr>
  <tr class="EvenRow">
	 <td width="20%">Project Manager</td>
	 <td width="10%">PM</td>
	 <td>It is a combination of PC and PL roles (PM = PL + PC).</td>
  </tr>
  <tr class="OddRow">
	 <td width="20%">Technical Manager</td>
	 <td width="10%">TM</td>
	 <td>Synonym for Project Leader.</td>
  </tr>
  <tr class="EvenRow">
	 <td width="20%">Release Engineer</td>
	 <td width="10%">RE</td>
	 <td> RE is responsible for building, packaging, and releasing 
		 the software, and associated management activities.</td>
  </tr>
  <tr class="OddRow">
	 <td width="20%">Software Engineering Process Group</td>
	 <td width="10%">SEPG</td>
	 <td>SEPG is responsible for managing the processes, including process definitions,
		 improvements, and training. </td>
  </tr>
	 <td width="20%">Sponsor</td>
	 <td width="10%">&nbsp;</td>
	 <td>Sponsor champions the project throughout 
	 the organization by promoting its benefits, and provides the necessary financial 
	 resources. Sponsor is involved in  development 
	 of the project's initial scope and charter, and in the authorization of changes. 
	 In most cases, this role will be 
	 taken up by the Department Head.</td>
  </tr>
  <tr class="EvenRow">
	 <td width="20%">Technical Writer</td>
	 <td width="10%">TW</td>
	 <td>TW is responsible for writing the technical documents -User Manuals,
		 Installation Manuals, Help Files etc-	using the appropriate 
		 medium. </td>
  </tr>
  <tr class="OddRow">
	 <td width="20%">Test Engineer</td>
	 <td width="10%">TE</td>
	 <td>TE's responsibilities include developing test cases, and performing integration tests.</td>
  </tr>
  <tr class="OddRow">
	 <td width="20%">User</td>
	 <td width="10%">&nbsp;</td>
	 <td>Same as Customer.</td>
  </tr>
  </table>
  <h1>NSCL Organization</h1>
  <p>The Electronics Department, like NSCL, is a Matrix organization. In a Matrix
  organization, individuals have both a functional manager for human resources, and a 
  project manager
  for projects. Moreover NSCL is a Weak Matrix organization, where the functional manager 
  has more authority. 
  </p>
  <p>The software development activity could be part of a larger project that spans multiple 
	 departments at NSCL. Still, the software development activity would be considered as a 
	 project in itself (described as a <em>Project Phase</em> in PMBOK), 
	 and it will adhere to the processes  
	 described in Quark. The larger project may have a manager (Program Manager)
	 of its own but that role is different from the Project Manager role described here. 
	 </p>

<?php require "qfooter.php" ?>