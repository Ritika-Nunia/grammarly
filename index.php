<html> 
  
<head> 
    <title>Grammarly</title> 
    <link rel="stylesheet" href="grammarly.css">
</head> 
  
<body> 
    <h1>SpellChecker</h1>
    <div class="MyContainer" align="center">
    <input type="file" class="files" name="file"id="file"> 
    </div>
        <div class="out">
        <p id="filecontent" contenteditable="True"></p> 
        </div>
      
    <script type="text/javascript"> 
        var a=document.getElementById('file').addEventListener('change', function() { 
              
            var fr=new FileReader(); 
            fr.readAsText(this.files[0]);
            fr.onload=function(){ 
                document.getElementById('filecontent').textContent=fr.result; 
                console.log(document.getElementById('filecontent').textContent)
                const ApiKey="3dVJb10M4gKyNJci";
                let ApiURL=`https://api.textgears.com/spelling?text=I+is+an+engeneer!&language=en-GB&key=${ApiKey}`;
                let request= new XMLHttpRequest();
                request.open("GET",ApiURL)
                request.send();
                request.onload=()=>{
                    console.log(request);
                    if (request.status==200){
                        console.log(JSON.parse(request.response));
                    }
                    else{
                        console.log(`error ${request.status} ${request.textContent}`)
                    }

                }
            }   
        }) 
       
        
    </script> 
</body> 
  
</html> 
   
  





   
