
<?php require "qheader.php" ?>

  <div class="PageTitle">Guideline: Release Management</div>
  <div class="DocVersion">
   <?php PrintVersion('$Revision: 1.3 $ $Date: 2010-02-12 15:19:59 $') ?>
  </div>
  <h1>Introduction</h1>
	 <p>This document provides the guidelines for releasing a software product. Refer to the
		<a href="proc-release.php">Release Software Product procedure</a> for the steps involved in 
		releasing a software. The software release procedure is followed for both integration 
		(system-level) testing and user acceptance testing. Hence, the software is released prior to 
		integration testing. This results in more number of releases, compared to releasing the software
		after integration testing, but provides better and standardized testing process.</p>
  <h1>Release ID</h1>
	 Each released version of a software is identified by a unique identifier, called Release ID (RID). The 
	 RID must be easily discernible from the installation; this is useful for reporting defects. For GUI-based 
	 executables, it must be available at
	 Help -> About. For command-line software, it must be available through an option (-v). For libraries,
     it could be part of the file name.	
	 <p>The RID	 must be in the following format: <b>M.N.I Q#</b>
	  <ul>
		 <li>M is the Major number. It indicates major changes, new features, and incompatibility 
			(backward or forward)</li>
		 <li>N is the Minor number. It indicates small changes, bug-fixes, minor enhancements. Minor 
			 releases should be backward compatible.</li>
		 <li>I is the optional Micro number. It indicates very small changes and bug-fixes only. 
			 It should be backward and forward compatible.</li>
		 <li>Q is an optional qualifier. It can be ‘b’ for beta releases, ‘p’ for patches. '#' is the sequence number for 
		   the qualifier. Beta releases cannot have patches.  All beta releases lead to the production 
		   release of the corresponding M.N.I release. </li>
	  </ul>
  <h1>Production Release</h1>
     <p>Our deployment policy is to have only one production release for a software at a given time. When a new production
	 version is released, the old one is removed from all installations, and it is replaced with the new release.
     The following is the recommended way for achieving this with a version control system:</p>
	 <ul>
	    <li>Regular development work is done using the trunk</li>
	    <li>Each production release results in a branch</li>
		<li>Defects in the production version must be fixed on the corresponding branch</li>
		<li>Other enhancements are continued on the trunk</li>
		<li>Before releasing a new production version, the last production's branch is merged on to the trunk </li>
	</ul>
	<p>This is illustrated in the diagram below. The first release is 1.0 b0. It is not a production release;
	it is for system-level testing (quality control). The second release, 1.0 b1,  is again for system-level 
	testing. The first production release is 1.0; it results in the first branch in the source code tree. 
	Enhancements continue to be
	made to the current source code, toward 2.0 b0 release. In the meantime, if a defect is reported on the
	the production version (1.0), it is fixed on the branch. This may involve checking out the code from the branch,
	repairing the defect, and then committing the source back to the branch. Once the bug is fixed, release 1.1 b0 is put out for
	testing. Once the testing is complete, a new production version, 1.1,  is released. </p>
	
	<div class="FlowDiag">
   		    <a href="images/bnm.png"  target="_blank" title="Branch n Merge">
		       <img title="Branch n Merge" src="images/bnm.png" border="0" width="100%">
			</a>
    </div>
	<br>
    <p>The source code of release 1.1 may or may not be merged with the current enhancements; this is left 
	to the discretion of the development team. However, the next production version, 2.0, must include all
	the changes from the branch for release 1.x. There can be exceptions to this rule, for example, if version 
	2.0 has a very different architecture from version 1.x then the sources need not be merged. If there are
	changes to previous production version (1.x), while the next one is being tested (2.0 b0), those changes
	still must be incorporated into the next release, possibly by having another test release (2.0 b1). </p> 
	
	
<?php require "qfooter.php" ?>
 