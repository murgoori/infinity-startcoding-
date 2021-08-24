<?php
$URL = "http://startcoding.epizy.com/"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>YouTube JSON Example</title>
    <meta name="description" content="Start Coding">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="../common/css/common.css">
    
<script type="text/javascript">
  const api = "AIzaSyCeuzC9nR3iMBMjrWquLLDV0Mc8zYgYpeU"; // Specify your api key here

  // Load API library
  function onLoad() {
    if(api) {
      gapi.client.load('youtube', 'v3', loadYouTubeApi);
    } else {
      document.getElementById('output').innerHTML += 'API key has not been specified!';
    }
  }

  // Set API Key
  function loadYouTubeApi() {
    gapi.client.setApiKey(api);
    search('sitepoint');
  }

  // Call the search.list()
  function search(queryTerm) {
    let request = gapi.client.youtube.search.list({
        part: 'id',
        q: queryTerm
    });
    // Execute the request call and output it in HTML view
    request.execute((response) => {
      const responseString = JSON.stringify(response, '', 2);
      document.getElementById('output').innerHTML += responseString;
    })
  }
</script>
<script src="https://apis.google.com/js/client.js?onload=onLoad" type="text/javascript"></script>
</head>
<body>

<?php include "../nav_main.php";?>

<h1>YouTube Search Results</h1>
<pre id="output"></pre>
</body>
</html>