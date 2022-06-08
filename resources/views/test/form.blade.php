<!DOCTYPE html>
<html>
<head>
    <title>Say hello using the People API</title>
    <meta charset='utf-8' />
    <script>
        function start() {
            gapi.client.init({
                'apiKey': 'AIzaSyD9xob5sCFr3ftF5n2M7Q7SSLiJ9reCtHg',
                // Your API key will be automatically added to the Discovery Document URLs.
                'discoveryDocs': ['https://people.googleapis.com/$discovery/rest'],
                // clientId and scope are optional if auth is not required.
                'clientId': '363141720512-9hhorfordmbib5ev9bdq3q7i110qmooj.apps.googleusercontent.com',
                'scope': 'profile',
            }).then(function() {
                // 3. Initialize and make the API request.
                return gapi.client.people.people.get({
                    'resourceName': 'people/me',
                    'requestMask.includeField': 'person.names'
                });
            });
        };

        function loadClient() {
            gapi.load('client', start);
        }
    </script>
    <script async defer src="https://apis.google.com/js/api.js"
            onload="this.onload=function(){};loadClient()"
            onreadystatechange="if (this.readyState === 'complete') this.onload()"></script>
</head>
<body>
<div id="body-to-be-shown-before-gapi-load"></div>
</body>
</html>
