<!DOCTYPE html>
<html>
<head>
    <title>Say hello using the People API</title>
    <meta charset='utf-8' />
    <script>
        function start() {
            gapi.client.init({
                //'apiKey': 'AIzaSyD9xob5sCFr3ftF5n2M7Q7SSLiJ9reCtHg',
                'apiKey': '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',
                // Your API key will be automatically added to the Discovery Document URLs.
                'discoveryDocs': ['https://people.googleapis.com/$discovery/rest'],
                // clientId and scope are optional if auth is not required.
                'clientId': '363141720512-gs1r4e7ni17do4iuurn9fdd8of5vf7aq.apps.googleusercontent.com',
                'scope': 'profile',
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
