<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
  <style>
    td{
       font-size : 3em;
       text-align : center;
      }
    input{
       text-align : right;
       font-size : 1em;
       border : none;
    }
     input : focus{
       font-size : 1em;
       outline : none;
       border : none;
    }
  </style>
</head>

<body>
   <table border="1" bgcolor = "orange" bordercolor = "red" width = "150" height = "80">
     <tbody>
       <tr>
			<td colspan = "5" width = "150" height = "80">
			<input type = "text" id = "num">
			</td>
       </tr>
       <tr>
			<td colspan = "5" width = "150" height = "80">
			<input type = "text" disabled = "disabled" id  = "result">
			</td>
       </tr>
       <tr>
         <td width = "150" height = "80" onclick = "reset()">AC</td>
         <td width = "150" height = "80" onclick = "pow('^')">^2</td>
         <td width = "150" height = "80" onclick = "sqrt('rute')">rute(</td>
         <td width = "150" height = "80" onclick = "bak('←')">←</td>
         <td width = "150" height = "80" onclick = "gg('/')">/</td>
       </tr>
       <tr>
         <td width = "150" height = "80" onclick = "gg(7)">7</td>
         <td width = "150" height = "80" onclick = "gg(8)">8</td>
         <td width = "150" height = "80" onclick = "gg(9)">9</td>
         <td width = "150" height = "80" onclick = "sin('sin')">sin</td>
         <td width = "150" height = "80" onclick = "gg('*')">*</td>
       </tr>
       <tr>
         <td width = "150" height = "80" onclick = "gg(4)">4</td>
         <td width = "150" height = "80" onclick = "gg(5)">5</td>
         <td width = "150" height = "80" onclick = "gg(6)">6</td>
         <td width = "150" height = "80" onclick = "cos('cos')">cos</td>
         <td width = "150" height = "80" onclick = "gg('-')">-</td>
       </tr>
       <tr>
         <td width = "150" height = "80" onclick = "gg(1)">1</td>
         <td width = "150" height = "80" onclick = "gg(2)">2</td>
         <td width = "150" height = "80" onclick = "gg(3)">3</td>
         <td width = "150" height = "80" onclick = "tan('tan')">tan</td>
         <td width = "150" height = "80" onclick = "gg('+')">+</td>
       </tr>
       <tr>
         <td width = "150" height = "80" colspan ="2" onclick = "gg(0)">0</td>
         <td width = "150" height = "80" onclick = "gg('.')">.</td>
         <td width = "150" height = "80" onclick = "ter()">=</td>
         <td width = "150" height = "80" onclick = "gg(')">)</td>
       </tr>
    </tbody>
  </table>

  <script>
    function gg(float){
      var num = document.getElementById('num');
      num.value = num.value + float;
      var fg = num.value;
    }
    function ter(){
      var num = document.getElementById('num');
      var result = eval(num.value);
      document.getElementById('result').value = result;
    }
    function reset(){
      document.getElementById('num').value = "";
      document.getElementById('result').value = "";
    }
    function bak(){
      num.value = 
      num.value.substring(0, num.value.length-1);
    }
    function pow(){
      var num = document.getElementById('num');
      result.value = Math.pow(num.value, 2);
    }
    function sqrt(){
	  var fg
      num.value = fg+document.getElementById('num');
      result.value = Math.sqrt(num.value); 
      
    }
    function sin(){
      var num = document.getElementById('num');
      result.value = Math.sin((num.value*3.141592)/180);
    }
    function cos(){
      var num = document.getElementById('num');
      result.value = Math.cos((num.value*3.141592)/180);
    }
    function tan(){
      var num = document.getElementById('num');
      result.value = Math.tan((num.value*3.141592)/180);
    }
  </script>
  </body>
</html>
      
    