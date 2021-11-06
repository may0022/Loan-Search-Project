<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
    <title>Loan Search</title>
</head>

<body>
    <nav>
        <div id="logo-img">
            <a href="home.php">
                <img src="img/logo1.png" alt="Loan Search">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="home.php">Home</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>

        </ul>
    </nav>
		<div class="outside">
		</div>
		
			<div class="wrapper2">
				<h1 class="section-heading">Loan Questionnaire</h1>
				<p>The following questions are for us to get a better understanding of your background to provide the best matches.</p>
			<form id="form-questionnaire">
				<div class="form-control">
					<label>1. How old are you?</label>
						<select>
							<option value="" disabled selected hidden>Select an Age Range</option>
							<option value="Under 18">Under 18</option>
							<option value="18-25">18-25</option>
							<option value="25-45">25-45</option>
							<option value="45 or older">45 or older</option>
						</select>
				</div>
  
				<div class="form-control">
					<label>2. Are you a U.S. Citizen?</label>
					<label for="citizen-yes"><input type="radio" id="citizen-yes" name="citizen">Yes</label></input>
					<label for="citizen-no"><input type="radio" id="citizen-no" name="citizen">No</label></input>
					<label for="citizen-prefer"><input type="radio" id="citizen-prefer" name="citizen">Prefer not to respond</label></input>
				</div>	
		
				<div class="form-control">
					<label>3. Choose an education level for a loan:</label>
						<select>
							<option value="" disabled selected hidden>Select an Education Level</option>
							<option value="Undergrad College">Undergrad College</option>
							<option value="Masters">Masters</option>
							<option value="Doctorate">Doctorate</option>
							<option value="Boot Camp">Boot Camp</option>
						</select>
				</div>	
				
				<div class="form-control">
					  <label>4. Choose a semester:</label>
						  <select>
							<option value="" disabled selected hidden>Select an Semester Period</option>
							<option value="Fall">Fall</option>
							<option value="Spring">Spring</option>
							<option value="Summer II">Maymester</option>
							<option value="Summer I">Summer I</option>
							<option value="Summer II">Summer II</option>
							<option value="Summer I">Winter I</option>
						  </select>
				 </div>
				 <div class="form-control">
					<label>5. What school are you attending? </label>
					<input type="text" placeholder="Enter School Name" />
				</div>
				
				<div class="form-control">
					<label>6. What will be your classification during the semester you are applying for this loan?</label>
					<input type="text" placeholder="Enter Classification" />
				</div>
		
				<div class="form-control">
					<label>7. Will you need a co-signer?</label>
					<label for="co-yes"><input type="radio" id="co-yes" name="co">Yes</label></input>
					<label for="co-no"><input type="radio" id="co-no" name="co">No</label></input>
				</div>	
		
				<div class="form-control">
					<label>8. What is your estimated annual income?</label>
					<input type="text" placeholder="Enter Estimated Annual Income"/>
				</div>
		
				<div class="form-control">
					<label>9. Will you be applying for in-state or out-of-state tuition?</label>
					<label for="tuition-in"><input type="radio" id="tuition-in" name="tuition">In-state</label></input>
					<label for="tuition-out"><input type="radio" id="tuition-out" name="tuition">Out-of-state</label></input>
				</div>
	
				<div class="form-control">
					<label>10. Do you have credit?</label>
					<label for="credit-yes"><input type="radio" id="credit-yes" name="credit">Yes</label></input>
					<label for="credit-no"><input type="radio" id="credit-no" name="credit">No</label></input>
				</div>
		 
				<div class="form-control">
					  <label>11. What is your credit score?</label>
						  <select>
							<option value="" disabled selected hidden>Select a Credit Score</option>
							<option value="not">Not Applicable</option>
							<option value="0-300">0-300</option>
							<option value="300-579">300-579</option>
							<option value="580-669">580-669</option>
							<option value="670-739">670-739</option>
							<option value="740-799">740-799</option>
							<option value="800-850">800-850</option>
						  </select>
				 </div>
		 
				 <div class="form-control">
					<label>12. What other way/s will your tuition be paid?(Ex. Financial aid, installments, etc.)</label>
					<input type="text" placeholder="Other Payment Methods" />
				</div>
				
				<div class="form-control">
					<label>13. What is the amount you will need to borrow? </label>
					<input type="text" placeholder="Estimated Borrowing Amount" />
				</div>
		
				<div class="form-control">
					<label for="comment"> Any comments or suggestions </label><textarea name="comment" id="comment" placeholder="Enter your comment here"></textarea>
				</div>
  
						<div>
							<center><a href="matches.html" class="btn-readmore">Submit</a>
								<input type="reset" class="btn-readmore" value="Reset"></center>
						</div>
		</form>
		</div>	
			<div class="outside2">
			</div>
		
	    <footer id="footer">
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                    <ul>
                        <li>
                            <a href="home.php">Home</a>
                        </li>
						<li>
                            <a href="login.php">Login</a>
                        </li>
						<li>
                            <a href="questionnaire.php">Questionaire</a>
                        </li>
						<li>
                            <a href="register.php">Make account</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                    </ul>
                </p>
            </div>

            <div id="right-footer">
                <h3>Follow us on</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Website Developed by KMZ</p>
            </div>
    </footer>
</body>
</html>