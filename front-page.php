<?php

/**
 * The homepage template file
 *
 * @package Swistak_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <section class="hero">
      <div class="absolute inset-0 top-18 md:top-24 overflow-hidden -z-10">
        <svg class="scale-[5] md:scale-105" xmlns="http://www.w3.org/2000/svg" viewBox="0 10 1366 579" fill="none" preserveAspectRatio="none slice">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M0 -8H1366C1366 -8 1366 412.536 1366 487.199C900.5 440.228 568.242 779.522 0 387.76C0 293.296 0 -8 0 -8Z" style="stroke: #f5f2f8; stroke-width:20px;" fill="url(#paint0_linear)" />
          <defs>
            <linearGradient id="paint0_linear" x1="27.0492" y1="15.2472" x2="27.0492" y2="579" gradientUnits="userSpaceOnUse">
              <stop stop-color="#3E319A" />
              <stop offset="1" stop-color="#63279C" />
            </linearGradient>
          </defs>
        </svg>
      </div>
      <div class="relative mx-auto h-[450px] md:h-[600px] max-w-[850px] flex flex-col items-center justify-center z-10">
        <div class="relative -mt-6 md:-mt-24 z-0 flex flex-col items-center justify-center container">
          <h1 class="text-3xl md:text-5xl lg:text-6xl text-center font-extrabold text-white tracking-wide	!leading-[50px] md:!leading-[70px]">
            NOWOŚĆ! Twoje Ścieżki Kariery – proste narzędzie, z którym łatwiej określisz swoje priorytety.
          </h1>
        </div>
      </div>
    </section>

    <section class="introduction">
      <div class="container px-5 md:px-0 py-20">
        <div class="text-content mx-auto mb-16 max-w-[700px]">
          <p class="mb-8 text-center text-3xl font-bold leading-10">Czujesz, że marnujesz swój potencjał, bo robisz <span class="text-purple-900 font-bold">ZA DUŻO rzeczy naraz</span>, ale nie wiesz, z których zrezygnować?</p>
          <p class="text-lg text-center">Skorzystaj ze sprawdzonej tabelki w Excelu, która pokaże Ci czarno na białym, co lepiej sobie odpuścić, a na czym się skupić, by w pełni wykorzystać Twoje talenty.</p>
        </div>
        <button class="mx-auto mb-5 block w-fit bg-green-800 px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-green-700 transition duration-200">
          <a href="#">Odbierz dostęp teraz</a>
        </button>
        <a href="#more" class="mx-auto block w-fit text-lg hover:text-purple-900 transition duration-200">..Dowiedz się więcej..</a>
      </div>
    </section>

    <section class="maybe-swiper">
      <div class="container px-5 md:px-0 pb-20">
        <div class="swiper">
          <div class="swiper-wrapper flex gap-8">
            <div class="swiper-slide w-full border border-purple-900 rounded-2xl p-10 flex flex-col items-center justify-center">
              <div class="icon mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="80px" height="80px" viewBox="0 0 48 48" version="1" enable-background="new 0 0 48 48">
                  <circle fill="#4CAF50" cx="24" cy="24" r="21" />
                  <polygon fill="#CCFF90" points="34.6,14.6 21,28.2 15.4,22.6 12.6,25.4 21,33.8 37.4,17.4" />
                </svg>
              </div>
              <div class="text-content text-center">
                <p>✅ Przetestowane przez ponad 200 osób na konsultacjach 1 na 1.</p>
              </div>
            </div>
            <div class="swiper-slide w-full border border-purple-900 rounded-2xl p-10 flex flex-col items-center justify-center">
              <div class="icon mb-5">
                <span class="text-[100px]">🛡️</span>
              </div>
              <div class="text-content text-center">
                <p>🛡️ Wypróbuj BEZ RYZYKA! </p>
                <p>Jeśli Ci się nie spodoba, możesz zrobić zwrot do 90 dni bez podawania powodu. A my oddamy Ci pieniądze.</p>
              </div>
            </div>
            <div class="swiper-slide w-full border border-purple-900 rounded-2xl p-10 flex flex-col items-center justify-center">
              <div class="icon mb-5">
                <span class="text-[100px]">⭐</span>
              </div>
              <div class="text-content text-center">
                <p>⭐ Dostaniesz konkretny, wizualno-cyfrowy wynik, który nie kłamie.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about-author bg-purple-900 overflow-hidden">
      <div class="container px-5 md:px-0 py-20 flex gap-28 justify-center">
        <div class="about-text text-white max-w-[450px]">
          <p class="text-2xl mb-12">O autorze</p>
          <p class="text-lg leading-8">Cześć! Nazywam się Bartłomiej „Świstak” Piotrowski. Jestem konsultantem strategii w biznesie, prelegentem, mentorem. Na co dzień pracuję na takich uczelniach jak Uniwersytet Jagielloński w Krakowie i ASBIRO. Jako konsultant przepracowałem dotychczas ponad 6300 h.</p>
        </div>
        <div class="about-image">
          <img class="scale-[1.4]" src="https://www.swistak-krakow.pl/wp-content/uploads/2020/04/Bart%C5%82omiej-%C5%9Awistak-Piotrowski-marzyciel-z-g%C5%82ow%C4%85-chmurach-stopaj%C4%85cy-po-ziemi-zdjecie-325x487.jpg.webp" alt="">
        </div>
      </div>
    </section>

    <section class="attention">
      <div class="container px-5 md:px-0 py-20">
        <div class="text-content mx-auto mb-16 max-w-[700px]">
          <p class="mb-8 text-center text-3xl font-bold leading-10">Uwaga - to NIE jest kolejny kurs online, ani e-book!</p>
          <p class="text-lg text-left mb-5">To <span class="font-bold">NIE</span> jest kolejny kurs online z nadmiernie długimi lekcjami, w których autor przechwala się wiedzą.</p>
          <p class="text-lg text-left">To <span class="font-bold">NIE</span> jest kolejny e-book coachingowy, wypełniony bezużyteczną teorią na temat zarządzania czasem i ustalania priorytetów. </p>
        </div>
        <div class="excel-table-tile mx-auto mb-16 max-w-[700px]">
          <p class="mb-8 text-center text-3xl font-bold leading-10">🧭 Ta tabelka w Excelu jest jak kompas</p>
          <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/excel-table.png'; ?>" alt="">
          <div class="desc mt-10 text-lg">
            <p class="mb-6">Przeprowadzi Cię przez ścieżkę, na której odkryjesz, na czym naprawdę warto się skupić, aby w pełni wykorzystać swoje talenty i potencjał.</p>


            <p class="mb-6">Dowiesz się też, które aktywności i projekty lepiej odpuścić, by skutecznie osiągnąć swoje cele.</p>

            <p class="mb-6">Działa dla każdego - niezależnie, czy myślisz analitycznie, czy też intuicyjnie. Jedyne czego potrzebujesz, by z niej skorzystać, to dostęp do Internetu i bezpłatne konto Google (aplikacja Google Sheets).</p>

            <p class="mb-6">Sięgam po tę tabelkę, kiedy czuję, że mam mnóstwo na głowie i zaczynam czuć, że nic się nie dzieje.</p>

            <p class="mb-6">I działa. Zawsze.</p>

            <p class="mb-6">Wypróbuj sam i zobacz, że działa. Ale bez obaw - nie musisz mi wierzyć na słowo! Przekonaj się na własnej skórze!</p>

          </div>
        </div>
      </div>
    </section>

    <section class="opinions">
      <div class="container px-5 md:px-0 pb-20">
        <h3 class="mb-12 mx-auto max-w-[850px] text-3xl font-bold text-center">Ponad 200 uczestników konsultacji 1 na 1 przetestowało już tę metodę</h3>
        <div class="tiles-container mx-auto max-w-[850px] flex flex-col gap-24">
          <div class="opinion-tile p-12 rounded-md flex gap-10 bg-[#ddccf340] shadow-[24px_24px_0px_0px_rgba(230,219,245,1)]">
            <img class="rounded-md" src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/opinion1.png'; ?>" alt="">
            <div class="opinion-text">
              <p class="mb-5 text-2xl font-semibold">"Lorem ipsum dolor sit amet consectetur adipisicing elit".</p>
              <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tenetur, autem quisquam aliquid rem ipsam accusamus a aliquam commodi eum quis, molestiae nisi nostrum fugit explicabo natus. Quos, rerum facere.</p>
              <p class="font-semibold text-lg leading-5">Jeannie Chow</p>
              <p class="text-gray-400 leading-5">Retired</p>
              <p class="text-gray-400 leading-5">Edmonton Canada</p>
            </div>
          </div>
          <div class="opinion-tile p-12 rounded-md flex gap-10 bg-[#ddccf340] shadow-[24px_24px_0px_0px_rgba(230,219,245,1)]">
            <img class="rounded-md" src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/opinion2.png'; ?>" alt="">
            <div class="opinion-text">
              <p class="mb-5 text-2xl font-semibold">"Lorem ipsum dolor sit amet consectetur adipisicing elit".</p>
              <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tenetur, autem quisquam aliquid rem ipsam accusamus a aliquam commodi eum quis, molestiae nisi nostrum fugit explicabo natus. Quos, rerum facere.</p>
              <p class="font-semibold text-lg leading-5">Jeannie Chow</p>
              <p class="text-gray-400 leading-5">Retired</p>
              <p class="text-gray-400 leading-5">Edmonton Canada</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="text-section">
      <div class="container max-w-[850px] px-5 md:px-0 py-20 font-bold text-center text-2xl">
        <p class="mb-10 mx-auto text-3xl">..Też tak chcę!..</p>
        <p class="text-xl">Brzmi znajomo?</p>
        <p class="mb-10 text-3xl">"Robię za dużo na raz... i to mnie przytłacza."</p>
        <p class="">Przez to:</p>
        <ul class="my-10 leading-10 [&>li]:mb-8">
          <li>❌ idziesz wolniej od innych, albo w ogóle stoisz w miejscu, marnując swój potencjał,</li>
          <li>❌ brakuje Ci wolnego czasu na odpoczynek, dla rodziny i na hobby,</li>
          <li>❌ czujesz się zmęczony i przytłoczony ilością zadań na swojej liście rzeczy do zrobienia. </li>
        </ul>
        <div class="desc mx-auto mb-16 text-left font-normal [&>p]:mb-8">
          <p>Wkurza Cię to, że nie możesz odpuścić tych mniej ważnych rzeczy, choć wiesz, że Cię hamują.</p>
          <p>Ale najgorsze jest to, że odbija się to na Twoim samopoczuciu, zdrowiu i relacjach. Czasami masz po prostu ochotę rzucić to wszystko i wyjechać w Bieszczady.</p>
          <p>Ale najgorsze jest to, że odbija się to na Twoim samopoczuciu, zdrowiu i relacjach. Czasami masz po prostu ochotę rzucić to wszystko i wyjechać w Bieszczady.</p>
          <p>Nie masz pewności, co warto dalej robić, a co lepiej sobie odpuścić.</p>
          <p class="font-bold">A gdyby tak istniało proste w użyciu narzędzie, które da Ci taką pewność?
          </p>
        </div>
        <h3 class="font-bold text-3xl mb-5">Wyobraź sobie inny scenariusz </h3>
        <div class="desc2 font-normal text-left [&>p]:mb-8">
          <p>Wyobraź sobie, że przestałeś robić wszystko, a skupiłeś się na mniejszej liczbie rzeczy. Ale tych ,<span class="font-bold">najważniejszych</span>, które są bardziej spójne z Twoimi talentami.</p>
          <p>Wycofałeś się z aktywności, które tylko zajmowały Twój czas, ale były zapychaczami. Teraz widzisz większe postępy w najważniejszych dla siebie obszarach. <span class="font-bold">Jesteś wreszcie spokojny, bo wiesz, które rzeczy:</span></p>
          <ul class="mb-8">
            <li>✔️ zapewnią Ci stabilność i bezpieczeństwo </li>
            <li>✔️ pomogą Ci zrealizować w pełni Twój potencjał</li>
          </ul>
          <p>Zamiast stresu i chaosu masz klarowność i spokój, bo wiele spraw Ci się wyjaśniło. Zyskałeś kilka dodatkowych godzin wolnego czasu w tygodniu, które możesz przeznaczać na odpoczynek, dla rodziny i przyjaciół lub na hobby.</p>
          <h4 class="mb-5 font-bold">Czy taki scenariusz jest w ogóle osiągalny?</h4>
          <p>Tak! Choć większość osób nie wierzy, że w jej realizacji pomoże Ci jedna tabelka w Excelu.</p>
        </div>
      </div>
    </section>

    <section class="about-product">
      <div class="container max-w-[850px] px-5 md:px-0 py-20 text-left text-2xl">
        <h3 class="mb-4 font-bold text-4xl text-center">Czym dokładnie jest narzędzie <span class="text-[#b45f05]">Twoje Ścieżki Kariery</span> i jak to działa?</h3>

        <div class="about-desc mb-8">
          <div class="tool-image mb-5">
            <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/tool-screen.png'; ?>" alt="">
          </div>
          <p class="mb-8 font-bold">To narzędzie, które łączy prosty, ale niezwykły arkusz w Excelu z <span class="text-red-600 bg-yellow-100">10</span> krótkimi nagraniami wideo, na których pokażę Ci, jak ją wykorzystać.</p>
          <p>Skorzystasz z niej w 3 krokach, ale nie obędzie się bez pomyślenia i autorefleksji. <span class="font-bold">W skrócie działa to tak: </span></p>
        </div>

        <ul class="about-steps text-xl [&>li]:mb-8">
          <li class="flex gap-10 basis">
            <div class="desc basis-2/3">
              <p class="font-bold mb-5">
                <span class="text-purple-900 text-3xl">Krok 1:</span> Wpisujesz ważne dla Ciebie projekty, obowiązki, zadania lub aktywności, na które obecnie przeznaczasz czas i energię.
              </p>
              <p>
                Możesz śmiało podejść elastycznie i wpisać tu wszelkie obszary: działania zawodowe, wolontaryjne i prywatne. Bez limitów.
              </p>
            </div>
            <div class="about-img basis-1/3">
              <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/step1.png'; ?>" alt="">
            </div>
          </li>
          <li class="flex gap-10">
            <div class="desc basis-2/3">
              <p class="font-bold mb-5">
                <span class="block text-3xl text-purple-900">Krok 2: </span>Określasz ważność każdej aktywności, odpowiadając na 35 pytań.
              </p>
              <p>
                Dzięki temu łatwo porównasz i ocenisz znaczenie wszystkich podejmowanych działań.
              </p>
            </div>
            <div class="about-img basis-1/3">
              <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/step2.png'; ?>" alt="">
            </div>
          </li>
          <li class="flex gap-10">
            <div class="desc basis-2/3">
              <div class="title font-bold mb-5 flex gap-5 items-start">
                <p class="block min-w-fit text-purple-900 text-3xl">Krok 3: </p>
                <div>
                  <p class="mb-2"> Otrzymujesz wizualno-cyfrowy wynik, który łatwo zrozumiesz.</p>
                  <p class="font-normal"> Zobaczysz cyfry i zielone pola, które powiedzą Ci, jakie aktywności warto porzucić, bo tylko Cię spowalniają, a na czym się skupić - gdzie lepiej inwestować swój czas i energię.</p>
                </div>
              </div>
            </div>
            <div class="about-img basis-1/3">
              <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/step3.png'; ?>" alt="">
            </div>
          </li>
        </ul>

      </div>

    </section>

    <section class="about-specifics">
      <div class="container max-w-[850px] px-5 md:px-0 py-20">
        <div class="title text-center">
          <h3 class="font-semibold text-3xl">Czas na konkrety!</h3>
          <p class="subtitle mb-8 font-bold text-[34px] leading-10">
            Po tym jak opłacisz zamówienie, otrzymasz od razu na swoją skrzynkę e-mail
          </p>
          <p class="subtitle2 font-semibold text-3xl">
            Link z dostępem do platformy online, a na niej:
          </p>
        </div>
        <ul class="my-10 mx-auto max-w-[700px] text-2xl leading-10 [&>li]:mb-8">
          <li>✅ <span class="font-bold">Arkusz Excel (arkusz Google Sheets) do samodzielnego wypełnienia.</span> Umieszczony w chmurze do skopiowania na swój dysk Google. Precyzyjne narzędzie, które pokaże Ci, na czym się skupić, a z których aktywności lepiej zrezygnować. </li>
          <li><span class="font-bold"> ✅ 35 pomocniczych pytań,</span> które pomogą Ci określić ważność każdego projektu, aktywności, działania, na jakie obecnie poświęcasz swój czas i energię.
          </li>
          <li><span class="font-bold"> ✅ 43 pytania dodatkowe,</span> z których możesz dowolnie wybierać, by jeszcze dokładniej określić ważność swoich aktywności i działań.
          </li>
          <li><span class="font-bold"> ✅ 10 krótkich i treściwych nagrań wideo, </span> w których krok po kroku pokażę Ci, jak pracować z arkuszem - bez skomplikowanej nowomowy i coachingowej papki.
          </li>
          <li><span class="font-bold">✅ Asysta e-mailowa</span> - każda z <span class="font-bold text-red-600">10</span> nagrań video jest zapowiadana mailem. Dzięki temu unikniesz odkładania działania na później i zyskasz dodatkowy zastrzyk motywacji do korzystania z arkusza.
          </li>
        </ul>
        <button class="mx-auto mb-5 block w-fit bg-green-800 px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-green-700 transition duration-200">
          <a href="#">Odbierz dostęp teraz</a>
        </button>
      </div>
    </section>

    <section class="why">
      <div class="container max-w-[850px] mb-10 px-5 md:px-0 py-12 bg-[#c9daf8] border-[2px] border-gray-600">
        <div class="title text-center">
          <h3 class="mb-2 font-semibold text-3xl">Co Ci to wszystko da?</h3>
          <p class="subtitle mb-8 font-bold text-[34px] leading-10">
            Po tym jak skorzystasz z tego arkusza
          </p>
        </div>
        <ul class="my-10 mx-auto max-w-[700px] text-2xl leading-9 [&>li]:mb-8">
          <li>✔️ Zyskasz więcej pewności, na czym się skupić i z czego zrezygnować, by ruszyć z miejsca w stronę spełnienia zawodowego.
          </li>
          <li>
            ✔️ Zyskasz więcej czasu dla siebie, rodziny, na odpoczynek, bo odpadną Ci aktywności, które tylko zajmują Twój czas, ale w dłuższej perspektywie - nie prowadzą do niczego. </li>
        </ul>
      </div>
    </section>

    <section class="see-more">
      <div class="container max-w-[850px] px-5 md:px-0 py-20">
        <div class="title mb-5 text-center">
          <h3 class="mb-2 font-semibold text-3xl">Nie musisz kupować kota w worku
          </h3>
          <p class="subtitle mb-8 font-bold text-[34px] leading-10">
            Zobacz jak to wygląda od środka ⬇️
          </p>
          <p class="subtitle text-2xl leading-10">
            Po tym jak złożysz i opłacisz zamówienie na tej stronie, otrzymasz e-mail z linkiem do konta na platformie online. Tam już czekają na Ciebie wszystkie materiały. <br>
            Po zalogowaniu zobaczysz taki <span class="font-bold">ekran powitalny:</span>
          </p>
        </div>
        <div class="laptop-image mb-8">
          <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/laptop1.png'; ?>" alt="">
        </div>
        <p class="subtitle text-2xl leading-10 text-center">
          Na platformę możesz się logować, kiedy tylko chcesz – 24 godziny na dobę, 7 dni w tygodniu. Możesz oglądać wszystkie wideo i korzystać z materiałów – tyle razy, ile zechcesz, bez limitów. Wszędzie tam, gdzie tylko masz dostęp do Internetu.
        </p>
      </div>
    </section>

    <section class="career-path-opinions-maybe-swiper">
      <div class="container mx-auto px-5 md:px-0 py-20">
        <h3 class="mb-24 font-bold text-4xl text-center">Osoby, które już skorzystały ze <span class="text-[#b45f05]">Ścieżek Kariery </span>mówią</h3>

        <div class="swiper mb-20">
          <div class="swiper-wrapper flex gap-8">
            <div class="swiper-slide w-full rounded-2xl p-10 pt-36 shadow-xl border-[1px] border-gray-200 relative">
              <div class="z-10 absolute top-0 left-[50%] translate-x-[-50%] translate-y-[-40%]">
                <div class="opinion-author-image mx-auto max-w-[150px] relative">
                  <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/opinion1.png'; ?>" alt="">
                  <div class="w-[50px] h-[50px] p-3 rounded-full bg-orange-400 flex items-center justify-center z-10 absolute bottom-0 left-[50%] translate-x-[-50%] translate-y-[50%]">
                    <svg class="w-full rotate-180" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 379.51" fill="white">
                      <path d="M299.73 345.54c81.25-22.55 134.13-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160.01-60.55C243.33-10.34 430.24-36.22 485.56 46.34c12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.6 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77zm-267.78 0c81.25-22.55 134.14-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160-60.55-27.14-149.49 159.78-175.37 215.1-92.81 12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.59 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77z" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="text-content text-center">
                <p class="mb-5 font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque fugiat quia repudiandae pariatur, optio sit ab laudantium doloribus voluptatem minima atque! Maxime similique laborum quasi.</p>
                <p class="author font-semibold text-lg">Harriet Clarkson</p>
              </div>
            </div>
            <div class="swiper-slide w-full rounded-2xl p-10 pt-36 shadow-xl border-[1px] border-gray-200 relative">
              <div class="z-10 absolute top-0 left-[50%] translate-x-[-50%] translate-y-[-40%]">
                <div class="opinion-author-image mx-auto max-w-[150px] relative">
                  <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/opinion1.png'; ?>" alt="">
                  <div class="w-[50px] h-[50px] p-3 rounded-full bg-orange-400 flex items-center justify-center z-10 absolute bottom-0 left-[50%] translate-x-[-50%] translate-y-[50%]">
                    <svg class="w-full rotate-180" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 379.51" fill="white">
                      <path d="M299.73 345.54c81.25-22.55 134.13-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160.01-60.55C243.33-10.34 430.24-36.22 485.56 46.34c12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.6 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77zm-267.78 0c81.25-22.55 134.14-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160-60.55-27.14-149.49 159.78-175.37 215.1-92.81 12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.59 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77z" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="text-content text-center">
                <p class="mb-5 font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque fugiat quia repudiandae pariatur, optio sit ab laudantium doloribus voluptatem minima atque! Maxime similique laborum quasi.</p>
                <p class="author font-semibold text-lg">Harriet Clarkson</p>
              </div>
            </div>
            <div class="swiper-slide w-full rounded-2xl p-10 pt-36 shadow-xl border-[1px] border-gray-200 relative">
              <div class="z-10 absolute top-0 left-[50%] translate-x-[-50%] translate-y-[-40%]">
                <div class="opinion-author-image mx-auto max-w-[150px] relative">
                  <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/opinion1.png'; ?>" alt="">
                  <div class="w-[50px] h-[50px] p-3 rounded-full bg-orange-400 flex items-center justify-center z-10 absolute bottom-0 left-[50%] translate-x-[-50%] translate-y-[50%]">
                    <svg class="w-full rotate-180" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 379.51" fill="white">
                      <path d="M299.73 345.54c81.25-22.55 134.13-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160.01-60.55C243.33-10.34 430.24-36.22 485.56 46.34c12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.6 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77zm-267.78 0c81.25-22.55 134.14-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160-60.55-27.14-149.49 159.78-175.37 215.1-92.81 12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.59 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77z" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="text-content text-center">
                <p class="mb-5 font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque fugiat quia repudiandae pariatur, optio sit ab laudantium doloribus voluptatem minima atque! Maxime similique laborum quasi.</p>
                <p class="author font-semibold text-lg">Harriet Clarkson</p>
              </div>
            </div>
          </div>
        </div>

        <button class="mx-auto mb-5 block w-fit bg-green-800 px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-green-700 transition duration-200">
          <a href="#">..Odbieram dostęp teraz..</a>
        </button>
      </div>
    </section>

    <section class="will-it-work">
      <div class="container mx-auto px-5 md:px-0 pb-20">
        <div class="title text-center">
          <h3 class="mb-2 font-semibold text-3xl">„Czy to na pewno dla mnie zadziała?”</h3>
          <p class="subtitle mb-8 font-bold text-[34px] leading-10">
            To jest dla Ciebie, jeśli…
          </p>
        </div>
        <ul class="my-10 mx-auto max-w-[700px] text-2xl leading-9 [&>li]:mb-8">
          <li>✅ Robisz ZA DUŻO różnych rzeczy, przez co idziesz wolniej od innych, albo w ogóle stoisz w miejscu, marnując swój potencjał.
          </li>
          <li>
            ✅ Prowadzisz wiele równoległych projektów i chcesz je uszeregować od najważniejszego do najmniej ważnego, ale nie masz pewności jak.
          </li>
          <li>
            ✅ Czujesz się przytłoczony i zmęczony ilością rzeczy, które robisz prywatnie i zawodowo. To odbija się na Twoim zdrowiu i samopoczuciu.
          </li>
          <li>
            ✅ Stoisz przed ważną decyzją życiową lub zawodową, ale obawiasz się, czy dokonasz właściwego wyboru.
          </li>
          <li>
            ✅ Nie masz czasu i chęci na dłuuugie kursy i drogie sesje coachingowe.
          </li>
          <li>
            ✅ Chcesz dowiedzieć się, co w Twoim życiu prywatnym lub zawodowym jest najważniejsze.
          </li>
        </ul>
        <button class="mx-auto mb-10 block w-fit bg-green-800 px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-green-700 transition duration-200">
          <a href="#">..Tak, to o mnie! Daj mi dostęp..</a>
        </button>

        <h3 class="mb-2 font-semibold text-3xl text-center">Lepiej odpuść sobie ten zakup, jeśli…</h3>
        <ul class="my-10 mx-auto max-w-[700px] text-2xl leading-9 [&>li]:mb-8">
          <li>
            ❌ Czujesz, że w pełni wykorzystujesz swoje talenty i swój potencjał.
          </li>
          <li>
            ❌ Masz jasno określone priorytety.
          </li>
          <li>
            ❌ Jesteś zadowolony ze swojej sytuacji i nie chcesz niczego zmieniać.
          </li>
          <li>
            ❌ Masz wystarczająco dużo czasu na odpoczynek, pasje i dla swoich bliskich.
          </li>
          <li>
            ❌ Wiesz na 100% jaką podjąć decyzję, przed którą obecnie stoisz.
          </li>
          <li>
            ❌ Masz pewność, że to, co robisz, faktycznie przybliża Cię do stabilności i bezpieczeństwa.
          </li>
        </ul>
      </div>
    </section>

    <section class="guarantee">
      <div class="container max-w-[850px] mx-auto px-5 md:px-0 pb-20">
        <div class="title text-center">
          <h3 class="mb-2 font-semibold text-3xl">Gwarancja satysfakcji - zero ryzyka</h3>
          <p class="subtitle mb-8 font-bold text-[34px] leading-10">
            Masz aż 90 dni na jazdę próbną
          </p>
        </div>
        <div class="desc mx-auto mb-16 text-left text-2xl font-normal [&>p]:mb-8">
          <p>
            Nie wiem, czy to narzędzie Ci się spodoba, czy nie. Nie znam w 100% Twojej sytuacji, ani powodu, dla którego jesteś na tej stronie. Właśnie dlatego całe ryzyko tej transakcji biorę na siebie.
          </p>
          <p>
            To oznacza, że masz aż 90 dni na „jazdę próbną”. Czyli jeśli nie będziesz na 100% zadowolony, z tego co dostaniesz, to wystarczy, że klikniesz przycisk: „poproś o zwrot”.
          </p>
          <p>
            W ten sposób cofniesz całą transakcję – dostaniesz z powrotem każdą zapłaconą złotówkę bez zadawania pytań z mojej strony, bez obrażania się i bez wpisywania Cię na czarną listę.
            Po prostu. Tak jak kupujesz buty, rozmyślasz się i je oddajesz.
          </p>
          <button class="mx-auto mb-5 block w-fit bg-green-800 px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-green-700 transition duration-200">
            <a href="#">Rozumiem, że mam 90 dni na przetestowanie - chcę spróbować!</a>
          </button>
        </div>
      </div>
    </section>

    <section class="prices">
      <div class="container max-w-[850px] mx-auto px-5 md:px-0 pb-20">
        <h3 class="mb-8 font-bold text-4xl text-center">Ile to kosztuje? </h3>
        <div class="desc mx-auto mb-16 text-left text-2xl font-normal [&>p]:mb-8">
          <p>
            Otrzymasz dostęp do wszystkich materiałów NIE za 1000 zł, ani nawet za 500 zł, ale za jedyne…
          </p>
          <div class="price text-green-800 text-center text-4xl font-bold">
            <p>Cena promocyjna: 147 zł</p>
          </div>
          <p>
            Jednorazowa inwestycja
          </p>
          <button class="mx-auto mb-5 block w-fit bg-green-800 px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-green-700 transition duration-200">
            <a href="#">..Dodaj do koszyka (147 zł)..</a>
          </button>
        </div>

        <h3 class="mb-8 font-bold text-4xl text-center">Ile to kosztuje? </h3>
        <div class="desc mx-auto mb-16 text-left text-2xl font-normal [&>p]:mb-8">
          <p>
            Otrzymasz dostęp do wszystkich materiałów NIE za 1000 zł, ani nawet za 500 zł, ale za jedyne…
          </p>
          <p>
            Zresztą jeśli za niską cenę przekonasz się, jak wiele może dać Ci to tanie narzędzie, to być może dużo chętniej sięgniesz po moje droższe kursy i programy 😉
          </p>
        </div>
      </div>
    </section>

    <section class="bonuses">
      <div class="container max-w-[850px] mx-auto px-5 md:px-0 pb-20">
        <div class="title mb-10 text-center">
          <h3 class="mb-2 font-semibold text-3xl">Ale to nie wszystko!</h3>
          <p class="subtitle font-bold text-[34px] leading-10">Otrzymasz też 3 bonusy o łącznej wartości 341 zł!</p>
        </div>

        <ul class="bonuses-tiles text-xl [&>li]:mb-20">
          <li class="flex gap-10 basis">
            <div class="basis-2/3">
              <div class="product-desc mb-5">
                <p class="font-bold mb-2">
                  🎁 Skarbiec materiałów wspierających.
                </p>
                <p class="desc">
                  Liczne checklisty, przydatne linki, ćwiczenia, dzięki którym łatwo określisz swoje wartości i preferencje, które chcesz zweryfikować w tabelce.
                </p>
              </div>
              <div class="product-price font-bold">
                <p>Wartość: <span class="text-red-500">47 zł</span></p>
                <p>Z narzędziem <span class="text-purple-900">Twoje Ścieżki Kariery</span>: bezpłatnie😊 </p>
              </div>
            </div>
            <div class="about-img basis-1/3">
              <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/bonus1.png'; ?>" alt="">
            </div>
          </li>
          <li class="flex gap-10 basis">
            <div class="basis-2/3">
              <div class="product-desc mb-5">
                <p class="font-bold mb-2">
                  🎁 Roczny dostęp do społeczności (nazwa społeczności),
                </p>
                <p class="desc">
                  w której masz możliwość zadawania pytań, dzielenia się własnymi przemyśleniami i wynikami. Udział w grupie wzmocni Twoją systematyczność i zmotywuje Cię do działania. W dodatku poznasz ciekawych ludzi podobnych do Ciebie!
                </p>
              </div>
              <div class="product-price font-bold">
                <p>Wartość: <span class="text-red-500">197 zł</span></p>
                <p>Z narzędziem <span class="text-purple-900">Twoje Ścieżki Kariery</span>: bezpłatnie😊 </p>
              </div>
            </div>
            <div class="about-img basis-1/3">
              <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/bonus1.png'; ?>" alt="">
            </div>
          </li>
          <li class="flex gap-10 basis">
            <div class="basis-2/3">
              <div class="product-desc mb-5">
                <p class="font-bold mb-2">
                  🎁 Poradnik w formie PDF „Trzy filary”,
                </p>
                <p class="desc">
                  dzięki któremu wzmocnisz swoją motywację, do realizacji tego, co ustalisz jako swoje priorytety.
                </p>
              </div>
              <div class="product-price font-bold">
                <p>Wartość: <span class="text-red-500">97 zł</span></p>
                <p>Z narzędziem <span class="text-purple-900">Twoje Ścieżki Kariery</span>: bezpłatnie😊 </p>
              </div>
            </div>
            <div class="about-img basis-1/3">
              <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/bonus2.png'; ?>" alt="">
            </div>
          </li>
        </ul>
        <button class="mx-auto mb-5 block w-fit bg-green-800 px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-green-700 transition duration-200">
          <a href="#">..Odbieram „Ścieżki Kariery” razem z bonusami!..</a>
        </button>
      </div>
    </section>

    <section class="about-swistak">
      <div class="container max-w-[850px] mx-auto px-5 md:px-0 pb-20">
        <h3 class="mb-8 font-bold text-4xl text-center">Kto za tym stoi i czy mogę mu zaufać?</h3>
        <div class="2col flex basis gap-10">
          <div class="desc basis-3/4 mx-auto mb-12 text-left text-lg font-normal [&>p]:mb-5">
            <p>Cześć, poznajmy się! Nazywam się Bartłomiej „Świstak” Piotrowski.</p>
            <p>Jestem konsultantem strategii w biznesie, prelegentem, mentorem.</p>
            <p>Na co dzień pracuję na takich uczelniach jak Uniwersytet Jagielloński w Krakowie i ASBIRO. Jako trener przepracowałem dotychczas ponad 6300 h.</p>
            <p>Jeden z moich najważniejszych wniosków?</p>
            <p class="italic">Odkryłem, że zbyt wiele ambitnych osób robi za dużo rzeczy w życiu. <br>Przez to idą wolniej, a nawet stoją w miejscu, marnując swój potencjał.</p>
            <p>Pomysł na narzędzie Twoje Ścieżki Kariery wpadł mi do głowy podczas rozmowy z moim kolegą. Miałem wtedy zdecydowanie za dużo na głowie - mój kalendarz przypominał grafik Elona Muska - był wypchany po brzegi różnymi aktywnościami. Kolega, widząc moje zmęczenie, zapytał mnie:</p>
            <p class="italic">Powiedz Bartku - robisz z klientami różne tabelki w Excelu, a ze sobą zrobiłeś?</p>
            <p>Wtedy dotarło do mnie, że pomimo robienia tabelek dla innych, ja sam takiej nie miałem! Więc stworzyłem dla siebie tabelkę do ustalenia priorytetów. Stopniowo ją ulepszałem, aż wreszcie postanowiłem ją przetestować na konsultacjach JEDEN na JEDEN. <span class="font-bold">Rezultaty?</span></p>
          </div>
          <div class="img basis-1/4">
            <img class="mb-5" src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/swistak.png'; ?>" alt="">
            <p class="img-desc text-lg italic">„Przestań robić wszystko– zacznij wybierać mądrze!”</p>
          </div>
        </div>
        <div class="opinions">
          <h3 class="mb-24 font-bold text-4xl text-center">Oto garść opinii od moich zadowolonych klientek i klientów (łącznie otrzymałem ponad 216+ pozytywnych rekomendacji na LinkedIn):</h3>
          <div class="swiper mb-20">
            <div class="swiper-wrapper flex gap-8">
              <div class="swiper-slide w-full rounded-2xl p-10 pt-36 shadow-xl border-[1px] border-gray-200 relative">
                <div class="z-10 absolute top-0 left-[50%] translate-x-[-50%] translate-y-[-40%]">
                  <div class="opinion-author-image mx-auto max-w-[150px] relative">
                    <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/opinion1.png'; ?>" alt="">
                    <div class="w-[50px] h-[50px] p-3 rounded-full bg-orange-400 flex items-center justify-center z-10 absolute bottom-0 left-[50%] translate-x-[-50%] translate-y-[50%]">
                      <svg class="w-full rotate-180" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 379.51" fill="white">
                        <path d="M299.73 345.54c81.25-22.55 134.13-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160.01-60.55C243.33-10.34 430.24-36.22 485.56 46.34c12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.6 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77zm-267.78 0c81.25-22.55 134.14-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160-60.55-27.14-149.49 159.78-175.37 215.1-92.81 12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.59 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77z" />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="text-content text-center">
                  <p class="mb-5 font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque fugiat quia repudiandae pariatur, optio sit ab laudantium doloribus voluptatem minima atque! Maxime similique laborum quasi.</p>
                  <p class="author font-semibold text-lg">Harriet Clarkson</p>
                </div>
              </div>
              <div class="swiper-slide w-full rounded-2xl p-10 pt-36 shadow-xl border-[1px] border-gray-200 relative">
                <div class="z-10 absolute top-0 left-[50%] translate-x-[-50%] translate-y-[-40%]">
                  <div class="opinion-author-image mx-auto max-w-[150px] relative">
                    <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/opinion1.png'; ?>" alt="">
                    <div class="w-[50px] h-[50px] p-3 rounded-full bg-orange-400 flex items-center justify-center z-10 absolute bottom-0 left-[50%] translate-x-[-50%] translate-y-[50%]">
                      <svg class="w-full rotate-180" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 379.51" fill="white">
                        <path d="M299.73 345.54c81.25-22.55 134.13-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160.01-60.55C243.33-10.34 430.24-36.22 485.56 46.34c12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.6 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77zm-267.78 0c81.25-22.55 134.14-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160-60.55-27.14-149.49 159.78-175.37 215.1-92.81 12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.59 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77z" />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="text-content text-center">
                  <p class="mb-5 font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque fugiat quia repudiandae pariatur, optio sit ab laudantium doloribus voluptatem minima atque! Maxime similique laborum quasi.</p>
                  <p class="author font-semibold text-lg">Harriet Clarkson</p>
                </div>
              </div>
              <div class="swiper-slide w-full rounded-2xl p-10 pt-36 shadow-xl border-[1px] border-gray-200 relative">
                <div class="z-10 absolute top-0 left-[50%] translate-x-[-50%] translate-y-[-40%]">
                  <div class="opinion-author-image mx-auto max-w-[150px] relative">
                    <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/opinion1.png'; ?>" alt="">
                    <div class="w-[50px] h-[50px] p-3 rounded-full bg-orange-400 flex items-center justify-center z-10 absolute bottom-0 left-[50%] translate-x-[-50%] translate-y-[50%]">
                      <svg class="w-full rotate-180" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 379.51" fill="white">
                        <path d="M299.73 345.54c81.25-22.55 134.13-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160.01-60.55C243.33-10.34 430.24-36.22 485.56 46.34c12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.6 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77zm-267.78 0c81.25-22.55 134.14-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160-60.55-27.14-149.49 159.78-175.37 215.1-92.81 12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.59 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77z" />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="text-content text-center">
                  <p class="mb-5 font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque fugiat quia repudiandae pariatur, optio sit ab laudantium doloribus voluptatem minima atque! Maxime similique laborum quasi.</p>
                  <p class="author font-semibold text-lg">Harriet Clarkson</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about-swistak">
      <div class="container mx-auto px-5 md:px-0 pb-20">
        <div class="title text-center">
          <h3 class="mb-2 font-semibold text-3xl">Czas na Twoją decyzję.</h3>
          <p class="subtitle mb-8 font-bold text-[34px] leading-10">Jaką z tych 3 ścieżek wybierasz?</p>
        </div>
        <div class="swiper mb-20">
          <div class="swiper-wrapper flex gap-8">
            <div class="swiper-slide w-full rounded-2xl p-10 shadow-xl border-[1px] border-gray-200 relative [&>p]:mb-5">
              <p>1) Zamykasz tę stronę i zapominasz o tym, co Ci zaproponowałem.</p>
              <p>Jeśli czujesz, że to narzędzie nie jest dla Ciebie, to może po prostu jesteś w dobrym miejscu swojego życia.</p>
              <p>Cieszę się i gratuluję! Wtedy pewnie lepiej, abyś wydał ten pieniądze na jakąś przyjemność dla siebie lub bliskich.</p>
              <p class="font-bold">Jeśli jednak czujesz, że Twoja sytuacja wymaga zmiany, to zostają Ci jeszcze 2 ścieżki ➡️
              </p>
            </div>
            <div class="swiper-slide w-full rounded-2xl p-10 shadow-xl border-[1px] border-gray-200 relative [&>p]:mb-5">
              <p>2) Ustalasz priorytety samodzielnie.</p>
              <p>Jeśli masz w sobie determinację, to z pewnością kiedyś osiągniesz swój cel, ale pomyśl – ile to pochłonie Twojego czasu i energii?</p>
            </div>
            <div class="swiper-slide w-full rounded-2xl p-10 shadow-xl border-[1px] border-gray-200 relative [&>p]:mb-5">
              <p>3) Korzystasz z gotowca</p>
              <p>Weź moje gotowe narzędzie, by zyskać więcej pewności: na czym się skupić, i z czego zrezygnować.</p>
              <p>Skorzystaj ze <span class="font-bold">Ścieżek Kariery</span>, gdzie na talerzu otrzymasz całą esencję: wszystko, czego potrzebujesz, by ruszyć z miejsca w stronę spełnienia zawodowego. </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="whats-next">
      <div class="container max-w-[750px] mx-auto px-5 md:px-0 pb-20">
        <div class="title text-center mb-8">
          <h3 class="mb-5 font-semibold text-3xl">Co dalej?</h3>
          <div class="desc [&>p]:text-2xl">
            <p class="subtitle mb-8">Jeśli chcesz wypróbować <span class="font-bold">Ścieżki Kariery</span> bez ryzyka, to kliknij teraz w <span class="text-green-700 font-bold">zielony przycisk</span> poniżej.</p>
            <p>Przejdziesz do bezpiecznej strony, z której możesz opłacić swoje zamówienie. <br>Po tym od razu przyjdzie do Ciebie e-mail powitalny z dostępem do wszystkich materiałów.
            </p>
          </div>
        </div>
        <div class="cta text-center font-bold text-3xl border-[2px] border-purple-900 p-10">
          <p>Odbierz teraz dostęp do narzędzia <span class="text-[#b45f05]">Twoje Ścieżki Kariery:</span> arkusza w Excelu + <span class="text-red-500">10</span> nagrań wideo, które pomogą Ci określić co jest ważne, a co lepiej sobie odpuścić.</p>
        </div>
        <div class="arrow-down mx-auto w-fit text-[60px]">&#8681;</div>
        <div class="arrow-down mx-auto w-fit text-[60px] rotate-90">&#x27A4;</div>
        <div class="cta2 text-center font-bold text-2xl border-[2px] border-purple-900 p-10">
          <p class="mb-5">Otrzymasz dostęp na zawsze do platformy online, zawierającej: </p>
          <img src="<?php echo home_url() .  '/wp-content/themes/swistak-kurs/theme/assets/img/laptop2.png'; ?>" alt="">
          <ul class="my-10 text-left [&>li]:mb-2">
            <li>✔️ Arkusz w Excelu i Google Sheets do samodzielnego wypełnienia.</li>
            <li>✔️ <span class="text-red-500">10</span> krótkich i treściwych nagrań wideo </li>
            <li>✔️ Asysta e-mailowa dla większej motywacji</li>
            <li>🎁Bonus 1: Skarbiec materiałów wspierających</li>
            <li>🎁Bonus 2: Roczny dostęp do społeczności [nazwa społeczności]</li>
            <li>🎁Bonus 3: Poradnik w formie PDF „Trzy filary”</li>
          </ul>
          <p class="mb-8">🚗 Plus! Otrzymujesz aż 90 dni na „jazdę próbną” bez ryzyka</p>
          <button class="mx-auto mb-5 block w-fit bg-green-800 px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-green-700 transition duration-200">
            <a href="#">Odbierz dostęp teraz</a>
          </button>
        </div>
      </div>
    </section>

    <section class="order-benefits">
      <div class="container mx-auto px-5 md:px-0 pb-20">
        <div class="2col mb-10 border-[2px] border-purple-900 p-6 flex basis justify-center items-center text-center">
          <div class="col basis-1/2 text-xl">
            <p class="font-bold">🛡️ Opłać zamówienie bezpiecznie </p>
            <p>Wszystkie płatności zabezpieczone z [Wpisz nazwę systemu płatności np. Stripe]</p>
          </div>
          <div class="col basis-1/2 text-xl">
            <p class="font-bold">⭐ 90-dniowa gwarancja satysfakcji</p>
            <p>Albo Ci się spodoba, albo otrzymasz pieniądze z powrotem.
            </p>
          </div>
        </div>
        <p class="mx-auto w-fit text-xl">⭕ Potrzebujesz pomocy w złożeniu zamówienia? Napisz do mnie na [tutaj e-mail do wsparcia technicznego ]</p>
      </div>
    </section>

    <section class="faq">
      <div class="container max-w-[850px] mx-auto px-5 md:px-0 pb-20">
        <div class="title mb-10 text-center">
          <h3 class="mb-2 font-semibold text-3xl">Pytania i odpowiedzi</h3>
          <p class="subtitle font-bold text-[34px] leading-10">„Kiedy otrzymam dostęp?” <br>
            oraz kilka innych pytań, które miały osoby podobne do Ciebie!
          </p>
        </div>
        <div class="questions-container">
          <div class="question-container text-2xl">
            <div class="question mb-5">
              <h4 class="font-bold">🤔 Kiedy i w jakiej formie otrzymam dostęp do narzędzia <span class="text-purple-900">Twoje Ścieżki Kariery?</span>T</h4>
            </div>
            <div class="answer">
              <p>Gdy tylko Twoja płatność zostanie zaksięgowana, od razu automatycznie przyjdzie do Ciebie e-mail z potwierdzeniem i linkiem do wszystkich materiałów: arkusza w Excelu, nagrań wideo i bonusów.</p>
            </div>
          </div>
        </div>

      </div>
    </section>


  </main>
</div>

<?php
get_footer();
