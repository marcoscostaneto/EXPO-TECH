var el = document.getElementById(
    "pac");
   
  var pri = document.getElementById(
    "principal");

    var link = document.getElementById(
      "link");
  
  function mudou() {
   
   if (el.classList == "cancelar" || pri.classList == "principal2") {
     
   
   el.classList.toggle("box");
   pri.classList.toggle("principal");
  }else{
    pri.classList.toggle("principal2");
  }
  }
  
  function reiniciou(){
    
    el.classList = "cancelar";
    pri.classList = "cancelar";
    
  }


  function ativar(){

    link.style.display = "inline";
  }
  