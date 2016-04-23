<!DOCTYPE html>
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <script type="text/javascript">
var myRe = /\d+/g;
var str = "kjjjkkj2.5jkjn,,,hfd45jgfvjlkfdii1 0,2hfhg";
var myArray,s=0;
while ((myArray = myRe.exec(str)) != null)
{
  s+=parseInt(myArray[0]);
  document.write(myArray[0]+'+');
}
 document.write('0='+s);

  </script>
  <!--js-->
</head>

<body>

</body>
</html>