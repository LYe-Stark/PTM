<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jthemes.net/themes/html/quizo/version-15/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Nov 2022 22:02:26 GMT -->
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Le Pays trop Mignon</title>
   <!--favicon-->
   <link rel="shortcut icon" href="../img/logo/images-removebg-preview.ico" type="image/x-icon">
   <!-- FontAwesome-cdn include -->
   <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <!-- Google fonts include -->
   <link href="fonts.googleapis.com/css24a5d.css?family=Russo+One&amp;display=swap" rel="stylesheet">
   <!-- Bootstrap-css include -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!-- Animate-css include -->
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <!-- Main-StyleSheet include -->
   <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
   <div class="wrapper">
      <!-- Top content -->
      <div class="container-fluid p-0">
         <div class="logo_area">
            <a href="index.php">
               <img src="assets/images/logo/logo1.png" alt="image_not_found">
            </a>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <form class="multisteps_form" id="wizard" method="POST" action=<?= $_COOKIE['random']?>>
               <!------------------------- Step-1 ----------------------------->
               <div class="multisteps_form_panel step">
                  <div class="col-md-6 m-auto">
                     <div class="content_box py-5 ps-5 position-relative">
                        <!-- Step-progress-bar -->
                        <div class="step_progress_bar mb-3">
                           <div class="progress rounded-pill">
                              <div class="progress-bar mx-2 rounded-pill" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="question_number text-capitalize">
                           <span class="text-white">question 1 / 8</span>
                           <p class="pt-3">------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                        </div>
                        <div class="question_title py-3">
                           <h1 class="text-white">Que penser vous des Lois de notre monde ?</h1>
                        </div>
                        <div class="form_items">
                           <label for="opt_1" class="step_1 animate__animated animate__fadeInRight animate_25ms position-relative rounded-pill text-start text-white">
                              C'est le pillier de notre monde
                              <input id="opt_1" type="radio" name="stp_1_select_option" value="The Botanical Gardens" checked>
                           </label>
                           <label for="opt_2" class="step_1 animate__animated animate__fadeInRight animate_50ms position-relative rounded-pill text-start text-white active">
                              Ennuyante
                              <input id="opt_2" type="radio" name="stp_1_select_option" value="The Science museum">
                           </label>
                           <label for="opt_3" class="step_1 animate__animated animate__fadeInRight animate_75ms position-relative rounded-pill text-start text-white">
                              M'en bas les c***lles
                              <input id="opt_3" type="radio" name="stp_1_select_option" value="The Olympic Stadium">
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
                              <!------------------------- Step-1 ----------------------------->
               <div class="multisteps_form_panel step">
                  <div class="col-md-6 m-auto">
                     <div class="content_box py-5 ps-5 position-relative">
                        <!-- Step-progress-bar -->
                        <div class="step_progress_bar mb-3">
                           <div class="progress rounded-pill">
                              <div class="progress-bar mx-2 rounded-pill" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="question_number text-capitalize">
                           <span class="text-white">question 2 / 8</span>
                           <p class="pt-3">------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                        </div>
                        <div class="question_title py-3">
                           <h1 class="text-white">Il y a t'il plus mignon/mignonne que toi ? ?</h1>
                        </div>
                        <div class="form_items">
                           <label for="opt_4" class="step_2 animate__animated animate__fadeInRight animate_25ms position-relative rounded-pill text-start text-white">
                              Non plus mignon/mignonne que moi tu meurs
                              <input id="opt_4" type="radio" name="stp_2_select_option" value="The Botanical Gardens" checked>
                           </label>
                           <label for="opt_5" class="step_2 animate__animated animate__fadeInRight animate_50ms position-relative rounded-pill text-start text-white active">
                              Oui je pense
                              <input id="opt_5" type="radio" name="stp_2_select_option" value="The Science museum">
                           </label>
                           <label for="opt_6" class="step_2 animate__animated animate__fadeInRight animate_75ms position-relative rounded-pill text-start text-white">
                              Peut être
                              <input id="opt_6" type="radio" name="stp_2_select_option" value="The Olympic Stadium">
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
               <!------------------------- Step-2 ----------------------------->
               <div class="multisteps_form_panel step">
                  <div class="col-md-6 m-auto">
                     <div class="content_box py-5 ps-5 position-relative">
                        <!-- Step-progress-bar -->
                        <div class="step_progress_bar mb-3">
                           <div class="progress rounded-pill">
                              <div class="progress-bar mx-2 rounded-pill" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="question_number text-capitalize">
                           <span class="text-white">question 3 / 8</span>
                           <p class="pt-3">------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                        </div>
                        <div class="question_title py-3">
                           <h1 class="text-white">T'aime l'argent ?</h1>
                        </div>
                        <div class="form_items">
                           <label for="opt_7" class="step_3 animate__animated animate__fadeInRight animate_25ms position-relative rounded-pill text-start text-white active">
                              OUI
                              <input id="opt_7" type="radio" name="stp_3_select_option" value="Red sea" checked>
                           </label>
                           <label for="opt_8" class="step_3 animate__animated animate__fadeInRight animate_50ms position-relative rounded-pill text-start text-white">
                              NON
                              <input id="opt_8" type="radio" name="stp_3_select_option" value="Dead sea">
                           </label>
                          
                        </div>
                     </div>
                  </div>
               </div>
                              <!------------------------- Step-1 ----------------------------->
               <div class="multisteps_form_panel step">
                  <div class="col-md-6 m-auto">
                     <div class="content_box py-5 ps-5 position-relative">
                        <!-- Step-progress-bar -->
                        <div class="step_progress_bar mb-3">
                           <div class="progress rounded-pill">
                              <div class="progress-bar mx-2 rounded-pill" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="question_number text-capitalize">
                           <span class="text-white">question 4 / 8</span>
                           <p class="pt-3">------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                        </div>
                        <div class="question_title py-3">
                           <h1 class="text-white">Quel pouvoir tu voudrais ?</h1>
                        </div>
                        <div class="form_items">
                           <label for="opt_9" class="step_4 animate__animated animate__fadeInRight animate_25ms position-relative rounded-pill text-start text-white">
                              L'invisibilité
                              <input id="opt_9" type="radio" name="stp_4_select_option" value="The Botanical Gardens" checked>
                           </label>
                           <label for="opt_10" class="step_4 animate__animated animate__fadeInRight animate_50ms position-relative rounded-pill text-start text-white active">
                              Transformé tout en or
                              <input id="opt_10" type="radio" name="stp_4_select_option" value="The Science museum">
                           </label>
                           <label for="opt_10" class="step_4 animate__animated animate__fadeInRight animate_75ms position-relative rounded-pill text-start text-white">
                              Invisibilité
                              <input id="opt_10" type="radio" name="stp_4_select_option" value="The Olympic Stadium">
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
                              <!------------------------- Step-1 ----------------------------->
               <div class="multisteps_form_panel step">
                  <div class="col-md-6 m-auto">
                     <div class="content_box py-5 ps-5 position-relative">
                        <!-- Step-progress-bar -->
                        <div class="step_progress_bar mb-3">
                           <div class="progress rounded-pill">
                              <div class="progress-bar mx-2 rounded-pill" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="question_number text-capitalize">
                           <span class="text-white">question 5 / 8</span>
                           <p class="pt-3">------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                        </div>
                        <div class="question_title py-3">
                           <h1 class="text-white">C'est quoi ton mood ?</h1>
                        </div>
                        <div class="form_items">
                           <label for="opt_11" class="step_5 animate__animated animate__fadeInRight animate_25ms position-relative rounded-pill text-start text-white">
                              Flemmard
                              <input id="opt_11" type="radio" name="stp_5_select_option" value="The Botanical Gardens" checked>
                           </label>
                           <label for="opt_12" class="step_5 animate__animated animate__fadeInRight animate_50ms position-relative rounded-pill text-start text-white active">
                              Dixipliné
                              <input id="opt_12" type="radio" name="stp_5_select_option" value="The Science museum">
                           </label>
                           <label for="opt_13" class="step_5 animate__animated animate__fadeInRight animate_75ms position-relative rounded-pill text-start text-white">
                              food is bae....
                              <input id="opt_13" type="radio" name="stp_5_select_option" value="The Olympic Stadium">
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
                              <!------------------------- Step-1 ----------------------------->
               <div class="multisteps_form_panel step">
                  <div class="col-md-6 m-auto">
                     <div class="content_box py-5 ps-5 position-relative">
                        <!-- Step-progress-bar -->
                        <div class="step_progress_bar mb-3">
                           <div class="progress rounded-pill">
                              <div class="progress-bar mx-2 rounded-pill" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="question_number text-capitalize">
                           <span class="text-white">question 6 / 8</span>
                           <p class="pt-3">------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                        </div>
                        <div class="question_title py-3">
                           <h1 class="text-white">Vous aimez quel style de vie ?</h1>
                        </div>
                        <div class="form_items">
                           <label for="opt_14" class="step_6 animate__animated animate__fadeInRight animate_25ms position-relative rounded-pill text-start text-white">
                              Le luxe
                              <input id="opt_14" type="radio" name="stp_6_select_option" value="The Botanical Gardens" checked>
                           </label>
                           <label for="opt_15" class="step_6 animate__animated animate__fadeInRight animate_50ms position-relative rounded-pill text-start text-white active">
                              Je prends se qui viens
                              <input id="opt_15" type="radio" name="stp_6_select_option" value="The Science museum">
                           </label>
                           <label for="opt_16" class="step_6 animate__animated animate__fadeInRight animate_75ms position-relative rounded-pill text-start text-white">
                              La pauvreté
                              <input id="opt_16" type="radio" name="stp_6_select_option" value="The Olympic Stadium">
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
               <!------------------------- Step-3 ----------------------------->
               <div class="multisteps_form_panel step">
                  <div class="col-md-6 m-auto">
                     <div class="content_box py-5 ps-5 position-relative">
                        <!-- Step-progress-bar -->
                        <div class="step_progress_bar mb-3">
                           <div class="progress rounded-pill">
                              <div class="progress-bar mx-2 rounded-pill" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="question_number text-capitalize">
                           <span class="text-white">question 7 / 8</span>
                           <p class="pt-3">------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                        </div>
                        <div class="question_title py-3">
                           <h1 class="text-white">Et si je te propose de vendre de la drogue pour être riche ?</h1>
                        </div>
                        <div class="form_items">
                           <label for="opt_17" class="step_7 animate__animated animate__fadeInRight animate_25ms position-relative rounded-pill text-start text-white">
                             Non, c'est illégal
                              <input id="opt_17" type="radio" name="stp_7_select_option" value="the hot desert climatic regions" checked>
                           </label>
                           <label for="opt_18" class="step_7 animate__animated animate__fadeInRight animate_50ms position-relative rounded-pill text-start text-white">
                              Je commence quand ?
                              <input id="opt_18" type="radio" name="stp_7_select_option" value="the monsoon climatic regions">
                           </label>
                           <label for="opt_19" class="step_7 animate__animated animate__fadeInRight animate_75ms position-relative rounded-pill text-start text-white">
                              Je préfère me taire 
                              <input id="opt_19" type="radio" name="stp_7_select_option" value="the equatorial regions">
                           </label>
                        </div>
                     </div>
                  </div>
                  ￼
                   
                  
               
               </div>
                              <!------------------------- Step-1 ----------------------------->
           
                              <!------------------------- Step-1 ----------------------------->
             
               <!------------------------- Step-4 ----------------------------->
               <div class="multisteps_form_panel step">
                  <div class="col-md-6 m-auto">
                     <div class="content_box py-5 ps-5 position-relative">
                        <!-- Step-progress-bar -->
                        <div class="step_progress_bar mb-3">
                           <div class="progress rounded-pill">
                              <div class="progress-bar mx-2 rounded-pill" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="question_number text-capitalize">
                           <span class="text-white">question 8 / 8</span>
                           <p class="pt-3">------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                        </div>
                        <div class="question_title py-3">
                           <h1 class="text-white">Tu penses quoi de l'amour ?</h1>
                        </div>
                        <div class="form_items">
                           <label for="opt_26" class="step_10 animate__animated animate__fadeInRight animate_25ms position-relative rounded-pill text-start text-white">
                              Truc pour les cheloux
                              <input id="opt_26" type="radio" name="stp_10_select_option" value="Sri Lanka" checked>
                           </label>
                           <label for="opt_27" class="step_10 animate__animated animate__fadeInRight animate_50ms position-relative rounded-pill text-start text-white">
                              Ça existe mais pas en Afrique
                              <input id="opt_27" type="radio" name="stp_10_select_option" value="China">
                           </label>
                           <label for="opt_28" class="step_10 animate__animated animate__fadeInRight animate_75ms position-relative rounded-pill text-start text-white">
                              C'est fun quand on trouve la bonne personne
                              <input id="opt_28" type="radio" name="stp_10_select_option" value="Russia">
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
               <!------------------------- Form button ----------------------------->
               <div class="form_btn">
                  <button type="button" class="f_btn rounded-pill prev_btn text-uppercase text-white position-absolute" id="prevBtn" onclick="nextPrev(-1)"> Précédent</button>
                  <button type="button" class="f_btn rounded-pill next_btn text-uppercase text-white position-absolute" id="nextBtn" onclick="nextPrev(1);rand()"></button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- jQuery-js include -->
   <script src="assets/js/jquery-3.6.0.min.js"></scrip>

   <script src="assets/js/bootstrap.min.js"></script>
   <!-- jQuery-validate-js include -->
   <script src="assets/js/jquery.validate.min.js"></script>
   <!-- Custom-js include -->
   <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from jthemes.net/themes/html/quizo/version-15/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Nov 2022 22:02:40 GMT -->
</html>