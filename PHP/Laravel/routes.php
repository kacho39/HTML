<?php

// Redirects

// Returning A Redirect
return Redirect::to('user/login');
// Returning A Redirect With Flash Data
return Redirect::to('user/login')->with('message', 'Login Failed');