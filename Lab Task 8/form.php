<!DOCTYPE html>
<html>
    <head>
        <title>Lab Task 1</title>
    </head>
    <style>
        div.a
        {
          background-color:Gainsboro;
          font-family: Calibri;
        }
        .a label
        {
            width: 250px;
            display: inline-block;
            text-align: right;
        }
        .a select
        {
            padding: 5px;
            width: 150px;
        }
        div.b{
            background-color:Gainsboro;
            font-family: Calibri;
        }
        .b label
        {
            width: 250px;
            display: inline-block;
            text-align: right;
        }
        .b select
        {
            padding: 5px;
            width: 250px;
        }
        div.c
        {
            background-color:Gainsboro;
            font-family: Calibri;
        }
        .c label
        {
            display: inline-block;
            text-align: right;
        }
        input[type="radio"]
        {
            margin-right: 0px;
        }
        div.d
        {
            background-color:Gainsboro;
            font-family: Calibri;
        }
        .d label
        {
            display: inline-block;
        }
        div.info
        {
            background-color:Gainsboro;
            font-family: Calibri;
        }
        .info label
        {
            display: inline-block;
            text-align: right;
        }
        .donet_interest
        {
            margin-left: 10px;
        }
        div.donator
        {
            background-color:Gainsboro;
            font-family: Calibri;
        }
        .donator label
        {
            width: 250px;
            display: inline-block;
            text-align: right;
        }
        .donator select
        {
            padding: 5px;
            width: 150px;
        }
        div.addition_check
        {
            background-color:Gainsboro;
            font-family: Calibri;
        }
        .addition_check label
        {
            padding-left: 25px;
        }
        input[type="checkbox"]
        {
            margin-left: 15px;
        }
        div.comments
        {
            background-color:Gainsboro;
            font-family: Calibri;
        }
        .comments label
        {
            width: 250px;
            display: inline-block;
            text-align: right;
        }
        div.contact
        {
            background-color:Gainsboro;
            font-family: Calibri;
        }
        .contact label
        {
            
            display: inline-block;
            text-align: right;
        }
        hr.line 
        {
            border: 5px solid white;
            border-radius: 5px;
            width: 700px;
            margin-left: 15px;
        }
        .button 
        {
            border: 2px solid #555555;
            color: none;
            padding: 2px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 12px;
        }
    </style>

    <body>
        <div class="a">
            <form class="form" id="form">
                <p><span style="color:red;"> * </span>- Dontes Require Information</p>
                
                <pre><span style="font-family:Calibri"><b>> 1 Donation</b>        > 2 Confirmation           > Thank you</span></pre>
                
                <p style="color:red;font-size: 20px;"><b>Donor Information</b></p>

                <label for="fname"><b>First name:</b><span style="color:red">*</span></label> 
                <input type="text" id="fname" name="fname" size="30"><br>
                <label for="lname"><b>Last name:</b><span style="color:red">*</span></label> 
                <input type="text" id="lname" name="lname" size="30"><br>
                <label for="comname"><b>Company:</b></label> 
                <input type="text" id="comname" name="comname" size="30"><br>
                <label for="add1"><b>Address 1:</b><span style="color:red">*</span></label> 
                <input type="text" id="add1" name="add1" size="30"><br>
                <label for="add2"><b>Address 2:</b></label> 
                <input type="text" id="add2" name="add2" size="30"><br>
                <label for="city"><b>City:</b><span style="color:red">*</span></label> 
                <input type="text" id="city" name="city" size="30"><br>
                <label for="state"><b>State:</b><span style="color:red">*</span></label> 
                <select id="state">
                    <option value="Select a state" selected>Select a state</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Bogra">Bogra</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Cox Bazar">Cox Bazar</option>
                </select><br>
                <label for="zip"><b>Zip Code:</b><span style="color:red">*</span></label> 
                <input type="text" id="zip" name="fname" size="30"><br>
            
                </div>
                <div class="b">
            
                <label for="country"><b>Country:</b><span style="color:red">*</span></label> 
                <select id="Country">
                    <option value="Select a country" selected>Select a country</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="India">India</option>
                    <option value="Nepal">Nepal</option>
                    <option value="USA">USA</option>
                    <option value="UK">UK</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Indonesia">Indonesia</option>
                </select><br>
                <label for="phone"><b>Phone:</b></label> 
                <input type="text" id="phone" name="fname" size="30"><br>
                <label for="fax"><b>Fax:</b></label> 
                <input type="text" id="fax" name="fname" size="30"><br>
                <label for="email"><b>Email:</b><span style="color:red">*</span></label> 
                <input type="text" id="email" name="fname" size="30"><br>
            
                </div>
                <div class ="c">
            
                <label for="donationamount" style="width: 250px;"><b>Donation Amount:</b><span style="color:red">*</span>
                </label> 

                <input type="radio" name="radio">
                <span class="radiobtn"></span>
                <label class="donet_amount">None</label>
                <input type="radio" name="radio">
                <span class="radiobtn"></span>
                <label class="donet_amount">$ 50</label>
                <input type="radio" name="radio">
                <span class="radiobtn"></span>
                <label class="donet_amount">$ 75</label>
                <input type="radio" name="radio">
                <span class="radiobtn"></span>
                <label class="donet_amount">$ 100</label>
                <input type="radio" name="radio">
                <span class="radiobtn"></span>
                <label class="donet_amount">$ 125</label>
                <input type="radio" name="radio">
                <span class="radiobtn"></span>
                <label class="donet_amount"> Other</label>
                
            
                </div>
                <div class ="d">
            
                <label for="checkabutton" style="font-size:15px;text-align:right;width: 240px;">(check a button or type in your ammount)
                </label>
                <label for="otheramount" style="font-size: 18px;"><b>Other Amount $ </b>
                </label>
                <input type="text" id="otheramount" name="otheramount" size="30"><br>
                <label for="recdonation" style="text-align:right;width: 240px;"><b>Recurring Donation</b>
                </label>
                <input type="checkbox" id="recdonation" name="interested" value="I am interested in giving on a regular basis">
                I am interested in giving on a regular basis<br>
                <label for="check" style="font-size:15px;text-align:right;width: 240px;"><sup>(check if yes)</sup>
                </label>
                <label for="check" style="font-size:15px;text-align:right;width: 150px;">Monthly credit card $
                </label>
                <input type="text" id="money" name="money" size="8"> For
                <input type="text" id="month" name="month" size="8"> Month<br><br>
                <label for="donate_info" style="color: red;font-size: 20px;"><b>Honorium and Memorial Donation Information</b></label><br>
            
                </div>

                <div class ="info">
                <label for ="donet_interest" style="width: 250px;"><b>I would like to make this donation</b></label>
                
                <input type="radio" name="radio">
                <span class="radiobtn"></span>
                <label class="donet_interest">To Honor</label>
                <br>
                <input type="radio" name="radio" style="margin-left: 260px;">
                <span class="radiobtn"></span>
                <label class="donet_interest">In Memory Of</label>
                </div>
                <div class="donator">
            
                <label for ="name"><b>Name:</b></label>
                <input type="text" id="name" name="name" size="30"><br>
                <label for ="donate_to"><b>Acknowledge Donation To:</b></label>
                <input type="text" id="donate_to" name="donate_to" size="30"><br>
                <label for ="address"><b>Address:</b></label>
                <input type="text" id="address" name="address" size="30"><br>
                <label for="state"><b>State:</b></label> 
                <select id="state">
                    <option value="Select a state" selected>Select a state</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Bogra">Bogra</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Cox Bazar">Cox Bazar</option>
                </select><br>
                <label for ="zip"><b>Zip:</b></label>
                <input type="text" id="zip" name="zip" size="30"><br>
                <lebel for="addition" span style="color:red;font-size: 20px;"><b>Additional Information</b></span></lebel><br>
                <lebel for="information">Please enter your name, companu or organization as you would like it to appear in out publication:
                <br>
                <label for ="name" style="width: 250px;"><b>Name:</b></label>
                <input type="text" id="name" name="name" size="30"><br>
           
                </div>
                <div class="addition_check">
            
                <input type="checkbox" style="margin-left: 50px;">
                <span class="checkmark"></span>
                <label class="addition_check">I would like my gift to remain anonymous.
                </label>
                <br>
                <input type="checkbox" style="margin-left: 50px;">
                <span class="checkmark"></span>
                <label class="addition_check">My employer offers a matching gift program. I will mail the matching gift form.
                </label>
                <br>
                <input type="checkbox" style="margin-left: 50px;">
                <span class="checkmark"></span>
                <label class="addition_check">Please save the cost of acknowledging this gift by not mailing a thank you letter.                   
                </label>
                <br><br>
                
            
                </div>
                <div class="comments">
          
                <label for ="comment"><b>Comments:</b></label>
                <textarea name="comment"  rows="4" cols="30" ></textarea><br>
                <label for="checkabutton" style="font-size: 15px;">(please type any questions or feedback here)</label>
       
                </div>
                <div class="contact">
          
                <br>
                <label for ="contact" style="width: 250px;"><b>How may we contact with you?</b></label>

                <input type="checkbox" >
                <span class="contact_checkbox"></span>
                <label class="addition_check">Email
                </label><br>
                
                <input type="checkbox" style="margin-left: 268px;">
                <span class="contact_checkbox"></span>
                <label class="addition_check">Post Mail
                </label><br>
                
                <input type="checkbox" style="margin-left: 268px;">
                <span class="contact_checkbox"></span>
                <label class="addition_check">Telephone                  
                </label><br>
                
                <input type="checkbox" style="margin-left: 268px;">
                <span class="contact_checkbox"></span>
                <label class="addition_check">Fax                  
                </label>

                <p><span style="color: grey; margin-left: 40px;">I would like to receive newsletters and information about special event by:</span></p>

                <input type="checkbox" style="margin-left: 268px;">
                <span class="contact_checkbox"></span>
                <label class="addition_check">Email
                </label><br>
                <input type="checkbox" style="margin-left: 268px;">
                <span class="contact_checkbox"></span>
                <label class="addition_check">Post Mail
                </label><br>

                <input type="checkbox" style="margin-left: 50px;">
                <span class="contact_checkbox"></span>
                <label class="inform_volunteer">I would like infromation about volunteering with the
                </label><br>
                <hr class="line">
                <button class="button button1" style="margin-left: 250px;">Reset</button>
                <button type="submit" class="button button1" style="margin-left: 10px;">Continue</button><br>
                <img src="image/lock.png" alt="lock" width="20" height="15" style="margin-left: 40px;">
                <label class="donate_onlinemoney">Donate online with confidence. You are on a secure server.</label><br><br>
                <label class="support"style="margin-left: 40px;">If you have any problems or questions, please contact <span style="color:grey">Support</span></label><br><br>
            </form>
        </div>
        

        <script>
            const form = document.getElementById('form');
            const fname = document.getElementById('fname');
            const lname = document.getElementById('lname');
            const comname = document.getElementById('comname');
            const add1 = document.getElementById('add1');
            const add1 = document.getElementById('add2');
            const city = document.getElementById('city');
            const zip = document.getElementById('zip');
            const phone = document.getElementById('phone');
            const fax = document.getElementById('fax');
            const email = document.getElementById('email');
            const name = document.getElementById('name');
            const donate_to = document.getElementById('donate_to');
            const address = document.getElementById('address');
            
            form.addEventListener('submit', e => 
            {
                e.preventDefault();
                checkInputs();
            });

            function checkinputs()
            {
                const fnameValue = fname.value.trim();
                const lnameValue = lname.value.trim();
                const comnameValue = comname.value.trim();
                const add1Value = add1.value.trim();
                const add2Value = add2.value.trim();
                const cityValue = city.value.trim();
                const zipValue = zip.value.trim();
                const phoneValue = phone.value.trim();
                const faxValue = fax.value.trim();
                const emailValue = email.value.trim();
                const nameValue = name.value.trim();
                const donate_toValue = donate_to.value.trim();
                const addressValue = address.value.trim();
                
                if(fnameValue === '')
                {
                    setErrorfor(fname,'First Name cannot be blank');
                }
                else
                {
                    setSuccessFor(fname);
                }

                if(lnameValue === '')
                {
                    setErrorfor(lname, 'Last name cannot be blank');
                }
                else
                {
                    setSuccessFor(lname);
                }

                if(comnameValue === ''){
                    setErrorfor(comname, 'Comapany cannot be blank');
                }else{
                    setSuccessFor(comname);
                }

                if(add1Value === '')
                {
                    setErrorfor(add1, 'Address cannot be blank');
                }else{
                    setSuccessFor(add1);
                }
                
                if(add2Value === '')
                {
                    setErrorfor(add2, 'Address cannot be blank');
                }else{
                    setSuccessFor(add2);
                }

                
                if(cityValue === '')
                {
                    setErrorfor(city, 'City cannot be blank');
                }else{
                    setSuccessFor(city);
                }

                
                if(zipValue === '')
                {
                    setErrorfor(zip, 'Zip code cannot be blank');
                }else{
                    setSuccessFor(zip);
                }

                if(phoneValue === '')
                {
                    setErrorfor(phone, 'Phone number cannot be blank');
                }else{
                    setSuccessFor(phone);
                }

                if(faxValue === '')
                {
                    setErrorfor(fax, 'Fax number cannot be blank');
                }else{
                    setSuccessFor(fax);
                }

                if(emailValue === '') {
                    setErrorFor(email, 'Email cannot be blank');
                } else if (!isEmail(emailValue)) {
                    setErrorFor(email, 'Not a valid email');
                } else {
                    setSuccessFor(email);
                }
                
                if(nameValue === '')
                {
                    setErrorfor(name, 'Name cannot be blank');
                }else{
                    setSuccessFor(name);
                }

                if(donate_toValue === '')
                {
                    setErrorfor(donate_to, 'Donation amount cannot be blank');
                }else{
                    setSuccessFor(donate_to);
                }
            }

            function setSuccessFor(input) {
                const a = input.parentElement;
                formControl.className = 'form success';
            }

        </script>

    </body>
</html>