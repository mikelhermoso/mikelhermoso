<html>
    <head>
        <title>Mikel Hermoso</title>
        <link REL=StyleSheet HREF="css/style.css">
        <link REL=StyleSheet HREF="css/styleHeader.css">
        <link REL=StyleSheet HREF="css/styleNav.css">
        <link REL=StyleSheet HREF="css/styleSobreMi.css">
        <link REL=StyleSheet HREF="css/styleHabilidades.css">
        <link REL=StyleSheet HREF="css/styleContacto.css">
        <link REL=StyleSheet HREF="css/styleFooter.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    </head>
    
    <header>
        <?php include 'layouts/header.php';?>
    </header>
    
    <body>
        
        <?php include 'layouts/sobremi.php';?>
        
        <?php include 'layouts/habilidades.php';?>
        
        <?php include 'layouts/contacto.php';?>
        
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
           } else {
               $("#cabeceraFix").fadeOut();
           }
        });
        
    });
</script>