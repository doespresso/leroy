<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//echo public_path() . '/uploads/afisha/big/';

Route::get('/', array('as' => 'home','uses'=>'HomeController@index'));


Route::resource('afishas', 'AfishasController');
Route::resource('cats', 'CatsController');
Route::resource('items', 'ItemsController');
Route::resource('photos', 'PhotosController');


Route::get('photos/gal/{gal}', 'PhotosController@gal');



Route::get('logout', array('as' => 'logout', function () { }))->before('auth');
Route::get('logout', array('as' => 'logout', function () {
    Auth::logout();
    return Redirect::route('home')
        ->with('flash_notice', 'You are successfully logged out.');
}))->before('auth');

Route::get('profile', array('as' => 'profile', function () {
    return View::make('profile');
}))->before('auth');

Route::filter('guest', function()
{
    if (Auth::check())
        return Redirect::route('home')
            ->with('flash_notice', 'You are already logged in!');
});


Route::get('login', array('as' => 'login', function () {
    return View::make('login');
}))->before('guest');

Route::post('login', function () {
    $user = array(
        'email' => Input::get('email'),
        'password' => Input::get('password')
    );

    if (Auth::attempt($user)) {
        return Redirect::route('home')
            ->with('flash_notice', 'You are successfully logged in.');
    }

    // authentication failure! lets go back to the login page
    return Redirect::route('login')
        ->with('flash_error', 'Your username/password combination was incorrect.')
        ->withInput();
});


Route::filter('auth', function()
{
    if (Auth::guest())
        return Redirect::route('login')
            ->with('flash_error', 'You must be logged in to view this page!');
});









Route::get('btc', function()
{

    $start = microtime(true);
    $inst = [
        ['name'=>'btc_usd'],
        ['name'=>'btc_eur'],
        ['name'=>'btc_rur'],
        ['name'=>'ltc_btc'],
        ['name'=>'ltc_usd'],
        ['name'=>'nmc_btc'],
        ['name'=>'usd_rur'],
        ['name'=>'eur_usd'],
        ['name'=>'nvc_btc'],
        ['name'=>'trc_btc'],
        ['name'=>'ppc_btc'],
        ['name'=>'ftc_btc'],
    ];


    $mh = curl_multi_init();
    $chs = array();

    foreach ($inst as $key => $i) {
        echo $i['name']."<br/>";
        $chs['name'] = $i['name'];
        $chs['ch'] = ( $ch = curl_init() );
        curl_setopt( $ch, CURLOPT_URL, "https://btc-e.com/api/2/".$i['name']."/depth" );
        curl_setopt( $ch, CURLOPT_HEADER, 0 );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_multi_add_handle( $mh, $ch );
    }

    $running=null;

    while( ($mrc = curl_multi_exec($mh, $running))==CURLM_CALL_MULTI_PERFORM );
    while($running && $mrc == CURLM_OK){
        if($running and curl_multi_select($mh)!=-1 ){
            do{
                $mrc = curl_multi_exec($mh, $running);
                if( $info=curl_multi_info_read($mh) and $info['msg'] == CURLMSG_DONE ){
                    $ch = $info['handle'];
                    // смотрим http код который он вернул
//                    var_dump($status=curl_getinfo($ch));//,CURLINFO_HTTP_CODE);
                    // и собственно что он вернул

                    echo $data=curl_multi_getcontent($info['handle']);
                    $ask_bid = json_decode($data,true);
                    echo "<hr>";
                    $ask = $ask_bid["asks"];
                    foreach ($ask as $order){
                        echo "price: ".$order[0]." qty: ".$order[1];
                        echo "<br/>";
                    }


                    echo "<hr>";
                    curl_multi_remove_handle($mh, $ch);
                    curl_close($ch);
                }
            }while ($mrc == CURLM_CALL_MULTI_PERFORM);
        }
        usleep(100);
    }


    curl_multi_close($mh);

//    $ch = curl_init();
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; BTCE PHP client; '.php_uname('s').'; PHP/'.phpversion().')');
//    curl_setopt($ch, CURLOPT_URL, 'https://btc-e.com/api/2/btc_usd/trades');
//    $res = curl_exec($ch);
//    $dec = json_decode($res, true);
//    print_r($dec);
//    foreach ($dec as $o) {
//        echo $o['trade_type']." ".$o['price'];
//        echo "<br/>";
//    }
//    $ch = curl_init();
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; BTCE PHP client; '.php_uname('s').'; PHP/'.phpversion().')');
//    curl_setopt($ch, CURLOPT_URL, 'https://btc-e.com/api/2/btc_eur/trades');
//    $res = curl_exec($ch);
//    $dec = json_decode($res, true);
//    print_r($dec);
//    foreach ($dec as $o) {
//        echo $o['trade_type']." ".$o['price'];
//        echo "<br/>";
//    }


    echo microtime(true) - $start;

});