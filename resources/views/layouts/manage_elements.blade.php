
       <div id='main'>
           
           
        <!-- Sidebar -->
               <div id="Sidebar11" class="sidebar1">
                 <a href="javascript:void(0)" class="closebtn" onclick="closeSide()">&times;</a>
                 <script>
                         function openSide() {
 
 document.getElementById("Sidebar11").style.width = "210px";
 
 document.getElementById("main").style.marginLeft = "210px";
 
 document.getElementById("Sidebar11").style.background = "#1a1a1a";
 
 }
 
 function closeSide() {
 
 document.getElementById("Sidebar11").style.width = "0";
 
 document.getElementById("main").style.marginLeft = "0";
 
 document.getElementById("Sidebar11").style.background = "gray";
 }
 
                     </script>
                 <br><br><br>
                 <a href="http://127.0.0.1:8000/{{$company_name}}/employer_portal/manage_employees/view"><i class="fas fa-eye"></i>View All Employees</a>
                 <a href="http://127.0.0.1:8000/{{$company_name}}/employer_portal/manage_employees/manage"><i class="fas fa-pen"></i>Manage Employees</a>
                 <a id="myBtn" href="#"><i class="fas fa-search"> </i>Search Employee
  
             </a>
                 <!-- Trigger/Open The Modal -->
 
               </div>
               
 <!-- The Modal -->
 <div id="myModal" class="modal">
 
     <!-- Modal content -->
     <div class="modal-content">
 
 
         <div class="wrap">
             <div class="search">
 
                <input type="text" class="searchTerm" placeholder="Search Employee By ID or Name">
                <button type="submit" class="searchButton">
 
                  <i class="fas fa-search"></i>
               </button>
               <br>
 
               <button class="close">&times;</button>
 
             </div>
          </div>         
          </form>
           
       </div>
     </div>
   </div>
 
   </div>
 
 
 
   <script>
     // Get the modal
     var modal = document.getElementById("myModal");
     
     // Get the button that opens the modal
     var btn = document.getElementById("myBtn");
     
     // Get the <span> element that closes the modal
     var span = document.getElementsByClassName("close")[0];
     
     // When the user clicks the button, open the modal 
     btn.onclick = function() {
       modal.style.display = "block";
     }
     
     // When the user clicks on <span> (x), close the modal
     span.onclick = function() {
       modal.style.display = "none";
     }
     
     // When the user clicks anywhere outside of the modal, close it
     window.onclick = function(event) {
       if (event.target == modal) {
         modal.style.display = "none";
       }
     }
     </script>
     
   
 