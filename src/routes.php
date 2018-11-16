<?php

Route::get('login/dingtalk', 'Yangzie\DingtalkLogin\DingtalkLogin@login')->name('login.dingtalk');;

Route::get('login/dingtalk/callback', 'Yangzie\DingtalkLogin\DingtalkLogin@callback');

