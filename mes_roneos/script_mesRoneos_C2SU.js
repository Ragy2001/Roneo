/* C2SU */

/* modifié et crée par Eol (Mayeul) en juillet 2020 */


  


$(document).ready(function() {



    $('main h3').click(function() {  // animation d'ouverture de l'espace pour les sous-catégories
        $(this).next().slideToggle(300);
    }); 




    /* bouton d'upload d'un fichier */
    $('.importFile input').change(function() {
        // on récupère le nom du fichier et on enlève le chemin
        const fileName = $(this).val().split("\\"); 

        if(fileName.length)
            $(this).text(fileName[fileName.length-1]);

        // on intègre ce nom dans un <p> vide
        $('.importFile p').text(fileName[2])  
    });





    //animation du popup d'importation
    $('.iconUpload').click(function() {
        $('.importPopup').toggleClass('active');
        $('.backPopCover').toggleClass('activated');
    });

    $('.backPopCover').click(function() {
        $('.importPopup').removeClass('active');
        $('.backPopCover').removeClass('activated');
    })






    
});