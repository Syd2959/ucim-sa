$(document).ready(function(){
    
    $('.poznamka').fadeTo(0, 0);

    $('#username').change(function() {
        checkUsername();
      });
      
    $('#username').blur(function() {
        checkUsername();
      });

    $('#password').change(function() {
        checkPassword();
      });
      
    $('#password').blur(function() {
        checkPassword();
      });

    function checkUsername() {
        var username = $('#username').val().trim();
        if (username === '') {
            $('#username').addClass("error");
            $('.poznamka').fadeTo(10, 1,0);
            $(".poznamka").text("Pole používateľské meno nesmie byť prázdne").show();
          return false;
        } else {
            $('#username').removeClass("error");
            $('.poznamka').fadeTo(0, 0);
            return true;
        }
      }

      function checkPassword() {
        var username = $('#password').val().trim();
        if (username === '') {
            $('#password').addClass("error");
            $('.poznamka').fadeTo(10, 1,0);
            $(".poznamka").text("Pole heslo nesmie byť prázdne").show();
          return false;
        } else {
            $('#password').removeClass("error");
            $('.poznamka').fadeTo(0, 0);
            return true;
        }
      }

        $('#prihlasovaci_formular').submit(function(event) {
          event.preventDefault(); // zamedzíme pôvodnému odosielaniu formulára
                    
          $('.poznamka').fadeTo(0, 0);
          $(".error").removeClass("error");
          
          if (checkUsername() === false) {
            return false;
          }

          if (checkPassword() === false) {
            return false;
          }

          console.log($('#username').val(),$('#password').val())

          $.ajax({
            url: 'authentication.php',
            contentType: 'application/x-www-form-urlencoded',
            type: 'POST',
            data: { 
              username: $('#username').val(),
              password: $('#password').val(),
            },
            
            success: function(response) {
              if (response == 'success') {
                  window.location.href = 'home.php'; 
              } else {
                  $('#warningMessege').text(response); 
              }
          }
                });  
          
        });
    



  });
  
 








