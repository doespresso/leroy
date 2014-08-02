@if($_SERVER['HTTP_HOST'] != 'localhost')
@if(Setting::get('metrika')){{Setting::get('metrika')}}@endif
@endif