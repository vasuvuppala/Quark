<?php
/*
 * Description: Quark PHP Library. Contains common PHP functions.
 *
 */
 
/*
 * Function: GetQuote
 * Description: Return random quotes.
 * 
 * Modification History:
 */
 function GetQuote()
 {
    $Quotes = array();
	$Quotes[] = "<q>If you can't describe what you are doing as a process, you don't know what you're doing.</q> -W. Edwards Deming";
	$Quotes[] = "<q>The quality of a software system is governed by the quality of the process used to develop it.</q> -Watts Humphrey";
	$Quotes[] = "<q>It is always fastest to do the job right the first time.</q> -Watts Humphrey";
    $Quotes[] = "<q>Brooks Law: <q>Adding manpower to a late software project makes it later!</q>";
	$Quotes[] = "<q>The best way to get a project done faster is to start sooner</q> -Jim Highsmith";
	$Quotes[] = "<q>How does a project get to be a year late?... One day at a time</q> -Fred Brooks";
	$Quotes[] = "<q>Program testing can be used to show the presence of bugs, but never to show their absence!</q> -Edsger Dijkstra";
	$Quotes[] = "<q>Prolific programmers contribute to certain disaster.</q> -Niklaus Wirth";
	$Quotes[] = "<q>Design and programming are human activities; forget that and all is lost.</q> -Bjarne Stroustrup";
	$Quotes[] = "<q>Before software can be reusable it first has to be usable.</q> -Ralph Johnson ";
	$Quotes[] = "<q>Real programmers can write assembly code in any language.</q> -Larry Wall";
	$Quotes[] = "<q>You cannot teach beginners top-down programming, because they don't know which end is up.</q> -C.A.R. Hoare";
	$Quotes[] = "<q>Why do we never have time to do it right, but always have time to do it over?</q> -Anonymous";
	$Quotes[] = "<q>Better train people and risk they leave - than do nothing and risk they stay.</q> -Anonymous";
	$Quotes[] = "<q>Good judgment comes from experience, and experience comes from bad judgment.</q> -Frederick P. Brooks";
	$Quotes[] = "<q>Simplicity is prerequisite for reliability.</q> -Edsger W.Dijkstra";
	$Quotes[] = "<q>Make everything as simple as possible, but not simpler.</q> -Albert Einstein";
	$Quotes[] = "<q>I have always found that plans are useless, but planning is indispensable.</q> -Dwight Eisenhower";
	$Quotes[] = "<q>Wirth's law: Software gets slower faster than hardware gets faster.</q>";
	$Quotes[] = "<q>Nine people can’t make a baby in a month.</q> – Fred Brooks";
	$Quotes[] = "<q>Before software can be reusable it first has to be usable.</q> – Ralph Johnson";
	$Quotes[] = "<q>Physics isn't a religion. If it were, we'd have a much easier time raising money.</q> -Leon Lederman";
	$Quotes[] = "<q>All science is either physics or stamp collecting.</q> -Ernest Rutherford";
	$Quotes[] = "<q>You can always tell a physicist, but you can't tell him much.</q> - Anonymous";
	$Quotes[] = "<q>Science is the belief in the ignorance of experts.</q> -Richard Feynman";
	$Quotes[] = "<q>We adore chaos because we love to produce order.</q> -M. C. Escher";
	$Quotes[] = "<q>How many software engineers does it take to change a lightbulb? Just one, but the house falls down</q>";
    $Quotes[] = "<q>It is not enough to do your best: you must know what to do, and THEN do your best. -Deming</q>";
	$Quotes[] = "<q>The significant problems we face cannot be solved by the same level of thinking that created them. -Einstein</q>";
	$Quotes[] = "<q>A clever person solves a problem.A wise person avoids it</q> -Einstein";
	$Quotes[] = "<q>Any fool can write code that a computer can understand. Good programmers write code that humans can understand. -Fowler</q>";
	$Quotes[] = "<q>If builders built buildings the way programmers wrote programs, then the first woodpecker that came along would destroy civilization. -Weinberg</q>";
	$Quotes[] = "<q>Most of you are familiar with the virtues of a programmer. There are three, of course: laziness, impatience, and hubris. -Larry Wall</q>";
	$Quotes[] = "<q>The software isn't finished until the last user is dead</q> - Anonymous";
	$Quotes[] = "<q>For every complex problem there is an answer that is clear, simple, and wrong.</q> -Mencken";
	$Quotes[] = "<q>The goal of Computer Science is to build something that will last at least until we've finished building it</q> -Anonymous";
	$Quotes[] = "<q>Good judgment comes from experience, and experience comes from bad judgment</q> -Brooks";
	$Quotes[] = "<q>Measuring programming progress by lines of code is like measuring aircraft building progress by weight</q> -Bill Gates";
	$Quotes[] = "<q>The best performance improvement is the transition from the nonworking state to the working state</q> -Ousterhout";
	$Quotes[] = "<q>If the code and the comments disagree, then both are probably wrong.</q>";
	$Quotes[] = "<q>Remember that there is no code faster than no code.</q>";
	$Quotes[] = "<q>A language that doesn't have everything is actually easier to program in than some that do</q> -Ritchie";
	$Quotes[] = "<q>In theory, there is no difference between theory and practice. But, in practice, there is.</q>";
	$Quotes[] = "<q>It's not at all important to get it right the first time. It's vitally important to get it right the last time.</q>";
	$Quotes[] = "<q>The perfect project plan is possible if one first documents a list of all the unknowns.</q> -Langley";
	$Quotes[] = "<q>Software and cathedrals are much the same - first we build them, then we pray. </q>";
	$Quotes[] = "<q>If debugging is the process of removing bugs, then programming must be the process of putting them in</q> -Dijkstra";
	$Quotes[] = "<q>Always code as if the person who ends up maintaining your code will be a violent psychopath who knows where you live.</q>";
	$Quotes[] = "<q>If at first you don't succeed, call it version 1.0</q>";
	$Quotes[] = "<q>Science is organized knowledge. Wisdom is organized life</q> -Kant";
	$Quotes[] = "<q>There is something fascinating about science. One gets such wholesale returns of conjecture out of such a trifling investment of fact</q> -Mark Twain";
	
	
	return $Quotes[rand(0,count($Quotes)-1)];
}

/*
 * Function: GetArt
 * Description: Choose a randowm file from art/*.jpg, and return its name.
 * 
 * Modification History:
 */
function GetArt()
{   
    $Art = glob("art/*.jpg");
	
    return $Art[rand(0,count($Art)-1)];
}

/*
 * Function: PrintVersion
 * Description: Print revision and date from the given string. The string has to be in the format
 *                "$Revision: 1.7 $ $Date: 2010-03-30 10:59:20 $" as expanded by CVS after keyword-substitution.
 * 
 * Modification History:
 */
function PrintVersion($instr)
{   
    $verarr = array();
	$verarr = explode(" ",$instr);
	$datearr = explode("-",$verarr[4]);
    echo "Version: $verarr[1], Date: $datearr[1]-$datearr[2]-$datearr[0]";
}
?>