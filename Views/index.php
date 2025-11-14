<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barra de Navegação Centralizada</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      overflow-x: hidden;
    }

    #container {
      width: 100%;
    }

    #header {
      background-color: #629421ff;
      width: 100%;
      height: 5vh;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      padding: 0 2vw;
      box-sizing: border-box;
    }

    .navBar {
      display: flex;
      align-items: center;
      list-style: none;
      padding: 0;
      margin: 0 auto;
      height: 100%;
      flex-shrink: 0;
    }

    .navBar li {
      color: white;
      cursor: pointer;
      margin: 0 2vw;
    }

    .login {
      display: flex;
      align-items: center;
      color: white;
      cursor: pointer;
    }

    .login i {
      margin-right: 0.5vw;
    }

    .login p {
      margin: 0;
    }
  </style>
</head>

<body>
  <div id="container">
    <div id="header">
      <ul class="navBar">
        <li>Home</li>
        <li>Matérias</li>
        <li>Contato</li>
        <li>Publicar</li>
        <li>Sobre</li>
      </ul>

      <div class="login">
        <i class="glyphicon glyphicon-user"></i>
        <p>Login</p>
      </div>
    </div>
  </div>
</body>

</html>
