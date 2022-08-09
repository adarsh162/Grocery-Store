<!DOCTYPE HTML>
<html>
    <head>
        <style>
            p{
                display:inline;
            }
        </style>
    </head>
<body>
<h1>Date</h1>
<p id="demo1"></p>
<p id="demo2"></p>
<p id="demo3"></p>
<p id="demo4"></p>
<p id="demo5"></p>
<p id="demo6"></p>


<script>
    setInterval(showTime,1000);
    function showTime(){
const current_date=new Date();
const fixed_date=new Date("jun 19, 2021 00:00:00");
// const diff_date=new Date();

// fixed_date.setHours(0);
// fixed_date.setMinutes(0);
// fixed_date.setSeconds(0);

// const days=fixed_date.getDate()-current_date.getDate();
// const hours=fixed_date.getHours()-current_date.getHours();
// const min=fixed_date.getMinutes()-current_date.getMinutes();

// const diff1=fixed_date.getTime()-current_date.getTime();
// const daydiff= diff1/(24*60*60*1000);
// const diff2=diff1-(Math.floor(daydiff)*24*60*60*100);
// const hourdiff=diff2/(60*60*1000);
// const diff3=diff2-(Math.floor(hourdiff)*60*60*1000);
// const mindiff=diff3/(60*1000);
// const diff4=diff3-(Math.floor(mindiff)*60*1000);
// const secdiff=diff4/100;

timediff=fixed_date.getTime()-current_date.getTime();
const days=Math.floor(timediff/(24*60*60*1000));
const hours=Math.floor((timediff % (24*60*60*1000))/ (60*60*1000));
const mins=Math.floor((timediff % (60*60*1000)) / (60*1000));
const secs=Math.floor((timediff % (60*1000)) / 1000);


document.getElementById("demo1").innerHTML= days +"d" ;


document.getElementById("demo2").innerHTML= hours +"h" ;
document.getElementById("demo3").innerHTML= mins +"m" ;
document.getElementById("demo4").innerHTML= secs +"s" ;


    }



</script>
</body>
</html>

