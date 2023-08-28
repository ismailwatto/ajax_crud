<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title>J Quey</title>
    {{-- if we want to use 75 line function in head we use document ready function and in theplaceof ((document).ready) we can use only $(function(){
        here the central code
    }) --}}
    <script>
        $(document).ready(function(){
          $('#colored').on({
            click: function(){
              $(this).css('background-color', 'orange');
            },
            mouseenter: function(){
              $(this).css('background-color', 'black');
            },
            mouseleave: function(){
              $(this).css('background-color', 'red');
            }
          });
        });
      </script>      
</head>
<body>
    {{-- <h1 id="head">ALLAH is One.</h1>
    <h1 class="heading">how are you</h1>
    <h1 class="heading">I'm good what's about you</h1>
    <a href="#" class="heading">Link</a>
            <script>
                        // $('h1').hide();
                // if we want remove specific id e.g
                        // $('#head').hide();
                // if we want to hide specific class e.g
                        // $('.heading').hide()
                // to select all
                        // $('*').hide()
                // if we want to hide specific even they have same class
                        // $('h1.heading').hide()
            </script> --}}



    {{-- <p id="pra">hello</p>
    <button id="button">click</button>
    <button id="button1">click1</button>
    <br><br>
    <div id="colored" style="background-color: blue; height: 100px; width: 100px"></div> --}}
                  {{-- <script>
                      // $('#button').click(function(){
                      //     $('#pra').hide();
                      // })
                  // if we want to hide the selected one 
                      // $('#button').click(function(){
                      //     $(this).hide();
                      // })
                  //  if we want it hide on double click
                      // $('#button').dblclick(function(){
                      //     $(this).hide();
                      // })
                  // by moving mouse on that color hide function
                      // $('#colored').mouseenter(function(){
                      //     $('#pra').hide();
                      // })
                  // by moving mouse away  on that color hide function
                      // $('#colored').mouseleave(function(){
                      //     $('#pra').hide();
                      // })
                  // hover perform both above two function
                      // $('#colored').hover(function(){
                      //     $('#pra').hide();
                      // },
                      // function(){
                      //     $('#pra').show();
                      // })
                  // for multiple functions we use on
                      // $('#colored').on({
                      //     click:function(){
                      //         $(this).css('background-color','orange')
                      //     },
                      //     mouseenter:function(){
                      //         $(this).css('background-color','black')
                      //     },
                      //     mouseleave:function(){
                      //         $(this).css('background-color','red')
                      //     }
                      // })
                    // if want to check after how much time it change in mile second
                                    // $('#button').click(function(){
                                    //     $('#colored').hide(1000);
                                    // })
                                    // $('#button1').click(function(){
                                    //     $('#colored').show(2000);
                                    // })
                    // another method of above
                                    // $('#button').click(function(){
                                    //     $('#colored').fadeOut(4000);
                                    // })
                                    // $('#button1').click(function(){
                                    //     $('#colored').fadeIn(5000);
                                    // })
                    // ANOTHER BUTTON WHICH CAN DO BOTH ABOVE TO WORK
                                    //  $('#button').click(function(){
                                    //  $('#colored').fadeToggle(4000);
                                    // })
                // side up and down meyhod or i we put toggle it will do both function
                                    // $('#button').click(function(){
                                    //     // $('#colored').slideUp(4000);
                                    //     $('#colored').slideToggle(4000);
                                    // })
                                    // $('#button1').click(function(){
                                    //     $('#colored').slideDown(5000);
                                    // })
                    // how to animate function works
                                    // $('#button').click(function(){
                                    //     $('#colored').animate({
                                    //       opacity: '0.5',
                                    //       padding: '80px', 

                                    //     },5000);
                                    // })
                                    //   $('#button1').click(function(){
                                    //     $('#colored').stop();
                                    // })
                </script>     --}}

    <p id="pra">hello</p>
    <button id="button">click</button>
    <button id="button1">click1</button>
    <br><br>
    <div id="colored" style="background-color: blue; height: 100px; width: 100px">
    <p>you are my best friend</p>
    </div>
    <input type="text" id="tex">
                <script>
                // $('#button').click(function(){
                // var text = $("#colored").text();
                // alert(text);
                //  });
          // to store or to get value
                $('#button').click(function(){
                $("#tex").val("My Name is Ismail");
                alert(text);
                 });
                </script>

</body>
</html>