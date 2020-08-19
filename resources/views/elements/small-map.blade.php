@php
     $title = option('address_title');
     $address = option('address');

     $pins = option('pins');
    $pinsArray = [];

    if($pins) {
        foreach ($pins as $pin) {
        $pinObject = [];
        $pinObject['pin'] = $pin['pin'];
        // $pinObject['pin']['lat'] = $pin['pin']['lat'];
        // $pinObject['pin']['lng'] = $pin['pin']['lng'];
        $pinObject['content'] = $pin['tooltip'];
        $pinObject['icon'] = $pin['icon']['url'];

        // echo "<pre>";
        //     print_r($pinObject['pin']);
        // echo "</pre>";
    
        array_push($pinsArray, $pinObject);
        }
    }


    $pinsJSON = json_encode($pinsArray);
@endphp

<div class="small-map">
    <div class="small-map__header">
        <h2 class="small-map__title">{{ $title }}</h2>
        <p class="small-map__text">
            @svg('pin', 'small-map__icon')
            {{ $address }}
        </p>
    </div>
    <div class="small-map__map" id="small-google-map" small-google-map data-pins="{{ $pinsJSON }}"></div>
</div>