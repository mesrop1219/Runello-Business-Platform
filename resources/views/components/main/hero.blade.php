<section class="hero font-mono">
    <div class="hero_container max-lg:text-center">
      <div class=" w-[100%] flex flex-wrap justify-between items-center px-5 py-4 mt-9 rounded-2xl bg-blue-700">
        <div class="hero_img max-[50%] mx-auto">
          <img src="{{ asset('images/peoples.png') }}">
        </div>
        <div class="hero_text max-lg:text-center max-lg:mt-3 mx-auto">
          <h3 class="text-white text-3xl max-md:text-lg max-w-lg">
            The first thematic Telegram channels with vacancies, you haven’t filled vacancies so easily yet
          </h3>
          <div class="row-121">
            <a href="{{ route('order.page') }}">
              <button class="bg-orange-500 py-4 px-7 rounded-xl mt-3 text-white">Post an Vacancy</button>
            </a>
          </div>
        </div>
      </div>
    </div>
</section>