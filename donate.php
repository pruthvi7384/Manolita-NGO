<?php
    include('components/Navigation.php');
?>
<!-- Donates Form -->
    <div class="container padding donation">
        <div class="heading">
            <h2>Donate To Our Ngo</h2>
            <p>Help to needed !</p>
        </div>
        <div class="form_body d-flex mt-2">
            <form>
                <div class="form-controal d-flex">
                    <label for="">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Your Full Name" required>
                </div>
                <div class="form-controal d-flex">
                    <label for="">E-Mail Id</label>
                    <input type="text" id="email" placeholder="Enter Your Email Id" required>
                </div>
                <div class="form-controal d-flex">
                    <label for="">Phone Number</label>
                    <input type="number" id="phone_no" placeholder="Enter Your Phone Number" required>
                </div>
                <div class="form-controal d-flex">
                    <label for="">Donation Amount</label>
                    <input type="number" id="donation_amount" placeholder="Enter Donation Amount" required>
                </div>
                <div class="form-btn">
                    <button type="button"  class="btn read-more-btn" >Donate Now</button>
                </div>
            </form>
        </div>
    </div>
<!--X- Donates Form -X-->

<?php 
    include('components/footer.php');
?>
