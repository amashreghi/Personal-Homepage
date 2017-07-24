$(document).ready(

/**
This makes to remain on the same tab after refreshing the page
*/
function() {
    if(location.hash){
        $("a[href='" + location.hash + "']").tab("show");
    }
    $(document.body).on("click", "a[data-toggle]", 
        function(event){
            location.hash = this.getAttribute("href");
        });
    checkMap();


  //   $('#contact').on('shown.bs.modal', function () {
  //     $('#contact').addClass('active');
  //     console.log(10);
  // })
}


);

/**
This makes to remain on the same tab after refreshing the page
*/
$(window).on("popstate", function(){
    var anchor = location.hash || $("a[data-toggle='tab']").first().attr("href");
    $("a[href='" + anchor + "']").tab("show");

    checkMap();
}


);


var initCanBeCalled = false;
/**
Adds or removes 'active' class based on the current tab
*/
function checkMap(){
    console.log(location.hash);

    if(location.hash == "#contact"){
        $('#map')[0].style.display = 'block';
        if(initCanBeCalled) initMap();
        // $('#contact').addClass('active');
        // console.log('contact activated');
        // if(init_called == true) initMap(); //To make sure that google library has been loaded
    }
    else{
        $('#map')[0].style.display = 'none';

        // $('#contact').removeClass('active');
        // console.log('contact disabled');

    }
}


/**
changes the direction of the arrow from right to down and vice versa
@param id the unique id of the button
//right arrow codes: dec=9657 hex=25B9
//down arrow codes: 9663 25BF
*/
function toggleArrow(id){
    console.log(id);
    var btn = $('#' + id);
    var currentName =btn.text();
    var toggleName = currentName;
    for(i = 0; i < currentName.length; i++){
        if(currentName.charCodeAt(i) == 9657){
            console.log("found");
            toggleName = currentName.substr(0, i) + '\u25BF' + currentName.substr(i + 1);
            break;
        }
        else if(currentName.charCodeAt(i) == 9663){
            console.log("found");
            toggleName = currentName.substr(0, i) + '\u25B9' + currentName.substr(i + 1);
            break;
        }
    }
    
    btn.text(toggleName);
}
