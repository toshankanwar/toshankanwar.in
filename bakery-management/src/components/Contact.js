import React from 'react'
import { Helmet } from 'react-helmet';
export default function Contact() {
  return (
    <div className="contact">
      <Helmet><title>Contact | Toshan Bakery</title></Helmet>
      <div class="landing_page">
  <div class="responsive-container-block big-container">
    <img class="bg-img" id="iq5bf" src={'https://img.freepik.com/free-photo/sweet-treats-ornate-table-celebration-party-generated-by-ai_188544-15706.jpg?t=st=1723099321~exp=1723102921~hmac=8c156b8181d2c89650feb50eb7a6e9f33963e1348f77917bc447866c3c0095b5&w=1060'} alt="clot"/>
    <div class="responsive-container-block container">
      <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 left-one">
        <div class="content-box">
          <p class="text-blk section-head">
           Get In Touch 
          </p>
          <p class="text-blk section-subhead">
            Are you ready to take test of your favourite delicious foodie
          </p>
        </div>
      </div>
      <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6 right-one" id="i1zj">
        <form class="form-box" action="contact.php" method="post">
          <div class="container-block form-wrapper">
            <p class="text-blk contactus-head">
              <a class="link" href="/">
              </a>
             Want to Connect
            </p>
            <p class="text-blk contactus-subhead">
              We will get back to you in 24 hours
            </p>
            <div class="responsive-container-block">
              <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-7">
                <input class="input" id="ijowk-7" name="firstName" placeholder="First Name"/>
              </div>
              <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i1ro7">
                <input class="input" id="indfi-5" name="last Name" placeholder="Last Name"/>
              </div>
              <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-6 wk-ipadp-6 emial" id="ityct">
                <input class="input" id="ipmgh-7" name="email" placeholder="Email"/>
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <input class="input" id="imgis-6" name="number" placeholder="Phone Number"/>
              </div>
              <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-7">
                <textarea aria-placeholder="Type message here" class="textinput" id="i5vyy-7" placeholder="Type message here" name="message"></textarea>
              </div>
            </div>
            <button class="submit-btn" type="submit" value="submit">
              Get Connect
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
          
    </div>
  )
}
