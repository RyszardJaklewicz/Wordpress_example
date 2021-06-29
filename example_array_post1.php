<?php 
/*
Template Name: example_array_post1
*/
?>
 
<?php get_header(); ?>
    <h2  class="catheader">Skrypt wybierający losowy artykuł z bloga</h2>
    <?php 
     
     
    if (!$_POST) { ?>    
        <p>Skrypt poleca losowo wybrany artykuł z tego bloga w zależności od stropnia zaawansowania w WordPressie.</p>
        <form action="" method="POST">
            <h3>Jaki jest Twój stopień znajomości WordPressa?</h3>
            <input type="radio" id="radio1" name="wybor" value="1" class="checxbox" />1. początkujący
            <input type="radio" id="radio2" name="wybor" value="2" class="checxbox" />2. średniozaawansowy
            <p><input type="submit" id="send_button" value="Wyślij" /></p>
        </form>
    <?php 
    

    $_POST['element1']=="pierwszy";
    $_POST['element2']=="drugi";


} else {

        print_r($_POST);
 
        $beginers_urls = array("https://webfaces.pl/blog/chmura-tagow-sztampowy-wypelniacz-czy-wzmocnienie-dla-bloga/",
                            "https://webfaces.pl/blog/odnosniki-w-wordpressie-7-ciekawych-zastosowan/",
                            "https://webfaces.pl/blog/o-pingbackach-i-trackbackach-niekonwencjonalnie/");
                             
        $beginers_titles = array("Jak przetłumaczyć motyw (skórkę) WordPressa - tutorial",
                           "Odnośniki w WordPressie - 7 ciekawych zastosowań",
                           "O pingbackach i trackbackach niekonwencjonalnie");
                            
                         
        $interm_urls = array("https://webfaces.pl/blog/jak-przetlumaczyc-motyw-skorke-wordpressa-tutorial/",
                            "https://webfaces.pl/blog/wordpress-jako-cms-konwersja-statycznej-strony-html-do-wordpressa/");
         
                                
        $interm_titles = array("Jak przetłumaczyć motyw (skórkę) WordPressa - tutorial",
                           "WordPress jako CMS - konwersja statycznej strony HTML do WordPressa");
         
          
        echo("<p>Wybrałeś poziom " . $_POST["wybor"] . ", być może ten artykuł przypadnie Ci do gustu: </p>");
         
        switch ($_POST["wybor"]) {
            case 1:
                $random = rand(0,count($beginers_urls)-1);
                $link = $beginers_urls[$random];
                $title = $beginers_titles[$random];
                break;
            case 2:
                $random = rand(0,count($interm_urls)-1);
                $link = $interm_urls[$random];
                $title = $interm_titles[$random];
                break;
            default:
                break;
        }   
         
        ?>
         
        <a href="<?php echo $link ?>"><?php echo $title ?></a></p>
        <p>Miłej lektury! No, chyba że chcesz wylosować coś innego, wówczas<a href="<?php echo get_permalink( $post->ID ); ?>"> kliknij tutaj &raquo;</a></p>
         
<?php } ?>
 
 
<?php get_footer(); ?>