<section id="contact-section">

    <br>
    <br>
    <br>

    <div class="contactform">

    <h3>GET IN TOUCH</h3>

    <hr>

    @if ($msg = Session::get('success'))

    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>	
        <strong>{{ $msg }}</strong>
    </div>

    @endif

    <form action="/messages" method="POST">

    {{ csrf_field() }}
    <div class="textfield">
            <label for="firstname">First Name:</label>
            <input id="firstname" type="text" name="first_name" placeholder="Enter first name.">

        </div>

        <div class="textfield">
            <label for="lastname">Last Name:</label>
            <input id="lastname" type="text" name="last_name" placeholder="Enter last name.">

        </div>

        <div class="textfield">
            <label for="emailfield">E-Mail:</label>
            <input id="emailfield" type="email" name="user_email" placeholder="Enter e-mail.">
        </div>

        <div class="textfield">
            <label>Message:</label>
            <textarea name="user_message" placeholder="Type your message here."></textarea>
        </div>

        <hr>

            <button type="submit" class="btn btn-primary">SEND</button>

    </form>

</section>


</div>