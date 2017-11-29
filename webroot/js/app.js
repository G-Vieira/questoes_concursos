function showIntro(){
  $("#intro").show();
  $("#introImg").attr("src","/questoes_concursos/webroot/img/intro.gif");
  
  setTimeout(
  function(){
    $("#intro").hide();
  }, 2500);
}

function loadingGif(){
  $("#mascara").show();
  $("#mascaraImg").attr("src","/questoes_concursos/webroot/img/loading.gif");
  
  setTimeout(
  function(){
    $("#mascara").hide();
  }, 2000);
}