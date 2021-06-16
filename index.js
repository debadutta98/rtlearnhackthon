window.onload=function(){
const urlSearchParams = new URLSearchParams(window.location.search);
const params = Object.fromEntries(urlSearchParams.entries());
  if(typeof(params)!='undefined')
  {
      if(typeof(params.massage)!='undefined')
      {
         alert(params.massage);  
      }
  }
}
