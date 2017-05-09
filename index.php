<?php require('strings/strings_es.php'); ?>
<html>
    <head>
        <title>Mikel Hermoso</title>
        <link REL=StyleSheet HREF="css/style.css">
        <link REL=StyleSheet HREF="css/styleHeader.css">
        <link REL=StyleSheet HREF="css/styleNav.css">
        <link REL=StyleSheet HREF="css/styleSobreMi.css">
        <link REL=StyleSheet HREF="css/styleHabilidades.css">
        <link REL=StyleSheet HREF="css/styleRedes.css">
        <link REL=StyleSheet HREF="css/styleContacto.css">
        <link REL=StyleSheet HREF="css/styleFooter.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    </head>
    
    <header>
        <?php include 'layouts/header.php';?>
    </header>
    
    <body>
        <a name="sobremi"></a>
        <?php include 'layouts/sobremi.php';?>
        
        <a name="habs"></a>
        <?php include 'layouts/habilidades.php';?>
        
        <a name="redes"></a>
        <?php include 'layouts/redesSociales.php';?>
        
        
        <a name="contacto"></a>
        <?php include 'layouts/contacto.php';?>
        <?php include 'layouts/mapa.php';?>
        
    </body>
    
    <footer>
       <?php include 'layouts/footer.php';?> 
    </footer>
</html>

<script>
    $(function(){
        $(window).scroll(function(){
            if ($(window).scrollTop() > 30) {
                $("#cabecera").fadeOut();
            } else {
                $("#cabecera").fadeIn();
            }
        });
        
        $(window).scroll(function(){
           if ($(window).scrollTop() > 400) {
               $("#cabeceraFix").fadeIn();
               $(".ir-arriba").fadeIn();
           } else {
               $("#cabeceraFix").fadeOut();
               $(".ir-arriba").fadeIn();
           }
        });
        
        $('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
        
    });
    $( "#containerHabilidades1" ).hover(function() {
            $( "#contentTitHabs1" ).fadeOut( 0 );
            $( "#contentTextoHabs1" ).fadeIn(1200);}, 
        function(){
            $( "#contentTextoHabs1" ).fadeOut( 0 );
            $( "#contentTitHabs1" ).fadeIn( 500 );
    });
    $( "#containerHabilidades2" ).hover(function() {
            $( "#contentTitHabs2" ).fadeOut( 0 );
            $( "#contentTextoHabs2" ).fadeIn(1200);}, 
        function(){
            $( "#contentTextoHabs2" ).fadeOut( 0 );
            $( "#contentTitHabs2" ).fadeIn( 500 );
    });
    $( "#containerHabilidades3" ).hover(function() {
            $( "#contentTitHabs3" ).fadeOut( 0 );
            $( "#contentTextoHabs3" ).fadeIn(1200);}, 
        function(){
            $( "#contentTextoHabs3" ).fadeOut( 0 );
            $( "#contentTitHabs3" ).fadeIn( 500 );
    });
    $( "#containerHabilidades4" ).hover(function() {
            $( "#contentTitHabs4" ).fadeOut( 0 );
            $( "#contentTextoHabs4" ).fadeIn(1200);}, 
        function(){
            $( "#contentTextoHabs4" ).fadeOut( 0 );
            $( "#contentTitHabs4" ).fadeIn( 500 );
    });

</script>