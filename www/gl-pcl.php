
<?php require "qheader.php" ?>
  <div class="PageTitle">Guideline: Project Classification</div>
  <div class="DocVersion">
   <?php PrintVersion('$Revision: 1.4 $ $Date: 2010-03-30 10:59:20 $') ?>
  </div>
  <h1>Introduction</h1>
  <p>By definition each project is unique. Projects differ in their sizes, schedules, complexity, criticality, 
  and resources needs. Hence, no process infrastructure can be optimal for all projects, and 
  it is true for Quark too. However, Quark's processes can be tweaked to suit the project.
  This adjustment of processes is known as <em>process tailoring</em>. Tailoring is based on project types. 
  This document explains how to classify projects for tailoring. The <em>Tailoring Section</em> at 
  the end of each <a href="processes.php">process</a> describes the tailoring options for that 
  particular process.</p>
  
  <h1>Project Classes</h1>
  <p>The following rules specify the project classification. 
  The rules are to be applied in ascending order, starting with 
  Rule #1. The cost is specified in US Dollars and the effort in person weeks.
  A rule is triggered when conditions
  specified by Cost, Effort and Criticality are all true. 
  The class is indicated by the first rule that gets triggered. 
  
  For example, a low-criticality project with a total cost of $120,000.00
  and requiring 30 person weeks, belongs to class C3. These
  classification rules can be overridden by the Department Head.</p>
  <table align="center" width="80%" border="1" cellpadding="2" cellspacing="0">
<tr>
 <th>Rule</th>
 <th>Cost</th>
 <th>Effort</th>
 <th>Criticality</th>
 <th>Class</th>
</tr>
<tr>
 <td>1</td>
 <td>&le; 10,000</td>
 <td>&le; 12</td>
 <td>Low or Medium</td>
 <td>C1</td>
</tr>
<tr>
 <td>2</td> 
 <td>&le; 10,000</td>
 <td>&le; 12</td>
 <td>High</td>
 <td>C2</td>
</tr>
<tr>
 <td>3</td>
 <td>&le; 100,000</td>
 <td>&le; 52</td>
 <td>Low or Medium</td>
 <td>C2</td>
</tr>
<tr>
 <td>4</td>
 <td>&le; 100,000</td>
 <td>&le; 52</td>
 <td>High</td>
 <td>C3</td>
</tr>
<tr>
 <td>5</td>
 <td>&gt; 0</td>
 <td>&gt; 0</td>
 <td>Low or Medium</td>
 <td>C3</td>
</tr>
<tr>
 <td>6</td>
 <td>&gt; 0</td>
 <td>&gt; 0</td>
 <td>High</td>
 <td>C4</td>
</tr>

</table>

  
<?php require "qfooter.php" ?>