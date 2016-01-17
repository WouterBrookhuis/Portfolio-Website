/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Lower values will break things.
var desiredGridWidth = 4;
var gridMinWidth = 970;

$(document).ready(function(){

    //Any element events get added here
    
    /*
     * Window events
     */
    $(window).resize(calcGridSize);

    calcGridSize();
    //First pass doesn't always work, so do it again
    calcGridSize();
});

function calcGridSize()
{
    var maxBoxHeight = 0;
    var maxBoxCount = Math.floor($("#projects").width() / (gridMinWidth / desiredGridWidth));
    //console.log(maxBoxCount);
    var boxWidthPercent = 100 / maxBoxCount;
    //console.log(boxWidthPercent);
    $(".projectBox").each(function(){
        $(this).removeAttr('style');
        $(this).css('width', boxWidthPercent + '%');
        if($(this).outerHeight() > maxBoxHeight){
            maxBoxHeight = $(this).outerHeight();
        }
    });
    $(".projectBox").each(function(){
        $(this).css('height', maxBoxHeight + 'px');
    });
}