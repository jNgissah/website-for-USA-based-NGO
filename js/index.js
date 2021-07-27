$(document).ready(function(){
//     $('.navigation>ul>li>ul').hide()
    
      function Variables(){
        this.time=String(new Date())
        this.time_split=(this.time).split(' ')
        this.day=this.time_split[0]
        this.date=this.time_split[1]+' '+this.time_split[2]+' '+this.time_split[3]
        this.time_=this.time_split[4]
     
    }
    
    const variable = new Variables()

    
    $('.navigation>ul>li').hover(function(e){
        console.log(e.target.firstElementChild.nextElementSibling)
        $(e.target.firstElementChild.nextElementSibling).show() 
        
    })
    
    $('.navigation>ul>li').mouseleave(function(e){
        $('.navigation>ul>li>ul').hide()
    })
    
    $('.player').click(function(e){
        var music=$(e.target).attr('music')
        console.log(music)
        $('.music_here').attr('src',music)
        $('.music_here').get(0).play()
        
    })
    
    $('.stop').click(function(e){
        var music=$(e.target).attr('music')
        console.log(music)
        $('.music_here').get(0).pause()
        $('.music_here').currentTime=0
        
    })

    $('#menu').click(function(e){
        $('.nav2>ul>li>ul').toggle()
    })
    
    $('#menu_main').click(function(e){
        console.log(e.target.firstElementChild)
        $(e.target.firstElementChild).toggle()
    })
    
      $('.img_toggle').click(function(e){
        var img=$(e.target).attr('img_name')
       $('.show_img').attr('src',img) 
       $('.gallery').attr('href',img) 
      })
    
    
    
    $('#prayer_request').submit(function(e){
        
        var fd = new FormData();
        fd.append("prayer_request", 1)
        fd.append("fname",  $("#fname").val())
        fd.append("oname",  $("#oname").val())
        fd.append("sname",  $("#sname").val())
        fd.append("email",  $("#email").val())
        fd.append("prayer",  $("#prayer").val())
        fd.append("date", variable.date)
        fd.append("time",  variable.time)
        fd.append("day",  variable.day)
       
        
         $.ajax({
            url: "phpmailer/input.php"
            , type: "POST"
            , async: false
            , data: fd
            , contentType: false
            , processData: false
            , success: function (data) {
                
                if(data==1){
                    $('#prayer_request')[0].reset()
                    $("#myModal").modal("hide");
                     Swal.fire(
                            'Successful',
                            'Your prayer request has been sent',
                            'success'
                        )
                }
                
            }
        })
        
        
    })
    
    
//     var topic = (stream_data[0])
//        var code = (stream_data[3])
//        var syear = (stream_data[1]).substr(0,4)
//        var smonth = (stream_data[1]).substr(5,2)
//        var sday = (stream_data[1]).substr(8)
//        var shour = (stream_data[2]).substr(0,2)
//        var smin = (stream_data[2]).substr(3,2)
//        
//        $("#topic1").html(topic)
//        $("#topic2").html(topic)
//        $("#display1").html(code)
//        console.log(shour)
//        console.log(smin)
//        
//	   $("#display").hide() 
//    
    
// Set the date we're counting down to
var countDownDate = new Date(6+" "+30+", " +2021+" "+6+":"+00+":00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    console.log(distance)
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
//    console.log( days+" "+hours+" "+minutes+" "+seconds)
    
    $('.days').html(days)
    $('.hours').html(hours)
    $('.minutes').html(minutes)
    $('.seconds').html(seconds)
    
    
    
//  // Output the result in an element with id="demo"
//    if (distance >0){
//  document.getElementById("day").innerHTML = days+"";
//  document.getElementById("hour").innerHTML = hours
//  document.getElementById("min").innerHTML = minutes
//  document.getElementById("sec").innerHTML = seconds
//    }
//  // If the count down is over, write some text 
//  else if(distance < 0 ) {
//      $("#main_page").hide()
//      $("#display").show(200)
//  clearInterval(x);
////  document.getElementById("demo").innerHTML = "EXPIRED";
//  document.getElementById("day").innerHTML = 0;
//  document.getElementById("hour").innerHTML = 0
//  document.getElementById("min").innerHTML = 0
//  document.getElementById("sec").innerHTML = 0 
//         
//  }
//    if(distance < 0 && distance<(-11662189)){
//       $("#main_page").show()
//       $("#display").hide(200)
//  clearInterval(x);
//  document.getElementById("demo").innerHTML = "EXPIRED";
//  document.getElementById("day").innerHTML = 0;
//  document.getElementById("hour").innerHTML = 0
//  document.getElementById("min").innerHTML = 0
//  document.getElementById("sec").innerHTML = 0 
//      
//  }
//    
   $(".loader").hide()
    
}, 1000);
   
    
    
    
})