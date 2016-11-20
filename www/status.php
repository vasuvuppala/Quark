
<?php require "qheader.php" ?>

  <div class="PageTitle">Project Performance Report</div>         
  <h1>Overview</h1>
  <p>Quark is a deliverable of the the Formal Software Engineering Processes (FSEP) project.
	 This page describes the status of the FSEP project.
	 The subsequent sections provide the milestones, EVM analysis, and the documents.</p>
	 <p>Here are the definitions of the terms used in the EVM section:
  <ul>
	 
	 <li>AC: Actual Cost. The cost incurred in a given period</li>
	 <li>BAC: Budget at Completion. The budgeted cost of the project.</li>
	 <li>CPI: Cost Performance Index. CPI = EV/AC </li>
	 <li>CV: Cost Variance. CV = EV-AC </li>
	 <li>EAC: Estimate at Completion. The projected cost of the project. EAC = BAC/CPI</li>
	 <li>ETC: Estimate to Completion. The projected cost needed to complete the project. ETC = EAC - AC</li>
	 <li>EV: Earned Value. The work completed in a given period</li>
	 <li>PV: Planned Value. The work scheduled to be completed in a given period</li>	     
	 <li>SPI: Schedule Performance Index. SPI = EV/PV </li>			 
	 <li>SV: Schedule Variance. SV = EV-PV</li>
	 <li>TCPI: To-Complete Performance Index. TCPI = Remaining-Work/Remaining-Funds. </li>
	 <li>TCPI-Cost: TCPI-Cost = (BAC-EV)/(BAC-AC) </li>
	 <li>TCPI-Schedule: TCPI-Schedule = (BAC-EV)/(BAC-PV).<br> 
			 <em>Note: This index is not a standard, and may not be defined in any literature.</em></li>			 
  </ul>
  </p>
  <h1>Milestones</h1>
  
  <table align="center" width="95%" border="1" align="center" cellpadding="2" cellspacing="0">
  <tr>
	 <th width="10%">Milestone</th>
	 <th width="10%">Date</th>
	 <th width="15%">Status</th>
	 <th>Description</th>
  </tr>	  
  <tr>
	 <td width="10%">Gap Analysis Document</td>
	 <td width="10%">8/7/09</td>
	 <td width="15%">Complete</td>
	 <td>Documenting the findings from Gap Analysis.</td>
  </tr>
  <tr>
	 <td width="10%">Quark 0.4</td>
	 <td width="10%">10/9/09</td>
	 <td width="15%">100%</td>
	 <td>Level 2 policies. First order procedures.</td>
  </tr>
  <tr>
	 <td width="10%">Quark 0.5</td>
	 <td width="10%">10/23/09</td>
	 <td width="15%">100%</td>
	 <td>2nd Order Procedures, guidelines.</td>
  </tr>
  <tr>
	 <td width="10%">Quark 0.6</td>
	 <td width="10%">11/13/09</td>
	 <td width="15%">100%</td>
	 <td>Guidelines, checklists.</td>
  </tr>
  <tr>
	 <td width="10%">Quark 0.7</td>
	 <td width="10%">11/27/09</td>
	 <td width="15%">100%</td>
	 <td>Standards, templates.</td>
  </tr>
  <tr>
	 <td width="10%">Quark 0.8</td>
	 <td width="10%">12/11/09</td>
	 <td width="15%">100%</td>
	 <td>Level 3 related artifacts.</td>
  </tr>
  <tr>
	 <td width="10%">Quark 0.9</td>
	 <td width="10%">12/30/09</td>
	 <td width="15%">100%</td>
	 <td>ISO 90003 compliance.</td>
  </tr>
  <tr>
	 <td width="10%">Quark 1.0</td>
	 <td width="10%">1/11/10</td>
	 <td width="15%">100%</td>
	 <td>Complete Software Process Infrastructure.</td>
  </tr>
  <tr>
	 <td width="10%">Quark 1.1</td>
	 <td width="10%">2/1/10</td>
	 <td width="15%">0%</td>
	 <td>After refinement</td>
  </tr>
  <tr>
	 <td width="10%">Quark 2.0</td>
	 <td width="10%">5/12/10</td>
	 <td width="15%">0%</td>
	 <td>Improvements after migration/implementation.</td>
  </tr>
  <tr>
	 <td width="10%">Internal Audit Report</td>
	 <td width="10%">5/28/10</td>
	 <td width="15%">0%</td>
	 <td>Findings of Internal Audit.</td>
  </tr>
  <tr>
	 <td width="10%">External Audit Report</td>
	 <td width="10%">6/11/10</td>
	 <td width="15%">0%</td>
	 <td>Findings of External Audit (Certification).</td>
  </tr>
  </table>		  
  
  <h2>Earned Value Management</h2>
  <p>If CPI < 1, project is over budget. If SPI < 1, project is behind schedule</p>
  <div class="FlowDiag">
	<img  src="status/evm-perf.png" border="0">
  </div>
  <hr>
  <p>A negative CV percentage indicates cost overrun. A negative SV 
	percentage indicates schedule slippage.</p>  
  <div class="FlowDiag">
	<img  src="status/evm-var.png" border="0">
  </div>
  <hr>
  <p>If TCPI > 1.0, the remaining work has to be performed over the normal levels to achieve project goals. 
	 If TCPI < 1.0, it is possible to underperform for the remainder work 
	 and still reach the goals</p>
  <div class="FlowDiag">
	<img  src="status/evm-tcpi.png" border="0">
  </div>
  <hr>		  
  <div class="FlowDiag">
	<img  src="status/evm-fc.png" border="0">
  </div>
  <hr>
  <div class="FlowDiag">
	<img  src="status/evm-val.png" border="0">
  </div>        
 
  <h1>Documents</h1>
  <ul>
	 <li><a href="status/project-charter.docx">The Project Charter</a></li>
	 <li><a href="status/stakeholder-register.docx">The Stakeholder Register</a></li>
	 <li><a href="status/WBS.docx">The WBS</a></li>
	 <li><a href="status/requirements.docx">The Requirements Document</a></li>
	 <li><a href="status/schedule.mpp">The Schedule</a></li>
	 <li><a href="status/PMP.docx">The Project Plan</a></li>
	 <li><a href="status/evm.xlsx">The EVM Workbook</a></li>
  </ul>	

  <?php require "qfooter.php" ?>