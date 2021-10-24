<link rel="stylesheet" href="login.css">
<div class="main-popup">
  <div class="popup-header">
    <div id="popup-close-button"><a href="#"></a></div>
    <ul>
      <li><a href="#" id="sign-in">Sign In</a></li>
      <li><a href="#" id="register">Register</a></li>
    </ul>
  </div><!--.popup-header-->
  <div class="popup-content">
    <form action="#" class="sign-in">
      <label for="email">Email:</label>
      <input type="text" id="email">
      <label for="password">Password:</label>
      <input type="password" id="password">
      <p class="check-mark">
        <input type="checkbox" id="remember-me">
        <label for="remember-me">Remember me</label>
      </p>
      <input type="submit" id="submit" value="Submit">
    </form>
   
    <form action="#" class="register">
      <label for="email-register">Email:</label>
      <input type="text" id="email-register">
      <label for="password-register">Password:</label>
      <input type="password" id="password-register">
      <label for="password-confirmation">Confirm Password:</label>
      <input type="password-confirmation" id="password-confirmation">
      <p class="check-mark">
        <input type="checkbox" id="accept-terms">
        <label for="accept-terms">I agree to the <a href="#">Terms</a></label>
      </p>
      <input type="submit" id="submit" value="Create Account">
    </form>
  </div><!--.popup-content-->
</div><!--.main-popup-->

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="login.js"></script>