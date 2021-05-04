<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>INVEST</title>
        
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/cadastro.css">

    </head>
    <body>
       <section>
           <div class="container">
               <div class="row">
                   <div class="content">
                       <!--FORMULÁRIO DE CADASTRO-->
                        <div id="cadastro">
                            <form method="post" action=""> 
                            <h1>Cadastro</h1> 
                            
                            <p> 
                                <input id="nome_completo" name="nome_completo" required="required" type="text" placeholder="Nome Completo" />
                            </p>
                            
                            <p>
                                <input id="email" name="email" required="required" type="text" placeholder="E-mail"/> 
                            </p>

                            <p>
                                <input id="telefone" name="telefone" required="required" type="text" placeholder="Telefone"/> 
                            </p>

                            <p>
                                <input id="senha" name="senha" required="required" type="password" placeholder="Senha"/> 
                            </p>
                            
                            <p>  
                                <input id="confirma_senha" name="confirma_senha" required="required" type="password" placeholder="Confirmar Senha"/>
                            </p>
                            
                            <p> 
                                <input type="submit" value="Cadastrar"/> 
                            </p>
                            
                            <p class="link">  
                                Já tem conta?
                                <a href="./login.php"> Login </a>
                            </p>
                            </form>
                        </div>
                   </div>
               </div>
           </div>
       </section>
    </body>

</html>