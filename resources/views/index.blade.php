<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        
    </head>
    <body>
            <div id="map" style="height: 800px; width:950px;">
            </div>
            <script src="{{ asset('/js/result.js') }}"></script>
            <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyAk_fQ4rIKcGRghjhKx4j73TT65ijMtlEI&callback=initMap" async defer>
	        </script>
    </body>
</html>
