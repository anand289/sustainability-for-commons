

    
    var num = 0;
    var images = [ "img/blue.png", "img/green.png", "img/yellow.png"];
    

     function next(){         
         var header = document.getElementById("header");
         num++;
         if(num >= images.length){
             num=0;
         }
         header.src= images[num];
     }
    
    function prev(){
        var header = document.getElementById("header");
         num--;
         if(num < 0){
             num = images.length -1;
         }
         header.src = images[num];
     }

    function auto(){ 
        var header = document.getElementById("header");
        num++; 
        if (num >= images.length) 
        {
            num = 0;
        }

        header.src = images[num]; 
    }


