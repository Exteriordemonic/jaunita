@php
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

    <div class="map" id="google-map" google-map data-pins="{{ $pinsJSON }}"></div>