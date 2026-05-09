<!DOCTYPE html><html><head><meta charset="utf-8"><title>Signup</title><link rel="stylesheet" href="automation_playground.css"></head><body><div class="container"><div class="nav"><a href="/index.php">Home</a></div>
<h2 id="signup-title">Signup Module</h2>
<form id="signup-form" class="panel">
<label>Email</label><input id="signup-email" data-testid="signup-email" type="email" required>
<label>First Name</label><input id="signup-first-name" required><label>Last Name</label><input id="signup-last-name" required>
<label>Password</label><input id="signup-password" type="password" required>
<div class="inline"><input id="gender-mr" name="gender" type="radio"><label for="gender-mr">Mr</label><input id="gender-mrs" name="gender" type="radio"><label for="gender-mrs">Mrs</label></div>
<div class="inline"><select id="dob-day"><option>01</option><option>15</option></select><select id="dob-month"><option>Jan</option><option>May</option></select><select id="dob-year"><option>1990</option><option>2000</option></select></div>
<div class="inline"><input id="newsletter-optin" type="checkbox"><label for="newsletter-optin">Newsletter</label><input id="offers-optin" type="checkbox"><label for="offers-optin">Offers</label></div>
<label>Address</label><input id="signup-address"><label>Company</label><input id="signup-company"><label>City</label><input id="signup-city"><label>State</label><input id="signup-state"><label>Zip</label><input id="signup-zip"><label>Mobile</label><input id="signup-mobile">
<button id="signup-submit" class="btn" type="submit">Submit</button> <button id="signup-reset" class="btn secondary" type="reset">Reset State</button>
<div id="signup-result-message" class="result hidden"></div></form></div>
<script>document.getElementById('signup-form').addEventListener('submit',e=>{e.preventDefault();setTimeout(()=>{const em=document.getElementById('signup-email').value;const fn=document.getElementById('signup-first-name').value;const ln=document.getElementById('signup-last-name').value;const box=document.getElementById('signup-result-message');box.classList.remove('hidden');box.textContent=`SIGNUP_SUCCESS|email=${em}|name=${fn} ${ln}`;},400);});</script>
</body></html>
