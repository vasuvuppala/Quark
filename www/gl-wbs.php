<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Quark</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quark.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="MasterLayout">
  <tr>
    <td>
	<?php require "header.php" ?>	
    </td>
  </tr>
  <tr>
    <td class="ContentArea">
    <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td class="CmenuArea">
		   <?php require "camenu.php" ?>
		</td>
        <td class="CtextArea">
          <p class="PageTitle">
		    <img src="images/icon-gl.png" title="Guideline"> GDL-WBS: How To Create WBS
		  </p>
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
		  <h1>Create a Work Breakdown Structure</h1>
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
      </tr>
    </table> 
    </td>
  </tr>
  <tr>
    <td>
      <?php require "footer.php" ?>
    </td>
  </tr>
</table>
</body>
</html>
