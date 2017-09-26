<section class="feedback-section">
  <img class="extra-element-bottom" id="extra1" src="./images/extra-element1.svg">
  <img class="extra-element-bottom" id="extra2" src="./images/extra-element2.svg">
  <img class="extra-element-top" id="extra1" src="./images/extra-element4.svg">
  <img class="extra-element-top" id="extra2" src="./images/extra-element3.svg">
  <div class="container">
    <div class="contact-wrap">
      <h2 class="footer-title">
        Свяжитесь с нами
      </h2>
      <div class="contact-form">
        <form action="{{ route('sendemail') }}" id="msgform" method="post">
          <input type="text" name="name" placeholder="Имя" required >
          <input type="email" name="email" placeholder="Email" required >
          <textarea name="message" cols="30" rows="6" placeholder="Сообщение" required ></textarea>
          <div class="g-recaptcha" data-sitekey="6LfT5i8UAAAAACLZqIToL1ZVxh1V4GorEBytZYd7"></div>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
          <input type="submit" value="Отправить">
        </form>
      </div>
      <div class="contacts">
        <ul class="contact-info">
          <a href="mailto:info@selflaboratory.ru" style="color: #fdfdfd"><li><i class="fa fa-envelope-o"></i>
            <ruby>info@selflaboratory.ru<rt>нажмите для отправки e-mail</rt></ruby></li>
          </a>
          <a href="https://api.whatsapp.com/send?phone=79266257571" style="color: #fdfdfd"><li><i class="fa fa-whatsapp"></i>
            <ruby>+7 (926) 625-75-71<rt>нажмите для отправки whatsapp</rt><ruby></li>
          </a>
        </ul>
      </div>
    </div>
  </div>
</section>