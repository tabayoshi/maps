// googleMapsAPIを持ってくるときに,callback=initMapと記述しているため、initMap関数を作成
function initMap() {
    // welcome.blade.phpで描画領域を設定するときに、id=mapとしたため、その領域を取得し、mapに格納します。
    map = document.getElementById("map");
    // 最初に表示する地点（三和電気土木工事）
    let sanwadenki = {lat: 36.0563143,  lng: 136.2467977};
    // オプションを設定
    opt = {
        zoom: 16, //地図の縮尺を指定
        center: sanwadenki, //センターを東京タワーに指定
    };
    // 地図のインスタンスを作成します。第一引数にはマップを描画する領域、第二引数にはオプションを指定
    mapObj = new google.maps.Map(map, opt);

    // ピンの表示
    marker = new google.maps.Marker({
        position: sanwadenki,
        map: mapObj,
        title: '三和電気土木工事',
    });

    // マーカーの吹き出し
    infoWindow = new google.maps.InfoWindow({ //吹き出しの追加
        content: '<div class="map">三和電機土木工事</div>' // 吹き出しに対する内容
    });
    marker.addListener('click', function() {
        infoWindow.open(map, marker);
    });
}