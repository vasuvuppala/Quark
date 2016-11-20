
<?php require "qheader.php" ?>	
 
  <div class="PageTitle">Guideline: Scope, Schedule, and Cost</div>
  <div class="DocVersion">
   <?php PrintVersion('$Revision: 1.3 $ $Date: 2010-02-12 15:19:59 $') ?>
  </div>
  <h1>Scope: Requirements</h1>
  <p>The term <em>requirement</em> has multiple meanings in literature, as well as in practice. 
  For our
  purpose, a requirement is anything that is desired of the software (to be developed).</p>
  <p>Requirements are categorized in numerous ways: User, System, Domain, Functional, 
  Non-Functional, Performance, Design etc. The classification does not matter as long as the
  requirements are identified, understood, documented, and traced.</p>
  <p>Requirements can be described at various levels, from the very abstract to the very precise.
  It is up to the project team to set the appropriate level of detail desired.</p>
  
  <p>Requirement elicitation tends to be more of an art form. Many a times it depends more on
  inter-personal abilities than technical know-how. </p>
  
  <p>Note: Many a user describe what is required by explaining how it is to be achieved. 
  Sometimes the difference between the 'what' and the 'how' is subtle. The requirements 
  should focus on what is desired; how they get materialized should be left to the
  subsequent phases.</p>
  <ul>	 
	 <li>Meetings: These allow direct interaction with the RSG (Requirement Specification Group). 
		 It is better
		 to have questions prepared in advance. The proceedings should be recorded.</li>
	 <li>Workshops: Workshops are more focused and formal than meetings, and  generally
		 last for longer durations. </li>
	 <li>Feedback: it is a reflection of the project team's 
		 understanding of the requirements. It is better to present it to the RSG 
		 in a meeting or 
		 workshop</li> 
	 <li>Observation: It is a technique where the project team visits the user's work place,
		 and observes the work environment.  This provides a better appreciation for the context
		 for the requirements.</li>
	 <li>Prototype: A prototype or proof-of-concept provides a quick realization of the actual
		 software. It is a tangible form of feedback technique that is useful in cases where the requirements
		 are difficult to comprehend. Development of prototypes takes resources, and hence they  
		 must be budgeted for.</li>    
	 <li>Empathy: It is one of the most overlooked but the most useful of techniques. 
		 Appreciate
		 the user's perspective. It is but natural to look at things from one's own 
		 vantage point;
		 instead try to put yourself in user's shoes. 
		 This technique works well with users who are experts, experienced, and understand
		 software systems well.</li>
	  <li>Training: If possible, get formally trained in 
		 user's domain.
		 In case it is not possible to do so, include a 
		 domain expert in your team who you can act as a bridge between you and the RSG.
		  </li>
  </ul>
  Tools
   <ul>
	 <li>Use Cases:</li>
	 <li>Formal Methods:</li>	 
   </ul>
   
  <h1>WBS and Decomposition</h1>
  <p>
	A WBS is a hierarchical structure that subdivides project deliverables
	and project work into smaller, more manageable pieces of work. It
	provides an increasingly detailed definition of the project work at
	each descending level, with the lowest-level components, called work
	packages, containing components of work that can be scheduled, cost
	estimated, monitored, and controlled.
  </p>
  <p>			
	Decomposition is a technique for creating the WBS by subdividing
	project deliverables into progressively smaller components to the work package level. Decomposition of a project
	work is stopped when the components of the work packages are
	sufficient to complete the work and can be assigned to an individual,
	estimated for cost, scheduled, and monitored. Every level is a detailed explanation
	of the level above it. 
	</p>
	<p>
	Too little decomposition makes it difficult to estimate and schedule, whereas too much
	decomposition makes it difficult to understand, manage, and change. A balance has to be
	struck. Here are some guidelines:
	<ul>
	  <li>Make sure that the work packages are small enough that they can be estimated for 
	time and cost. </li>
	  <li>Discuss the WBS with the project team</li>
	  <li>If a node is being considered for sub-contract to an external agency, it need
		  not be further broken down. The subcontractor should create the WBS sub-tree 
		  under that node.</li>
	</ul>
	</p>
  To create a Work Breakdown Structure:
  <ol>
	 <li>Read Project Charter and Requirement Specifications.</li>
	 <li>Start with the main deliverable, and decompose it. WBS should be built top down.</li>
	 <li>Decompose till the deliverables are small enough. See the guideline above.</li>
	 <li>Validate your WBS using a bottom-up approach.</li>
	 <li>Give each node a unique ID. See the WBS naming standard.</li>
	 <li>Create a WBS Dictionary. It provides details of each node on the WBS. 
		 For each node, the WBS Dictionary may include the node ID, name, description, 
		 owner, time, cost, and Work Order information. If some of this information is
		 to be included in the project schedule, then it need not be included in the 
		 WBS Dictionary.</li>
	 <li>During the WBS creation process, the understanding of the project requirements
		 often changes. In such cases, update the requirements specifications or even project
		 charter.</li>
  </ol>
  <h1>Schedule</h1>
   <ol>
	<li>Start with Work Packages (WP) from the WBS.</li>
	<li>Decompose each WP into activities</li>
	<li>Sequence the activities</li>
	<li>Determine the units of measure that will be used.</li>
	<li>Estimate resources for each activity</li>
	<li>Estimate duration for each activity</li>
	<li>Develop the schedule</li>
	<li>Optimize the schedule</li>
   </ol>
  <h1>Cost Estimation</h1>
  <ol>
	<li>Involve the work package owners.</li>
	<li>Gather any relevant input information that may help you prepare
		 the estimates, such as estimating publications and resource rates.</li>
	<li>Look for alternative costing options.</li>
	<li>Determine the units of measure that will be used.</li>
	<li>Consider possible risks that may impact cost.</li>
	<li>Ensure that all cost estimates are assigned to the appropriate
		account, according to the chart of accounts.</li>
	<li>Make sure your cost estimates include key elements like estimated
		costs of all resources to be charged to the project, level of
		estimates, and list of assumptions in developing the estimates.</li>
   </ol>	  
		  
<?php require "qfooter.php" ?>

