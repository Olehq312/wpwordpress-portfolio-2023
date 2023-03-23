<?php 
/**
 * 
 * Template Name: Front Page
 */
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-area">
        <!-- NAVBAR is here -->
        <div id="navbar">
            <div class="heading">
                <div class="text">
                    <h1>OLEH SHABATIN</h1>
                    <h2>Graphic designer</h2>
                </div>
            </div>
            <div class="image">
                
                <img src=" <?php
                       echo get_template_directory_uri(  ) . '/../../uploads/2023/03/IMG_0908.jpg'
                    ?>" alt="">
                   
                    
            
            </div>
            <div class="borderbot"></div>
        </div>


        <!-- buttons -->

        <div class="menu">
            <a href="#navbar">
            <button id="btn">HOME</button>
            </a>
            <a href="#works">
            <button id="btn">WORKS</button>
            </a>
            <a href="#foot">
            <button id="btn">CONTACT</button>
            </a>
            
        </div>

        <div class="bigtext">
            <p>Oleh Shabatin is a graphic designer & interface developer 
                based in Esbjerg, Denmark, 
                working with clients worldwide.</p>
        </div>

      
            
     
        <!-- this in backend of WP content -->
        <div class="content">
            <div id="works">
               <div class="graph">
                <a href="http://wp-2023-template.local/graphic-illustration/">
                <h1>Graphic Illustrations</h1>
                </a>
               </div>
               <div class="graph">
                <a href="http://wp-2023-template.local/photoshop/"> 
                <h1>Photoshop</h1>
                </a>
               </div>
               <div class="graph">
                <a href="http://wp-2023-template.local/clothes-design/">
                <h1>Clothes design</h1>
                </a>
               </div>
               <div class="graph">
                <a href="http://wp-2023-template.local/interface-design/">
                <h1>Interface design</h1>
                </a>
               </div>
               <div class="ill">
                <a href="http://wp-2023-template.local/illustrations/">
                <h1>Illustration arts</h1>
                </a>
               </div>
            </div>
            <br>
            <div class="video">
                <?php 
                    the_content(  );
                ?>
            </div>    
        </div>
        <footer id="foot">        
          <div class="footer1">
          <div class="bordrig1"></div>
          <div class="footText">
            GET IN TOUCH
          </div>
          <div class="bordrig2"></div>

        </div>

        <div class="footer2">
            <div class="icons">
            
            <a href="https://www.instagram.com">  
            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="70px" height="70px" viewBox="0 0 32 32"><path d="M20.445 5h-8.891A6.559 6.559 0 0 0 5 11.554v8.891A6.559 6.559 0 0 0 11.554 27h8.891a6.56 6.56 0 0 0 6.554-6.555v-8.891A6.557 6.557 0 0 0 20.445 5zm4.342 15.445a4.343 4.343 0 0 1-4.342 4.342h-8.891a4.341 4.341 0 0 1-4.341-4.342v-8.891a4.34 4.34 0 0 1 4.341-4.341h8.891a4.342 4.342 0 0 1 4.341 4.341l.001 8.891z"/><path d="M16 10.312c-3.138 0-5.688 2.551-5.688 5.688s2.551 5.688 5.688 5.688 5.688-2.551 5.688-5.688-2.55-5.688-5.688-5.688zm0 9.163a3.475 3.475 0 1 1-.001-6.95 3.475 3.475 0 0 1 .001 6.95zM21.7 8.991a1.363 1.363 0 1 1-1.364 1.364c0-.752.51-1.364 1.364-1.364z"/>
            </svg>
            </a>

            <a href="https://www.linkedin.com/in/oleh-shabatin-961455264/">
            <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 192 192" fill="none"><rect width="132" height="132" x="30" y="30" stroke="#000000" stroke-width="12" rx="16"/><path stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" d="M66 86v44"/><circle cx="66" cy="64" r="8" fill="#000000"/><path stroke="#000000" stroke-linecap="round" stroke-width="12" d="M126 130v-26c0-9.941-8.059-18-18-18v0c-9.941 0-18 8.059-18 18v26"/>
            </svg>
            </a>
            

              <a href="https://www.facebook.com/oleg.shabatin.1/">
              <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 192 192" fill="none"><path stroke="#000000" stroke-linecap="round" stroke-width="12" d="M96 170c40.869 0 74-33.131 74-74 0-40.87-33.131-74-74-74-40.87 0-74 33.13-74 74 0 40.869 33.13 74 74 74Zm0 0v-62m30-48h-10c-11.046 0-20 8.954-20 20v28m0 0H74m22 0h22"/>
              </svg>
              </a>
  
              <a href="https://indd.adobe.com/view/fe8b898a-7097-4166-af9c-cc7937bcc3d6">
              <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="-0.5 0 25 25" fill="none">
              <path d="M12.0001 13.09C14.4909 13.09 16.5101 11.0708 16.5101 8.58C16.5101 6.08919 14.4909 4.07 12.0001 4.07C9.5093 4.07 7.49011 6.08919 7.49011 8.58C7.49011 11.0708 9.5093 13.09 12.0001 13.09Z" stroke="#0F0F0F" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M8.98008 11.91C8.97008 11.91 8.97008 11.91 8.96008 11.92" stroke="#0F0F0F" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M16.9701 12.82C19.5601 14.4 21.3201 17.19 21.5001 20.4C21.5101 20.69 21.2801 20.93 20.9901 20.93H3.01007C2.72007 20.93 2.49007 20.69 2.50007 20.4C2.68007 17.21 4.43007 14.43 6.99007 12.85" stroke="#0F0F0F" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              </a>
  
  
              
  
            </div>
   
        </div>

         

        </footer>


    </main>
</div>



<?php get_footer(); ?>


