<?php

function generate_bootstrap_navbar(){
    $logged_in = $_SESSION['logged_in'] ?? false;

    #======= Nav Element Construction =======

    $navbar = '<nav class="navbar navbar-expand-lg my-2">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars fa-2x"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">';

    #======= Left Side Nav =======

    $navbar .= '<ul class="navbar-nav mr-auto"><li class="nav-item"><a class="nav-link" href="#">Test</a></li>';

    $navbar .= '</ul>';

    #======= Right Side Nav =======
    $navbar .= '<ul class="navbar-nav">';

    $navbar .= navbar_login($logged_in);

    $navbar .= '</ul>';

    #======= Nav Element Closing =======

    $navbar .= '</div></nav>';

    echo $navbar;

}

function navbar_login($logged_in){
    if ($logged_in == true){
        $return_string = '';
    }else{
        $return_string = '<li>
                              <a class="nav-link dropdown-toggle" href="#" id="navbar_login" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Log In
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar_login">
                                    <form class="px-3 py-2">
                                        <div class="form-group">
                                            <label for="login_email">Email Address</label>
                                            <input type="email" class="form-control" id="login_email" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="login_password">Password</label>
                                            <input type="password" class="form-control" id="login_password" placeholder="Password">
                                            <div class="help-block text-right small"><a href="">Forget your password?</a></div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block">Log In</button>                   
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="remember_check">
                                            <label class="form-check-label" for="remember_check">Remember Me</label>
                                        </div>        
                                        <div class="dropdown-divider"></div>                                 
                                        <button type="submit" class="btn btn-outline-secondary btn-sm btn-block">Register</button>                   
                                    </form>                
                              </div>
                          </li>';
    }

    return $return_string;

}