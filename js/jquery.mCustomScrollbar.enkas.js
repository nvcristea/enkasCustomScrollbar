/* 
 * Using Enkas Custom Scrollbar plugin by N.V.Cristea based on jquery.m.CustomScrollbar.js
 * 
 * To auto use the scrollbar you have to add on a div element the class `scrollbar`
 * Requirements:
 * - id requirement: at this time it's required that the div elements that has the scrollbar class, has an id not null
 * - add `.content` on called element when changing the html/text content: when you want to change the content of the div on that you added the `scrollbar` class call it like $("#myDiv .content").html(); because the plugin create a child div having the class content
 * 
 */
function addScrollbar( objName ){
    obj = $( objName );
    
    if ( 0 == obj.children('.customScrollBox').length   ) {
        html = obj.html();
        obj.html(  '<div class="content" >'+html+'</div>'  );
        obj.children('.content').wrap('<div class="container"/>');
        obj.children('.container').wrap('<div class="customScrollBox"/>');
        obj.children('.customScrollBox').append('<div class="dragger_container"><div class="dragger ui-draggable"><div style="width: 100%; height: 14px; position: absolute; top: 50%; margin-top: -7px; font-size: 14px; background: url(\'images/widgetBox/list.png\') repeat-y scroll -5px 0pt transparent;"></div></div></div>');
        obj.mCustomScrollbar("vertical",400,"easeOutCirc",1.05,"auto","yes","yes",10);
    }else{
        //element has allready the scroller on it
        //alert('add: ' + objName + ' | html: ' +obj.html());
    }
}

function initScrollbars( element ){
    var targetObj = $('.scrollbar');
    if ( typeof element != "undefined" ){
        targetObj = $(element +' .scrollbar');
    }
    targetObj.each(function(){

        if ( $(this).height() >=  $(this).css('max-height').replace('px','') ){
            //alert(  $(this).attr('id')+' : '+$(this).height()+ ' : ' + $(this).css('max-height').replace('px','')  );
            $(this).height( $(this).css('max-height').replace('px','') );
        }
        if ($(this).attr('id')) {
            //console.log("initScrollbars() | " + $(this).attr('id'));
            try{
                addScrollbar('#'+$(this).attr('id'));
            }catch(err){
                console.log("initScrollbars() | ERROR: On id: " + $(this).attr('id') + "\n" + err);
            }
                
        }else{
            //alert ( $(this).attr('class').replace(' scrollbar','') );
            try{
                addScrollbar('.'+$(this).attr('class').replace(' scrollbar',''));
            }catch(err){
                console.log("initScrollbars() | ERROR: On class: " + $(this).attr('class') + "\n" + err);
            }
        }
    });
}


function reInitIdScrollbar( idName, autoScroolDown ){
    if ( typeof autoScroolDown == "undefined") autoScroolDown = false;
    try{
        console.log('reInitIdScrollbar() | #idName: ' + idName);
        if ( 0 == $("#" + idName).children('.customScrollBox').length   ) {
            //this is in the case of entire div content was overwritten
            addScrollbar( "#" + idName );
        }else{
            $("#"+idName).mCustomScrollbar("vertical",400,"easeOutCirc",1.05,"auto","yes","yes",10,autoScroolDown);
        }
    }catch(e){ console.log("reInitIdScrollbar() | " + e); }
}


$(document).ready(function() {
    initScrollbars();
});


