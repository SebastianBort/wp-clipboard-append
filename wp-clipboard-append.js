document.addEventListener('copy', function() {

   var selection = window.getSelection();  
   if(selection.toString().length < ClipboardAppend.minimum_length) {
        return false;
   } 
    
    var copytext = selection + '<br /><br />' + ClipboardAppend.text;          
        
    var newdiv = document.createElement('div'); 
    newdiv.style.position = 'absolute';
    newdiv.style.left = '-99999px';

    document.body.appendChild(newdiv);
    newdiv.innerHTML = copytext;
    selection.selectAllChildren(newdiv);

    window.setTimeout(function () {
        document.body.removeChild(newdiv);
    }, 100);
}); 