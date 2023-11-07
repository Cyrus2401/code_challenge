/* let lamp = document.querySelector('.lamp');
let btnLamp = document.querySelector('.btnLamp');

console.log(btnLamp.innerHTML);

btnLamp.addEventListener('click', function(e)
{
    lamp.src = "images/lampOn.jpeg";
    btnLamp.innerHTML = "Eteindre la lampe";

    if(btnLamp.innerHTML == "Eteindre la lampe")
    {
        btnLamp.addEventListener('click', function(e)
        {
            lamp.src = "images/lampOff.jpeg";
            btnLamp.innerHTML = "Allumer la lampe";
        })
    } 
}) */

$(document).ready(function(){

    $('button').click(function(){
       
        
        if($('button').attr('class') == 'btnLampOff')
        {
            $('.lamp').attr('src','images/lampOn.gif');
            $('button').html('Eteindre la lampe');
            $('.btnLampOff').attr('class','btnLampOn');
        }
        else
        {
            $('.lamp').attr('src','images/lampOff.gif');
            $('button').html('Allumer la lampe');
            $('.btnLampOn').attr('class','btnLampOff');
        } 

        
        
    });
    
    /* $('.btnLampOn').click(function(){
        $('.lamp').attr('src','images/lampOff.jpeg');
        $('.btnLampOn').html('Allumer la lampe');
        $('.btnLampOn').attr('class','btnLampOff');
    });  */
""
    
    /* $('.btnLamp').html('Eteindre la lampe').click(function(){
        $('.lamp').attr('src','images/lampOff.jpeg');
    }) */

});
