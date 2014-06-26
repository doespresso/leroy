<div class="row">
    @foreach ($afishas as $event)
    <?php
    $date = new Date($event->day);
    $now = strtotime(new Date('now'));
    if ($now > strtotime($date)) {
        $class = ' past';
    } else {
        $class = '';
    }
    ?>
    <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="event{{$class}}" @if ($event->img) data-attr-img="{{url('/')}}/uploads/afisha/big/{{$event->img}}" @endif data-attr-video="" id="event{{$event->id}}" itemscope itemtype="http://schema.org/Event">
        <date itemprop="startDate" content="{{date('c',strtotime($date))}}">
                <figure class="dayofmonth">{{$date->day}}</figure>
                <figure class="month">{{Lang::get('date.month.'.date('n',strtotime($date)))}}</figure>
            </date>
            <figure class="title" itemprop="name">
                {{$event->title}}
            </figure>
            <!--    <figure class="dayofweek">{{Lang::get('date.day.'.date('l',strtotime($date)))}} / {{date('H:i',strtotime($date))}}</figure>-->
             <time></time>
            <figure class="desc">
                {{$event->short}}
            </figure>
        </div>
    </div>
    @endforeach
</div>


