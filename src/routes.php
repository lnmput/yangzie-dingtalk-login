<?php

Route::get('login/dingtalk', 'Yangzie\Dingtalk\DingtalkLogin@login')->name('login.dingtalk');;

Route::get('login/dingtalk/callback', 'Yangzie\Dingtalk\DingtalkLogin@callback');

