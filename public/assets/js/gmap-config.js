$(function () {

    var cluster;
    var colors = "black brown green purple yellow grey orange white".split(" ");

    // create colors checkbox and associate onChange function
    $('#gmap')
      .gmap3({
        center: [46.578498,2.457275],
        zoom: 4,
        
      })
      .then(function (map) {
          waitForBounds(map);
      });

    function waitForBounds(map){
      var ne, sw, bounds = map.getBounds();
      if (!bounds) {
        google.maps.event.addListenerOnce(map, 'idle', function () {
            waitForBounds(map)
          }
        );
        return;
      }
      ne = bounds.getNorthEast();
      sw = bounds.getSouthWest();
      randomMarkers(ne.lat(), sw.lng(), sw.lat(), ne.lng());
    }

    function randomMarkers(lat1, lng1, lat2, lng2) {
      var i, lat, lng, color,
          list = [],
          rlat = lat2 - lat1,
          rlng = lng2 - lng1;
      for (i = 0; i < 100; i++) {
        lat = lat1 + rlat * Math.random();
        lng = lng1 + rlng * Math.random();
        color = colors[i % colors.length];
        list.push({
          position: [lat, lng],
          icon: "http://maps.google.com/mapfiles/marker_" + color + ".png",
          _tag: color
        });
      }

      $('#gmap')
        .gmap3()
        .cluster({
          size: 150,
          markers: list,
          cb: function (markers) {
            if (markers.length > 1) { // 1 marker stay unchanged (because cb returns nothing)
              if (markers.length < 20) {
                return {
                  content: "<div class='cluster cluster-1'>" + markers.length + "</div>",
                  x: -26,
                  y: -26
                };
              }
              if (markers.length < 50) {
                return {
                  content: "<div class='cluster cluster-2'>" + markers.length + "</div>",
                  x: -26,
                  y: -26
                };
              }
              return {
                content: "<div class='cluster cluster-3'>" + markers.length + "</div>",
                x: -33,
                y: -33
              };
            }
          }
        })
        .then(function (_cluster) {
            cluster = _cluster;
        })
      ;
    }

    $("#onOff").change(function () {
      if ($(this).is(":checked")){
        cluster.enable();
      } else {
        cluster.disable();
      }
    });

  });