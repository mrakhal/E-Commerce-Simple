
<div id="map" style="width:720px;height:300px;background:#EDA0DE">
    <script>
      function initMap() {
        var myLatLng = {lat: -6.914353, lng: 107.696517};

          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: myLatLng
          });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Ubertos, Jalan A.H. Nasution, Pakemitan, Kota Bandung, Jawa Barat'
      });
        }
   </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUiuwQURwnSURlkRogTQBghPkHyIIOCKM&callback=initMap"></script>

</div>


<!-- Contact Us -->

<div class="row">
  <div class="col-md-6">
    <br>
    <div class="contact_contents">
      <h1>Kontak Kami</h1>
      <p>Kami selalu siap melayani anda dimanapun kapanpun dan kami selalu memberikan fasilitas untuk memberikan kenyamanan pengguna</p>
      <div>
        <p><span class="fa fa-map-marker" aria-hidden="true"></span> : Jl. A.H. Nasution No.46A - Ubertos Bandung Lt.10</p>
        <p><span class="fa fa-phone" aria-hidden="true"></span> : (022) 780-91XX</p>
        <p><span class="fa fa-envelope-o" aria-hidden="true"></span> : catalogyuk@gmail.com</p>
        <p><span <span class="fa fa-building-o" aria-hidden="true"></span> : 07:00 - 24:00</p>
      <br>
    </div>
  </div>
</div>

  <div class="col-md-6">
    <br>
    <div class="get_in_touch_contents">
      <h1>Keluhan Pelanggan</h1>
      <p>Keluhan Anda Memotivasi Kami Untuk Lebih Baik Lagi  <span class="fa fa-heart" aria-hidden="true"></span></p>
      <form action="#">
        <div>
          <input id="input_name" class="form_input input_name input_ph" type="text" name="name" placeholder="Nama" required="required" data-error="Name is required.">
          <input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="Email" required="required" data-error="Valid email is required.">
          <textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Masukan Keluhan Anda" rows="3" required data-error="Please, write us a message."></textarea>
        </div>
        <div>
          <button id="review_submit" type="submit" class="red_button message_submit_btn trans_300" value="Submit">send message</button>
        </div>
      </form>
    <br>
  </div>
</div>
</div>
