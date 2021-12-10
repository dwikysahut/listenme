<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-color: #131722">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
              class="green-text font-weight-bold"><strong> IN</strong></a></h3>
          <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
        <p id="pesan" style="color: red;"></p>
          <!--Body-->
          <!-- <form action="<?php echo site_url('auth/login') ?>" method="post"> -->
          <div class="form-group">
            <div class="md-form mb-2">
              <input type="email" id="Form-email5" class="form-control validate white-text" name="username">
              <label data-error="wrong" data-success="right" for="Form-email5">Your email</label>
              <span class="help-block"></span>
            </div>
          </div>
          <div class="form-group">
          <div class="md-form pb-3">
            <input type="password" id="Form-pass5" class="form-control validate white-text" name="password">
            <label data-error="wrong" data-success="right" for="Form-pass5">Your password</label>
            <!-- <div class="form-group mt-4">
              <input class="form-check-input" type="checkbox" id="checkbox624">
              <label for="checkbox624" class="white-text form-check-label">Accept the<a href="#" class="green-text font-weight-bold">
                  Terms and Conditions</a></label>
            </div> -->
          </div>
          </div>

          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">

            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <button type="button" onclick="login()" class="btn btn-success btn-block btn-rounded z-depth-1">Sign In</button>
            </div>
            <!--Grid column-->

          </div>
          </form>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-md-12">
              <p class="font-small white-text d-flex justify-content-end">Don't have an account? <a  href="<?php echo base_url('login') ?>" class="green-text ml-1 font-weight-bold">
                  Sign Up</a></p>
            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->
         
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->
