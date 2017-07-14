$(document).ready(
                  function() {}
);

function openTab(evt, nextTab){
    
    //Hide the content of the current tab
    tabcontents = $(".tabcontent");
    for(i = 0; i < tabcontents.length; i++){
        tabcontents[i].style.display = "none";
        console.log(3);
    }
    
    //remove active from all tablink classes
    tablinks = $(".tablinks");
    for(i = 0; i < tablinks.length; i++){
        tablinks[i].className.replace(" active", "");
    }
    
    console.log('#' + nextTab);

    //document.getElementById(nextTab).style.display = "block";
    
    tabId = $('#' + nextTab)[0]; //Getting the first element in the returned array
    tabId.style.display = "block";
    evt.currentTarget.className += " active";
}



//Toggles the direction of the arrow (right to down and vice versa)
//right arrow codes: 9657	25B9 ->
//left arrow codes: 9663	25BF \down
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
    
//    if(currentName.search())
    console.log(toggleName);
   btn.text(toggleName);
}
