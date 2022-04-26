
//-----------------------google maps--------------------

function iniciarMap(){
 
let coord = {lat:6.251317, lng:-75.563175 };
    let map = new google.maps.Map(document.getElementById('map'),{
        zoom:10,
        center:coord
    });
let marker = new google.maps.Marker({
    position: coord,
    map: map
})

}




//-------------------------------------------------------

