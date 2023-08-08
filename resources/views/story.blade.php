<x-app-layout>
  @section('title', 'Our Stories')
  <style>
    .story {
      display: flex;
    }

    .story .description {
      background: url('{{ asset('images/BACKGROUND.jpg') }}') no-repeat center;
      background-size: cover;
      padding: 10rem 8rem 4rem;
      width: 48%;
    }

    .story h2 {
      font-size: 3.8rem;
      font-weight: 700;
      color: #464646;
      margin: 3rem 0;
      text-align: center;
      position: relative;
    }

    .story h2::before {
      position: absolute;
      content: '';
      left: 50%;
      transform: translateX(-50%);
      bottom: -1rem;
      width: 15rem;
      border-bottom: 5px solid #ffa600;
    }

    .story p {
      font-size: 1.6rem;
      line-height: 2.2rem;
      margin-bottom: 2.5rem;
      text-align: justify;
      color: #464646;
    }

    .story img {
      background-size: cover;
      object-fit: cover;
      width: 52%;
    }

    .opposite {}

    @media (max-width: 1200px) {
      .story {
        flex-direction: column;
      }

      .story .description,
      .story img {
        width: 100%;
      }
    }

    @media (max-width: 768px) {
      .story .description {
        padding: 6rem 3rem 3rem;
      }

      .story h2 {
        font-size: 2.8rem;
      }

      .story p {
        font-size: 1.4rem;
      }
    }

  </style>
  <section class="section banner">
    <div class="bg fix layer"></div>
    </div>
    <div class="banner-text">
      <h1>About Us</h1>
      <img src="{{ asset('images/title_separate_line.png') }}" alt="">

    </div>
    <div class="content-wrap p-0">
      
      <div class="story">
        <div class="description">
          <h2>WELCOME TO SALVA FAST FOOD</h2>
          <p>We opened our first store in Burnley in 2020 and spent the next 2 years perfecting our policies and
          procedures, our unique blend of traditional spices and exclusive products, as well as refining and
          improving
          our innovative cooking processes.</p>
          <p>We offer you an exciting new way of getting all your favourite drinks and food at terrific value prices when
        you’re on the go. At Salva Fast Food we aim to make things simple, fun and innovative. We passionately believe
        that excellent products and service and a wide variety of choice should be available to everyone.
        Making life easier for you
        Please come in and enjoy our fresh Doner Kebab at great value prices. Whether you’re off to work, heading for
        the shops or just out with friends, why not drop by and discover Salva Fast Food, where you’ll find genuine
        service and impressive value.</p>
        </div>
        <img src="{{ asset('images/about-banner.jpg') }}" alt="" class="img-fluid">
      </div>
      <div class="story opposite">
        <img src="{{ asset('images/ourstory-2.jpg') }}" alt="" class="img-fluid">
        <div class="description">
          <h2>OUR STORY — TODAY</h2>
          <p>"Doner Kebab" is a fast food retailer that has created a healthy and nutritionally balanced approach to
            traditional kebabs.
            Our kebabs are made from quality ingredients that are exclusive to Doner Kebab Restaurants.</p>
          <p>We use lean succulent beef and pure chicken fillets. These meats are imported directly from Germany to
            maintain quality and consistency. We only use fresh, locally produced vegetables that are delivered and
            prepared daily along with our special "Doner Kebab" bread. These make the "Doner Kebab" a truly unique taste
            experience for our customers.</p>
          <p>Our tried and tested methods are totally different to the way other operators make their kebabs. The result
            is a nutritionally sound gourmet food experience that contains virtually no preservatives or additives and
            can be consumed day or night. With a strong modern brand and the promotion of healthy, fresh, nutritious
            ingredients that appeals to a broad market, "Doner Kebab" can only continue to grow and succeed. Maintaining
            the authenticity and originality of our kebabs is one of the main objectives of the business, and is the
            reason we continue to retain our market position at the top of the kebab industry.</p>
          <p>For franchise inquiries or customer service, please contact support@salvafastfood.com</p>
        </div>
      </div>
    </div>
  </section>
</x-app-layout>
