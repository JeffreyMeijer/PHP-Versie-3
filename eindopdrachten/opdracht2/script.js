$(document).ready(function(){
  let cardschosen = 0;
  let amountofcards = 16;
  let idarray = [];
  let valarray = [];
  $(".cellen").each(function(index){
      $(this).click(function(){
        if(valarray.length < 2){
          idarray.push($(this).prop('id'));
          valarray.push($(this).val());
          $(this).css('backgroundColor', 'white');
          cardschosen++;
          if(valarray[0] == valarray[1] && cardschosen == 2){
            setTimeout(function(){
              for(var i = 0; i < idarray.length; i++){
                $(`#${idarray[i]}`).remove();
                amountofcards--;
                if(amountofcards == 0){
                  alert("U heeft gewonnen!");
                }
              }
              idarray = [];
              valarray = [];
              cardschosen = 0;
            },500);
          }else if(valarray[0] != valarray[1] && cardschosen == 2){
            setTimeout(function(){
              $(this).css('backgroundColor', 'black');
              for(var i = 0; i < idarray.length; i++){
                $(`#${idarray[i]}`).css('backgroundColor', 'black');
              }
              idarray = [];
              valarray = [];
              cardschosen = 0;
            },500);
          }
        }
      });
    });
});
