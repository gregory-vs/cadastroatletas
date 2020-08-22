<!DOCTYPE html>
<html lang="pt-br">
    <head>
        Hello World!
    </head>
    <body>
       <h1> Hello World! </h1>

       <button id="myButton" onclick="myFunction()">teste</button>
        <br/>
       <?php foreach($amigos as $amigo):
                echo 'esse é meu amigo '.$amigo['nome'].' ele tem '.$amigo['idade'].' anos <br/>';
             endforeach;
        ?>
    </body>

    
<script type="application/javascript">
    document.getElementById("myButton").innerHTML = "Hello JavaScript!";

    function myFunction(){
        alert('Hello World');
    }
</script>


</html>

