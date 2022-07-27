<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link  rel="stylesheet" type="text/css" href="css/Test.css">
   
     <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
 <div class="result"><div class="leftpart">
    <img src="image/1330547_02.jpg" class="brain">
    </div>
    <div class="rightpart">
        <div class="inrightpart">
            <h1 >Your IQ</h1>
            <h1 class="headtext"> </h1>
            <h1 >out of 160</h1>
           
       
        </div>
    </div>
     <div class="body">
        <p>What is the IQ test ?

IQ test which is also known as ‘Intelligence Quotient’ test, comes in various forms. It was first used in France to diagnose students with learning disabilities so they receive what nowadays is called special education. At the present time, it’s not only used to identify those with mental disabilities but also to identify those who are intellectually gifted.
   An IQ score is calculated based on a norm group with an average score of 100 and a standard deviation of 15. The standard deviation of 15 means, 68% of individuals have scored between 85 and 115. This means the average score will always be 100 and 95% of individuals will score between 70 and 130.
   The purpose of taking an IQ test is to measure intelligence, to measure one’s reasoning and problem solving abilities; and to analyze one’s mathematical understanding, language abilities as well as short term memory and information processing speed.
   Based on the bell curve, an IQ score of 100 is considered the average and typically a score above 100 is associated with high intelligence. Scores ranging from 130 and above are considered to be in the extreme intelligence category while those with an IQ higher than 140  are considered gifted.
   Those who score below 85 are considered to be associated with low intelligence. A score below 70, is usually considered mentally handicap and may indicate an underlying learning disability.

Note : A high or low score doesn’t mean that someone is particularly smart, but it means that the person has “potential”.</p>
  <div  class="curvetext">
Bell Curve representation of the IQ scores as well as a bar chart representation. The average IQ is always 100.</div>
   <br>
   <br>
    </div>
    </div>
  <div class="head"><span class="number">1 </span>out of 30</div>
   <div class="box">
    
    <div class="left"><img class="question" src="image/question/Q1.png"></div>
   
     <div class="right">
      
       <div class="rightin rl"> <img class="answer a" src="image/answers/Q1A.png"><p>1)</p></div>
       <div class="rightin"> <img class="answer b" src="image/answers/Q1B.png"><p>2)</p></div>
       <div class="rightin"> <img class="answer c" src="image/answers/Q1C.png"><p>3)</p></div>
       <div class="rightin rl"> <img class="answer d" src="image/answers/Q1D.png"><p>4)</p></div>
       <div class="rightin"> <img class="answer e" src="image/answers/Q1E.png"><p>5)</p></div>
       <div class="rightin"> <img class="answer f" src="image/answers/Q1F.png"><p>6)</p></div>
      
       
     </div>
     </div>
</body>
</html>
<script>
var rightans=["3","3","5","5","1","2","1","4","3","3","4","2","2","1","6","4","5","2","1","1","5","2","1","5","1","6","1"];
var ans=[];
var counter=0;
var i=1;
    $(document).ready(function(){
$( ".rightin" ).click(function(event) {
 $(".number").text(++i+" ");
   
    var nod=$(event.currentTarget).text();
   var nod2=nod.substring(0,nod.length-1);
    
     ans.push(nod);
     
    if(Number(nod2)==rightans[i-2])
    {
       ++counter;  
    }
     
    img();
    
}); 
        function img(){
           
              
               
         $(".question").attr("src","image/question/Q"+(i)+".png");
         $(".a").attr("src","image/answers/Q"+(i)+"A.png");
         $(".b").attr("src","image/answers/Q"+(i)+"B.png");
         $(".c").attr("src","image/answers/Q"+(i)+"C.png");
         $(".d").attr("src","image/answers/Q"+(i)+"D.png");
         $(".e").attr("src","image/answers/Q"+(i)+"E.png");
         $(".f").attr("src","image/answers/Q"+(i)+"F.png");
             if(i==31){
                 
        $(".box").css( "display", "none" );
        $(".head").css( "display", "none" );
        $(".result").css( "display", "block" );
        $(".result").css( "display", "flex" );
         $("body").css( "background-color", "#FFFFFF" );
                 counter*=5.33;
                 counter= Math.round(counter);
               $(".headtext").text(counter); 
               
    }
        }
   
    });
    
    
    
</script>