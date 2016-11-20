
<?php require "qheader.php" ?>

  <div class="PageTitle">Guideline: Scheduling with Microsoft Project</div>
  <div class="DocVersion">
   <?php PrintVersion('$Revision: 1.1 $ $Date: 2010-04-02 21:07:04 $') ?>
  </div>
  <h1>Introduction</h1>
  <p>This document explains how to generate Earned Value Management (EVM) report for a project.
  EVM report is part of the <a href="#PSR">Project Status Report</a>. 
   EVM is used to measure the progress of a project. 
  It provides early warnings of performance
  problems - schedule slippage or budget overruns.   
  EVM measures performance against a baseline, and hence it cannot begin until the project plan has been 
   base-lined.</p>
  <h1>Terminology</h1>
    <ul>	 
	 <li>AC: Actual Cost. The cost incurred by the project in a given period. </li>
	 <li id="AHR">AHR: Average Hourly Rate for NSCL employees. Unless specified in the Project Plan, assume AHR to be
	          $70 USD.</li>
	 <li>BAC: Budget at Completion. The budgeted cost of the project.</li>
	 <li>CPI: Cost Performance Index. CPI = EV/AC </li>
	 <li>CV: Cost Variance. CV = EV-AC </li>
	 <li>EAC: Estimate at Completion. The extrapolated cost of the project, if it continues to perform
	          at the current rate. EAC = BAC/CPI</li>
	 <li>ETC: Estimate to Completion. The estimated cost needed to complete the project, if it continues to
	          perform at the current rate. ETC = EAC - AC</li>
	 <li>EV: Earned Value. The work completed in a given period, measured in units of currency (US Dollars)</li>
	 <li>PV: Planned Value. The work scheduled to be completed in a given period, measured in units of currency </li>	     
	 <li>SPI: Schedule Performance Index. SPI = EV/PV </li>			 
	 <li>SV: Schedule Variance. SV = EV-PV</li>
	 <li>TCPI: To-Complete Performance Index. TCPI = Remaining-Work/Remaining-Funds. </li>
	 <li>TCPI-Cost: TCPI-Cost = (BAC-EV)/(BAC-AC) </li>
	 <li>TCPI-Schedule: TCPI-Schedule = (BAC-EV)/(BAC-PV).<br> 
			 <em>Note: This index is not a standard, and may not be defined in any literature.</em></li>			 
  </ul>
  
  <h1>Tools</h1>
  The following tools will be used for generating the EVM report:
  <ul>
     <li><a href="tpl/quark-template-evmrw.xlsx" title="EVM Report Workbook">EVM Report Workbook (EVMRW)</a>: 
	     It is a Microsoft Excel Workbook that automates certain portions 
	     of the analysis. It has the following sheets in it:
		  <ul>
			 <li>Terms: Describes the EVM terminology</li>			 
			 <li>Charts: Charts derived from the 'Data' sheet</li>
			 <li>Data: Contains the values of the various elements of EVM such as PV, EV, AC, CPI etc. 
			     Values for 
			     the following fields in the Data sheet must be entered; the rest are calculated by the workbook:
		     <ul>
			  <li>One-time-entry Fields:Project ID, Project Description, Work Order </li>					  
			  <li>Periodic-entry Fields: Status Date, BAC, PV, EV, AC</li>
		     </ul> </li>
		  </ul>
		<li>Microsoft Project Schedule (MSPS): It is the project's schedule developed using Microsoft Project.
		  MSPS is used to calculate the values of PV and EV. If you can compute PV and EV values by some other
          method, then MSPS is not required. </li>
  </ul>		
  <h1>Preparation</h1>
  Here are the preparatory steps; they need to be performed only once:
  <ol>
     <li> Look for the <em>"Edits to total task % complete will be spread to the status date"</em>
	      option in MSPS (Tools &rarr; Options &rarr; Calculations).
		  If it is already enabled, proceed to the next step. Otherwsie, enable the option, and set all 
		  '% Complete" field values to zeros.</li>
     <li> Make sure that the MSPS is base-lined (Tools &rarr; Tracking &rarr; Baseline)</li>
     <li> Start with <a href="tpl/quark-template-evmrw.xlsx" title="EVM Report Workbook">the EVMRW template</a>, 
	      and fill in the one-time-entry fields (Project ID, Description, 
	      and Work Order ID</li>
	  <li>Enter the BAC value in the first data row of EMRW's data section. BAC for the 
	       the project is available in the Project Plan or the MSPS (<em>Cost</em> field).</li>	  
  </ol>
  
<h1><a name="#Report">Report</a></h1>
  For every reporting period (which is specified in the Project Plan), perform the following:		  
	<ol>
		<li> Update the '% Complete' field for all the tasks in the project's MSPS</li>
		<li> Set the Status Date in MSPS (Project &rarr; Project Information &rarr; Status Date) 
		     to the end date for the reporting period. Note that it should not be a date in the future.</li>
		<li> Generate the Earned Value Report (Report &rarr; Reports &rarr; 
				 Costs &rarr; Earned Value) in MSPS. Note down the totals for BCWS and BCWP.</li>
		<li> In the project's EVMR, copy the values from a previously filled data row into a new 
			 empty row. Modify the following values in the new row: </li>
			<ul>
			<li> Status Date: The date till which the PV,EV,and AC values are computed. It is the same
			     as the Status Date that was entered in the MSPS.</li>	 
			<li> BAC: This value does not change,
					  unless a new baseline has been approved, in which case it will be the total
					  cost of the new baseline. The baseline value is available in the Project Plan 
					  or MSPS's 'Cost' field.
					  </li>				
			<li> PV: The total for the BCWS column in Earned Value Report (from the previous step). </li>
			<li> EV: The total for the BCWP column in Earned Value Report (from the previous step). </li>
			<li> AC: Add the material and labor costs actually spent till the Status Date. 
			         To compute labor costs,
					 multiply  the total number of labor hours with <a href="#AHR">AHR</a>. 
					 The total number of labor hours spent on the
					 project are available in the Work Order System (NSCL Intra &rarr; Workorders). </li> 
			</ul>
        <li>EVMRW computes the rest of the values. The performance plots are available in the 'Charts' sheet.</li>			
	</ol>
	
 <h1>References</h1>
 <ul>
    <li><a href="tpl/quark-template-evmrw.xlsx" title="EVM Report Workbook">EVM Report Workbook Template</a></li>
	<li><a href="tpl/quark-template-msps.mpp" title="MS Project Schedule">MS Project Schedule Template</a></li>
	<li id="PSR"><a href="tpl/quark-template-psr.docx" title="Project Status Report">Project Status 
	    Report Template</a></li>
 </ul>	
  
<?php require "qfooter.php" ?>