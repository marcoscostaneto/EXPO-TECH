const red = document.getElementById(
  "span");

  
  const ponto = document.querySelector(".quebraLink");
 
 function explosion(span) {
 
  if (span.classList == "span" && span
   .id == "span") {
 
 
   span.classList = "change";
 
 
   setTimeout(clearExplosion, 2000,
    span);
  } else if (span.classList == "span") {
 
   span.classList = "change02";
 
 
   setTimeout(clearExplosion, 2000,
    span);
  }
 }
 
 function clearExplosion(span) {
 
 
 
  span.classList = "span";
 }


 function ativar(){

  ponto.style.display = "inline";
 }