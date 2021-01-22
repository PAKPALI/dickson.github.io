<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>ALERT</title>
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        
          <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script > 
    </head>
    <body>
        
    
       

      
        <section style="margin-top: 30px;">
        	<div class="section">

              <aside>
                <form  class="container border-top border-bottom bg-light " style="margin-top: 300px;">
                  <div class="row">
                    <div class="col-lg-4 offset-lg-4 mb-3">
                      <label for = "TITRE" class="form-label"><h2>NOM</h2></label>
                      <input type="text"  class="form-control" id ="nom" name="nom" placeholder="nom" required />
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4 offset-lg-4 mb-3">
                      <label for = "CONTENU" class="form-label"><h2>MOT DE PASSE:</h2></label>
                      <input type="text"  class="form-control" id ="pass" name="pass" placeholder="mot de passe" required />
                    </div>
                  </div>
                  <button onclick="validation();" style="margin-bottom: 10px; margin-left: 600px;" class="btn btn-primary btn-sm">AJOUTER</button>
                </form>
              </div>
            </aside>

        </section>

       

        
        <script type="text/javascript" >
          function validation() {

             swal ( {
                           title:"BON TRAVAIL",
                           text: "TICKET AJOUTE AVEC SUCCES",
                           icon:"success",
                           button:"OK",
                           timer: 2400,
                });
          }
        </script>

    </body>
     
</html>
