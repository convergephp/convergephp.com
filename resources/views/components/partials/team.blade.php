<section class="mx-auto max-w-7xl px-2 py-4 md:py-10">
    <div class="mx-auto w-full py-8 text-center lg:py-16">

        {{-- TITLE --}}
        <div class="w-full overflow-hidden rounded-lg">
            <div data-aos="fade-up"
                 data-aos-duration="1000"
                 class="mx-auto grid max-w-xl items-start justify-center gap-5">
                <div class="text-4xl/[1.07] font-bold tracking-tight md:text-5xl/[1.07]">
                    <span
                          class="from-base-content bg-gradient-to-br to-gray-500 bg-clip-text tracking-widest text-transparent">
                        Our Team
                    </span>
                </div>
                <div class="text-base-content/50 text-lg tracking-wide">
                    Meet Our Creative Team
                </div>
            </div>
        </div>
        <div
             class="mx-auto flex w-full flex-col justify-around gap-8 space-y-6 overflow-x-hidden py-8 sm:flex-row sm:space-y-0 md:max-w-3xl">
            <x-team-card fullName="Ayoub El Hajji"
                         imageAlt="Ayoub El Hajji avatar"
                         imageSrc="{{ asset('images/ayoub.jpeg') }}"
                         githubProfilLink="https://github.com/Ayoubhj866"
                         sponsorPageLink="https://github.com/sponsors/Ayoubhj866"
                         linkedinProfilLink="https://www.linkedin.com/in/ayoub-el-hajji-b9a1901b5/"
                         roles="Co-creator, Lead UI Designer & Developer ">
            </x-team-card>

            <x-team-card fullName="Mohamed Charrafi"
                         imageAlt="Mohamed CHARRAFI avatar"
                         imageSrc="{{ asset('images/mohammed.jpeg') }}"
                         githubProfilLink="https://github.com/CharrafiMed"
                         sponsorPageLink="https://github.com/sponsors/CharrafiMed"
                         linkedinProfilLink="https://www.linkedin.com/in/mohamed-charrafi/"
                         roles="Founder, Co-creator & Lead Developer">
            </x-team-card>

        </div>
    </div>
</section>
