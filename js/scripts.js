//sideNav

function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

//remove overlay

document.getElementsByClassName("btn-float")[0].addEventListener('click', () => {
    document.getElementById("view-request").style.display="block";
});

function closes(){
    document.getElementById("view-request").style.display="none";
}


//song requests

document.getElementById('requestForm').addEventListener('submit', songRequests);

function songRequests(e){
    e.preventDefault();
    var xhr = new XMLHttpRequest();

    var name = document.getElementById('name').value;
    var song = document.getElementById('song').value;
    var artist = document.getElementById('artist').value;
    var album = document.getElementById('album').value;
    
        xhr.open('GET', 'requests.php?name='+name+'&song='+song+'&artist='+artist+'&album='+album, true);
        xhr.onload = function(){
            document.getElementById("view-request").style.display="none";
            document.getElementById("alert-div-text").innerHTML=this.responseText;
            document.getElementById("alert-div").style.display="block";
        }
    xhr.send();
} 