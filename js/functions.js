function ajaxing(){

var name = $("#usr").val();

// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "database/create_database.php",
data: "name=" + name,
cache: false,
success: function(result){
    
    
alert(result);
}
});

//https://secure-login-murat-aka.c9users.io/phpmyadmin/

}

function clearClient(){
    
    
    
   document.getElementById("firstname_find").value ='';
document.getElementById("email_find").value = '';
document.getElementById("surname_find").value = '';
document.getElementById("title_find").value = '';
document.getElementById("organisation_find").value = '';
document.getElementById("address_find").value = '';
document.getElementById("town_find").value = '' ;
document.getElementById("postcode_find").value = '';
document.getElementById("tel_find").value = '';
document.getElementById("fax_find").value = '';
document.getElementById("comment_find").value = '';
    
    
    
}


function clearNewClient(){
    
    
    
   document.getElementById("firstname").value ='';
document.getElementById("email").value = '';
document.getElementById("surname").value = '';
document.getElementById("title").value = '';
document.getElementById("organisation").value = '';
document.getElementById("address").value = '';
document.getElementById("town").value = '' ;
document.getElementById("postcode").value = '';
document.getElementById("tel").value = '';
document.getElementById("fax").value = '';
document.getElementById("comment").value = '';
    
    
    
}

function clientAjax(){

//var name = $("#usr").val();



var name = document.getElementById("firstname").value;
var email = document.getElementById("email").value;
var surname = document.getElementById("surname").value;
var title = document.getElementById("title").value;
var organisation = document.getElementById("organisation").value;
var ad = document.getElementById("address").value;
var town = document.getElementById("town").value;
var postcode = document.getElementById("postcode").value;
var tel = document.getElementById("tel").value;
var fax = document.getElementById("fax").value;
var comment = document.getElementById("comment").value;

var address = ad + town + postcode;





// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name + '&email1=' + email + '&surname1=' + surname + '&title1=' + title + '&organisation1=' + organisation + '&address1=' + address + '&tel1=' + tel + '&fax1=' + fax + '&comment1=' + comment;

// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "database/create_client.php",
data: dataString,
cache: false,
success: function(result){
    
    
alert(result);
}
});

//https://secure-login-murat-aka.c9users.io/phpmyadmin/

}


function searchAjax(){

//var name = $("#usr").val();



var name = document.getElementById("firstname_find").value;
var email = document.getElementById("email_find").value;
var surname = document.getElementById("surname_find").value;
var title = document.getElementById("title_find").value;
var organisation = document.getElementById("organisation_find").value;
var ad = document.getElementById("address_find").value;
var town = document.getElementById("town_find").value;
var postcode = document.getElementById("postcode_find").value;
var tel = document.getElementById("tel_find").value;
var fax = document.getElementById("fax_find").value;
var comment = document.getElementById("comment_find").value;

var address = ad + town + postcode;





// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name + '&email1=' + email + '&surname1=' + surname + '&title1=' + title + '&organisation1=' + organisation + '&address1=' + address + '&tel1=' + tel + '&fax1=' + fax + '&comment1=' + comment;

// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "database/find_client.php",
data: dataString,
cache: false,
success: function(result){
    
    

     
     document.getElementById('users-contain').innerHTML = result;
   $( "#users-contain" ).dialog({
     
   
      height: 300,
      width: 350,
      modal: true,
      open: function() {
          $("li").hover(function () {
         $(this).css('color','LightSkyBlue');
         
         
    });
    
    
        $("li").mouseleave(function () {
         $(this).css('color','black');
        });
        
        $("li").mouseup(function (){
        $( "#users-contain" ).dialog( "close" );
        
       
        
        addUser(this.innerHTML);
        
       
        
        
        
        
        });
      },
      

    });
   
     
     
     
     
//alert(result);
}
});

//https://secure-login-murat-aka.c9users.io/phpmyadmin/

}



function addUser(li) {
  
  alert(li);
  
  var f = li.indexOf("id");
  
   var l = li.indexOf("-");
  
  
  var n = li.substring(f+3, l);
  
  alert(n);
  
  
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'id=' + n ; 

// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "database/found_client.php",
data: dataString,
cache: false,
success: function(result){
    
    foundClient(result);
    
    //By using javasript json parser
    

//alert(t['firstname']);
//     var obj = $.parseJSON(result);
// alert(obj['email']);
   
//alert(result);


}
});
  
  // foundClient(n);

}


function foundClient(result){
    
    var t = JSON.parse(result);
   // alert(t['email']);
    
    
    
 document.getElementById("firstname_find").value = t['firstname'];
 document.getElementById("email_find").value = t['email'];
 document.getElementById("surname_find").value = t['surname'];
 document.getElementById("title_find").value = t['title'];
 document.getElementById("organisation_find").value = t['organisation'];
 document.getElementById("address_find").value = t['address'];
 document.getElementById("town_find").value = t['town'] ;
 document.getElementById("postcode_find").value = '';
 document.getElementById("tel_find").value = t['tel'];
 document.getElementById("fax_find").value = t['fax'];
 document.getElementById("comment_find").value = t['comment'];
    
    
    
}



    
    
    


function loadPage()
{
    if (document.login)//if the form login exists, focus:
    {
        document.login.name.focus();//the username input
        document.login.pass.focus();//the password input
        document.login.login.focus();//the login button (submitbutton)
    }
}