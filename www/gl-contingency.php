
<?php require "qheader.php" ?>
  <div class="PageTitle">Guideline: Risk-based Contingency Methodology</div>
  <div class="DocVersion">
   <?php PrintVersion('$Revision: 1.1 $ $Date: 2010-02-12 15:20:00 $') ?>
  </div>
  <h1>Introduction</h1>
  This document describes the method used for calculating contingencies for cost and schedule estimates.
  
  <h1>Method</h1>
  
  <ol>
     <li>Obtain the Risk Factor (RF) from the Risk Factor Table (RFT) for the following items:</li>
	     <ul> <li>Technical</li> <li>Cost</li> <li>Schedule</li> </ul>
     <li>Obtain the appropriate Risk Percentage (RP) from the Risk Percentage Table (RPT), for the above items</li>
     <li>Calculate contingency percentage (CP) from the formula, CP = &Sigma RF(i) * RP(i), where <em>i</em> 
	      is Technical, Cost, and Schedule. </li>
     <li>The percentage of estimate, indicated by CP, is to be kept as reserve </li>
     
  </ol>
  
  <h1>Risk Factor Table</h1>
	<table  align="center" width="95%" border="1" cellpadding="4" cellspacing="0">
	<tr>
	 <th width="5%">RF</th> <th>Technical</th> <th>Cost</th><th>Schedule</th>
	</tr>

	<tr class="OddRow">
	  <td>1</td> 
	  <td>Existing component or off-the-shelf hardware</td>
	  <td>Off-the-shelf or catalog item</td>
	  <td>Not used</td>
	</tr>
	<tr class="EvenRow">
	  <td>2</td> 
	  <td>Minor modifications to an existing design</td>
	  <td>Vendor quote from established drawings</td>
	  <td>No schedule impact on any other item</td>
	</tr>
	<tr class="OddRow">
	  <td>3</td> 
	  <td>Existing modifications to an existing design</td>
	  <td>Vendor quote with some design sketches</td>
	  <td>Not used</td>
	</tr>
	<tr class="EvenRow">
	  <td>4</td> 
	  <td>New design within established product line</td>
	  <td>In-house estimate for item withing current production line</td>
	  <td>Delays completion of non-critical path subsystem item</td>
	</tr>
	<tr class="OddRow">
	  <td>6</td> 
	  <td>New design different from established product line with existing technology</td>
	  <td>In-house estimate for item with minimal company experience but related to existing capability</td>
	  <td>Not used</td>
	</tr>
	<tr class="EvenRow">
	  <td>8</td> 
	  <td>New design requires some R&D development but does not advance the stale-of-the-art</td>
	  <td>In-house estimate for item with minimal company experience and in-house capability</td>
	  <td>Delays completion of critical path subsystem item</td>
	</tr>
	<tr class="OddRow">
	  <td>10</td> 
	  <td>New design development of new technology that advances the state-of-the-art</td>
	  <td>Top-down estimate from analogous programs</td>
	  <td>Not used</td>
	</tr>
	<tr class="EvenRow">
	  <td>15</td> 
	  <td>New design way beyond the current state-of-the-art</td>
	  <td>Engineering judgement</td>
	  <td>Not used</td>
	</tr>

	 </tr>			 
	 </table>
 
  <h1>Risk Percentage Table</h1>
	<table  align="center" width="95%" border="1" cellpadding="4" cellspacing="0">
	<tr>
	 <th >Risk Category</th> <th >Condition</th> <th>RP</th>
	</tr>

	<tr class="OddRow">
	  <td rowspan="2">Technical</td> 
	  <td>Design or manufacturing concerns only</td>
	  <td>2%</td>
	</tr>
	<tr class="EvenRow">
	  <td>Design and manufacturing concerns</td>
	  <td>4%</td>
	</tr>
	<tr class="OddRow">
	  <td rowspan="3">Cost</td> 
	  <td>Material cost or labor rate concern</td>
	  <td>1%</td>
	</tr>
	<tr class="EvenRow">
	  <td>Material cost and labor rate concern</td>
	  <td>2%</td>
	</tr>
	<tr class="OddRow">
	  <td>Extraordinary material cost volatility concern (Global Material 
	      Uncertainty)</td>
	  <td>3%</td>
	</tr>
	<tr class="EvenRow">
	  <td rowspan="2">Schedule</td> 
	  <td>Multiple vendors</td>
	  <td>1%</td>
	</tr>
	<tr class="OddRow">
	  <td>Few vendors</td>
	  <td>2%</td>
	</tr>	
	</table>  
  <h1>Example</h1>
  
<?php require "qfooter.php" ?>