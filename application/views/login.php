<div id="div-login-form">
    <!-- login form -->
    
    <div class="row" style="margin-top: 25%;">
            <div class="col">
            </div>
            <div class="col">
                
              <?php if(isset($error_message) && $error_message != '') { ?>
                <div style="color: red; height: 10px; margin-bottom: 10px;"><?php echo $error_message; ?></div>
              <?php } ?>
              <div style="background-color: #8064A2; height: 10px; margin-bottom: 10px;"></div>
              <form method="POST">
                <div class="form-group">
                    <label class="label-text-color " for="txt-email"><b>Email address</b></label>
                  <input type="email" class="form-control" id="txt-email" name="txt-email" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label class="label-text-color " for="txt-password"><b>Password</b></label>
                  <input type="password" class="form-control" id="txt-password" name="txt-password" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="chk-remember-me">
                  <label class="label-text-color" class="form-check-label" for="chk-remember-me">Remember</label>
                </div>
                  <div class="form-group" style="margin-top: 15px;">
                   <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
                
              </form>
            </div>
            <div class="col">
            </div>
       </div>
</div>