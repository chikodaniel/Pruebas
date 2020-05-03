function check(){
    var pregunta1 = document.test.pregunta1.value;
    var pregunta2 = document.test.pregunta2.value;
    var pregunta3 = document.test.pregunta3.value;
    var pregunta4 = document.test.pregunta4.value;
    var pregunta5 = document.test.pregunta5.value;
    var pregunta6 = document.test.pregunta6.value;


    var resource1 = document.test.resource1.value;
    var resource2 = document.test.resource2.value;
    var resource3 = document.test.resource3.value;
    var resource4 = document.test.resource4.value;
    var resource5 = document.test.resource5.value;
    var resource6 = document.test.resource6.value;

    
    var correct = 0;

        if('null' != pregunta1){
            if(pregunta1 == resource1 ){
                correct++;
                document.getElementById("correcta1").innerHTML = "Correcto =D";
            } else{
                
                document.getElementById("correcta1").innerHTML = "La respuesta correcta es " + resource1 ;      
            }
        }   
        
        if('null' != pregunta2){
            if(pregunta2 == resource2 ){
                correct++;
                document.getElementById("correcta2").innerHTML = "Correcto =D";
            } else{
                document.getElementById("correcta2").innerHTML = "La respuesta correcta es " + resource2 ;
               
            }
        }      

        if('null' != pregunta3){
            if(pregunta3 == resource3 ){
                correct++;
                document.getElementById("correcta3").innerHTML = "Correcto =D";
            } else{
                document.getElementById("correcta3").innerHTML = "La respuesta correcta es " + resource3 ;
               
            }
        }   

        if('null' != pregunta4){
            if(pregunta4 == resource4 ){
                correct++;
                document.getElementById("correcta4").innerHTML = "Correcto =D";
            } else{
                document.getElementById("correcta4").innerHTML = "La respuesta correcta es " + resource4 ;
            
            }
        }   

        if('null' != pregunta5){
            if(pregunta5 == resource5 ){
                correct++;
                document.getElementById("correcta5").innerHTML = "Correcto =D";
            } else{
                document.getElementById("correcta5").innerHTML = "La respuesta correcta es " + resource5 ;
               
            }
        }  

        if('null' != pregunta6){
            if(pregunta6 == resource6 ){
                correct++;
                document.getElementById("correcta6").innerHTML = "Correcto =D";
            } else{
                document.getElementById("correcta6").innerHTML = "La respuesta correcta es " + resource6 ;
                
            }
        }  

        document.getElementById("correctas").innerHTML ="Tienes " + correct + " respuestas correctas";
        document.getElementById("textbox1").readOnly = true;
        document.getElementById("textbox2").readOnly = true;
        document.getElementById("textbox3").readOnly = true;
        document.getElementById("textbox4").readOnly = true;
        document.getElementById("textbox5").readOnly = true;
        document.getElementById("textbox6").readOnly = true;
}

function prueba(){
    var q1 = document.quiz.q1.value;
    var q2 = document.quiz.q2.value;
    var q3 = document.quiz.q3.value;
    var q4 = document.quiz.q4.value;
    var q5 = document.quiz.q5.value;
    var q6 = document.quiz.q6.value;
    
    var q7 = document.quiz.q7.value;
    var q8 = document.quiz.q8.value;
    var q9 = document.quiz.q9.value;
    var q10 = document.quiz.q10.value;
    var q11 = document.quiz.q11.value;
    var q12 = document.quiz.q12.value;

    var q13 = document.quiz.q13.value;
    var q14 = document.quiz.q14.value;
    var q15 = document.quiz.q15.value;
    var q16 = document.quiz.q16.value;
    var q17 = document.quiz.q17.value;
    var q18 = document.quiz.q18.value;
    



    var resource1 = document.quiz.resource1.value;
    var resource2 = document.quiz.resource2.value;
    var resource3 = document.quiz.resource3.value;
    var resource4 = document.quiz.resource4.value;
    var resource5 = document.quiz.resource5.value;
    var resource6 = document.quiz.resource6.value;

    var resource7 = document.quiz.resource7.value;
    var resource8 = document.quiz.resource8.value;
    var resource9 = document.quiz.resource9.value;
    var resource10 = document.quiz.resource10.value;
    var resource11 = document.quiz.resource11.value;
    var resource12 = document.quiz.resource12.value;

    var resource13 = document.quiz.resource13.value;
    var resource14 = document.quiz.resource14.value;
    var resource15 = document.quiz.resource15.value;
    var resource16 = document.quiz.resource16.value;
    var resource17 = document.quiz.resource17.value;
    var resource18 = document.quiz.resource18.value;


    var correct = 0;

    if(q1 == resource1){
        correct++;
    }

    if(q2 == resource2){
        correct++;
    }

    if(q3 == resource3){
        correct++;
    }

    if(q4 == resource4){
        correct++;
    }

    if(q5 == resource5){
        correct++;
    }

    if(q6 == resource6){
        correct++;
    }
    
    if(q7 == resource7){
        correct++;
    }

    if(q8 == resource8){
        correct++;
    }

    if(q9 == resource9){
        correct++;
    }

    if(q10 == resource10){
        correct++;
    }

    if(q11 == resource11){
        correct++;
    }

    if(q12 == resource12){
        correct++;
    }

    if(q13 == resource13){
        correct++;
    }

    if(q14 == resource14){
        correct++;
    }

    if(q15 == resource15){
        correct++;
    }

    if(q16 == resource16){
        correct++;
    }

    if(q17 == resource17){
        correct++;
    }    

    if(q18 == resource18){
        correct++;
    }
    
    document.getElementById("correctas").innerHTML = '<font size = "5">'+"Tienes " + correct + " respuestas correctas"+'</font>';

}