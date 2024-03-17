<?php
/**
 * Craigbavender.org
 *
 * Page: Projects – LSW
 * Author: Craig
 * Date: X
 */
?>

<div class="row">
	<div class="col-12">
		<h1>Logo Sportswear Exam Submission</h1>
		
		<p style="margin-top: 20px;"><u>John and team</u>: Thank you for putting this Exam together. There are a lot of moving pieces here, and I can tell this took quite some time to assemble. I appreciate you sharing it with me. These were some very fun problem solving experiments!</p>
		<p>There were multiples instances where I felt I wanted to adjust the prompt or the code provided to make my solution more elegant, but I stopped myself. I strictly went through these exercises without altering any provided data in the PHP files.</p>
		<p>I understand that in some cases, the intention is to test my ability to adapt, but others it may be to test my ability to improve. In some small cases, I did slightly adjust or add to the provided HTML or JS, for usablity. See my notes for each below.</p>

		<hr>

		<p>Provided below are demo links, raw code links, and the notes to the prompts I completed, in order:</p>

		<ol>
			<li>
				<p>
					<b>SQL: Prompts 1 – 5</b></br>
					View SQL File: <a href="https://craigbavender.org/logosportswear/final/lsw_exam_sql.sql">https://craigbavender.org/logosportswear/final/lsw_exam_sql.sql</a></br>
					Notes:<br>
					<span class="thoughts">
						– Fairly straightforward SQL requests. Some data Concat and IF statement usage in selects, but for the most part, no issues.<br>
						– Prompt #3 did not specifically ask to Group Concat departments and managers, so multiple rows exist for each employee, where departments have multiple managers (all depts have > 1). This ends up returning a lot of extra rows just to add in the additional data. Depending on the use-case of the result, this could very well be distracting to other teams. But, in our case, sometimes this complete expansion of data can make scripting something quite a bit easier when not having to worry about concatenated data.<br>
					</span>
				</p>
			</li>
			<li>
				<p>
					<b>PHP: form_validation.php</b></br>
					View: <a href="https://craigbavender.org/logosportswear/final/scripts/form_validation.php">https://craigbavender.org/logosportswear/final/scripts/form_validation.php</a></br>
					Code: <a href="https://craigbavender.org/logosportswear/final/scripts/form_validation.txt">form_validation.txt</a></br>
					Notes:<br>
					<span class="thoughts">
						– The prompt asked to build JS form validation, following the rules set in the HTML Table above. <br>
				        – I changed the Date <i>text</i> field to type=“date” for better usability.<br>
        				– I also removed the JS Alerts on submit, and opted to use a collective array of errors that render in-form. I find this to be more user friendly. I'm not a huge fan of JS’s native Alert popups.<br>
					</span>
				</p>
			</li>
			<li>
				<p>
					<b>PHP: report.php</b></br>
					View: <a href="https://craigbavender.org/logosportswear/final/scripts/report.php">https://craigbavender.org/logosportswear/final/scripts/report.php</a></br>
					Code: <a href="https://craigbavender.org/logosportswear/final/scripts/report.txt">report.txt</a></br>
					Notes:<br>
					<span class="thoughts">
						– The prompt asked to build JS form validation, following the rules set in the HTML Table above. <br>
				        – I changed the Date <i>text</i> field to type=“date” for better usability.<br>
        				– I also removed the JS Alerts on submit, and opted to use a collective array of errors that render in-form. I find this to be more user friendly. I'm not a huge fan of JS’s native Alert popups.<br>
					</span>
				</p>
			</li>
			<li>
				<p>
					<b>PHP: tax_calc.php</b></br>
					View: <a href="https://craigbavender.org/logosportswear/final/scripts/tax_calc.php">https://craigbavender.org/logosportswear/final/scripts/tax_calc.php</a></br>
					Code: <a href="https://craigbavender.org/logosportswear/final/scripts/tax_calc.txt">tax_calc.txt</a></br>
					Notes:<br>
					<span class="thoughts">
					    <b>Errors, in order of discovery:</b><br>
						– 1. In Foreach loop… <i>GetTaxRate</i> is being provided an <i>Order ID</i>, but is expecting a State Abbreviation. Fixed.<br><br>
						– 2. Tax Amount is being calculated incorrectly. The collected CT “Tax Rate” value needs to be handled as a decimal. In the <i>$tax_amount</i> calculation I adjusted <i>$tax_rate</i> by dividing by 100 to convert to a decimal.<br><br>
						– 3. Final error appears in the <i>$arr_orders</i> array. The final item is also a CT address, but is labelled (typo?) as “Ct” not “CT.” The PHP array specifically comments to not modify, so I adjusted the function <i>GetTaxRate</i> to perform a strtoupper() on the parameter to fix the problem.
					</span>
				</p>
			</li>
			<li>
				<p>
					<b>PHP: edit_table.php</b></br>
					View: <a href="https://craigbavender.org/logosportswear/final/scripts/edit_table.php">https://craigbavender.org/logosportswear/final/scripts/edit_table.php</a></br>
					Code: <a href="https://craigbavender.org/logosportswear/final/scripts/edit_table.txt">edit_table.txt</a></br>
					Notes:<br>
					<span class="thoughts">
				    	– Clicking the left column "Edit" text will launch the Dialog editor.<br>
				    	– This was my first use of jQuery UI <i>Dialog</i> boxes. I'm sure there are some existing helper methods that could have made this a little more plug-and-play, but it was simple enough to figure out after reviewing some examples in documentation.
					</span>
				</p>
			</li>
		</ol>

		<p>Lastly, the only prompt I opted to not complete was the react.php one. John and I spoke about it being optional, and for the sake of time, I'll opt to skip for now. That said, I have no problem completing this React prompt, but please let me know if you would like to see my solution.</p>
	</div>
</div>

<style>
	header {
	    visibility: hidden;
    	height: 0;
	}
</style>	