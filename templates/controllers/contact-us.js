<!-- Loading in Google Maps SDK -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB46-TCyMIFA19xfCDYI-pLX47JUC2Oa3c"></script>

    <!-- Google Maps Setup -->
    <script>
        function initMap() {
            <!-- List of Locations -->
            const locations = [
                {name: "Muscle Shoals", lat:34.744414771070495, lng:-87.63523286206879},
                {name: "Florence", lat:34.835429169427655, lng:-87.6699067660926},
                {name: "Sheffield", lat:34.75847138424265, lng:-87.69867588942668},
                {name: "Tuscumbia", lat:34.73132619187172, lng:-87.70257229955595}
            ];

            <!-- Creating a Google map in div -->
            const map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {lat:34.784806293875285, lng:-87.6692313244467}
            });

            <!-- Setting Circle for Each Location -->
            locations.forEach(location => {
                <!-- Creating Circles -->
                new google.maps.Circle({
                    strokeColor: '#FF0000',
                    strokeOpacity: 0.8,
                    strokeWeight:2,
                    fillColor: '#FF0000',
                    fillOpacity: 0.35,
                    map,
                    center: {lat:location.lat, lng:location.lng},
                    radius: 5000
                });

                <!-- Marker with Name -->
                new google.maps.Marker({
                    position: {lat:location.lat, lng:location.lng},
                    map,
                    title: location.name,
                });
            });
        }

        <!-- Loading initMap Function -->
        window.onload = initMap;
    </script>