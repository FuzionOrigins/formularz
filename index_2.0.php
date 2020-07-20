  <!-- WERSJA 2.0 -->


<!DOCTYPE html>

<html lang="pl-PL">

  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="shortcut icon" href="logo.png">


    <script src="jquery.mask.min.js"></script>
     <script src="java.js"></script>

    <title>Podanie do szkoły</title>

  </head>

  <body style="/*background: linear-gradient(90deg, rgba(148,242,230,1) 0%, rgba(148,242,230,1) 100%);*/">

    <div class="container" style="background: linear-gradient(90deg, rgba(209, 254, 252) 0%, rgba(209, 254, 252) 100%);border-radius: 15px; height: 100%;padding:20px;margin-top: 10px;margin-bottom: 10px;">

        <h1 style="padding:20px; text-align:center;"><b>Podanie do wybranej szkoły</b></h1>

       
      <form action="przetworzpodanie.php" method="post" class="was-validated" id="formularz" enctype="multipart/form-data">

        <div class="row" style="padding:5px;">
          <div class="col">
            <label for="FormControlInput1"><b>Imię</b></label>
            <input type="text" class="form-control" placeholder="" id="FormControlInput1" name="imie" required>

          </div>
          <div class="col">
            <label for="FormControlInput2"><b>Nazwisko</b></label>
            <input type="text" class="form-control" placeholder="" id="FormControlInput1" name="nazwisko" required>
          </div>
        </div>

        <div class="form-group">
          <label for="FormControlInput3"><b>E-mail</b></label>
          <input type="email" class="form-control" id="FormControlInput3" name="email" placeholder="" required>

        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1"><b>Wybierz szkołę</b></label>
          <select class="custom-select" id="exampleFormControlSelect1" name="szkola" required>
            <option selected disabled></option>
            <option value="Technikum nr 1 w Toruniu">Technikum nr 1 w Toruniu</option>
            <option value="Technikum nr 2 w Toruniu">Technikum nr 2 w Toruniu</option>
            <option value="Technikum nr 3 w Toruniu">Technikum nr 3 w Toruniu</option>
            <option value="Technikum nr 4 w Toruniu">Technikum nr 4 w Toruniu</option>
            <option value="Technikum nr 5 w Toruniu">Technikum nr 5 w Toruniu</option>
            <option value="Liceum Ogólnokształcące nr 1 w Toruniu">Liceum Ogólnokształcące nr 1 w Toruniu</option>
            <option value="Liceum Ogólnokształcące nr 2 w Toruniu">Liceum Ogólnokształcące nr 2 w Toruniu</option>
            <option value="Liceum Ogólnokształcące nr 3 w Toruniu">Liceum Ogólnokształcące nr 3 w Toruniu</option>
          </select>
         
        </div>

        <div class="form-group">
          <label for="inputAddress2"><b>Adres zamieszkania</b></label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="ulica, numer domu/numer mieszkania" name="adres" required>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputPesel"><b>Pesel</b></label>
            <input type="text" class="form-control" id="inputPesel" name="pesel" required>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState"><b>Miejsce zamieszkania</b></label>
            <select id="inputState" class="custom-select" name="miejscowosc" required>
			  <option selected disabled></option>           
              <option>Toruń</option>
              <option>Okolice Torunia (do 20 km)</option>
              <option>Dalej (20+ km)</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="validationServer05"><b>Kod pocztowy</b></label>
            <input type="text" class="form-control" id="validationServer05" placeholder="" name="kod" required>
          </div>
        </div>


<div class="form-group">
	<label for="inputState"><b>Podanie</b></label>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile04" name="plik" required>
    <label class="custom-file-label" for="inputGroupFile04">Wybierz plik z podaniem</label>
  </div> 
</div>
<style>
	.custom-file-input ~ .custom-file-label::after {
	    content: "Przeglądaj";
	}
</style>
 <script>
      document.querySelector('.custom-file-input').addEventListener('change',function(e){
  var fileName = document.getElementById("inputGroupFile04").files[0].name;
  var nextSibling = e.target.nextElementSibling
  nextSibling.innerText = fileName
})
   </script>

          <br>
 <div class="form-row">
          <div class="custom-control custom-checkbox mb-3" style="clear: both; height: 15px;">
            <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
            <label class="custom-control-label" for="customControlValidation1">Zapoznałem/am się i akceptuję regulamin składania podania do szkoły. Oświadczam również, iż dane podane powyżej są prawidłowe.</label>
  
          </div>
</div><br>
 <div class="form-row justify-content-center">      	
    <div class="col-2">
      <input onclick="sprawdz()" type="button" class="btn btn-primary" style="/*padding:10px*/" value="Wyślij podanie">
    </div>     
</div>
    </form>

  </div>

  </body>

</html>