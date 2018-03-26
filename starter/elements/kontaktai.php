<!-- 
    KONTAKTAI
 -->     
    <div class="kontaktai" id="kontaktai">

        <div class="vertikali-linija"> </div>

        <div class="palikite-zinute">
        <p> <strong> Palikite žinutę  </strong> </p>
            <ul class="inputai">
                <form> 
                    <li> <input type="text" value="Vardas" placeholder="Vardas"> </li>
                    <li> <input type="text" value="El. paštas" placeholder="El. paštas"> </li>
                    <li> <textarea placeholder="Zinute" value=""> </textarea> </li>  
                </form>    
            </ul>
        <input type="submit" class="button2">
        </div>

        <div class="kontaktine-info">
            <div class="adres-ikona"> <div><i class="ion-ios-home-outline"></i> </div>
                <div class="text"><p> Adresas: </p>
                <p> <?php the_field('ikonu_adresas', 24); ?> </p></div>
            </div>
            <div class="pasto-ikona"> <div><i class="ion-ios-email-outline"></i> </div> <div class="text"> <p> El. paštas: </p>
                <p> <?php the_field('ikonu_el._pastas', 24); ?> </p> </div>
            </div>
            <div class="telefonas-ikona"> <div><i class="ion-ios-telephone-outline"></i> </div>
             <div class="text">   <p> Telefonas: </p> 
                <p> <?php the_field('ikonu_telefonas', 24); ?>  </p> </div> 
            </div>
        </div>
    </div>     
     <div class="pilka-linija"> </div>     
</main>    
    <footer class="nuorodos">   
     <a href="<?php the_field('linkedin_nuoroda', 24); ?>" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
     </footer> 
    <?php 
    wp_footer();
    ?>
</body>
</html>