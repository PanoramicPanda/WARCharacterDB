<?php

function generate_bootstrap_navbar(){
    $logged_in = $_SESSION['logged_in'] ?? false;

    echo '
           <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                  </ul>
                  <ul class="navbar-nav">
                      <li>
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="login_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-sign-in-alt"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="login_menu">
                                <form class="px-4 py-3">
                                    <div class="form-group">
                                        <label for="login_email">Email Address</label>
                                        <input type="email" class="form-control" id="login_email" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="login_password">Password</label>
                                        <input type="password" class="form-control" id="login_password" placeholder="Password">
                                        <div class="help-block text-right small"><a href="">Forget the password ?</a></div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">Login</button>                   
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="remember_check">
                                        <label class="form-check-label" for="remember_check">Remember Me</label>
                                    </div>        
                                    <div class="dropdown-divider"></div>                                 
                                    <button type="submit" class="btn btn-outline-secondary btn-sm btn-block">Register</button>                   
                                </form>                
                          </div>
                      </li>
                  </ul>
              </div>
           </nav>';
}