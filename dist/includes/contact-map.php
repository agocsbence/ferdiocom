<div id="map" style="width: 100%; height: 100%;"></div>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var location = { lat: 55.66775, lng: 12.55591 };
        // The map, centered at Uluru
        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: location,
            disableDefaultUI: true,
            styles: [
                {
                    featureType: "all",
                    elementType: "geometry",
                    stylers: [
                        {
                            visibility: "simplified",
                        },
                    ],
                },
                {
                    featureType: "all",
                    elementType: "geometry.stroke",
                    stylers: [
                        {
                            color: "#eaecf2",
                        },
                    ],
                },
                {
                    featureType: "all",
                    elementType: "labels.text.fill",
                    stylers: [
                        {
                            color: "#9398a7",
                        },
                        {
                            gamma: "1.00",
                        },
                        {
                            saturation: "0",
                        },
                    ],
                },
                {
                    featureType: "administrative",
                    elementType: "labels.icon",
                    stylers: [
                        {
                            color: "#9398a7",
                        },
                    ],
                },
                {
                    featureType: "landscape",
                    elementType: "geometry.fill",
                    stylers: [
                        {
                            color: "#f7f8fa",
                        },
                    ],
                },
                {
                    featureType: "poi",
                    elementType: "all",
                    stylers: [
                        {
                            visibility: "on",
                        },
                    ],
                },
                {
                    featureType: "poi",
                    elementType: "geometry.fill",
                    stylers: [
                        {
                            color: "#eaecf2",
                        },
                    ],
                },
                {
                    featureType: "poi",
                    elementType: "labels.icon",
                    stylers: [
                        {
                            color: "#9398a7",
                        },
                    ],
                },
                {
                    featureType: "poi.business",
                    elementType: "all",
                    stylers: [
                        {
                            visibility: "off",
                        },
                    ],
                },
                {
                    featureType: "road",
                    elementType: "geometry",
                    stylers: [
                        {
                            color: "#fffffe",
                        },
                    ],
                },
                {
                    featureType: "road",
                    elementType: "labels.text.fill",
                    stylers: [
                        {
                            color: "#bec1ca",
                        },
                    ],
                },
                {
                    featureType: "road",
                    elementType: "labels.icon",
                    stylers: [
                        {
                            visibility: "off",
                        },
                    ],
                },
                {
                    featureType: "road.highway",
                    elementType: "labels.icon",
                    stylers: [
                        {
                            visibility: "off",
                        },
                    ],
                },
                {
                    featureType: "transit",
                    elementType: "geometry.fill",
                    stylers: [
                        {
                            color: "#eaecf2",
                        },
                    ],
                },
                {
                    featureType: "transit",
                    elementType: "labels.icon",
                    stylers: [
                        {
                            saturation: "-85",
                        },
                        {
                            lightness: "0",
                        },
                        {
                            gamma: "1.3",
                        },
                        {
                            hue: "#9398a7",
                        },
                    ],
                },
                {
                    featureType: "transit.line",
                    elementType: "geometry.fill",
                    stylers: [
                        {
                            color: "#eaecf2",
                        },
                    ],
                },
                {
                    featureType: "transit.line",
                    elementType: "labels.text.stroke",
                    stylers: [
                        {
                            color: "#ffffff",
                        },
                    ],
                },
                {
                    featureType: "water",
                    elementType: "geometry.fill",
                    stylers: [
                        {
                            color: "#d4d6dc",
                        },
                    ],
                },
                {
                    featureType: "water",
                    elementType: "labels.text.fill",
                    stylers: [
                        {
                            color: "#9398a7",
                        },
                    ],
                },
            ],
        });
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: "https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5d7904ba33ee9588641d2c81_marker.svg",
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxY0Oe1gxAFqwa24I5gKBLuKW6vT8jGLI&callback=initMap"></script>