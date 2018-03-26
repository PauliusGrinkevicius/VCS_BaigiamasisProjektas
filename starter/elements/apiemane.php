
<!-- dešinysis-blokas-viršuje--> 

<main>  
    <div class="cover-konteineris" id="Lets-make" style="background-image: url('<?php the_field('background_image', 24); ;?>'); background-size: cover;background-position:50% 50%;background-repeat:no-repeat;">
        <Div class="h1"> 
            <h1> <?php the_field('puslapio_pavadinimas', 24); ?> </h1> 
        </Div>
        <Div class="para">
            <p> <?php the_field('aprasas', 24); ?>  </p>
        </Div>
        <div class="mygtukas">
            <input type="submit" value="susisiekite" class="button">
        </div>        
    </div>
<section>
    <div class="apie-mane-konteineris" id="apie-mane-konteineris">
        <div class="container-about-me"> 
            <div class="heading-container">
                <h2> <?php the_field('antraste1', 24); ?> </h2>
            </div>     
            <div class="tekstas-apie-mane"> 
                    <p> <?php the_field('paragrafas', 24); ?></p>
            </div>
            <div class="duomenys">
                <ul class="duomenys2">
                    <li> <strong> Vardas: </strong> <?php the_field('vardas', 24); ?>  </li>
                    <li> <strong> Pavardė: </strong> <?php the_field('pavarde', 24); ?> </li>
                    <li> <strong> Amžius: </strong> <?php the_field('amzius', 24); ?>  </li>
                    <li> <strong> El. paštas: </strong> <?php the_field('el.pastas', 24); ?>  </li>
                    <li> <strong> Adresas: </strong> <?php the_field('adresas', 24); ?>  </li>
                </ul>
            </div>
        </div>
    <div class="nuotrauka">
        <img src="<?php the_field('nuotrauka', 24); ?>" alt="Pauliaus Grinkevičiaus nuotr." class="mano-foto">
    </div>
    </div>
    <div class="pilka-linija"> </div>
</section>