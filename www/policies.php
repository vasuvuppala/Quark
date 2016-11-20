
<?php require "qheader.php" ?>

<div class="PageTitle">Policies</div>
<div class="DocVersion">
   <?php PrintVersion('$Revision: 1.13 $ $Date: 2010-03-23 15:03:38 $') ?>
</div>
  
<h1>Purpose</h1>
	<p>The purpose of this document is to provide high-level guidelines for all development
	   and sustenance activities at the Electronics  Department (EE) of the National 
	   Superconducting Cyclotron Laboratory (NSCL).</p>
<h1>Scope</h1>
<p>All engineering activities, for both hardware and software, at EE must adhere to these policies.    
   It covers all types of software: embedded, control, system, databases, web, and
   others. The policies marked <em>Optional</em> are desired but not mandatory.</p>
<h1>Exemption</h1>
<p> A written exception, from the EE Department Head, is required to be exempted from any of the 
	    policies listed here.</p>			

<h2>Engineering Policies</h2>	   
<table align="center" width="95%" border="0" cellpadding="2" cellspacing="2">
  <tr>
     <th width="5%">ID</th><th>Policy</th>
  </tr>
  <tr>
     <td>E01</td><td>Requirements shall be collected, analyzed, documented, baselined, and managed.</td>	 
  </tr>
     <td>E02</td><td>Requirements shall be approved by the Customer.</td>
  </tr>
  <tr>
     <td>E03</td><td>Changes to requirements shall be managed.</td>
  </tr>
    <tr>
     <td>E04</td><td>Bidirectional traceability shall be established and maintained among requirements, 
      design, implementation, and the deliverables.</td>
  </tr>
  <tr>
     <td>E05</td><td>Various options to implement the requirements shall be reviewed and analyzed, and the most appropriate
      technical solution shall be chosen.</td>
  </tr>
  <tr>
     <td>E06</td><td>The various product components, both internal and external, shall be verified for 
      integration compatibility. They shall be integrated, packaged, and released  
	  as per the processes in <a href="processes.php">Quark.</a></td>
  </tr>
  <tr>
     <td>E07</td><td>Product configurations shall be managed. All items 
      required to (re)create the product shall be identified, baselined, and controlled.</td>
  </tr>
  <tr>
     <td>E08</td><td><a href="http://intra/safety" target="_blank">NSCL's safety and security guidelines</a> shall form the basis 
		(implicit requirements) of any technical solution.</td>
  </tr>
  <tr>
     <td>E09</td><td>The final product shall be delivered as per the Customer's and NSCL's guidelines.</td>
  </tr>
</table>

<h2>Project Management Policies</h2>
<table align="center" width="95%" border="0" cellpadding="2" cellspacing="2">
  <tr>
     <th width="5%">ID</th><th>Policy</th>
  </tr>
  <tr>
     <td>PM01</td><td>Each project shall assign resources to the Project Leader and Project Coordinator roles
    	(described in <a href="roles.php">Quark</a>)</td>	 
  </tr>
  <tr>
     <td>PM02</td><td>Each project shall establish and maintain a plan to guide it through initiation, execution, control, 
	    and closure. The plan shall include commitments, cost estimates, schedule of activities, 
		quality assurance, and risks.</td>	 
  </tr>
  <tr>
     <td>PM03</td><td>The project plan shall be based on the documented requirements, estimates provided by the relevant 
		departments, and the NSCL's process assets (historical data).</td>	 
  </tr>
  <tr>
     <td>PM04</td><td>Each project shall plan for safety and security as per  
	    <a href="http://intra/safety" target="_blank">NSCL's guidelines.</a></td>	 
  </tr>
  <tr>
     <td>PM05</td><td>Each project plan shall be approved by the Department Head before a commitment 
	  is made to the Customer.</td>	 
  </tr>
  <tr>
     <td>PM06</td><td>Each project shall follow processes that are tailored from the processes defined in 
	    <a href="processes.php">Quark</a>.</td>	 
  </tr>
  <tr>
     <td>PM07</td><td>For cross-functional projects, functional groups within EE shall coordinate their project plans 
	    and schedules.</td>	 
  </tr>
  <tr>
     <td>PM08</td><td>Each project shall contribute all its artifacts, including 'Lessons Learned', to the
		organizational process assets.</td>	 
  </tr>
  <tr>
     <td>PM09</td><td>Each project shall manage risks.  This includes identification, analysis, prioritizing, 
	    mitigation, and monitoring of project risks.</td>	 
  </tr>
  <tr>
     <td>PM10</td><td>Each member in the project team shall be trained to fulfill 
	   his/her role effectively. The project-related training shall be included in the project plan.</td>	 
  </tr>
  <tr>
     <td>PM11</td><td>Each project shall make formal contracts for all its procurements. All procurements shall adhere to
  	    the relevant EE, NSCL, and MSU guidelines.</td>	 
  </tr>
  <tr>
     <td>PM12</td><td>Each project shall plan and maintain activities and 
	 commitments with external entities.</td>	 
  </tr>
  <tr>
     <td>PM13</td><td>Each project shall satisfy its contractual obligations 
	 to internal and external entities.</td>	 
  </tr>  
    <tr>
     <td>PM14</td><td>Each project's performance shall be measured and reviewed periodically, and
      corrective actions shall be taken to eliminate its variance from the project plan.
	  The corrective actions shall be tracked and resolved.</td>	 
  </tr>  <tr>
     <td>PM15</td><td>Each project shall anticipate and manage changes. The project plan shall define the change 
      control process. Changes shall be analyzed for their impact. Changes shall be approved by the Configuration
	  Control Board.</td>	 
  </tr>  <tr>
     <td>PM16</td><td>Each project shall identify, collect, analyze, and store data as per 
	   guidelines in <a href="processes.php">Quark.</a></td>	 
  </tr>  <tr>
     <td>PM17</td><td>Changes in project's scope, schedule, cost, or any other aspect shall be 
         reflected in the project plan, deliverables, and work activities.</td>	 
  </tr>  <tr>
     <td>PM18</td><td>The key stakeholders shall coordinate and collaborate on project plans, commitments, requirements, and 
      on any changes to them.</td>	 
  </tr>  
  <tr>
     <td>PM19</td><td>Each project shall plan for and define guidelines that identify the types of project-related decisions 
      that will be made using a structured-decision making approach.  For decisions that satisfy these 
	  guidelines, a structured decision making approach shall be used.</td>	 
  </tr>  
  <tr>
     <td>PM20</td><td>Each project shall establish and maintain a strategy for verification, validation, and product
        integration.</td>	 
  </tr>  
  <!-- tr>
     <td>PM22</td><td>Each project shall define, schedule, and complete technical and management 
    reviews to report progress on project objectives.  The project shall have a plan to resolve all issues 
    discovered as a result of these reviews.</td>	 
  </tr -->
  <tr>
     <td>PM21</td><td>Each project shall maximize the value of the project by following the 
	    <a href="https://intra/ccf/infoprojectleaders/valueengineering.php" target="_blank">NSCL Value 
		Engineering Guidelines.</td>	 
  </tr>
</table>

<h2>Quality Assurance Policies</h2>
<table align="center" width="95%" border="0" cellpadding="2" cellspacing="2">
  <tr>
     <th width="5%">ID</th><th>Policy</th>
  </tr>
  <tr>
     <td>QA01</td><td>Each project shall objectively assure that it adheres to its plans, 
	 and produces the deliverables in accordance with the requirements.</td>
  </tr>
  <tr>
     <td>QA02</td><td>Each project shall objectively assure that it performs the processes, as per the required standards 
      and procedures (as outlined in <a href="processes.php">Quark</a>).</td>
  </tr>
  <tr>
     <td>QA03</td><td> The work-products shall be verified against their requirements for accuracy.</td>
  </tr> 
  <tr>
     <td>QA04</td><td>The final deliverable shall be validated to ensure that it is suitable for its intended use in 
      Customer's environment.</td>
  </tr>
  <tr>
     <td>QA05</td><td>Each project shall identify the work-products that will be peer-reviewed. 
	   Each project shall include peer-reviews in its plan, and conduct 
	   them accordingly.Results of peer reviews shall be documented, and the resulting actions 
	    shall be assigned and tracked to completion.</td>
  </tr>	
  <tr>
     <td>QA06</td><td>The baselines, and the configuration management activities shall be 
	     audited on a periodic basis.</td> 
  </tr>
  <tr>
     <td>QA07</td><td>Management shall not use the results of Quality Assurance processes 
	   to evaluate the performance of individuals.</td> 
  </tr>
  <tr>
     <td>QA08</td><td>The Quality Manager (see <a href="roles.php">Quark Roles</a>) 
	  shall have a reporting channel 
	  to senior management that is independent of the Project Leader and the project team.</td>
  </tr>
</table>
  
<h2>Process Management Policies</h2>
<table align="center" width="95%" border="0" cellpadding="2" cellspacing="2">
  <tr>
     <th width="5%">ID</th><th>Policy</th>
  </tr>
  <tr>
     <td>PC01</td><td>Quark contains the EE department's standard processes for performing
          and managing engineering activities. Each unit within EE shall establish its processes by tailoring
		  or mapping to the processes in Quark.</td>
  </tr>
  <tr>
     <td>PC02</td><td>Training on Quark's processes shall be provided  to relevant EE staff.
          The training records shall be maintained. </td>
  </tr>
  <tr>
     <td>PC03</td><td>Information collected from projects, groups, and individuals 
     shall be organized and used to improve these processes.</td>
  </tr>
  <tr>
     <td>PC04</td><td>Each project, if appropriate, shall contribute recommendations for 
	   improving the standard processes.</td>
  </tr>
  <tr>
     <td>PC05</td><td>[Optional] Process Performance models shall be established and maintained to 
	  characterize the expected process performance of the processes in Quark.</td>
  </tr>
  <tr>
     <td>PC06</td><td>[Optional] Projects shall establish quantitative quality and process performance goals for quantitatively 
      managing the project. Designated projects shall statistically manage the performance of selected 
	  subprocesses within the project using these goals.</td>
  </tr>
  <tr>
     <td>PC07</td><td>Improvements in processes and technologies shall be proactively 
	      explored. Once identified,
          the improvements shall be evaluated, selected, and deployed.</td>
  </tr>
  <tr>
     <td>PC08</td><td>Root causes for defects, in products and processes, shall be 
	      identified, analyzed, corrected, 
          and addressed to prevent future occurrences.</td>
  </tr>		  
</table>

<h1>Acknowledgements</h1>
The policies are based on <a href="http://www.sei.cmu.edu/cmmi">CMMI Dev 1.2</a>, and the 
documentation from <a href="http://enterprise.spawar.navy.mil/index.cfm" target="_blank">
SSC Pacific's (US Navy)</a> 
<a href="http://sepo.spawar.navy.mil/" target="_blank">Process Asset Library</a>.  
  
<?php require "qfooter.php" ?>