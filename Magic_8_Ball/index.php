<?php 
            include 'head.php';
            session_start (); // doit etre dans les deux fichiers dans php
            ?>
    <body> 

        <h1>Magic 8 ball</h1>

            
		    <div style="color:rgb(0, 125, 125)">

<style>
.button1 {
  border: 2px solid #3498db;
  color: white;
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color:rgb(0, 125, 125);
  height: auto;
  border-radius: 5px;
  
  
}

.button1:hover {
  background-color:rgb(0, 70, 70);
  text-decoration: blink;
}


</style>

            <Form action="action.php"
		    method="POST">


                <fieldset> 
                    <legend>Que souhaitez vous pour 2024?</legend>
<br>
                        <label> Question : </label>
			                <textarea type="text" name="question" id="question" Minlength="5" Maxlength="150" rows="2" cols="25"  placeholder="Posez votre question en 150 mots max" required></textarea>
<br><br>
                            <?php $cheminpng = "r.png" ?>

                            <button class=button1 type="post" width=100px  >Voir ce que me réserve 2024 <img width=30px src="<?php echo $cheminpng ?>" alt="Encadrement GIF"> </button>
                </Fieldset>

                <input type='reset' name="Rejouer" text-align=center align-items=center >

<?php 
           
            include 'footer.php';
            
?>              