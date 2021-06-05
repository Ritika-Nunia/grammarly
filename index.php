<html> 
  
<head> 
    <title>Grammarly</title> 
    <link rel="stylesheet" href="grammarly.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="grammarly.js"></script>
</head> 
  
<body> 
    <h1>SpellChecker</h1>
    <div class="MyContainer" align="center">
    <input type="file" class="files" name="file"id="file" onchange="readFile(this)" > 
    <button type="button"  id="sendrequest"  onclick="upload()">Check</button>
    </div>
        <div class="out">
        <div id='container' class="d1" contenteditable="True"></div>
        <div id="custommenu" >
        <ul></ul>
        </div>
        </div>

</body> 
  
</html> 
