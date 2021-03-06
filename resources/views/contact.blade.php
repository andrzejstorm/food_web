@extends('Layouts.site')

@section('content')
<!DOCTYPE html>

<!-- content -->
<article id="content">
    <div class="wrap">
        <div class="box">
            <div>
                <h2 class="letter_spacing">Contact <span>Form</span></h2>
                
                <div id="contact_form">	
                    <strong>Hello !! You can send message to us.</strong>
                    <form name="form1" id="ff" method="post" action="Contacts.php">
                         <label>
                         Name*:
                         <input type="text" placeholder="Please enter your name" name="name" id="name" required>
                         </label>
                     
                         <label>
                         Email*:
                         <input type="email" placeholder="youremail@gmail.com" name="email" id="email" required>
                         </label>
                            
                         <label>
                         Message*:
                         <textarea name="message" id="message">Please enter your message</textarea>
                         </label>
                     
                         <input class="sendButton" type="submit" name="Submit" value="Send">
                         
                    </form>
                </div>
            </div>
        </div>
    </div>
</article>
</div>
</div>
</div>
<div class="body2">
<div class="main zerogrid">
<article id="content2">
<section>
    <div class="wrapper">
        <div class="col-1-3"><div class="wrap-col">
            <h2>Our Contacts</h2>
            <div class="wrapper pad_bot1">
                <p>Sed ut perspiciatis unde omnis iunatus doloremque laudantium.</p>
                <p class="address">
                    Marmora Road, Glasgow, D04 89GR.<br>
                    <span>Freephone:</span>    +1 800 559 6580<br>
                    <span>Telephone:</span>    +1 959 603 6035<br>
                    <span>E-mail:</span>             <a href="mailto:">mail@demolink.org</a>
                </p>
            </div>
        </div></div>
        <div class="col-2-3"><div class="wrap-col mag-1">	
            <h2>Miscellaneous Info</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error.
        </div></div>
    </div>
</section>
</article>
<!-- / content -->
</div>
</div>
<div class="body3">

<div class="main zerogrid">

@endsection