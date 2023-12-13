<?php
if (isset($_SESSION['alertThis'])) {
     $alertThis = $_SESSION['alertThis'];
     ?>
     <div class="toast text-bg-success position-absolute bottom-0 start-0 m-2" role="alert" aria-live="assertive"
          aria-atomic="true" data-delay="10000">
          <div class="d-flex">
               <div class="toast-body">
                    <?php echo $alertThis; ?>
               </div>
          </div>
     </div>
     <script>
          $(document).ready(function () {
               $('.toast').toast('show');
          });
     </script>
     <?php
     unset($_SESSION['alertThis']); // Remove the alert from session after displaying
}
?>