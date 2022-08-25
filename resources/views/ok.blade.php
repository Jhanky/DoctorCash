<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>

*{
 margin: 0;
 padding: 0;
}

html{
    width: 100vw;
    height: 100vh;
}

/* CSS which you need for blurred box */
body{
 background-repeat: no-repeat;
 background-attachment: fixed;
 background-size: cover;
 background-position: top;
 background-color: #dfdfdf;
 width: 100%;
 height: 100%;
 font-family: Arial, Helvetica;
 letter-spacing: 0.02em;
  font-weight: 400;
 -webkit-font-smoothing: antialiased;
}

.blurred-box{
  position: relative;
  width: 250px;
  height: 350px;
  top: calc(50% - 175px);
  left: calc(50% - 125px);
  background: inherit;
  border-radius: 2px;
  overflow: hidden;
}

.blurred-box:after{
 content: '';
 width: 300px;
 height: 300px;
 background: inherit;
 position: absolute;
 left: -25px;
 left position
 right: 0;
 top: -25px;
 top position
 bottom: 0;
 box-shadow: inset 0 0 0 200px rgba(255,255,255,0.05);
 filter: blur(10px);
}


/* Form which you dont need */
.user-login-box{
  position: relative;
  margin-top: 50px;
  text-align: center;
  z-index: 1;
}
.user-login-box > *{
  display: inline-block;
  width: 200px;
}

.user-icon{
  width: 100px;
  height: 100px;
  position: relative;
  border-radius: 50%;
  background-size: contain;
  background-image: url(https://w7.pngwing.com/pngs/1013/469/png-transparent-computer-icons-check-mark-symbol-ok-miscellaneous-angle-logo.png);
}

.user-name{
  margin-top: 15px;
  margin-bottom: 15px;
  color: rgb(0, 0, 0);
}

input.user-password{
  width: 120px;
  height: 18px;
  opacity: 0.4;
  border-radius: 2px;
  padding: 5px 15px;
  border: 0;
}

</style>

</head>

<body>
    <div class="blurred-box">
        <!--  you dont need the user-login-box html  -->
        <!--  for demo purposes only and its shit  -->
        <div class="user-login-box">
          <span class="user-icon"></span>
          <div class="user-name">
            <h1>Respuestas guardadas</h1>
          </div>
        </div>

      </div>

      <script>
        function redireccionar(){
  window.location.href = "http://127.0.0.1:8000/dashboard";
}

setTimeout("redireccionar()", 2000);
      </script>
</body>

</html>
