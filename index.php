 <?php
 include 'header.php';
 ?>
    <div class="logo">
        <div class="container">
            <div class="logo_img">
                <img src="images/logo-black.png">
            </div>
        </div>
    </div>
     <section id="contacts" class="item page-content">
        <div class="page-inner">
            <h3 class="section-title with-border font-weight-bold">Get started today</h3>
            <div class="section-stitle"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Aliquam iaculis vestibulum tortor.</div>
            <!-- Contact form -->
            <form action="display.php" method="POST" name="contact-form" id="contact-form">
                <div id="contact-message" class="form-message"></div>
                <div class="row">
                    <div class="col-6">
                    <input type="text" name="Ast_name" placeholder="Asset Name" id="user-email" class="required">
                    </div>
                    <div class="col-6">
                    <select name="type" value="#"  class="form-control">
                        <option value="#" disabled selected>Asset Type</option>
                        <optgroup label="Crypto">
                           <option>Bitcoin</option>
                            <option>Doge Coin</option>
                        </optgroup>
                        <optgroup label="Giftcards">
                            <option>Amazon</option>
                            <option>Itunes</option>
                        </optgroup>
                     </select>
                    </div>
                    <div class="col-6">
                    <select name="currency" value="#"  class="form-control">
                        <option value=""selected> Currency</option>
                        <option value="$ Dollar"> $ Dollar </option>
                        <option value="£ Pounds"> £ Pounds </option>
                        <option value="€ Euro"> € Euro </option>
                     </select>
                    </div>
                    <div class="col-6">
                    <input type="text" name="rate" placeholder="Rate" id="user-email" class="required">
                    </div>
                    <div class="col-12 submit-box">
                        <input style="width: 28%;
                        background-color: #9ccf31;" type="submit" name="submit" value="submit" class="btn btn-lg mt-4">
                    </div>
                    <div class="clr"></div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>