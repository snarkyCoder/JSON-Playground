$( document ).ready(function() {

$.getJSON('http://localhost/jsonplayground/read-json-file-AJAX/shows-info.json', function(data) {
    var myList = '';
    for (var i = 0; i <= data.length-1; i++) {

        myList +=("<h1>"+data[i].title+"</h1>");
        myList +=("<a href=http://www.imdb.com/title/"+data[i].imdb_id+" target='_blank'>IMDB</a><br/>");
    		myList +=("<ul>");
    			for (var j = 0; j<= data[i].seasons.length-1; j ++) {
                    var seas = parseInt(j)+1;
    				myList +=("<li class='season'>Season "+seas+" <ul class='collapsed'>")
    				for (var k = 0; k<=data[i].seasons[j].episodes.length - 1; k++) {
    					 myList +=("<li>"+data[i].seasons[j].episodes[k].title+"</li>");
    				};
    				myList +=("</ul></li>")
    			};
        	myList +=("</ul>");
    };
    var theList = document.getElementById('showList');
    theList.innerHTML = myList;
});
    $('#showList').on("click",".season",function(){
        
                $(this).siblings().children("ul").slideUp();
                $(this).children("ul").slideToggle();
    });
});